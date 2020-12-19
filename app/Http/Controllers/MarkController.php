<?php

namespace App\Http\Controllers;

use App\Course;
use App\Mark;
use App\Student;
use Illuminate\Http\Request;

class MarkController extends Controller
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
    public function create($stdid ,$courseid)
    {
        $Student  = Student::find($stdid);
        $Course  = Course::find($courseid);
        return View('admin.marks.create',compact('Student','Course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course  = Course::whereName($request->course_name)->whereSession($request->course_session)->first();
        $student = Student::whereSpNumber($request->std_sp)->first();
       // dd($course);
        Mark::UpdateOrcreate([
            'course_id' => $course->id,
            'student_id'=>$student->id,
        ],[
            'course_id' => $course->id,
             'student_id'=>$student->id,
             'mark' => $request->mark
        ]);
        session()->flash("message","Mark Added Successful to $student->name");
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
