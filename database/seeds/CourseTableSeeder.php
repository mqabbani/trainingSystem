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
            'name' => "Hardware",
            "session"=>"1",
            "price"=>"300",
            "status"=>"pending",
            'days'=>'sunday-tuesday-thursday',
            'start_time'=>"10:00",
            'end_time'=>'00:00',
            "type"=>"public"
        ]);
        \App\Course::create([
            'name' => "Hardware",
            "session"=>"2",
            "price"=>"300",
            'days'=>'sunday-tuesday-thursday',
            "status"=>"pending",
            'start_time'=>"13:00",
            'end_time'=>'14:00',
            "type"=>"public"
        ]);
        \App\Course::create([
            'name' => "Hardware",
            "session"=>"3",
            "price"=>"300",
            'days'=>'sunday-tuesday-thursday',
            "status"=>"pending",
            'start_time'=>"16:00",
            'end_time'=>'18:00',
            "type"=>"public"
        ]);
        \App\Course::create([
            'name' => "Software",
            "session"=>"1",
            "price"=>"300",
            'days'=>'sunday-tuesday-thursday',
            "status"=>"pending",
            'start_time'=>"16:00",
            'end_time'=>'18:00',
            "type"=>"public"
        ]);
        \App\Course::create([
            'name' => "Software",
            "session"=>"2",
            "price"=>"300",
            'days'=>'sunday-tuesday-thursday',
            "status"=>"pending",
            'start_time'=>"17:00",
            'end_time'=>'19:00',
            "type"=>"public"
        ]);
    }
}
