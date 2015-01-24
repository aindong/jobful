<?php namespace Models;

class Event extends \Eloquent {
    protected $fillable = ['course_id', 'trainer_id', 'start_date', 'end_date', 'participants', 'present_attendees', 'status'];

    public static $rules = array(
        'course_id'             => 'required',
    );

    protected $guarded = [];
}