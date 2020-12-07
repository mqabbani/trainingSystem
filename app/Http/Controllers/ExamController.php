<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Student;
use Illuminate\Http\Request;
use function Sodium\add;

class ExamController extends Controller
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
        $exams  = Exam::orderBy('created_at','desc')->paginate(10);

        return View('admin.exams.index',compact('exams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.exams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $val =  $request->validate([
            'name' => 'required',
            'text' => 'required|unique:exams',
            'answer1'=>'required',
            'answer2'=>'required',
            'answer3'=>'required',
            'answer4'=>'required'
        ]);

        $exam = Exam::updateOrCreate([
            'name'=>$request->name,
            'text'=>$request->text,
            'answer1'=>$request->answer1,
            'answer2'=>$request->answer2,
            'answer3'=>$request->answer3,
            'answer4'=>$request->answer4,
        ]);

        session()->flash("message","Question add Successful !");
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
        $exams = Exam::find($id);
        return View('admin.exams.edit',compact('exams'));
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
        $exam = Exam::find($id);

        $exam->update($request->all());

        session()->flash("message","Question Update Successful");
        return redirect()->action('ExamController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exam = Exam::find($id)->delete();
        session()->flash("message",'question delete successful ');
        return redirect()->back();
    }

    public function search(Request $request){
        $input = $request->std_search;

            $exams = Exam::Search($input);

        return View('admin.exams.index',compact('exams'));
    }

    public function print(){
        //$questions = Exam::whereName(name)->random(10);

        return view('admin.exams.create_exam');
    }

    public function randomExam(Request $request){
       // User::all()->random(10);
        $questions = Exam::whereName($request->name)->get()->random($request->number);


        return View('admin.exams.print_exam',compact('questions'));
    }
}
