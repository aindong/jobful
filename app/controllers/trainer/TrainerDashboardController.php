<?php namespace Controllers\Trainer;

use View;
use Models\Models\Event;
use Sentry;
use Trainer;

class TrainerDashboardController extends \BaseController
{
    public function index()
    {
        return View::make('trainer.index');
    }

    public function request()
    {
        $user = Sentry::getUser();

    	$event = \Models\Event::where('trainer_id', $user->getId())->get();

        return View::make('trainer.request')
        ->with('event', $event);
    }

    /**
     * Show the form for editing the specified trainer.
     *
     * @return Response
     */
    public function edit()
    {
        $user = Sentry::getUser();

        $trainer = Trainer::find($user->getId());

        return View::make('trainer.edit', compact('trainer'));
    }
}