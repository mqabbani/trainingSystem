<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded=[];
    protected $table="students";

    public static function generateSpStudentNumber(){
        $date =Carbon::now();
        $year   = $date->year;
        $month  = $date->month;
        $day    = $date->day;
        $number = rand(0,999);
        return $year . $month . $day . $number;
    }

    public function course(){
        return $this->belongsToMany(Course::class);
    }

    public function payment(){
         return $this->belongsToMany(Student::class);
    }

}
