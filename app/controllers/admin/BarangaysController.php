<?php namespace Controllers\Admin;

use View;
use Response;
use Validator;
use Barangay;
use Input;
use Redirect;

class BarangaysController extends \BaseController {

	/**
	 * Display a listing of barangays
	 *
	 * @return Response
	 */
	public function index()
	{
		$barangays = Barangay::all();

		return View::make('barangays.index', compact('barangays'));
	}

	/**
	 * Show the form for creating a new barangay
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('barangays.create');
	}

	/**
	 * Store a newly created barangay in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Barangay::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Barangay::create($data);

		return Redirect::route('barangays.index');
	}

	/**
	 * Display the specified barangay.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$barangay = Barangay::findOrFail($id);

		return View::make('barangays.show', compact('barangay'));
	}

	/**
	 * Show the form for editing the specified barangay.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$barangay = Barangay::find($id);

		return View::make('barangays.edit', compact('barangay'));
	}

	/**
	 * Update the specified barangay in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$barangay = Barangay::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Barangay::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$barangay->update($data);

		return Redirect::route('barangays.index');
	}

	/**
	 * Remove the specified barangay from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Barangay::destroy($id);

		return Redirect::route('barangays.index');
	}

}
