<x-common-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription" :pageScript="$pageScript">



    <x-addons.pageheader :banners="$banners" />



    <!-- About us Section Start -->
    <div class="about-us about-us-bg">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-12">

                    <!-- About us Content Start -->
                    <div class="about-content wow fadeInUp text-center" data-wow-delay="0.25s">

                        <p>At Azure Power, we strongly believe in safeguarding the health & safety of all our
                            stakeholders. We believe that good working conditions help bring about a safer and more
                            productive working environment. For employers, one of the fundamental principles of a
                            workplace is risk assessment which identifies all the hazards and potential for harm while
                            working. Our aim is to ensure that all our employees and contractors are safe and alert to
                            potential hazards across all our operations.
                        </p>
                    </div>
                    <!-- About us Content End -->

                    <div class="healthsafety mt-5">

                        <ul class="nav nav-tabs d-none d-lg-flex p-0" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="education-tab" data-bs-toggle="tab"
                                    data-bs-target="#education-tab-pane" type="button" role="tab"
                                    aria-controls="education-tab-pane" aria-selected="true">Health</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="water-sanitation-hygiene-tab" data-bs-toggle="tab"
                                    data-bs-target="#water-sanitation-hygiene-tab-pane" type="button" role="tab"
                                    aria-controls="water-sanitation-hygiene-tab-pane" aria-selected="false">Water,
                                    Sanitation and Hygiene</button>
                            </li>
                        </ul>




                        <div class="container">
                            <div class="tab-content accordion" id="myTabContent">
                                <div class="tab-pane fade show active accordion-item border-0 investor-bg-grey"
                                    id="education-tab-pane" role="tabpanel" aria-labelledby="education-tab"
                                    tabindex="0">
                                    <h2 class="accordion-header d-lg-none" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">Health</button>
                                    </h2>
                                    <div class="container">
                                        <div id="collapseOne" class="accordion-collapse collapse show  d-lg-block"
                                            aria-labelledby="headingOne" data-bs-parent="#myTabContent">
                                            <div class="accordion-body">

                                                <div class="row mt-5 mb-5">

                                                    <div class="col-lg-6">
                                                        <div class="owl-carousel owl-theme">
                                                            <div class="item"><img src="{{ asset('assets/img/Health-1.jpg') }}"></div>
                                                            <div class="item"><img src="{{ asset('assets/img/Health-2.jpg') }}"></div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <h4>Health</h4>

                                                        <ul class="custom-list">
                                                            <li>Medical insurance provided to all employees and their
                                                                close family (spouse, children and parents) </li>
                                                            <li>Medical tie-ups with hospitals at remotely located sites
                                                            </li>
                                                            <li>Healthy work environment provided with implementation of
                                                                air purifiers and distribution of anti-pollution masks
                                                            </li>
                                                            <li>Regular health checkup camps organized for employees at
                                                                both corporate office and sites</li>
                                                        </ul>


                                                    </div>


                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade accordion-item border-0 investor-bg-grey"
                                    id="water-sanitation-hygiene-tab-pane" role="tabpanel"
                                    aria-labelledby="water-sanitation-hygiene-tab" tabindex="0">
                                    <h2 class="accordion-header d-lg-none" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Safety
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse d-lg-block"
                                        aria-labelledby="headingTwo" data-bs-parent="#myTabContent">
                                        <div class="accordion-body">

                                            <div class="row mt-5 mb-5">

                                                <div class="col-lg-6">
                                                    <div class="owl-carousel owl-theme">
                                                        <div class="item"><img src="{{ asset('assets/img/Safety-1.jpg') }}"></div>
                                                        <div class="item"><img src="{{ asset('assets/img/Safety-2.jpg') }}"></div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <h4>Safety</h4>

                                                    <ul class="custom-list">
                                                        <li>Winner of Greentech Effective Safety Culture Award and Grow
                                                            Care India Occupational Health Safety Award</li>
                                                        <li>ISO 45001 certified</li>
                                                        <li>100% Personal Protective Equipment (PPE) compliance</li>
                                                        <li>Site Specific Emergency &amp; Response System present at all
                                                            sites</li>
                                                        <li>Regular training of staff such as safety awareness, fire
                                                            drill etc</li>
                                                        <li>Hazard Identification and Risk Analysis</li>
                                                        <li>Risk Investigation &amp; Reporting</li>
                                                    </ul>

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
    <!-- About Us Section End -->





    <!-- Journey Section Start -->
    <div class="milestone milestone-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="text-center">
                        <h2 class="wow fadeInUp">Certification</h2>
                        <h3 class="text-anime">Our Policy & Other Documents</h3>
                    </div>
                    <!-- Section Title End -->


                    <div class="responsive-table">
                        <table class="table table-striped table-hover prReports policies-certification">
                            <tbody>
                                <tr>
                                    <td>Health & Safety Policy </td>
                                    <td>
                                        <div class="link-buttons">
                                            <a href="#" target="_blank" class="pdf-swap">Download PDF</a>
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
    <!-- About Us Section End -->




</x-common-layout>
