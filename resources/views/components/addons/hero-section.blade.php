@props([
    'slides' => [
        [
            'image' => 'img/banner.png',
            'heading' => '100% clean energy for your business',
            'description' => 'Leading the transition to clean, sustainable power solutions for a greener future',
            'buttons' => [
                [
                    'text' => 'Learn More',
                    'link' => '#'
                ],
                // [
                //     'text' => 'Explore Projects',
                //     'link' => '#'
                // ]
            ]
        ],
        [
            'image' => 'img/banner.png',
            'heading' => 'Over 4.1 GWs* pan India renewable energy portfolio',
            'description' => 'Leading the transition to clean, sustainable power solutions for a greener future',
            'buttons' => [
                [
                    'text' => 'Learn More',
                    'link' => '#'
                ],
                // [
                //     'text' => 'Explore Projects',
                //     'link' => '#'
                // ]
            ]
        ],
        [
            'image' => 'img/banner.png',
            'heading' => 'India’s first utility scale solar project',
            'description' => 'Leading the transition to clean, sustainable power solutions for a greener future',
            'buttons' => [
                [
                    'text' => 'Learn More',
                    'link' => '#'
                ],
                // [
                //     'text' => 'Get Started',
                //     'link' => '#'
                // ]
            ]
        ],
        [
            'image' => 'img/banner.png',
            'heading' => '300,000+ beneficiaries of social investment',
            'description' => 'Leading the transition to clean, sustainable power solutions for a greener future',
            'buttons' => [
                [
                    'text' => 'Learn More',
                    'link' => '#'
                ],
                [
                    'text' => 'Get Started',
                    'link' => '#'
                ]
            ]
        ]
    ],
    // 'pageScript' => null,
])


<!-- Hero Section Start -->
<div class="hero-layout2 hero-slider">
    <div class="hero-slider-layout2">
        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach ($slides as $slide)
                    <!-- Hero Slide Start -->
                    <div class="swiper-slide">
                        <div class="hero-slide">
                            <!-- Slider Image Start -->
                            <div class="hero-slider-image">
                                <img src="{{ asset("assets/".$slide['image']) }}" alt="">
                            </div>
                            <!-- Slider Image End -->

                            <!-- Slider Content Start -->
                            <div class="container">
                                <div class="row text-left">
                                    <div class="col-lg-12">
                                        <!-- Hero Layout 2 Content Box Start-->
                                        <div class="hero-layout2-box">
                                            <div class="section-title text-left2">
                                                <h1 class="text-anime">{{ $slide['heading'] }}</h1>
                                            </div>

                                            <div class="hero-content wow fadeInUp" data-wow-delay="0.25s">
                                                <p>{{ $slide['description'] }}</p>
                                            </div>

                                            <div class="hero-button wow fadeInUp" data-wow-delay="0.5s">
                                                @foreach ($slide['buttons'] as $button)
                                                    <a href="{{ $button['link'] }}" class="btn-default">{{ $button['text'] }}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- Hero Layout 2 Content Box End-->
                                    </div>
                                </div>
                            </div>
                            <!-- Slider Content End -->
                        </div>
                    </div>
                    <!-- Hero Slide End -->
                @endforeach


            </div>

            <div class="hero-button-prev"></div>
            <div class="hero-button-next"></div>
        </div>
    </div>
</div>
<!-- Hero Section End -->

