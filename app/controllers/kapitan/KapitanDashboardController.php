<?php namespace Controllers\Kapitan;

use View;
use TrainingRequest;
use Sentry;
use BarangayChairman;

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

    /**
     * Show the form for editing the specified trainer.
     *
     * @return Response
     */
    public function edit()
    {
        $user = Sentry::getUser();

        $kapitan = BarangayChairman::find($user->getId());

        return View::make('kapitan.edit', compact('kapitan'));
    }
}