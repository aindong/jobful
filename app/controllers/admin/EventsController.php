<?php namespace Controllers\Admin;

use View;
use Response;
use Validator;
use Models\Models\Event;
use Input;
use Redirect;

class EventsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /events
	 *
	 * @return Response
	 */
	public function index()
	{
		$all = \Models\Event::all();

        return View::make('admin.events.index')
            ->with('list', $all);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /events/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$lookup = \Course::all();
		$courses = [];
		foreach ($lookup as $key => $value) {
			$courses[$value->id] = $value->title;
		}
		$trainers = [];
		return View::make('admin.events.create')
			->with('courses', $courses)
			->with('trainers', $trainers);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /events
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), \Models\Event::$rules);

    	if (!$validator->fails()) {
    		$event = new \Models\Event();
    		$event->course_id = Input::get('course_id');
    		$event->trainer_id = Input::get('trainer_id');
    		$event->start_date = date('Y-m-d H:i:s', strtotime(Input::get('start_date')));
    		$event->end_date = date('Y-m-d H:i:s', strtotime(Input::get('end_date')));
    		
			$data = \Models\Event::create(Input::all());

    		return Redirect::route( 'admin.events.edit', $data->id )
    			->withMessage( 'Data passed validation checks' );
    	} else {
    		return Redirect::route( 'admin.events.create' )
    			->withInput()
    			->withErrors( $validator );	
    	}
	}

	/**
	 * Display the specified resource.
	 * GET /events/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$event = \Models\Event::find($id);

        return View::make('admin.events.show')
            ->with('event', $event);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /events/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$event = \Models\Event::find($id);
		$lookup = \Course::all();
		$courses = [];
		foreach ($lookup as $key => $value) {
			$courses[$value->id] = $value->title;
		}
		$trainers = [];

		return View::make('admin.events.edit')
            ->with('event', $event)
            ->with('courses', $courses)
			->with('trainers', $trainers);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /events/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), \Models\Event::$rules);
		$input = Input::all();

    	if (!$validator->fails()) {
    		$event = \Models\Event::find($id);
    		$event->course_id = Input::get('course_id');
    		$event->trainer_id = Input::get('trainer_id');
    		$event->status = Input::get('status');
    		$event->start_date = date('Y-m-d H:i:s', strtotime(Input::get('start_date')));
    		$event->end_date = date('Y-m-d H:i:s', strtotime(Input::get('end_date')));
    		
			$event->save();

    		return Redirect::route( 'admin.events.edit', $id )
    			->withMessage( 'Data passed validation checks' );
    	} else {
    		return Redirect::route( 'admin.events.edit', $id )
    			->withInput()
    			->withErrors( $validator );	
    	}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /events/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$event = \Models\Event::find($id);
        $event->delete();

        // redirect
        \Session::flash('message', 'Successfully deleted the event!');
        return Redirect::to('admin/events');
	}

}