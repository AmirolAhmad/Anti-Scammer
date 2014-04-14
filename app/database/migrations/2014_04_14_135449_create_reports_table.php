<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reports', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('owner_id');
			$table->string('subject');
			$table->string('reporter');
			$table->string('scammer_name');
			$table->string('location');
			$table->string('country');
			$table->string('contact_number');
			$table->integer('acc_bank_number');
			$table->string('bank_name');
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
		Schema::drop('reports');
	}

}
