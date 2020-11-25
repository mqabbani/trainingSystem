<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('std_name');
            $table->string("std_name_ar");
            $table->string('std_email');
            $table->string('std_national_id');
            $table->string('std_phone_number');
            $table->string('std_phone_number_second');
            $table->string('std_sp_number');
            $table->string('std_photo_name');
            $table->string('std_photo_path');
            $table->string('std_discount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
