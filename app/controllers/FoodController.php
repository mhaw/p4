<?php

class FoodController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$foods = Food::all();

		return View::make('foods.index')->with('foods', $foods);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('foods.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
			$food = new Food;
            $food->name = Input::get('name');
            $food->type = Input::get('type');

            try {
                $food->save();
            }
            catch (Exception $e) {
                return Redirect::to('/foods/create')->with('flash_message', 'Adding the food failed; please try again.')->withInput();
            }
            return Redirect::to('/foods/create')->with('flash_message', 'Food Added Successfully!');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$food = Food::find($id);

		return View::make('foods.show')->with('food', $food);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$food = Food::find($id);

		return View::make('foods.edit')->with('food', $food);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
			$food = Food::find($id);
            $food->name = Input::get('name');
            $food->type = Input::get('type');
			$food->save();

            return Redirect::to('foods')->with('flash_message', 'Update Successful');

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$food = Food::find($id);
		$food-> delete();

		Session::flash('message', 'Food Deleted');
		return Redirect::to('foods');
	}


}
