<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Course;
use App\Mark;
use App\Payment;
use App\Student;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
//This For Export Course Specific data
class ExportExcelController implements FromCollection , WithHeadings
{
    protected $array;

    public function __construct ($array)
    {
        $this->array = $array;
    }
   

    public function collection(){
      
        return collect([$this->array]);
   
    }
    public function headings() :array
    {
        return ["Course Name", "Session", "Status","Start Date", "End Date","Student Name","National ID","phone number"
        ,"Email","Price","Recevied Until Now"];
    }
}
