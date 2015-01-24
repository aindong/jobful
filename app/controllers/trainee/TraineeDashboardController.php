<?php namespace Controllers\Trainee;

class TraineeDashboardController extends \BaseController
{
    public function index()
    {
        return View::make('trainee.index');
    }
}