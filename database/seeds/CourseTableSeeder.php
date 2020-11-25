<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Course::create([
            'course_name' => "Hardware",
            "course_session"=>"1",
            "course_price"=>"300",
            "course_status"=>"pending",
            'course_days'=>'sunday-tuesday-thursday',
            'course_start_time'=>"10:00",
            'course_end_time'=>'00:00',
            "course_type"=>"public"
        ]);
        \App\Course::create([
            'course_name' => "Hardware",
            "course_session"=>"2",
            "course_price"=>"300",
            'course_days'=>'sunday-tuesday-thursday',
            "course_status"=>"pending",
            'course_start_time'=>"13:00",
            'course_end_time'=>'14:00',
            "course_type"=>"public"
        ]);
        \App\Course::create([
            'course_name' => "Hardware",
            "course_session"=>"3",
            "course_price"=>"300",
            'course_days'=>'sunday-tuesday-thursday',
            "course_status"=>"pending",
            'course_start_time'=>"16:00",
            'course_end_time'=>'18:00',
            "course_type"=>"public"
        ]);
        \App\Course::create([
            'course_name' => "Software",
            "course_session"=>"1",
            "course_price"=>"300",
            'course_days'=>'sunday-tuesday-thursday',
            "course_status"=>"pending",
            'course_start_time'=>"16:00",
            'course_end_time'=>'18:00',
            "course_type"=>"public"
        ]);
        \App\Course::create([
            'course_name' => "Software",
            "course_session"=>"2",
            "course_price"=>"300",
            'course_days'=>'sunday-tuesday-thursday',
            "course_status"=>"pending",
            'course_start_time'=>"17:00",
            'course_end_time'=>'19:00',
            "course_type"=>"public"
        ]);
    }
}
