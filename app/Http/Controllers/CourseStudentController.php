<?php

namespace App\Http\Controllers;

use App\Course;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CourseStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hardware = Course::whereName("Hardware")->get();
        $software = Course::whereName("Software")->get();
        $glass    = Course::whereName("Glass")->get();
       // dd($hardware);
       return  View('admin.course_student.create',compact('hardware','software','glass'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'sp_number'=>'required',
        ]);

        $array = array();
        if(!is_null($request->course_session_h)){
            array_push($array,$request->course_session_h);
        }
        if(!is_null($request->course_session_s)){
            array_push($array,$request->course_session_s);
        }
        if(!is_null($request->course_session_g)){
            array_push($array,$request->course_session_g);
        }
        $student = Student::where('sp_number', $request->sp_number)->first();
       if(is_null($student))
       {
           Session::flash('message', 'Student Number is InCorrect !!');
       }else{
           $check = $student->course()->whereIn('course_id',$array)->get();
           if(!$check->isEmpty())
           {
               Session::flash('message', 'Student Already Registered On This Course');

           }else{
               Session::flash('message', 'Student Added to Courses successful!');
               $student->course()->attach($array);
           }

       }

       // return redirect()->action('PaymentController@create');
      return redirect()->back();


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
