<?php

class Recipe extends Eloquent {

	public function ingredient() {
		return $this->hasMany('Ingredient');
	}

}