<?php

class Barangay extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $guarded = [];

	public function barangayChairman()
	{
		return $this->hasOne('barangayChairman');
	}

}