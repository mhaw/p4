<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRecipeIdFieldIngredientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ingredients', function($table) {
			$table->integer('recipe_id')->unsigned();
			
			$table->foreign('recipe_id')->references('id')->on('recipes')->onDelete('cascade');
		});
	}			
					

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		$table->dropColumn('recipe_id');
	}

}
