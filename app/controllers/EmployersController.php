<?php

class EmployersController extends \BaseController {

	/**
	 * Display a listing of employers
	 *
	 * @return Response
	 */
	public function index()
	{
		$employers = Employer::all();

		return View::make('employers.index', compact('employers'));
	}

	/**
	 * Show the form for creating a new employer
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('employers.create');
	}

	/**
	 * Store a newly created employer in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Employer::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Employer::create($data);

		return Redirect::route('employers.index');
	}

	/**
	 * Display the specified employer.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$employer = Employer::findOrFail($id);

		return View::make('employers.show', compact('employer'));
	}

	/**
	 * Show the form for editing the specified employer.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$employer = Employer::find($id);

		return View::make('employers.edit', compact('employer'));
	}

	/**
	 * Update the specified employer in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$employer = Employer::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Employer::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$employer->update($data);

		return Redirect::route('employers.index');
	}

	/**
	 * Remove the specified employer from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Employer::destroy($id);

		return Redirect::route('employers.index');
	}

}
