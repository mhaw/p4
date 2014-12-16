<?php

class RecipeController extends \BaseController {

	public function __construct() {

		$this->beforeFilter('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user_id = Auth::user()->getId();

		$recipes = Recipe::where('user_id', '=', $user_id)->get();

		return View::make('recipes.index')->with('recipes', $recipes);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('recipes.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'name' => 'required',
			'servings' => 'required|numeric',
			'prep_time' => 'required|numeric',
			'steps' => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {

			return Redirect::to('/recipes/create')
			->with('flash_message', 'Failed to add recipe; please fix the errors listed below.')
			->withInput()
			->withErrors($validator);
		}

		$recipe = new Recipe;
		$recipe->name = Input::get('name');
		$recipe->servings = Input::get('servings');
		$recipe->prep_time = Input::get('prep_time');
		$recipe->steps = Input::get('steps');
		$recipe->notes = Input::get('notes');
		if (Auth::check())
		{
			$recipe->user_id = Auth::user()->getId();
		}

		try {
			$recipe->save();
		}
		catch (Exception $e) {
			return Redirect::to('/recipes')->with('flash_message', 'Adding the recipe failed; please try again.')->withInput();
		}
		return Redirect::to('/recipes/'.$recipe->id)->with('flash_message', 'Recipe Added Successfully! Now we will add some ingredients...');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		try {
			$recipe = Recipe::findOrFail($id);
		}
		catch(Exception $e) {
			return Redirect::to('recipes')->with('flash_message', 'Recipe not found');
		}	

		return View::make('recipes.show')->with('recipe', $recipe);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		try {
			$recipe = Recipe::findOrFail($id);
		}
		catch(Exception $e) {
			return Redirect::to('recipes')->with('flash_message', 'Recipe not found');
		}	

		return View::make('recipes.edit')->with('recipe', $recipe);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		try {
			$recipe = Recipe::findOrFail($id);
		}
		catch(Exception $e) {
			return Redirect::to('recipes')->with('flash_message', 'Recipe not found');
		}		

		$rules = array(
			'name' => 'required',
			'servings' => 'required|numeric',
			'prep_time' => 'required|numeric',
			'steps' => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {

			return Redirect::back()
			->with('flash_message', 'Update failed; please fix the errors listed below.')
			->withInput()
			->withErrors($validator);
		}

		$recipe = Recipe::find($id);
		$recipe->name = Input::get('name');
		$recipe->servings = Input::get('servings');
		$recipe->prep_time = Input::get('prep_time');
		$recipe->steps = Input::get('steps');
		$recipe->notes = Input::get('notes');
		$recipe->save();

		return Redirect::to('/recipes/'.$recipe->id)->with('flash_message', 'Recipe Updated Successfully!');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		try {
			$recipe = Recipe::findOrFail($id);
		}
		catch(Exception $e) {
			return Redirect::to('recipes')->with('flash_message', 'Recipe not found');
		}

		$recipe->delete();

		return Redirect::to('/recipes')->with('flash_message', 'Recipe successfully deleted.');
	}

	public function postSearch(){

		$query = Input::get('query');

		$recipes = Recipe::search($query);

		return View::make('recipes.search')->with('recipes', $recipes);

	}

	

}
