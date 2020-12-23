<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function studentMarks(){
        return View('admin.reports.student_marks');
    }


}
