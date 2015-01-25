<?php namespace Controllers\Trainer;

use View;
use TrainingRequest;

class TrainerDashboardController extends \BaseController
{
    public function index()
    {
        return View::make('trainer.index');
    }

    public function request()
    {
        $user = Sentry::getUser();

    	$training = TrainingRequest::find($user->id)->get();

        return View::make('trainer.request')
        ->with('training', $training);
    }
}