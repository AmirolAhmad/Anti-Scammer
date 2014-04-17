<?php

class Report extends Eloquent {

	public function countries() {
		return $this->hasMany('Country', 'name');
	}
	
}