<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('recipes', function($table) {
				
			$table->increments('id');
			$table->timestamps();

			$table->string('name');
			$table->integer('servings');
			$table->integer('prep_time');
			$table->integer('ingredient_id')->unsigned()->nullable();
			$table->text('steps');
			$table->text('notes');
			$table->integer('user_id')->unsigned();

			$table->foreign('ingredient_id')->references('id')->on('ingredients');
			$table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('recipes');
	}

}
