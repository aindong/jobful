<?php

class BarangayChairman extends \Eloquent {

	protected $table = 'barangay_chairmen';

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

	public function barangay()
	{
		return $this->belongsTo('Barangay', 'barangay_id');
	}
}