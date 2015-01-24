<?php namespace Controllers\Admin;

use View;
use Response;
use Validator;
use TrainingRequest;
use Input;
use Redirect;

class RequestsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /requests
	 *
	 * @return Response
	 */
	public function index()
	{

		$all = \TrainingRequest::all();

		return View::make('admin.requests.index')
			->with('list', $all);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /requests/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$request = \TrainingRequest::find($id);
		$lookup = \Course::all();
		$courses = [];
		foreach ($lookup as $key => $value) {
			$courses[$value->id] = $value->title;
		}

		return View::make('admin.requests.edit')
            ->with('request', $request)
            ->with('courses', $courses);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /requests/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$status = (int)Input::get('status');
		$request = \TrainingRequest::find($id);
		$request->status = $status;
		$request->save();

		return Redirect::route( 'admin.requests.edit', $id )
			->withMessage( 'Data passed validation checks' );
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /requests/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}