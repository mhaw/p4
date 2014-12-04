<?php
class Tag extends Eloquent {

    public function recipes() {
        return $this->belongsToMany('Recipe');
    }

}