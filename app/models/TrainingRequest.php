<?php

class TrainingRequest extends \Eloquent {
	protected $fillable = ['lname', 'fname', 'mname', 'baranggay', 'locality', 'district', 'contact1', 'contact2', 'email', 'participants'];
    protected $table = 'requests';
    public static $rules = array(
        'fname' => 'required',
        'lname' => 'required',
        'baranggay' => 'required',
        'district' => 'required',
        'locality' => 'required',
        'contact1' => 'required',
        'email' => 'email',
    );
}