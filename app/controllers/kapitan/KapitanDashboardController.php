<?php namespace Controllers\Kapitan;

use View;
use TrainingRequest;
use Sentry;

class KapitanDashboardController extends \BaseController
{
    public function index()
    {
        return View::make('kapitan.index');
    }

    public function request()
    {
        $user = Sentry::getUser();

        $training = TrainingRequest::all();

        return View::make('kapitan.request')
        ->with('training', $training);
    }
}