<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ingredients', function($table) {
			$table->increments('id');
			$table->timestamps();

			$table->float('quantity');
			$table->string('measure');
			$table->string('style');
			$table->integer('food_id')->unsigned();

			$table->foreign('food_id')->references('id')->on('foods');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ingredients');
	}

}
