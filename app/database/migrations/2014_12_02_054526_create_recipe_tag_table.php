<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('recipe_tag', function($table) {

			$table->integer('recipe_id')->unsigned();
			$table->integer('tag_id')->unsigned();

			$table->foreign('recipe_id')->references('id')->on('recipes');
			$table->foreign('tag_id')->references('id')->on('tags');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('recipe_tag');
	}

}
