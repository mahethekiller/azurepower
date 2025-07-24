<?php
namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Slide;
use App\Models\TeamMember;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $slides=Slide::whereHas('menu', function ($query) {
            $query->where('route', 'home');
        })->get();

        return view('home',
            [
                'pageTitle'       => 'Azure Power - Home',
                'pageDescription' => 'Azure Power - Home',
                'pageScript'      => "home",
                'slides'          => $slides,
            ]
        );
    }

    public function about()
    {

        $slides = Slide::whereHas('menu', function ($query) {
            $query->where('route', 'about');
        })->get();
        return view('frontend.pages.about',
            [
                'pageTitle'       => 'Azure Power - About',
                'pageDescription' => 'Azure Power - About',
                'pageScript'      => "about",
                'slides'          => $slides,

            ]
        );
    }
    public function leadership_team()
    {

        $slides = Slide::whereHas('menu', function ($query) {
            $query->where('route', 'leadership-team');
        })->get();

        $bod        = TeamMember::where('team_type', 'Board of Directors')->get();
        $management = TeamMember::where('team_type', 'Management team')->get();

        return view('frontend.pages.leadership-team',
            [
                'pageTitle'       => 'Azure Power - Leadership Team',
                'pageDescription' => 'Azure Power - Leadership Team',
                'pageScript'      => "leadership-team",
                'slides'          => $slides,
                'bod'             => $bod,
                'management'      => $management,

            ]
        );
    }

    public function sustainability()
    {

        $slides = Slide::whereHas('menu', function ($query) {
            $query->where('route', 'sustainability');
        })->get();

        $documents = Document::where('document_type_id', 4) //Press release
            ->orderBy('doc_date', 'desc')
            ->get();

        return view('frontend.pages.sustainability',
            [
                'pageTitle'       => 'Azure Power - Sustainability',
                'pageDescription' => 'Azure Power - Sustainability',
                'pageScript'      => "sustainability",
                'slides'          => $slides,
                'documents'      => $documents,

            ]
        );
    }
}
