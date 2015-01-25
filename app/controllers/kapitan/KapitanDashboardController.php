<?php namespace Controllers\Kapitan;

use View;
use TrainingRequest;

class KapitanDashboardController extends \BaseController
{
    public function index()
    {
        return View::make('kapitan.index');
    }

    public function request()
    {
        $user = Sentry::getUser();

    	$training = TrainingRequest::find($user->id)->get();

        return View::make('kapitan.request')
        ->with('training', $training);
    }
}