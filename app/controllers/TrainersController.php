<?php

class TrainersController extends \BaseController {

	/**
	 * Display a listing of trainers
	 *
	 * @return Response
	 */
	public function index()
	{
		$trainers = Trainer::all();

		return View::make('trainers.index', compact('trainers'));
	}

	/**
	 * Show the form for creating a new trainer
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('trainers.create');
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

		Trainer::create($data);

		return Redirect::route('trainers.index');
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

		return View::make('trainers.show', compact('trainer'));
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

		return View::make('trainers.edit', compact('trainer'));
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

		return Redirect::route('trainers.index');
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

		return Redirect::route('trainers.index');
	}

}
