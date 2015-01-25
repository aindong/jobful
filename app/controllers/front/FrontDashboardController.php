<?php namespace Controllers\Front;

use View;
use Course;

class FrontDashboardController extends \BaseController
{
    public function index()
    {
        $courses = Course::all();

        return View::make('front.index')
            ->with('courses', $courses);
    }

    public function about()
    {
        return View::make('front.about');
    }
}