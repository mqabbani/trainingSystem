<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $guarded = [];
    protected $table = "exams";

    public function scopeSearch( $query,$searchTerm)
    {
        return $query->where('name','LIKE', "%{$searchTerm}%")->paginate(10);

    }
}
