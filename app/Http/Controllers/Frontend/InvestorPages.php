<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;

class InvestorPages extends Controller
{
    public function index()
    {
        $events     = Event::all();
        $pastEvents = $events->filter(function ($event) {
            return $event->event_date < now();
        });
        $upcomingEvents = $events->filter(function ($event) {
            return $event->event_date >= now();
        });

        // Pass the arrays to the view
        return view('frontend.investor.index', [
            'pageTitle'       => 'Investor',
            'pageDescription' => 'Investor',
            'pageScript'      => 'investor',
            'pastEvents'      => $pastEvents,
            'upcomingEvents'  => $upcomingEvents,
        ]);

    }
}
