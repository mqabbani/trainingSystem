<?php

namespace App\Http\Controllers;

use App\Course;
use App\Payment;
use App\Student;
use App\Http\Controllers\MailController;
use Illuminate\Http\Request;


class PaymentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.payments.index');
    }

    public function returnAllPaymentForStudent(Request $request)
    {
        $student = Student::whereSpNumber($request->sp_number)->first();
        $courseInfo = Student::find($student->id)->course;

        return view('admin.payments.student_payment',compact('courseInfo','student'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($std_id , $course_id)
    {
        $student = Student::find($std_id);
        $course  = Course::find($course_id);

        return View('admin.payments.create',compact('student','course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $course  = Course::whereName($request->course_name )->whereSession($request->course_session)->first();
       $student = Student::find($request->std_id);

      // dd($request->payment_method);
       Payment::create([
           'course_id'=>$course->id,
           'student_id'=>$student->id,
           'payment'=> $request->payment,
           'payment_method'=> $request->payment_method
       ]);
       session()->flash("message","Payment Added Successful to $course->name session $course->id Student name $student->name Email Sending");
        app('App\Http\Controllers\MailController')->sendMail($student->name , $course->name , $request->payment, $request->course_session);

        return redirect()->action('StudentController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function specificPayment($stdId , $courseID)
    {
        $payment  = Payment::whereStudentId($stdId)->whereCourseId($courseID)->get();
        $course  = Course::find($courseID);
        $student   = Student::find($stdId);
        $array = array();
        $total = Payment::totalPayment($courseID,$stdId)->sum('payment');

        return View('admin.payments.detail',compact('payment','course','student','total'));
    }

}
