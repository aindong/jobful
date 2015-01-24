<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBarangayChairmenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('barangay_chairmen', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('lname');
			$table->string('fname');
			$table->string('mname');
			$table->string('status');
			$table->integer('barangay_id');
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
		Schema::drop('barangay_chairmen');
	}

}
