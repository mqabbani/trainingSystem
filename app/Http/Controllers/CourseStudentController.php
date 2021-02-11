<?php

namespace App\Http\Controllers;

use App\Contract;
use App\Course;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class CourseStudentController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($sp_number)
    {
        $hardware = Course::whereName("Hardware")->get();
        $software = Course::whereName("Software")->get();
        $glass    = Course::whereName("Glass")->get();
       // dd($hardware);

       return  View('admin.course_student.create',compact('hardware','software','glass','sp_number'));
    }

    public function createManullay(){
        $hardware = Course::whereName("Hardware")->get();
        $software = Course::whereName("Software")->get();
        $glass    = Course::whereName("Glass")->get();
        // dd($hardware);

        return  View('admin.course_student.create_manually',compact('hardware','software','glass'));
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
        $priceData = array();
        $certificateData = array();
        if(!is_null($request->course_session_h)){
            array_push($array,$request->course_session_h);
            array_push($priceData , $request->price_h);
            if($request->ch1 == null)
            array_push($certificateData,false);
            else
                array_push($certificateData,true);

        }
        if(!is_null($request->course_session_s)){
            array_push($array,$request->course_session_s);
            array_push($priceData , $request->price_s);
            if($request->ch2 == null)
                array_push($certificateData,false);
            else
                array_push($certificateData,true);

        }
        if(!is_null($request->course_session_g)){
            array_push($array,$request->course_session_g);
            array_push($priceData , $request->price_g);
            if($request->ch3 == null)
                array_push($certificateData,false);
            else
                array_push($certificateData,true);

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

               // dd(collect($certificateData));
                for($i=0;$i<sizeof($priceData);$i++){
                    $student->course()->attach($array[$i],
                        ['price'=>$priceData[$i],'certificate'=>$certificateData[$i]]);
                }
            }
        }
        $totalMoney = $request->price_h + $request->price_s + $request->price_g;
        Contract::create([
            'sp_number'=>$request->sp_number,
            'total'=>$totalMoney,
            'national_id'=>$student->national_id
                ]);

       // return View('admin.contracts.print_contract_without_certificate',
            //compact('student','totalMoney','certificateData','array','request'));
 return View('admin.contracts.finalContract',
            compact('student','totalMoney','certificateData','array','request'));

      //return redirect()->back();


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

    public function change($stdid , $courseid){
       $std_course= DB::table('course_student')->where('course_id',$courseid)->where('student_id',$stdid)->first();
      //dd($std_course);
       if($std_course->certificate == 0){
          // $std_course->certificate = true;
           DB::table('course_student')->where('course_id', $courseid)
               ->where('student_id',$stdid)->update(['certificate' => true]);
       }else{
           DB::table('course_student')->where('course_id', $courseid)
               ->where('student_id',$stdid)->update(['certificate' => false]);
       }
       return redirect()->back();
    }

public function printAnotherContract($studentId){
    $student    = Student::find($studentId)->first();
    
    $courses    = DB::table('course_student')->whereStudentId($studentId)->get();
    $totalMoney = 0;
    $array = array();
    $certificateData = array();
    foreach($courses as $c){
        $totalMoney = $c->price + $totalMoney;
        $courseRegStu = Course::find($c->course_id);
        array_push($array,$courseRegStu->id);
        array_push($certificateData,$c->certificate);
    }
    
    //dd($certificateData);
    
    return View('admin.contracts.finalContract',
    compact('student','totalMoney','certificateData','array'));
}

}
