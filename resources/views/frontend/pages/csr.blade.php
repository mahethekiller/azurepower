<x-common-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription" :pageScript="$pageScript">



    <x-addons.pageheader :banners="$banners" />

    <!-- About us Section Start -->
    <div class="about-us about-us-bg">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="text-center section-title">
                        <h2 class="text-anime">Corporate Social Responsibility Vision & Philosophy </h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- About us Content Start -->
                    <div class="about-content wow fadeInUp text-center" data-wow-delay="0.25s">

                        <p>Our corporate social responsibility efforts are aimed at making improvements to the lives of
                            communities we operate in, with a focus on education, water, livelihood & skill development.
                            We have designed all our activities by keeping in consideration the important social and
                            environmental needs. We believe in giving back to society by enhancing livelihood of the
                            rural communities and transforming their lives.</p>

                    </div>
                    <!-- About us Content End -->

                    <h6>Our Focus Areas</h6>
                    <div class="csr">

                        <ul class="nav nav-tabs d-none d-lg-flex p-0" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="education-tab" data-bs-toggle="tab"
                                    data-bs-target="#education-tab-pane" type="button" role="tab"
                                    aria-controls="education-tab-pane" aria-selected="true">Education</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="water-sanitation-hygiene-tab" data-bs-toggle="tab"
                                    data-bs-target="#water-sanitation-hygiene-tab-pane" type="button" role="tab"
                                    aria-controls="water-sanitation-hygiene-tab-pane" aria-selected="false">Water,
                                    Sanitation and Hygiene</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="land-livelihood-tab" data-bs-toggle="tab"
                                    data-bs-target="#land-livelihood-tab-pane" type="button" role="tab"
                                    aria-controls="land-livelihood-tab-pane" aria-selected="false">Land &
                                    Livelihood</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="energy-tab" data-bs-toggle="tab"
                                    data-bs-target="#energy-tab-pane" type="button" role="tab"
                                    aria-controls="energy-tab-pane" aria-selected="false">Energy</button>
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
                                            aria-controls="collapseOne">Education</button>
                                    </h2>
                                    <div class="container">
                                        <div id="collapseOne" class="accordion-collapse collapse show  d-lg-block"
                                            aria-labelledby="headingOne" data-bs-parent="#myTabContent">
                                            <div class="accordion-body">

                                                <div class="row mt-5 mb-5">

                                                    <div class="col-lg-6">
                                                        <div class="owl-carousel owl-theme">
                                                            <div class="item"><img src="{{ asset('assets/img/Smart-Class-Rooms-1.jpg') }}">
                                                            </div>
                                                            <div class="item"><img src="{{ asset('assets/img/Smart-Class-Rooms-2.jpg') }}">
                                                            </div>
                                                            <div class="item"><img src="{{ asset('assets/img/Smart-Class-Rooms-3.jpg') }}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <h4>Smart Class Rooms</h4>
                                                        <p>We’ve installed smart classrooms by providing multimedia
                                                            enabled and computer aided learning solutions with the
                                                            intended impact of improving the holistic educational
                                                            facilities for students.</p>


                                                        <div class="responsive-table">
                                                            <table
                                                                class="table table-striped table-hover prReports2 policies-certification2">
                                                                <thead>
                                                                    <tr class="trHeaders mb-5">
                                                                        <th class="pr-date-field">States</th>
                                                                        <th class="pr-title-field">Smart Class - School
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Gujarat</td>
                                                                        <td>15</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Rajasthan</td>
                                                                        <td>14</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Punjab</td>
                                                                        <td>5</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Karnataka</td>
                                                                        <td>6</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Assam</td>
                                                                        <td>4</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Andhra Pradesh</td>
                                                                        <td>4</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Telangana</td>
                                                                        <td>5</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Uttar Pradesh</td>
                                                                        <td>3</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                    </div>


                                                </div>



                                                <div class="row mt-5 mb-5">

                                                    <div class="col-lg-6">
                                                        <h4>Upgrading Educational / Institutional Infrastructure</h4>
                                                        <p>We’ve suppied desks to educational institutes to have a
                                                            direct impact on education.</p>


                                                        <div class="responsive-table">
                                                            <table
                                                                class="table table-striped table-hover prReports2 policies-certification2">
                                                                <thead>
                                                                    <tr class="trHeaders mb-5">
                                                                        <th class="pr-date-field">States</th>
                                                                        <th class="pr-title-field">Smart Class - School
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Rajasthan</td>
                                                                        <td>300</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gujarat</td>
                                                                        <td>300</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="owl-carousel owl-theme">
                                                            <div class="item"><img
                                                                    src="{{ asset('assets/img/Upgrading-Educational-and-Institutional-Infrastructure-1.jpg') }}">
                                                            </div>
                                                            <div class="item"><img
                                                                    src="{{ asset('assets/img/Upgrading-Educational-and-Institutional-Infrastructure-2.jpg') }}">
                                                            </div>
                                                        </div>
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
                                            Water, Sanitation and Hygiene
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse d-lg-block"
                                        aria-labelledby="headingTwo" data-bs-parent="#myTabContent">
                                        <div class="accordion-body">

                                            <div class="row mt-5 mb-5">

                                                <div class="col-lg-6">
                                                    <div class="owl-carousel owl-theme">
                                                        <div class="item"><img src="{{ asset('assets/img/Ro-Water-Filtration.jpg') }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <h4>RO Water Filtration</h4>
                                                    <p>We promote healthcare and sanitation by providing access to
                                                        regular, safe and potable water which is essential and
                                                        fundamental to living a healthy life</p>

                                                    <div class="responsive-table">
                                                        <table
                                                            class="table table-striped table-hover prReports2 policies-certification2">
                                                            <thead>
                                                                <tr class="trHeaders mb-5">
                                                                    <th class="pr-date-field">States</th>
                                                                    <th class="pr-title-field">RO Installation</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Gujarat</td>
                                                                    <td>17</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Rajasthan</td>
                                                                    <td>14</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Punjab</td>
                                                                    <td>83</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Karnataka</td>
                                                                    <td>13</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Andhra Pradesh</td>
                                                                    <td>5</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Assam</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Uttar Pradesh</td>
                                                                    <td>3</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>


                                            </div>



                                        </div>
                                    </div>
                                </div>



                                <div class="tab-pane fade accordion-item border-0 investor-bg-grey"
                                    id="land-livelihood-tab-pane" role="tabpanel"
                                    aria-labelledby="land-livelihood-tab" tabindex="0">
                                    <h2 class="accordion-header d-lg-none" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Land Livelihood
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse d-lg-block"
                                        aria-labelledby="headingThree" data-bs-parent="#myTabContent">
                                        <div class="accordion-body">

                                            <div class="row mt-5 mb-5">

                                                <div class="col-lg-6">
                                                    <div class="owl-carousel owl-theme">
                                                        <div class="item"><img
                                                                src="{{ asset('assets/img/Mobility-Support-To-Differently-Abled-Army-Personnel.jpg') }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <h4>Mobility Support To Differently Abled Army Personnel</h4>
                                                    <p>We are focused on improving the lives of our community. Motorized
                                                        wheelchairs and modified two-wheelers were given to
                                                        differently-abled army personals for their everyday ease of
                                                        mobility.</p>

                                                    <div class="responsive-table">
                                                        <table
                                                            class="table table-striped table-hover prReports2 policies-certification2">
                                                            <thead>
                                                                <tr class="trHeaders mb-5">
                                                                    <th class="pr-date-field">States</th>
                                                                    <th class="pr-title-field">Beneficiaries</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Punjab</td>
                                                                    <td>116</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>


                                            </div>




                                            <div class="row mt-5 mb-5">


                                                <div class="col-lg-6">
                                                    <h4>Skill Development Training</h4>
                                                    <p>We support skill development activities through trainings in
                                                        various rural villages. We’ve conducted training across various
                                                        subjects including tailoring, operationing computuers, repairing
                                                        mobiles and motorcycles.</p>

                                                    <div class="responsive-table">
                                                        <table
                                                            class="table table-striped table-hover prReports2 policies-certification2">
                                                            <thead>
                                                                <tr class="trHeaders mb-5">
                                                                    <th class="pr-date-field">States</th>
                                                                    <th class="pr-title-field">Youth Trained</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Rajasthan</td>
                                                                    <td>727</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Assam</td>
                                                                    <td>528</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Gujarat</td>
                                                                    <td>1050</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Punjab</td>
                                                                    <td>675</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Uttar Pradesh</td>
                                                                    <td>175</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Andhra Pradesh</td>
                                                                    <td>170</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="owl-carousel owl-theme">
                                                        <div class="item"><img
                                                                src="{{ asset('assets/img/Skill-Development-Training-1.jpg') }}"></div>
                                                        <div class="item"><img
                                                                src="{{ asset('assets/img/Skill-Development-Training-2.jpg') }}"></div>
                                                        <div class="item"><img
                                                                src="{{ asset('assets/img/Skill-Development-Training-3.jpg') }}"></div>
                                                        <div class="item"><img
                                                                src="{{ asset('assets/img/Skill-Development-Training-4.jpg') }}"></div>
                                                    </div>
                                                </div>



                                            </div>



                                        </div>
                                    </div>
                                </div>



                                <div class="tab-pane fade accordion-item border-0 investor-bg-grey"
                                    id="energy-tab-pane" role="tabpanel" aria-labelledby="energy-tab"
                                    tabindex="0">
                                    <h2 class="accordion-header d-lg-none" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            Energy
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse d-lg-block"
                                        aria-labelledby="headingFour" data-bs-parent="#myTabContent">
                                        <div class="accordion-body">

                                            <div class="row mt-5 mb-5">

                                                <div class="col-lg-6">
                                                    <div class="owl-carousel owl-theme">
                                                        <div class="item"><img src="{{ asset('assets/img/Solar-Street-Lights.jpg') }}"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <h4>Solar Street Lights</h4>
                                                    <p>We’ve illuminated rural villages by installing solar
                                                        streetlights. These lights have been placed at common areas to
                                                        ensure benefit to a large number of community members like on
                                                        main junctions and intersections of the villages or in front of
                                                        the houses of the beneficiaries where village density is low.
                                                    </p>
                                                    <div class="responsive-table">
                                                        <table
                                                            class="table table-striped table-hover prReports policies-certification">
                                                            <thead>
                                                                <tr class="trHeaders mb-5">
                                                                    <th class="pr-date-field">States</th>
                                                                    <th class="pr-title-field">Installations</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Gujarat</td>
                                                                    <td>264</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Assam</td>
                                                                    <td>41</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Karnataka</td>
                                                                    <td>96</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Rajasthan</td>
                                                                    <td>125</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Andhra Pradesh</td>
                                                                    <td>20</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Uttar Pradesh</td>
                                                                    <td>150</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Telangana</td>
                                                                    <td>40</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Chhattisgarh</td>
                                                                    <td>46</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Punjab</td>
                                                                    <td>80</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>


                                            </div>




                                            <div class="row mt-5 mb-5">

                                                <div class="col-lg-6">
                                                    <div class="owl-carousel owl-theme">
                                                        <div class="item"><img src="{{ asset('assets/img/Mini-Grid.jpg') }}"></div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <h4>Mini Grid</h4>
                                                    <p>We’ve installed mini-grids in remote villages and provided
                                                        training to local villagers on operating and maintaining the
                                                        mini-grid to ensure the sustainability of the project activity.
                                                    </p>
                                                    <div class="responsive-table">
                                                        <table
                                                            class="table table-striped table-hover prReports policies-certification">
                                                            <thead>
                                                                <tr class="trHeaders mb-5">
                                                                    <th class="pr-date-field">States</th>
                                                                    <th class="pr-title-field">No of units</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Uttar Pradesh</td>
                                                                    <td>2</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
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
                                    <td>List of CSR activities 2022-23 </td>
                                    <td>
                                        <div class="link-buttons">
                                            <a href="pdf/List_of_CSR_activities_2022-23.pdf" target="_blank"
                                                class="pdf-swap">Download PDF</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>CSR Impact Report 2019 </td>
                                    <td>
                                        <div class="link-buttons">
                                            <a href="pdf/746715804526685773.pdf" target="_blank"
                                                class="pdf-swap">Download PDF</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>CSR Impact Report 2018 </td>
                                    <td>
                                        <div class="link-buttons">
                                            <a href="pdf/823615804526687850.pdf" target="_blank"
                                                class="pdf-swap">Download PDF</a>
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
