<?php namespace Controllers\Trainer;

use View;
use Models\Models\Event;
use Sentry;

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
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $trainer = Trainer::find($id);

        return View::make('trainers.edit', compact('trainer'));
    }
}