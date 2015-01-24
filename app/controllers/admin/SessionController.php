<?php namespace Controllers\Admin;

use View;
use \Sentry;
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
        catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            echo 'Login field is required.';
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            echo 'Password field is required.';
        }
        catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
        {
            echo 'Wrong password, try again.';
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            echo 'User was not found.';
        }
        catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
        {
            echo 'User is not activated.';
        }

        // The following is only required if the throttling is enabled
        catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
        {
            echo 'User is suspended.';
        }
        catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
        {
            echo 'User is banned.';
        }
    }

    public function registerAdmin()
    {

    }
}