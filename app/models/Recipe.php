<?php

class Recipe extends Eloquent {

	public function ingredient() {
		return $this->hasMany('Ingredient');
	}

	public function tags() {
        return $this->belongsToMany('Tag');
    }

    public static function search($query) {

        	if($query) {
        	$recipes = Recipe::with('ingredient', 'tags')
        	   ->whereHas('tags', function($q) use($query) {
        			$q->where('tag', 'LIKE', "%$query%");
        	})
        	   ->orWhereHas('ingredient', function($q) use($query) {
        			$q->where('food', 'LIKE', "%$query%");
        	})
        	->orWhere('name', 'LIKE', "%$query%")
        	->orWhere('steps', 'LIKE', "%$query%")
        	->orWhere('notes', 'LIKE', "%$query%")
        	->get();
            }
        	else {
        		$recipes = Recipe::with('tags','ingredients')->get();
        	}

        	return $recipes;
        }	

}