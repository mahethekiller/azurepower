<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Document;
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
        $sec_fillings = Document::where('document_type_id', 1) //Press release
            ->orderBy('doc_date', 'desc')
            ->get();

        // Pass the arrays to the view
        return view('frontend.investor.index', [
            'pageTitle'       => 'Investor',
            'pageDescription' => 'Investor',
            'pageScript'      => 'investor',
            'pastEvents'      => $pastEvents,
            'upcomingEvents'  => $upcomingEvents,
            'sec_fillings'    => $sec_fillings
        ]);

    }
}
