<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;

class InvestorPages extends Controller
{
    public function index()
    {
        $pastEvents = Event::where('event_date', '<', now())
            ->orderBy('event_date', 'desc')
            ->get();
        $upcomingEvents = Event::where('event_date', '>=', now())
            ->orderBy('event_date', 'desc')
            ->get();

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
