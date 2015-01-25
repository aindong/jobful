<?php namespace Controllers\Front;

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
        $events = \Models\Event::all();

        $result = [];
        foreach ($events as $event) {
            $result[] = [
                'title' => $event->course->title,
                'start' => $event['start_date'],
                'end'   => $event['end_date']
            ];
        }

        return Response::json($result);
    }

}