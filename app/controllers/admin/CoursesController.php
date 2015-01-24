<?php namespace Controllers\Admin;

use View;
use Response;
use Validator;
use Course;
use Input;
use Redirect;

class CoursesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /courses
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return View::make('admin.courses.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /courses/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('admin.courses.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /courses
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), \Course::$rules);

    	if (!$validator->fails()) {
    		\Course::create( Input::all() );

    		return Redirect::route( 'admin.courses.create' )
    			->withMessage( 'Data passed validation checks' );
    	} else {
    		return Redirect::route( 'admin.courses.create' )
    			->withInput()
    			->withErrors( $validator );	
    	}
	}

	/**
	 * Display the specified resource.
	 * GET /courses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		return View::make('admin.courses.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /courses/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		return View::make('admin.courses.edit');
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /courses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /courses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}