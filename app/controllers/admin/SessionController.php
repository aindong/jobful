<?php namespace Controllers\Admin;

use View;
use \Sentry;
use Input;
use Session;
use Redirect;

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
        // Check user credentials
        try
        {
            // Login credentials
            $credentials = [
                'email'     => Input::get('email'),
                'password'  => Input::get('password')
            ];

            // Authenticate the user
            $user = Sentry::authenticate($credentials, false);
        }
        catch (\Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            Session::flash('error', 'Login field is required.');
            return Redirect::back()->withInput();
        }
        catch (\Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            Session::flash('error', 'Password field is required.');
            return Redirect::back()->withInput();
        }
        catch (\Cartalyst\Sentry\Users\WrongPasswordException $e)
        {
            Session::flash('error', 'Wrong password, try again.');
            return Redirect::back()->withInput();
        }
        catch (\Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            Session::flash('error', 'User was not found.');
            return Redirect::back()->withInput();
        }
        catch (\Cartalyst\Sentry\Users\UserNotActivatedException $e)
        {
            Session::flash('error', 'User is not activated.');
            return Redirect::back()->withInput();
        }

        // The following is only required if the throttling is enabled
        catch (\Cartalyst\Sentry\Throttling\UserSuspendedException $e)
        {
            Session::flash('error', 'User is suspended.');
            return Redirect::back()->withInput();
        }
        catch (\Cartalyst\Sentry\Throttling\UserBannedException $e)
        {
            Session::flash('error', 'User is banned.');
            return Redirect::back()->withInput();
        }

        // Check User permission
    }

    public function registerAdmin()
    {
        // Create the groups
        try
        {
            // Create the group
            $superadmin = Sentry::createGroup(array(
                'name'        => 'super admin'
            ));

            $admin = Sentry::createGroup(array(
                'name'        => 'admin'
            ));

            $trainee = Sentry::createGroup(array(
                'name'        => 'trainee'
            ));

            $trainers = Sentry::createGroup(array(
                'name'        => 'trainers'
            ));

            // Register a user
            try
            {
                // Create the user
                $user = Sentry::createUser(array(
                    'email'     => 'admin@admin.com',
                    'password'  => 'admin',
                    'activated' => true,
                ));

                // Find the group using the group id
                $adminGroup = Sentry::findGroupByName('super admin');

                // Assign the group to the user
                $user->addGroup($adminGroup);
            }
            catch (\Cartalyst\Sentry\Users\LoginRequiredException $e)
            {
                echo 'Login field is required.';
            }
            catch (\Cartalyst\Sentry\Users\PasswordRequiredException $e)
            {
                echo 'Password field is required.';
            }
            catch (\Cartalyst\Sentry\Users\UserExistsException $e)
            {
                echo 'User with this login already exists.';
            }
            catch (\Cartalyst\Sentry\Groups\GroupNotFoundException $e)
            {
                echo 'Group was not found.';
            }
        }
        catch (\Cartalyst\Sentry\Groups\NameRequiredException $e)
        {
            echo 'Name field is required';
        }
        catch (\Cartalyst\Sentry\Groups\GroupExistsException $e)
        {
            echo 'Group already exists';
        }

        echo 'Successfully setup the accounts';
    }
}