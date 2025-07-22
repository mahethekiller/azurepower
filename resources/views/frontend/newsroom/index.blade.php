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
                            aria-controls="events-and-presentations-tab-pane" aria-selected="true">Press Release </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="press-releases-announcements-tab" data-bs-toggle="tab"
                            data-bs-target="#press-releases-announcements-tab-pane" type="button" role="tab"
                            aria-controls="press-releases-announcements-tab-pane" aria-selected="false">Shareholder Meetings</button>
                    </li>
                </ul>
                <div class="container">
                    <div class="tab-content accordion" id="myTabContent">
                        <div class="tab-pane fade show active accordion-item border-0 investor-bg-grey"
                            id="events-and-presentations-tab-pane" role="tabpanel"
                            aria-labelledby="events-and-presentations-tab" tabindex="0">
                            <h2 class="accordion-header d-lg-none" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">Press Release</button>
                            </h2>
                            <div class="container">
                                <div id="collapseOne" class="accordion-collapse collapse show  d-lg-block"
                                    aria-labelledby="headingOne" data-bs-parent="#myTabContent">
                                    <div class="accordion-body">


                                        {{-- <div class="accordion" id="documentAccordion"> --}}
                                        @php
                                            $groupedDocuments = $documents->groupBy(function ($item) {
                                                return $item->doc_date->format('Y');
                                            });
                                        @endphp

                                        @foreach ($groupedDocuments as $year => $yearDocuments)
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading-{{ $year }}">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapse-{{ $year }}"
                                                        aria-expanded="false"
                                                        aria-controls="collapse-{{ $year }}">
                                                        {{ $year }}
                                                    </button>
                                                </h2>
                                                <div id="collapse-{{ $year }}"
                                                    class="accordion-collapse collapse"
                                                    aria-labelledby="heading-{{ $year }}"
                                                    data-bs-parent="#documentAccordion">
                                                    <div class="accordion-body">
                                                        <div class="table-responsive">
                                                            <div class="table table-striped table-hover prReports">
                                                                @foreach ($yearDocuments as $document)
                                                                    <div class="row" style="width: 100%;">
                                                                        <div class="col-2">
                                                                            {{ $document->doc_date->format('M d, Y') }}
                                                                        </div>
                                                                        <div class="col-8">
                                                                            {{ $document->title }}
                                                                        </div>
                                                                        <div class="col-2">
                                                                            <div class="link-buttons">
                                                                                <a class="pdf-swap"
                                                                                    href="{{ asset('storage/' . $document->file) }}"
                                                                                    target="_blank">
                                                                                    Download
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        {{-- </div> --}}




                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade accordion-item border-0 investor-bg-grey"
                            id="press-releases-announcements-tab-pane" role="tabpanel"
                            aria-labelledby="press-releases-announcements-tab" tabindex="0">
                            <h2 class="accordion-header d-lg-none" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Shareholder Meetings
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse d-lg-block"
                                aria-labelledby="headingFour" data-bs-parent="#myTabContent">
                                <div class="accordion-body">





                                    <ul class="nav nav-tabs d-none d-lg-flex dates border-0 tab-nav-custom"
                                        id="tab-nav" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="tab-sec-fillings-btn"
                                                data-bs-toggle="tab" data-bs-target="#tab-sec-fillings-pane"
                                                type="button" role="tab" aria-controls="tab-sec-fillings-pane"
                                                aria-selected="true">SEC Filings</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="tab-bondholder-reports-btn"
                                                data-bs-toggle="tab" data-bs-target="#tab-bondholder-reports-pane"
                                                type="button" role="tab"
                                                aria-controls="tab-bondholder-reports-pane"
                                                aria-selected="false">Bondholder Reports</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="tab-annual-report-btn" data-bs-toggle="tab"
                                                data-bs-target="#tab-annual-report-pane" type="button"
                                                role="tab" aria-controls="tab-annual-report-pane"
                                                aria-selected="false">Annual Reports</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="tab-annual-returns-btn" data-bs-toggle="tab"
                                                data-bs-target="#tab-annual-returns-pane" type="button"
                                                role="tab" aria-controls="tab-annual-returns-pane"
                                                aria-selected="false">Annual Returns</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="tab-bondholder-announcements-btn"
                                                data-bs-toggle="tab"
                                                data-bs-target="#tab-bondholder-announcements-pane" type="button"
                                                role="tab" aria-controls="tab-bondholder-announcements-pane"
                                                aria-selected="false">Bondholder
                                                Announcements</button>
                                        </li>
                                    </ul>

                                    <div class="tab-content accordion" id="tab-content">
                                        <div class="tab-pane fade show active accordion-item"
                                            id="tab-sec-fillings-pane" role="tabpanel"
                                            aria-labelledby="tab-sec-fillings-btn" tabindex="0">
                                            <h2 class="accordion-header d-lg-none" id="accordion-sec-fillings-header">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#accordion-sec-fillings-collapse"
                                                    aria-expanded="true"
                                                    aria-controls="accordion-sec-fillings-collapse">SEC
                                                    Filings</button>
                                            </h2>
                                            <div id="accordion-sec-fillings-collapse"
                                                class="accordion-collapse collapse show d-lg-block"
                                                aria-labelledby="accordion-sec-fillings-header"
                                                data-bs-parent="#tab-content">
                                                <div class="accordion-body">

                                                    <div class="responsive-table">
                                                        <table class="prReports reportTable" width="100%">
                                                            <thead>
                                                                <tr class="trHeaders mb-5">
                                                                    <th class="pr-date-field">Date</th>
                                                                    <th class="pr-title-field">Title</th>
                                                                    <th class="pr-document-field">Document</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th width="10%">Nov 01, 2023</th>
                                                                    <td width="80%">
                                                                        <a href="#">Changes to the Board of
                                                                            Directors of Azure Power</a>
                                                                    </td>
                                                                    <td width="10%">
                                                                        <div class="link-buttons">
                                                                            <a href="#" target="_blank"
                                                                                class="pdf-swap"
                                                                                title="PDF, opens in a new window">PDF</a>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>






                                    <div class="tab-content accordion" id="tab-content">
                                        <div class="tab-pane fade show accordion-item"
                                            id="tab-bondholder-reports-pane" role="tabpanel"
                                            aria-labelledby="tab-bondholder-reports-btn" tabindex="0">
                                            <h2 class="accordion-header d-lg-none"
                                                id="accordion-bondholder-reports-header">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#accordion-bondholder-reports-collapse"
                                                    aria-expanded="true"
                                                    aria-controls="accordion-bondholder-reports-collapse">Bondholder
                                                    Reports</button>
                                            </h2>
                                            <div id="accordion-bondholder-reports-collapse"
                                                class="accordion-collapse collapse show d-lg-block"
                                                aria-labelledby="accordion-bondholder-reports-header"
                                                data-bs-parent="#tab-content">
                                                <div class="accordion-body">

                                                    <div class="responsive-table">
                                                        <table class="prReports reportTable" width="100%">
                                                            <thead>
                                                                <tr class="trHeaders mb-5">
                                                                    <th class="pr-date-field">Datesss</th>
                                                                    <th class="pr-title-field">Title</th>
                                                                    <th class="pr-document-field">Document</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th width="10%">Nov 01, 2023</th>
                                                                    <td width="80%">
                                                                        <a href="#">Changes to the Board of
                                                                            Directors of Azure Power</a>
                                                                    </td>
                                                                    <td width="10%">
                                                                        <div class="link-buttons">
                                                                            <a href="#" target="_blank"
                                                                                class="pdf-swap"
                                                                                title="PDF, opens in a new window">PDF</a>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="tab-content accordion" id="tab-content">
                                        <div class="tab-pane fade show accordion-item" id="tab-annual-report-pane"
                                            role="tabpanel" aria-labelledby="tab-annual-report-btn" tabindex="0">
                                            <h2 class="accordion-header d-lg-none"
                                                id="accordion-annual-report-header">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#accordion-annual-report-collapse"
                                                    aria-expanded="true"
                                                    aria-controls="accordion-annual-report-collapse">Annual
                                                    Report</button>
                                            </h2>
                                            <div id="accordion-annual-report-collapse"
                                                class="accordion-collapse collapse show d-lg-block"
                                                aria-labelledby="accordion-annual-report-header"
                                                data-bs-parent="#tab-content">
                                                <div class="accordion-body">

                                                    Annual Report

                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="tab-content accordion" id="tab-content">
                                        <div class="tab-pane fade show accordion-item" id="tab-annual-returns-pane"
                                            role="tabpanel" aria-labelledby="tab-annual-returns-btn" tabindex="0">
                                            <h2 class="accordion-header d-lg-none"
                                                id="accordion-annual-returns-header">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#accordion-annual-returns-collapse"
                                                    aria-expanded="true"
                                                    aria-controls="accordion-annual-returns-collapse">Annual
                                                    Returns</button>
                                            </h2>
                                            <div id="accordion-annual-returns-collapse"
                                                class="accordion-collapse collapse show d-lg-block"
                                                aria-labelledby="accordion-annual-returns-header"
                                                data-bs-parent="#tab-content">
                                                <div class="accordion-body">

                                                    Annual Returns

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-content accordion" id="tab-content">
                                        <div class="tab-pane fade show accordion-item"
                                            id="tab-bondholder-announcements-pane" role="tabpanel"
                                            aria-labelledby="tab-bondholder-announcements-btn" tabindex="0">
                                            <h2 class="accordion-header d-lg-none"
                                                id="accordion-bondholder-announcements-header">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#accordion-bondholder-announcements-collapse"
                                                    aria-expanded="true"
                                                    aria-controls="accordion-bondholder-announcements-collapse">Bondholder
                                                    Announcements</button>
                                            </h2>
                                            <div id="accordion-bondholder-announcements-collapse"
                                                class="accordion-collapse collapse show d-lg-block"
                                                aria-labelledby="accordion-bondholder-announcements-header"
                                                data-bs-parent="#tab-content">
                                                <div class="accordion-body">

                                                    Bondholder Announcements

                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>


                    </div>

                </div>




            </div>
        </div>
    </div>


</x-common-layout>
