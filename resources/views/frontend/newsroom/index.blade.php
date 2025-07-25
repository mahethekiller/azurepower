<x-common-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription" :pageScript="$pageScript">


    <!-- Page Header Start -->
    <div class="page-header parallaxie investor-page-banner">
        <img class="internal-banner" src="{{ asset('assets/img/investor-img.png') }}" />
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime text-center">Investor</h1>
                        <h2 class="text-anime text-center">Powering Trust Through Transparency</h2>
                        <nav class="wow fadeInUp" data-wow-delay="0.25s">


                            <x-addons.breadcrumb :items="[
                                ['label' => 'Home', 'url' => url('/')],
                                //  ['label' => 'Investor', 'url' => url('/')],
                                ['label' => 'Investor'],
                            ]" />


                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <div class="investor">
        <div class="container-fluid">
            {{-- {{ dd($upcomingEvents); }} --}}
            <div class="row align-items-center">

                <ul class="nav nav-tabs d-none d-lg-flex p-0" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="events-and-presentations-tab" data-bs-toggle="tab"
                            data-bs-target="#events-and-presentations-tab-pane" type="button" role="tab"
                            aria-controls="events-and-presentations-tab-pane" aria-selected="true">Press Release
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="press-releases-announcements-tab" data-bs-toggle="tab"
                            data-bs-target="#press-releases-announcements-tab-pane" type="button" role="tab"
                            aria-controls="press-releases-announcements-tab-pane" aria-selected="false">Shareholder
                            Meetings</button>
                    </li>
                </ul>
                <div class="container">
                    <div class="tab-content accordion" id="myTabContent">

                        @include('frontend.newsroom.partials.press-release')

                        @include('frontend.newsroom.partials.shareholder')


                    </div>

                </div>




            </div>
        </div>
    </div>


</x-common-layout>
