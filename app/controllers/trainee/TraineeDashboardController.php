<?php namespace Controllers\Trainee;

use View;
use Models\Models\Event;
use Sentry;
use Trainee;

class TraineeDashboardController extends \BaseController
{
    public function index()
    {
        return View::make('trainee.index');
    }

    public function request()
    {
        $user = Sentry::getUser();

        $event = \Models\Event::where('trainer_id', $user->getId())->get();

        return View::make('trainee.request')
        ->with('event', $event);
    }

    /**
     * Show the form for editing the specified trainee.
     *
     * @return Response
     */
    public function edit()
    {
        $user = Sentry::getUser();

        $trainee = Trainee::find($user->getId());

        return View::make('trainee.edit', compact('trainee'));
    }
}