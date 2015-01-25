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
        $user = Sentry::getUser();

    	$training = TrainingRequest::find($user->id)->get();

        return View::make('trainee.request')
        ->with('training', $training);
    }
}