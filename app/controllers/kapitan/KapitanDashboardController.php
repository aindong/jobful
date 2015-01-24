<?php namespace Controllers\Kapitan;

class KapitanDashboardController extends \BaseController
{
    public function index()
    {
        return View::make('kapitan.index');
    }
}