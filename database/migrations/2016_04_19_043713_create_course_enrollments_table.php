<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('course_enrollments',function(blueprint $table){
            $table->increments('ce_id');
            $table->integer('c_id')->unsigned();
            $table->integer('s_id')->unsigned();
        });

        Schema::table('course_enrollments',function($table){
            $table->foreign('c_id')->references('c_id')->on('courses');
            $table-> foreign('s_id')->references('s_id')->on('students');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('course_enrollments');
    }
}
