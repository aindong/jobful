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
    public function events()
    {
        $all = \Models\Event::all();

        return Response::json($all);
    }

}