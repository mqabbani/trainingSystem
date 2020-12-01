<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];
    protected $table   = "courses";

    public function student(){
        return $this->belongsToMany(Student::class);
    }
}
