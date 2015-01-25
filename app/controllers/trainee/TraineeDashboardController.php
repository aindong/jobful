<?php namespace Controllers\Trainee;

use View;
use TrainingRequest;

class TraineeDashboardController extends \BaseController
{
    public function index()
    {
        return View::make('trainee.index');
    }

    public function request()
    {
    	$training = TrainingRequest::all();

        return View::make('trainee.request')
        ->with('training', $training);
    }
}