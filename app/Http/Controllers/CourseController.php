<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CourseController extends Controller
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
        $allCourses = Course::orderBy("created_at",'desc')->paginate(5);
        return View('admin.courses.index',compact('allCourses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $courseName = array("0"=>'Hardware',"1"=>'Software',"2"=>'Glass');

        return View('admin.courses.create',compact('courseName'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // dd($request->course_se);
        $days = array();
        $days = collect($request->ch1)->implode('-');
         Course::create([
            'course_name'=>$request->course_name,
            'course_session'=>$request->course_se,
            'course_start_time'=>$request->course_start_time,
            'course_end_time'=>$request->course_end_time,
            'course_price'=>$request->course_price,
            'course_days'=>$days,
            'course_status'=>$request->course_status,
            'course_type'=>$request->course_type
        ]);

        $courseName = array("0"=>'Hardware',"1"=>'Software',"2"=>'Glass');
        Session::flash('message', 'Student Added successful!');
        return View('admin.courses.create',compact('courseName'));
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

    public function ajaxReq($course_name1){
        $session = Course::where('course_name',$course_name1 )->count();
        $session = $session+1;
        return $session;
    }
}
