<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class NewsroomPages extends Controller
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
        return view('frontend.newsroom.index', [
            'pageTitle'       => 'Investor',
            'pageDescription' => 'Investor',
            'pageScript'      => 'investor',
            'pastEvents'      => $pastEvents,
            'upcomingEvents'  => $upcomingEvents,
        ]);

    }
}
