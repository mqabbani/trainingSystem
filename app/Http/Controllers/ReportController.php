<?php

namespace App\Http\Controllers;

use App\Course;
use App\Payment;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ReportController extends Controller
{

    public function studentMarks(){
        return View('admin.reports.student_marks');
    }

    public function searchSpNumber(Request $request){

        $student = Student::whereSpNumber($request->sp_number)->first();
        //dd($student);
        $course  = DB::table("course_student")->whereStudentId($student->id)->get();
        $courseDetails =  array();
        foreach ($course as $value){
            $cc = DB::table("courses")->whereId($value->course_id)->first();
            array_push($courseDetails,$cc);
        }
        $marks   = DB::table("marks")->where("student_id",$student->id)->pluck("mark");
      // dd($marks);
        return View('admin.reports.index',compact('marks','student','course','courseDetails'));
    }

    public function searchSerial(){
        return View('admin.reports.search_invoice');
    }

    public function serialInvoice(Request $request){
        $payment = Payment::whereSerial($request->serial)->get();
        if(!is_null($payment)){
            session()->flash("message","Found Success");
        }else{
            session()->flash("message","Not Found");
        }

        return View('admin.reports.index_serial',compact('payment'));
    }

}
