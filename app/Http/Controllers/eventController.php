<?php
namespace App\Http\Controllers;

use Todstoychev\CalendarEvents\Http\Requests\CalendarEventRequest;
use Todstoychev\CalendarEvents\Services\CalendarEventsService;

class eventController extends Controller{

    public function dashboard(){
    $user = \Auth::user();
        $events = [];

        $event[] = \calendar::event(
          "EventOne",
          true,
          '2017-01-02T0900',
          '2017-01-06T0800',
          0
        );
        $calendar=\calendar::Addevents($events)
            ->setOptions([
                'firstDay'=> 1
            ])->setcallBacks([

            ]);
        return view('event',array('$user','calendar'=>$calendar));
    }
}