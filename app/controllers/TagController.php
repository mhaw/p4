<?php

class TagController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user_id = Auth::user()->getId();
		$recipes_ids = Recipe::where('user_id', '=', $user_id)->lists('id');

		$tag_ids = DB::table('recipe_tag')->whereIn('recipe_id', $recipes_ids)->lists('tag_id');

		$tags = DB::table('tags')->whereIn('id', $tag_ids)->get(); 

		return View::make('tags.index')->with('tags', $tags);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tags.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'tag' => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('tags/create')
			->withErrors($validator)
			->withInput();
		}
		else {
			// store
			$tag = new Tag;
			$tag->tag      = Input::get('tag');
			$tag->save();

			// redirect
			Session::flash('message', 'Successfully created tag!');
			return Redirect::to('tags');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tag = Tag::find($id);

		return View::make('tags.show')->with('tag', $tag);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tag = Tag::find($id);

		return View::make('tags.edit')->with('tag', $tag);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			'tag' => 'required',
		);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {

			return Redirect::back()
			->with('flash_message', 'Update failed; please fix the errors listed below.')
			->withInput()
			->withErrors($validator);
		}

		$tag = Tag::find($id);
		$tag->tag = Input::get('tag');
		$tag->save();

		return Redirect::back()->with('flash_message', 'Tag Updated Successfully!');
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

	public function addtag()

	{
		$recipe = Recipe::find(Input::get('recipe'));
		$exist_tag = Tag::where('tag', 'LIKE', Input::get('tag'))->first();

		if (is_null($exist_tag)) {
			$tag = new Tag;
			$tag->tag= Input::get('tag');
			$tag->save();

			$recipe->tags()->save($tag);

			return Redirect::back()->with('flash_message', 'Tag Updated Successfully!');
		} else {
			$recipe->tags()->save($exist_tag);

			return Redirect::back()->with('flash_message', 'Tag Updated Successfully!');
		}
	}


}
