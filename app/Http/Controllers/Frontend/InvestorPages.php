<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
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
            'sec_fillings'    => $sec_fillings,
        ]);

    }

    public function corporate_governance()
    {
        $cgdocs = Document::where('document_type_id', 5) //Press release
            ->orderBy('doc_date', 'desc')
            ->get();

        $banners = Banner::whereHas('menu', function ($query) {
            $query->where('route', 'corporate-governance');
        })->get();

        // Pass the arrays to the view
        return view('frontend.investor.corporate-governance', [
            'pageTitle'       => 'Corporate Governance',
            'pageDescription' => 'Corporate Governance',
            'pageScript'      => 'newsroom',
            'cgdocs'          => $cgdocs,
            'banners'          => $banners
        ]);

    }

}
