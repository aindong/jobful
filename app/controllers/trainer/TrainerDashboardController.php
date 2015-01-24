<?php namespace Controllers\Trainer;

use View;

class TrainerDashboardController extends \BaseController
{
    public function index()
    {
        return View::make('trainer.index');
    }
}