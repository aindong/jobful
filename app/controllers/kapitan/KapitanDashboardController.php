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
    	$training = TrainingRequest::all();

        return View::make('kapitan.request')
        ->with('training', $training);
    }
}