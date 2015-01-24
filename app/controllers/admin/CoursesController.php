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
		$all = \Course::all();

        return View::make('admin.courses.index')
            ->with('list', $all);
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
    		$input = Input::all();
    		$id = \Course::create($input);

    		return Redirect::route( 'admin.courses.edit', $id->id )
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
		$course = \Course::find($id);

        return View::make('admin.courses.show')
            ->with('course', $course);
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
		$course = \Course::find($id);

		return View::make('admin.courses.edit')
            ->with('course', $course);
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
		$validator = Validator::make(Input::all(), \Course::$rules);
		$input = Input::all();

    	if (!$validator->fails()) {
    		$course = \Course::find($id);
    		$course->code = Input::get('code');
    		$course->title = Input::get('title');
    		$course->description = Input::get('description');
    		$course->duration = Input::get('duration');
    		$course->duration_metric = Input::get('duration_metric');
    		$course->type = Input::get('type');

			$course->save();

    		return Redirect::route( 'admin.courses.edit', $id )
    			->withMessage( 'Data passed validation checks' );
    	} else {
    		return Redirect::route( 'admin.courses.edit', $id )
    			->withInput()
    			->withErrors( $validator );	
    	}
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
		$course = \Course::find($id);
        $course->delete();

        // redirect
        \Session::flash('message', 'Successfully deleted the course!');
        return Redirect::to('admin/courses');
	}

}