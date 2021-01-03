<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function sendMail($student_name,$course_name , $pay ,$course_session)
    {
        $to_name = 'Mr.Nour ';
        $to_email = ['m.qabbani96@gmail.com','mohammad.qabbani.mq@gmail.com'];
        $data = array('name'=>$to_name, "body"=> "Student $student_name Pay Money $pay JOD  for Course Name $course_name and session is $course_session Thank You ");
        try {
            Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                    ->subject("Student Pay For Course ");
                $message->from("harmonextraining1@gmail.com","Payment Email ");
            });
        }catch (\Swift_TransportException $e){
            session()->flash("message","Email Not Sending");
        }


    }
}
