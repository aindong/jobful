<?php

class BarangayChairmenController extends \BaseController {

	/**
	 * Display a listing of barangaychairmen
	 *
	 * @return Response
	 */
	public function index()
	{
		$barangaychairmen = Barangaychairman::all();

		return View::make('barangaychairmen.index', compact('barangaychairmen'));
	}

	/**
	 * Show the form for creating a new barangaychairman
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('barangaychairmen.create');
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

		Barangaychairman::create($data);

		return Redirect::route('barangaychairmen.index');
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

		return View::make('barangaychairmen.show', compact('barangaychairman'));
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

		return View::make('barangaychairmen.edit', compact('barangaychairman'));
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

		return Redirect::route('barangaychairmen.index');
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

		return Redirect::route('barangaychairmen.index');
	}

}
