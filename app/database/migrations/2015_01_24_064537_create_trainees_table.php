<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTraineesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trainees', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('lname');
			$table->string('fname');
			$table->string('mname');
			$table->string('address1');
			$table->string('address2');
			$table->string('locality');
			$table->string('administrative_level1');
			$table->string('administrative_level2');
			$table->string('country');
			$table->string('civil_status');
			$table->string('gender');
			$table->integer('age');
			$table->timestamp('bday');
			$table->string('attainment');
			$table->string('occupation');
			$table->string('email');
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
		Schema::drop('trainees');
	}

}
