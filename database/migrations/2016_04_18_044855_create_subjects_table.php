<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('subjects',function(blueprint $table){
            $table->increments('sub_id');
            $table->integer('t_id')->unsigned();
            $table->string('subject_name');
            $table->float('credit');
        });

        Schema::table('subjects',function($table){
           $table->foreign('t_id')->references('t_id')->on('teachers');
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
        Schema::drop('subjects');
    }
}
