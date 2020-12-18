<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $fillable = ['course_id',"student_id","mark"];
    protected $table  = "marks";
}
