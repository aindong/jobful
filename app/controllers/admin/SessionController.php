<?php namespace Controllers\Admin;

use View;
use Auth;
use Input;

class SessionController extends \BaseController
{

    /**
     * Return the view of the login
     *
     * @return mixed
     */
    public function login()
    {
        return View::make('admin.login');
    }

    public function doLogin()
    {
        $credentials = [
            'email'     => Input::get('email'),
            'password'  => Input::get('password')
        ];

        if (Auth::attempt($credentials)) {

        }
    }
}