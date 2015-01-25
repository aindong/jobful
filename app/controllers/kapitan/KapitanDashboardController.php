<?php namespace Controllers\Kapitan;

use View;

class KapitanDashboardController extends \BaseController
{
    public function index()
    {
        return View::make('kapitan.index');
    }
}