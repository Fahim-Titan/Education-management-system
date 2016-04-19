<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('exam_infos',function(blueprint $table){
            $table->increments('e_id');
            $table->integer('sub_id')->unsigned();
            $table->integer('c_id')->unsigned();
            $table->string('e_type');
            $table->string('e_cat');
        });

        Schema::table('exam_infos',function($table){
            $table->foreign('sub_id')->references('sub_id')->on('subjects');
            $table->foreign('c_id')->references('c_id')->on('courses');
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
        Schema::drop('exam_infos');
    }
}
