<?php namespace Controllers\Admin;

use View;
use Trainee;
use Redirect;
use Validator;
use Input;
use Response;
Use \Sentry;
use Session;

class TraineesController extends \BaseController {

	/**
	 * Display a listing of trainees
	 *
	 * @return Response
	 */
	public function index()
	{
		$trainees = Trainee::all();

		return View::make('admin.trainees.index', compact('trainees'));
	}

	/**
	 * Show the form for creating a new trainee
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.trainees.create');
	}

	/**
	 * Store a newly created trainee in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Trainee::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		// Register a user
		try
		{
			// Create the user
			$user = Sentry::createUser(array(
				'email'     => $data['email'],
				'password'  => $data['password'],
				'activated' => true,
			));

			// Find the group using the group id
			$adminGroup = Sentry::findGroupByName('trainee');

			// Assign the group to the user
			$user->addGroup($adminGroup);

			$data['user_id'] = $user->getId();

			unset($data['email']);
			unset($data['password']);

			Trainee::create($data);

			\Session::flash('success', 'Successfully created a new trainee');

			return Redirect::route('admin.trainees.index');
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
		catch (\Cartalyst\Sentry\Users\UserExistsException $e)
		{
			Session::flash('error', 'User with this login already exists.');
			return Redirect::back()->withInput();
		}
		catch (\Cartalyst\Sentry\Groups\GroupNotFoundException $e)
		{
			Session::flash('error', 'Group was not found.');
			return Redirect::back()->withInput();
		}

	}

	/**
	 * Display the specified trainee.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$trainee = Trainee::findOrFail($id);

		return View::make('admin.trainees.show', compact('trainee'));
	}

	/**
	 * Show the form for editing the specified trainee.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$trainee = Trainee::find($id);

		return View::make('admin.trainees.edit', compact('trainee'));
	}

	/**
	 * Update the specified trainee in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$trainee = Trainee::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Trainee::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$trainee->update($data);

		return Redirect::route('admin.trainees.index');
	}

	/**
	 * Remove the specified trainee from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Trainee::destroy($id);

		return Redirect::route('admin.trainees.index');
	}

}
