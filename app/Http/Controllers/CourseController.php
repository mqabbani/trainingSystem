<?php

namespace App\Http\Controllers;

use App\Course;
use App\Payment;
use Carbon\Carbon;
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
            'name'=>$request->name,
            'session'=>$request->session1,
            'start_time'=>$request->start_time,
            'end_time'=>$request->end_time,
            'price'=>$request->price,
            'days'=>$days,
            'status'=>$request->status,
            'type'=>$request->type
        ]);

        $courseName = array("0"=>'Hardware',"1"=>'Software',"2"=>'Glass');
        Session::flash('message', 'Course Create successful!');

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
        $courseStudent  = Course::find($id)->student()->paginate(20);
       // dd($courseStudent);
        $courseInfo = Course::find($id);
        $studentNumber = count($courseStudent);
        $array = array();
        if(!$courseStudent->isEmpty()){
            foreach ($courseStudent as $hard)
            {
                array_push($array,$hard->id);
            }
        }

        $countArray = count($array);
        $amountPayment = array();
        for($i=0 ;$i< $countArray ; $i++){
            $amount = Payment::totalPayment($courseInfo->id,$array[$i])->get();
            $amountPayment[$i] = $amount->sum('payment');

        }
        $totalPaymentForAll = Payment::studentTotalPaymentPerCourse($id)->sum('payment');
       // dd($totalPaymentForAll);
        return view('admin.courses.show',
            compact('courseStudent','courseInfo','studentNumber','amountPayment','totalPaymentForAll'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        //dd($course);
        return View('admin.courses.edit',compact('course'));
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
       $course = Course::find($id);
       $course->name        = $request->name;
       $course->session     = $request->session1;
       $course->price       = $request->price;
       $course->start_time  = $request->start_time;
       $course->end_time    = $request->end_time;
        $days = array();
        $days = collect($request->ch1)->implode('-');
        $course->days       = $days;
        $course->status     = $request->status;
        $course->start_date = $request->start_date;
        $course->end_date   = $request->end_date;
        $course->save();
        return redirect()->action('CourseController@index');
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
        $session = Course::where('name',$course_name1 )->count();
        $session = $session+1;
        return $session;
    }

    public function pending(){
        $status = Course::Pending('Pending');
    
        return View('admin.courses.pending_course',compact('status'));
    }
    public function active(){
        $status = Course::Active('Active');
        return View('admin.courses.active_course',compact('status'));
    }
    public function finished(){
        $status = Course::Finished('Finished');
        return View('admin.courses.finished_course',compact('status'));
    }
}
