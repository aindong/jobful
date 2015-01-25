<?php namespace Models;

class Event extends \Eloquent {
    protected $fillable = ['course_id', 'trainer_id', 'start_date', 'end_date', 'participants', 'present_attendees', 'status'];

    public static $rules = array(
        'course_id'             => 'required',
    );

    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo('Course', 'course_id');
    }
    public function trainer()
    {
        return $this->belongsTo('Trainer', 'trainer_id');
    }
}