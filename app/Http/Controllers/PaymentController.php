<?php

namespace App\Http\Controllers;

use App\Course;
use App\Payment;
use App\Student;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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

       Payment::create([
           'course_id'=>$course->id,
           'student_id'=>$student->id,
           'payment'=>$request->payment
       ]);
       session()->flash("message","Payment Added Successful to $course->name session $course->id Student name $student->name");

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
}