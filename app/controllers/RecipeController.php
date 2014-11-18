<?php

class RecipeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$recipes = Recipe::all();

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
			$recipe = new Recipe;
            $recipe->name = Input::get('name');
            $recipe->servings = Input::get('servings');
            $recipe->prep_time = Input::get('prep_time');
            $recipe->steps = Input::get('steps');
            $recipe->notes = Input::get('notes');
            $recipe->public = Input::get('private');
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
            return Redirect::to('/recipes')->with('flash_message', 'Recipe Added Successfully! Now we will add some ingredients...');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$recipe = Recipe::find($id);

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
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
