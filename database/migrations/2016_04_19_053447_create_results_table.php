<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('results',function(blueprint $table){
            $table->increments('res_id');
            $table->integer('s_id')->unsigned();
            $table->integer('c_id')->unsigned();
            $table->integer('number')->nullable();
            $table->integer('e_id')->unsigned();
            $table->integer('sub_id')->unsigned();
        });

        Schema::table('results',function($table){
            $table->foreign('s_id')->references('s_id')->on('students');
            $table->foreign('sub_id')->references('sub_id')->on('subjects');
            $table->foreign('c_id')->references('c_id')->on('courses');
            $table->foreign('e_id')->references('e_id')->on('exam_infos');
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
        Schema::drop('results');
    }
}
