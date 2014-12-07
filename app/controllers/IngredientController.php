<?php

class IngredientController extends \BaseController {

	public function __construct() {
		$this->beforeFilter('auth');
	}

	public function postIndex()
	{
		$recipe_id = Input::get('recipe_id');

		//Get records from database
		$result = Ingredient::where('recipe_id', '=', $recipe_id)->get();

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Records'] = $result->toArray();
		return json_encode($jTableResult);
	}

	public function postCreate() {
		//Insert record into database
		$ingredient = new Ingredient;
		$ingredient->quantity = Input::get('quantity');
		$ingredient->measure = Input::get('measure');
		$ingredient->food = Input::get('food');
		$ingredient->style = Input::get('style');
		$ingredient->recipe_id = Input::get('recipe_id');

		$ingredient->save();

		$lastInsertedID = $ingredient->id;

		//Get last inserted record (to return to jTable)
		$result = Ingredient::find($lastInsertedID);

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Record'] = $result->toArray();
		return json_encode($jTableResult);
	}

	public function postUpdate() {

		$id = Input::get('id');

		$ingredient = Ingredient::find($id);
		$ingredient->quantity = Input::get('quantity');
		$ingredient->measure = Input::get('measure');
		$ingredient->food = Input::get('food');
		$ingredient->style = Input::get('style');

		$ingredient->save();

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		return json_encode($jTableResult);

	}

	public function postDelete() {

		$id = Input::get('id');

		$ingredient = Ingredient::find($id);

		$ingredient->delete();

		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		return json_encode($jTableResult);
	}

	public function getFood() {

		$sterm = Input::get('term');
		$result = Ingredient::where('food', 'LIKE', "%$sterm%")->groupBy('food')->get(array('id as value', 'food as label'));

		return json_encode($result);
	}
}
