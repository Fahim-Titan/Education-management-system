<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMCQsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mcqs',function(blueprint $table){
            $table->increments('mcq_id');
            $table->integer('e_id')->unsigned();
            $table->string('e_qs');
            $table->string('opt_1')->nullable();
            $table->string('opt_2')->nullable();
            $table->string('opt_3')->nullable();
            $table->string('opt_4')->nullable();
            $table->string('image_path')->nullable();
        });

        Schema::table('mcqs',function($table){
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
        Schema::drop('mcqs');
    }
}
