<?php namespace Controllers\Front;

use View;

class FrontDashboardController extends \BaseController
{
    public function index()
    {
        return View::make('front.index');
    }
}