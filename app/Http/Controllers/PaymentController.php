<?php

namespace App\Http\Controllers;

use App\Course;
use App\Payment;
use App\Student;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PaymentController extends Controller
{
    private $client;
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


       $createPayment = Payment::create([
           'course_id'=>$course->id,
           'student_id'=>$student->id,
           'payment'=> $request->payment,
           'payment_method'=> $request->payment_method,
           'received_by'=>  $request->receivedby,
           'sum_of'=>   $request->sum_of,
           'serial'=>str_random(15)
       ]);
       $studentNumber = $student->phone_number;
       $phoneNumber   = ltrim($studentNumber, $studentNumber[0]);
       $textSend = "$student->name is Pay $request->payment For $request->course_name session $request->course_session";
        //Sending Email To Nour
      //  app('App\Http\Controllers\MailController')->sendMail($student->name , $course->name , $request->payment, $request->course_session);
        //Sending SMS To Student
        
        if($request->sendSms == "on")
        {
            //$phoneArray = array();
            //old Code Working
            //$client = new \GuzzleHttp\Client(['base_uri' => 'http://sms.email-soft.com:8000/']);
            //new 
            $client = new \GuzzleHttp\Client([
                'base_uri' => 'http://sms.email-soft.com:8000/',
                'connect_timeout' => false,
                'timeout'         => 30.0, // set higher if timeout still happens
            ]);

            $response = $client->request('GET', "?Phonenumber=962'.$phoneNumber.
              &Text=$textSend.&User=harmonex&Password=harmonex");
             

              $response2 = $client->request('GET', "?Phonenumber=962786666630'.
              &Text=$textSend.&User=harmonex&Password=harmonex");
            if($response->getStatusCode() == 200)
            {
                session()->flash("message","Payment Added Successful to $course->name session $course->session Student name $student->name  Sms Sending");
            }else{
                session()->flash("message","Payment Added Successful to $course->name session $course->id Student name $student->name  Sms Not Sending");
            }
        }
        
        $DataInvoice =array();
        $DataInvoice[0] = $request->payment;
        $DataInvoice[1] = $request->payment_method;
        $DataInvoice[2] = $createPayment->id;
        $DataInvoice[3] = $createPayment->received_by;
        $DataInvoice[4] = $createPayment->sum_of;
        $DataInvoice[5] = $createPayment->serial;
        //return redirect()->action('StudentController@index');
        //Go to Print Invoice ..
        return View('admin.payments.print_invoice',compact('course','student','DataInvoice'));

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
        $payment = Payment::find($id);
        return view('admin.payments.edit',compact('payment'));
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
        $payment = Payment::find($id);
        $payment->payment = $request->payment;
        $payment->save();
        session()->flash("message","Payment {$payment->serial} is Updated Successfully");
        return  redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payment = Payment::find($id);
        $payment->delete();
        return  redirect()->back();
    }
    public function specificPayment($stdId , $courseID)
    {
        $payment  = Payment::whereStudentId($stdId)->whereCourseId($courseID)->get();
        $course  = Course::find($courseID);
        $student   = Student::find($stdId);
        $array = array();
        $total = Payment::totalPayment($courseID,$stdId)->sum('payment');

        $totalCourse = DB::table('course_student')->whereStudentId($stdId)->whereCourseId($courseID)->pluck('price');

        return View('admin.payments.detail',compact('totalCourse','payment','course','student','total'));
    }

    public function editStudentPrice($stdId ,$courseId){
        $courseDetails  = DB::table('course_student')->whereStudentId($stdId)->whereCourseId($courseId)->first();
        $student = Student::find($stdId);
        $course  = Course::find($courseId);
        return view('admin.students.course_edit_price',compact('courseDetails','student','course'));
    }

    public function updateCoursePriceStd(Request $request,$stdId,$courseId){
        $courseDetails  =  DB::table('course_student')->whereStudentId($stdId)->whereCourseId($courseId)->update(['price'=>$request->price]);
    
        //$students= Student::orderBy('created_at','desc')->paginate(5);
       
       // return view('admin.students.index',compact('students' ));
       return redirect()->action('StudentController@show',['id'=>$stdId]);

    }
    public function oldprintIn($paymentId,$stdId,$courseName,$courseSession){
        $payment = Payment::find($paymentId);
        $course  = Course::whereName($courseName)->whereSession($courseSession)->first();
        $student = Student::find($stdId);
        $DataInvoice =array();
        $DataInvoice[0] = $payment->payment;
        $DataInvoice[1] = $payment->payment_method;
        $DataInvoice[2] = $payment->id;
        $DataInvoice[3] = $payment->received_by;
        $DataInvoice[4] = $payment->sum_of;
        $DataInvoice[5] = $payment->serial;
        $DataInvoice[6] = $payment->created_at;
        return view('admin.payments.old_payment',compact('DataInvoice','student','course'));
    }

}
