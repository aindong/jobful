<?php

class TraineesController extends \BaseController {

	/**
	 * Display a listing of trainees
	 *
	 * @return Response
	 */
	public function index()
	{
		$trainees = Trainee::all();

		return View::make('trainees.index', compact('trainees'));
	}

	/**
	 * Show the form for creating a new trainee
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('trainees.create');
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

		Trainee::create($data);

		return Redirect::route('trainees.index');
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

		return View::make('trainees.show', compact('trainee'));
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

		return View::make('trainees.edit', compact('trainee'));
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

		return Redirect::route('trainees.index');
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

		return Redirect::route('trainees.index');
	}

}
