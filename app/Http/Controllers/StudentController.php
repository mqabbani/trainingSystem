<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
       $students= Student::orderBy('created_at','desc')->paginate(10);
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
            'name'=>'required',
            'name_ar'=>'required',
            'national_id'=>'nullable|digits:10',
            'sp_number'=>'required|unique:students',
            'phone_number'=>'required',
            'phone_number_second'=>'required',
            'photo'=>'required|mimes:jpeg,jpg,png,gif|max:25000',
            'email'=>'required|unique:students',
            'living'=>'required',
            'photo_pass'=>'required|mimes:jpeg,jpg,png,gif|max:25000'
        ]);
        $image_code  = '';
       $image = $request->file('photo');
        if($request->hasFile('photo')){
            $new_name = rand() . '.' .$image->getClientOriginalExtension();
            $image->move(public_path('backend/img'), $new_name);
        }
        $image2 = $request->file('photo_pass');
        if($request->hasFile('photo_pass')){
            $newname = rand() . '.' .$image2->getClientOriginalExtension();
            $image2->move(public_path('backend/img'), $newname);
        }

        $check = null;
        if($request->notJordan == "1"){
            $check = true;
        }else{
            $check = false;
        }

        if($request->national_id != null && $check == true )
        {
            Session::flash('message', 'National ID is insert and student is not jordanian Not Added !!');
            return redirect()->back();

        }
        if($request->national_id == null && $check == false)
        {
            Session::flash('message', 'National ID is not insert and student is  jordanian Not Added!!');
            return redirect()->back();
        }
        else {

            Student::create([
                'name' => $request->name,
                'name_ar' => $request->name_ar,
                'email' => $request->email,
                'national_id' => $request->national_id,
                'phone_number' => $request->phone_number,
                'phone_number_second' => $request->phone_number_second,
                'sp_number' => $request->sp_number,
                'photo_name' => $new_name,
                'photo_path' => 'backend/img/' . $new_name,
                'not_jordan' => $check,
                'gender' => $request->gender,
                'living'=>$request->living,
                'photo_passport'=>$newname,
                'path_passport'=>'backend/img/' . $newname
            ]);

            Session::flash('message', 'Student Added successful!');
            //return  redirect()->back();
           // $sp_number = $request->sp_number;
        }
        return redirect()->action('CourseStudentController@create',['sp_number'=>$request->sp_number]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id)->course;
        $stdData = Student::find($id);
        $price   = DB::table("course_student")->where('student_id',$stdData->id)->pluck("price");

        $array = array();
        if(!$student->isEmpty()){
            foreach ($student as $hard)
            {
                array_push($array,$hard->id);
            }
        }

        $countArray = count($array);
        $amountPayment = array();
       for($i=0 ;$i< $countArray ; $i++){
           $amount = Payment::totalPayment($array[$i],$stdData->id)->get();
           $amountPayment[$i] = $amount->sum('payment');

       }

       //dd($amountPayment);

        return View('admin.students.show',compact('student','stdData','amountPayment','price'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);

        return View('admin.students.edit',compact('student'));

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
        $request->validate([
            'name'=>'required',
            'name_ar'=>'required',
            'phone_number'=>'required',

        ]);
        $student = Student::find($id);

        $student->update($request->all());
        if($student){
            Session::flash('message', 'Update Student Data successful!');
        }
        $students= Student::orderBy('created_at','desc')->paginate(5);
        return redirect()->action('StudentController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $student = Student::find($id);
        $courses = $student->course()->where('student_id',$student->id)->first();

        if(is_null($courses)){
            Session::flash('message', 'Student Delete successful!');
            $student->delete();
        }else{
            Session::flash('message', 'Student Not Deleted Because register in courses !');
        }
        return redirect()->back();

    }

    public function search(Request $request){
        $input = $request->std_search;
        $count = strlen((string)$input);
        if(is_numeric($input)){
            if( $count== 11){
                $students = Student::where('sp_number',$input)->paginate(5);
            }
            if($count==10){
                $students = Student::where('phone_number',$input)->paginate(5);
            }

        }else if (is_string($input)){
            $students = Student::where('name','like','%'.$input.'%')->paginate(5);
        }

        return View('admin.students.index',compact('students'));
    }


    public function createContract(){
        return View('admin.contracts.create');
    }

    public function printContract(Request $request){
    $valideat=  $request->validate([
            'name'=>'required',
            'price'=>'required',
          'national_id'=>'required'
        ]);
    if($request->ch1 == null){
        return View('admin.contracts.print_contract_without_certificate',compact('request'));
    }else{
        return View('admin.contracts.print_contract_with_certificate',compact('request'));
    }


    }
}
