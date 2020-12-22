<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function studentMarks(){

        $hardware = Course::whereName('Hardware')->count();
        dd($hardware);
        return View('admin.reports.student_marks',compact('hardware'));
    }
}
