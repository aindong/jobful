<?php namespace Controllers\Admin;

use View;
use Trainer;
use Redirect;
use Validator;
use Input;
use Response;
use \Sentry;
use Session;

class TrainersController extends \BaseController {

	/**
	 * Display a listing of trainers
	 *
	 * @return Response
	 */
	public function index()
	{
		$trainers = Trainer::all();

		return View::make('admin.trainers.index', compact('trainers'));
	}

	/**
	 * Show the form for creating a new trainer
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.trainers.create');
	}

	/**
	 * Store a newly created trainer in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Trainer::$rules);

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
			$adminGroup = Sentry::findGroupByName('trainers');

			// Assign the group to the user
			$user->addGroup($adminGroup);

			$data['user_id'] = $user->getId();

			// Unset uneeded elements
			unset($data['email']);
			unset($data['password']);

			Trainer::create($data);

			\Session::flash('success', 'Successfully created a new trainer');

			return Redirect::route('admin.trainers.index');
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
	 * Display the specified trainer.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$trainer = Trainer::findOrFail($id);

		return View::make('admin.trainers.show', compact('trainer'));
	}

	/**
	 * Show the form for editing the specified trainer.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$trainer = Trainer::find($id);

		return View::make('admin.trainers.edit', compact('trainer'));
	}

	/**
	 * Update the specified trainer in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$trainer = Trainer::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Trainer::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$trainer->update($data);

		return Redirect::route('admin.trainers.index');
	}

	/**
	 * Remove the specified trainer from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Trainer::destroy($id);

		return Redirect::route('admin.trainers.index');
	}

}
