<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrainersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trainers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email');
			$table->string('lname');
			$table->string('fname');
			$table->string('mname');
			$table->string('address1');
			$table->string('address2');
			$table->string('locality');
			$table->string('administrative_level1');
			$table->string('administrative_level2');
			$table->string('country');
			$table->integer('user_id');
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
		Schema::drop('trainers');
	}

}
