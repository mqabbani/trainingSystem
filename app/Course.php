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

    public function scopePending($status){

        return Course::whereStatus('Pending')->paginate(5);

    }

    public function scopeActive($status){

            return Course::whereStatus('Active')->paginate(5);

    }

    public function scopeFinished($status){

     return Course::whereStatus('Finished')->paginate(5);
    }

}
