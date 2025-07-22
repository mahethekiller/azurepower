<?php
namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home',
            [
                'pageTitle'       => 'Azure Power - Home',
                'pageDescription' => 'Azure Power - Home',
                'pageScript'      => "home",
                'slides'          => [
                    [
                        'image'       => 'img/banner.png',
                        'heading'     => '100% clean energy for your business',
                        'description' => 'Leading the transition to clean, sustainable power solutions for a greener future',
                        'buttons'     => [
                            [
                                'text' => 'Explore Projects',
                                'link' => '#',
                            ],
                            // [
                            //     'text' => 'Explore Projects',
                            //     'link' => '#'
                            // ]
                        ],
                    ],
                    [
                        'image'       => 'img/banner.png',
                        'heading'     => 'Over 4.1 GWs* pan India renewable energy portfolio',
                        'description' => 'Leading the transition to clean, sustainable power solutions for a greener future',
                        'buttons'     => [
                            [
                                'text' => 'Explore Projects',
                                'link' => '#',
                            ],
                            // [
                            //     'text' => 'Explore Projects',
                            //     'link' => '#'
                            // ]
                        ],
                    ],
                    [
                        'image'       => 'img/banner.png',
                        'heading'     => 'India’s first utility scale solar project',
                        'description' => 'Leading the transition to clean, sustainable power solutions for a greener future',
                        'buttons'     => [
                            [
                                'text' => 'Explore Projects',
                                'link' => '#',
                            ],
                            // [
                            //     'text' => 'Get Started',
                            //     'link' => '#'
                            // ]
                        ],
                    ],
                    [
                        'image'       => 'img/banner.png',
                        'heading'     => '300,000+ beneficiaries of social investment',
                        'description' => 'Leading the transition to clean, sustainable power solutions for a greener future',
                        'buttons'     => [
                            [
                                'text' => 'Explore Projects',
                                'link' => '#',
                            ],
                            // [
                            //     'text' => 'Get Started',
                            //     'link' => '#'
                            // ]
                        ],
                    ],
                ],
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
                'slides'          => $slides

            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
