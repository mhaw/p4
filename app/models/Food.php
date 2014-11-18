<?php

class Food extends Eloquent {

	public function ingredient() {
		return $this->belongsToMany('Ingredient');
	}
}