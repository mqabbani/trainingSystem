<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['course_id' , 'student_id' , 'payment'];

    public static  function totalPayment($course_id ,$student_id){
     return   Payment::whereCourseId($course_id)->whereStudentId($student_id)->Sum('payment');
    }
}
