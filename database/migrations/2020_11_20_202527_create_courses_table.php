<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("course_name");
            $table->string("course_session");
            $table->string("course_price");
            $table->string("course_start_time");
            $table->string("course_end_time");
            $table->string("course_days");
            $table->string("course_status");
            $table->string("course_type");
            $table->string("course_start_date")->nullable();
            $table->string("course_end_date")->nullable();
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
        Schema::dropIfExists('courses');
    }
}
