<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientFoodTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ingredient_food', function($table) {
			$table->integer('ingredient_id')->unsigned();
			$table->integer('food_id')->unsigned();

			$table->foreign('ingredient_id')->references('id')->on('ingredients');
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
		Schema::drop('ingredient_food');
	}

}
