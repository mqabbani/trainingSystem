<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

class Student extends Model
{
    protected $guarded=[];
    protected $table="students";

    public static function generateSpStudentNumber(){
        $date =Carbon::now();
        $year   = $date->year;

        $month  = $date->month;
        if($year >=9)
        {
            $month = "0".$date->month;
        }
        $day    = $date->day;
        //$number = rand(0,999);
        $number = Student::count();
        $number = $number + 1 ;
        if($number <10){
            $number2 =  sprintf("%03s", $number);
            //dd($number2);
        }else if ( $number<=10 &&  $number <100){
            $number2 =  sprintf("%03s", $number);
        }else if($number <=100){
            $number2 = $number;
        }
        return $year . $month . $day . $number2;
    }

    public function course(){
        return $this->belongsToMany(Course::class , 'course_student');
    }

    public function payment(){
         return $this->belongsToMany(Student::class);
    }

}
