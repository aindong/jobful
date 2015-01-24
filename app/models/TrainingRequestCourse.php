<?php

class TrainingRequestCourse extends \Eloquent {
    protected $fillable = ['request_id', 'course_id'];
    protected $table = 'request_courses';
    
    public static $rules = array(
        'request_id' => 'required',
        'course_id' => 'required',
    );
}