<?php
class Tag extends Eloquent {

    public function recipes() {
        return $this->belongsToMany('Recipe');
    }

    public static function boot() {
    	parent::boot();

    	static::deleting(function($tag) {
    		DB::statement('DELETE FROM recipe_tag WHERE tag_id = ?', array($tag->id));
    	});
    }

}