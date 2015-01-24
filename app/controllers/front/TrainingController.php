<?php namespace Controllers\Front;

use View;
use Response;
use Validator;
use TrainingRequest;
use TrainingRequestCourse;
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
        $courses = \Course::all();

		return View::make('front.training.request')
            ->with('courses', $courses);
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
    		$data = \TrainingRequest::create($input);

            foreach (Input::get('course') as $value) {
                $course_obj = new \TrainingRequestCourse();
                $course_obj->request_id = $data->id;
                $course_obj->course_id = $value;
                $data->courses()->save($course_obj);
            }

    		return Redirect::to( 'training/request' )
    			->withMessage( 'Data passed validation checks' );
    	} else {
    		return Redirect::to( 'training/request' )
    			->withInput()
    			->withErrors( $validator );	
    	}
	}

}