
@props(['slides'])
 {{-- {{ dd($slides) }} --}}

<!-- Hero Section Start -->
<div class="hero-layout2 hero-slider">
    <div class="hero-slider-layout2">
        <div class="swiper">
            <div class="swiper-wrapper">
                @if(!empty($slides))
                    @foreach ($slides as $slide)
                        <!-- Hero Slide Start -->
                        <div class="swiper-slide">
                            <div class="hero-slide">
                                <!-- Slider Image Start -->
                                <div class="hero-slider-image">
                                    <img src="{{ asset('storage/'.$slide->image) }}" alt="">
                                </div>
                                <!-- Slider Image End -->

                                <!-- Slider Content Start -->
                                <div class="container">
                                    <div class="row text-left">
                                        <div class="col-lg-12">
                                            <!-- Hero Layout 2 Content Box Start-->
                                            <div class="hero-layout2-box">
                                                <div class="section-title text-left2">
                                                    <h1 class="text-anime">{{ $slide->heading }}</h1>
                                                </div>

                                                <div class="hero-content wow fadeInUp" data-wow-delay="0.25s">
                                                    <p>{{ $slide->description }}</p>
                                                </div>

                                                <div class="hero-button wow fadeInUp" data-wow-delay="0.5s">
                                                    @if($slide->button1_text || $slide->button2_text)
                                                        @if($slide->button1_text)
                                                            <a href="{{ $slide->button1_link }}" class="btn-default">{{ $slide->button1_text }}</a>
                                                        @endif
                                                        @if($slide->button2_text)
                                                            <a href="{{ $slide->button2_link }}" class="btn-default">{{ $slide->button2_text }}</a>
                                                        @endif
                                                    @endif
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
                @endif
            </div>

            <div class="hero-button-prev"></div>
            <div class="hero-button-next"></div>
        </div>
    </div>
</div>
<!-- Hero Section End -->

