<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class StudentTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        \App\Student::create([
            'name'=>'osama ahmad ',
            'name_ar'=>'اسامه احمد',
            'email'=>Str::random(1,10)."@gmail.com",
            'national_id'=>rand(1,99999999),
            'sp_number'=>rand(1,99999999999),
            'phone_number'=>rand(1,999999999),
            'phone_number_second'=>rand(1,9999999),
            'photo_name'=>Str::random(1,9999),
            'photo_path'=>'public/backend/'.Str::random(1,99999)
        ]);

        \App\Student::create([
            'name'=>'naji naji ',
            'name_ar'=>'ناجي احمد',
            'email'=>Str::random(1,10)."@gmail.com",
            'national_id'=>rand(1,99999999),
            'sp_number'=>rand(1,99999999999),
            'phone_number'=>rand(1,999999999),
            'phone_number_second'=>rand(1,9999999),
            'photo_name'=>Str::random(1,9999),
            'photo_path'=>'public/backend/'.Str::random(1,99999)
        ]);

        \App\Student::create([
            'name'=>'bara bara ',
            'name_ar'=>'براء باء',
            'email'=>Str::random(1,10)."@gmail.com",
            'national_id'=>rand(1,99999999),
            'sp_number'=>rand(1,99999999999),
            'phone_number'=>rand(1,999999999),
            'phone_number_second'=>rand(1,9999999),
            'photo_name'=>Str::random(1,9999),
            'photo_path'=>'public/backend/'.Str::random(1,99999)
        ]);


    }
}
