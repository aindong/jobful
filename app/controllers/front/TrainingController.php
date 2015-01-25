<?php namespace Controllers\Front;

use View;
use Response;
use Validator;
use TrainingRequest;
use TrainingRequestCourse;
use Input;
use Redirect;
use Course;

class TrainingController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /trainings
	 *
	 * @return Response
	 */
	public function index()
	{
        $courses = Course::all();

        return View::make('front.training.index')
            ->with('courses', $courses);
	}

    public function stat() {
        $courses = Course::all();
        $data = [
            'ANAO' => "",
            'CAMILING' => "",
            'MAYANTOC' => "",
            'MONCADA' => "",
            'PANIQUI' => "Beadworks: 104<br/>",
            'PURA' => "",
            'RAMOS' => "",
            'SAN CLEMENTE' => "",
            'SAN MANUEL' => "",
            'STA. IGNACIA' => "",
            'GERONA' => "",
            'SAN JOSE' => "",
            'TARLAC CITY' => "",
            'VICTORIA' => "",
            'BAMBAN' => "",
            'CAPAS' => "Bag Making (PGT - D\'Luxe): 501<br/>Barista: 47<br/>",
            'CONCEPCION' => "",
            'LAPAZ' => "",
            ];

        return View::make('front.training.stat')
            ->with('courses', $courses)
            ->with('data', $data);
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

            \Session::flash('success', 'Your request has been submitted. Please wait for one of us to contact you.');

    		return Redirect::to( 'training/request' )
    			->withMessage( 'Data passed validation checks' );
    	} else {

            \Session::flash('error', 'You have an error. Please review your data.');
    		return Redirect::to( 'training/request' )
    			->withInput()
    			->withErrors( $validator );	
    	}
	}

	public function show($id)
	{
		$course = \Course::findOrFail($id);
 
		return View::make('front.training.show')
			->with('course', $course);
	}

    /**
     * Due to time constraint, this is only a demo
     */
    function stat_filter() {
        $type = Input::get('type');
        $id = Input::get('id');

        $data = [
            'ANAO' => "",
            'CAMILING' => "",
            'MAYANTOC' => "",
            'MONCADA' => "",
            'PANIQUI' => "Beadworks: 104<br/>",
            'PURA' => "",
            'RAMOS' => "",
            'SAN CLEMENTE' => "",
            'SAN MANUEL' => "",
            'STA. IGNACIA' => "",
            'GERONA' => "",
            'SAN JOSE' => "",
            'TARLAC CITY' => "",
            'VICTORIA' => "",
            'BAMBAN' => "",
            'CAPAS' => "Bag Making (PGT - D\'Luxe): 501<br/>Barista: 47<br/>",
            'CONCEPCION' => "",
            'LAPAZ' => "",
            ];

        $max = rand(0, 10);
        array_splice($data, $max);

        $locs = [];
        foreach ($data as $key => $value) {
            $locs[] = ['info' => $value, 'address' => $key . ', Tarlac, Philippines'];
        }
    
        return Response::json($locs);
    }

}