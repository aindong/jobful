<?php namespace Controllers\Front;

use View;
use Response;
use Validator;
use TrainingRequest;
use Input;
use Redirect;

class TrainingController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /trainings
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('front.training.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /trainings/create
	 *
	 * @return Response
	 */
	public function request()
	{
		return View::make('front.training.request');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /trainings
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), \TrainingRequest::$rules);

    	if (!$validator->fails()) {
    		$input = Input::all();
    		$id = \TrainingRequest::create($input);

    		return Redirect::to( 'training/request' )
    			->withMessage( 'Data passed validation checks' );
    	} else {
    		return Redirect::to( 'training/request' )
    			->withInput()
    			->withErrors( $validator );	
    	}
	}

	public function show($id)
	{
		$course = \Course::findOrFail($id);

		return View::make('front.training.index')
			->with('course', $course);
	}

}