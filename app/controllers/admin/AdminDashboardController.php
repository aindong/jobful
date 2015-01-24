<?php namespace Controllers\Admin;

use View;

class AdminDashboardController extends \BaseController
{
    public function index()
    {
        return View::make('admin.index');
    }
}