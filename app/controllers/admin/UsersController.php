<?php namespace Controllers\Admin;

use View;
use User;

class UsersController extends \BaseController
{
    public function index()
    {
    	$users = User::all();

        return View::make('admin.users.index', compact('users'));
    }
}