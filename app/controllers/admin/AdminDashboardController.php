<?php namespace Controllers\Admin;

use View;
use Calendar;
use Input;

class AdminDashboardController extends \BaseController
{
    public function index()
    {
        return View::make('admin.index');
    }

    public function calendar()
    {
        return View::make('calendar');
    }
}