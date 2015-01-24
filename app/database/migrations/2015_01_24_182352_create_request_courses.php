<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRequestCourses extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('request_courses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('request_id')->references('id')->on('request');
			$table->integer('course_id')->references('id')->on('course');

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
		Schema::drop('request_courses');
	}

}
