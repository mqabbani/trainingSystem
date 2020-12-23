<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $fillable = ['course_id',"student_id","mark"];
    protected $table  = "marks";

    public static function MarkForCourse($stdId, $courseId){
        return  Mark::whereStudentId($stdId)->whereCourseId($courseId)->get();

    }

    public function student(){
        return $this->belongsToMany(Student::class , 'marks');
    }

    public function course(){
        return $this->belongsToMany(Course::class , 'marks');
    }
}
