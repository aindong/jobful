<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBarangaysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('barangays', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('barangay');
			$table->integer('locality');
			$table->integer('district');
			$table->string('rep1');
			$table->string('rep2');
			$table->string('contact1');
			$table->string('contact2');
			$table->string('email1');
			$table->string('email2');
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
		Schema::drop('barangays');
	}

}
