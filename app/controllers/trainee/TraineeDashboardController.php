<?php namespace Controllers\Trainee;

use View;

class TraineeDashboardController extends \BaseController
{
    public function index()
    {
        return View::make('trainee.index');
    }
}