<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->integer('phone');
            $table->date('dob');
            $table->string('email');
            $table->string('sex');
        });

        $faker = Faker\Factory::create();
        $limit = 50;

        for($i=0;$i<=$limit;$i++){
            DB::table('user')->insert([
                //,
                'name'=>$faker->name,
                'address' => $faker->address,
                'phone'=>$faker->phoneNumber,
                'dob'=>$faker->dateTime,
                'email'=>$faker->email,
                'sex'=>$faker->title
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('user');
    }
}
