<?php
namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Banner;
use App\Models\TeamMember;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $banners=Banner::whereHas('menu', function ($query) {
            $query->where('route', 'home');
        })->get();

        return view('home',
            [
                'pageTitle'       => 'Azure Power - Home',
                'pageDescription' => 'Azure Power - Home',
                'pageScript'      => "home",
                'banners'          => $banners,
            ]
        );
    }

    public function about()
    {

        $banners = Banner::whereHas('menu', function ($query) {
            $query->where('route', 'about');
        })->get();
        return view('frontend.pages.about',
            [
                'pageTitle'       => 'Azure Power - About',
                'pageDescription' => 'Azure Power - About',
                'pageScript'      => "about",
                'banners'          => $banners,

            ]
        );
    }
    public function leadership_team()
    {

        $banners = Banner::whereHas('menu', function ($query) {
            $query->where('route', 'leadership-team');
        })->get();

        $bod        = TeamMember::where('team_type', 'Board of Directors')->get();
        $management = TeamMember::where('team_type', 'Management team')->get();

        return view('frontend.pages.leadership-team',
            [
                'pageTitle'       => 'Azure Power - Leadership Team',
                'pageDescription' => 'Azure Power - Leadership Team',
                'pageScript'      => "leadership-team",
                'banners'          => $banners,
                'bod'             => $bod,
                'management'      => $management,

            ]
        );
    }

    public function sustainability()
    {

        $banners = Banner::whereHas('menu', function ($query) {
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
                'banners'          => $banners,
                'documents'      => $documents,

            ]
        );
    }
    public function contactus()
    {

        $banners = Banner::whereHas('menu', function ($query) {
            $query->where('route', 'contactus');
        })->get();


        return view('frontend.pages.contact-us',
            [
                'pageTitle'       => 'Azure Power - Contact us',
                'pageDescription' => 'Azure Power - Contact us',
                'pageScript'      => "sustainability",
                'banners'          => $banners,

            ]
        );
    }
    public function legalDesclaimer()
    {

        $banners = Banner::whereHas('menu', function ($query) {
            $query->where('route', 'legal-disclaimer');
        })->get();


        return view('frontend.pages.legal-disclaimer',
            [
                'pageTitle'       => 'Azure Power - Legal disclaimer',
                'pageDescription' => 'Azure Power - Legal disclaimer',
                // 'pageScript'      => "sustainability",
                'banners'          => $banners,

            ]
        );
    }
}
