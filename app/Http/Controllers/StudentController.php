<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       $students= Student::orderBy('created_at','desc')->paginate(1);
        return View('admin.students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $std_sp_number = Student::generateSpStudentNumber();
        return  View('admin.students.create',compact('std_sp_number'));
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
            'std_name'=>'required',
            'std_name_ar'=>'required',
            'std_national_id'=>'required',
            'std_sp_number'=>'required|unique:students',

        ]);
        $image_code  = '';
       $image = $request->file('std_photo');
        if($request->hasFile('std_photo')){
            $new_name = rand() . '.' .$image->getClientOriginalExtension();
            $image->move(public_path('backend/img'), $new_name);
        }
        Student::create([
            'std_name'=>$request->std_name,
            'std_name_ar'=>$request->std_name_ar,
            'std_email'=>$request->std_email,
            'std_national_id'=>$request->std_national_id,
            'std_phone_number'=>$request->std_phone_number,
            'std_phone_number_second'=>$request->std_phone_number_second,
            'std_sp_number'=>$request->std_sp_number,
            'std_photo_name'=>$new_name,
            'std_photo_path'=>'backend/img/'.$new_name,
            'std_discount'=>$request->std_discount
        ]);

        Session::flash('message', 'Student Added successful!');
        return  redirect()->back();
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

    public function search(Request $request){
        $input = $request->std_search;
        if(is_numeric($input)){
         $students = Student::where('std_sp_number',$input)->paginate(1);
        }else{

        }

        return View('admin.students.index',compact('students'));
    }
}
