<?php

class Course extends \Eloquent {
	protected $fillable = ['code', 'title', 'description', 'duration', 'duration_days', 'type'];

    public static $rules = array(
        // 'code'             => 'required|unique:courses',                        // just a normal required validation
        'code'             => 'required',                        // just a normal required validation
        'title'            => 'required',     // required and must be unique in the ducks table
        // 'duration'         => 'required',
        // 'duration_days'     => 'required',           // required and has to match the password field
        // 'type'              => 'required'           // required and has to match the password field
    );

	protected $guarded = [];

    public function event()
    {
        return $this->hasOne('Event');
    }
}