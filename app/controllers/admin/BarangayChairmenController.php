<?php namespace Controllers\Admin;

use View;
use BarangayChairman;
use Barangay;
use Redirect;
use Validator;
use Input;
use Response;
Use \Sentry;
use Session;

class BarangayChairmenController extends \BaseController {

	/**
	 * Display a listing of barangaychairmen
	 *
	 * @return Response
	 */
	public function index()
	{
		$barangaychairmen = Barangaychairman::all();

		return View::make('admin.barangaychairmen.index', compact('barangaychairmen'));
	}

	/**
	 * Show the form for creating a new barangaychairman
	 *
	 * @return Response
	 */
	public function create()
	{
		$barangays = Barangay::all();
		$brgy = [];

		foreach ($barangays as $barangay) {
			$brgy[$barangay['id']] = $barangay['barangay'];
		}

		return View::make('admin.barangaychairmen.create')
			->with('barangays', $brgy);
	}

	/**
	 * Store a newly created barangaychairman in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Barangaychairman::$rules);

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
			$adminGroup = Sentry::findGroupByName('kapitan');

			// Assign the group to the user
			$user->addGroup($adminGroup);

			$data['user_id'] = $user->getId();
			$data['status'] = 'active';

			unset($data['email']);
			unset($data['password']);

			Barangaychairman::create($data);

			\Session::flash('success', 'Successfully created a new barangay chairman');

			return Redirect::route('admin.barangaychairmen.index');
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
	 * Display the specified barangaychairman.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$barangaychairman = Barangaychairman::findOrFail($id);

		return View::make('admin.barangaychairmen.show', compact('barangaychairman'));
	}

	/**
	 * Show the form for editing the specified barangaychairman.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$barangaychairman = Barangaychairman::find($id);

		return View::make('admin.barangaychairmen.edit', compact('barangaychairman'));
	}

	/**
	 * Update the specified barangaychairman in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$barangaychairman = Barangaychairman::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Barangaychairman::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$barangaychairman->update($data);

		return Redirect::route('admin.barangaychairmen.index');
	}

	/**
	 * Remove the specified barangaychairman from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Barangaychairman::destroy($id);

		return Redirect::route('admin.barangaychairmen.index');
	}

}
