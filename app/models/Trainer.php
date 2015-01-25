<?php

class Trainer extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $guarded = [];
	
	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}
	public function event()
	{
		return $this->belongsTo('Event', 'trainer_id');
	}
}