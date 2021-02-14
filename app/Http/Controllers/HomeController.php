<?php

namespace App\Http\Controllers;

use App\Course;
use App\Payment;
use App\Student;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $student = Student::count();
        $array = array();
        $coursePending   = Course::whereStatus('Pending')->count();
        $courseActive    = Course::whereStatus('Active')->count();
        $courseFinished  = Course::whereStatus('Finished')->count();
        $maleRgister        = Student::whereGender('Male')->count();
        $femaleRegister        = Student::whereGender('Female')->count();
        $ldate = date('Y-m-d');
        $numberOfPayment = Payment::where('created_at','like','%'.$ldate.'%')->count('payment');
        //dd($numberOfPayment);
        $payments = Payment::where('created_at','like','%'.$ldate.'%')->get();
        $totalCashPerDay = 0 ;
        foreach ($payments as $pay){
            $totalCashPerDay  =$totalCashPerDay + $pay->payment;
        }

        $array['Number Of Student'] = $student ;
        $array['Course Pending'] = $coursePending ;
        $array['Course Active'] = $courseActive ;
        $array['Course Finished'] = $courseFinished ;
        $array['Students Pay For today'] = $numberOfPayment;
        $array['Total Cash Per Day'] =  $totalCashPerDay ;
        $array['Male Register'] =  $maleRgister ;
        $array['Female Register'] =  $femaleRegister ;
       
        
        
        return view('admin.home',compact('array'));
    }
}
