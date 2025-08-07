<x-common-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription" :pageScript="$pageScript">



    <x-addons.pageheader :banners="$banners" />

    <!-- About us Section Start -->
    <div class="about-us about-us-bg">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-12">

                    <!-- About us Content Start -->
                    <div class="about-content wow fadeInUp text-center" data-wow-delay="0.25s">

                        <p>Azure is committed to sustainable development and is accountable toward our environmental and
                            social responsibilities. Our goal is to enhance sustainability of our ecosystem and to
                            improve or restore the environment. To achieve this, we work closely with local communities
                            to understand their concerns and identify ways to address them to support long-term economic
                            growth.</p>

                        <p>We are a signatory of UN Global Compact and annually disclose our climate change impact
                            through Carbon Disclosure Project (CDP), a global non-profit that runs the world’s leading
                            environmental disclosure platform. CDP drives companies and governments to reduce their
                            greenhouse gas emissions, safeguard water resources and protect forests. </p>

                    </div>
                    <!-- About us Content End -->

                    <div class="healthsafety mt-5">

                        <ul class="nav nav-tabs d-none d-lg-flex p-0" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="education-tab" data-bs-toggle="tab"
                                    data-bs-target="#education-tab-pane" type="button" role="tab"
                                    aria-controls="education-tab-pane" aria-selected="true">Social</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="water-sanitation-hygiene-tab" data-bs-toggle="tab"
                                    data-bs-target="#water-sanitation-hygiene-tab-pane" type="button" role="tab"
                                    aria-controls="water-sanitation-hygiene-tab-pane"
                                    aria-selected="false">Environment</button>
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
                                            aria-controls="collapseOne">Social</button>
                                    </h2>
                                    <div class="container">
                                        <div id="collapseOne" class="accordion-collapse collapse show  d-lg-block"
                                            aria-labelledby="headingOne" data-bs-parent="#myTabContent">
                                            <div class="accordion-body">

                                                <div class="row mt-5 mb-5">

                                                    <div class="col-lg-6">
                                                        <div class="owl-carousel owl-theme">
                                                            <div class="item"><img src="{{ asset('assets/img/Social.jpg') }}"></div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <h4>Social</h4>

                                                        <ul class="custom-list">
                                                            <li>Implemented voluntary principles on security and human
                                                                rights across all our sites</li>
                                                            <li>Robust HR Policies providing employees equal opportunity
                                                            </li>
                                                            <li>Site specific stakeholder engagement plan and
                                                                implementation</li>
                                                            <li>Grievance redressal mechanism</li>
                                                            <li>Worker and labour accommodation as per International
                                                                Labour Standards</li>
                                                            <li>Robust HR Policies for equal opportunity for employees
                                                            </li>
                                                            <li>Supplier audit on social performance&nbsp;</li>
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
                                            Environment
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse d-lg-block"
                                        aria-labelledby="headingTwo" data-bs-parent="#myTabContent">
                                        <div class="accordion-body">

                                            <div class="row mt-5 mb-5">

                                                <div class="col-lg-6">
                                                    <div class="owl-carousel owl-theme">
                                                        <div class="item"><img src="{{ asset('assets/img/Environment-1.jpg') }}"></div>
                                                        <div class="item"><img src="{{ asset('assets/img/Environment-2.jpg') }}"></div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <h4>Environment</h4>

                                                    <ul class="custom-list">
                                                        <li>All projects are governed by International Finance
                                                            Corporation (IFC) performance principle</li>
                                                        <li>Environment Impact Assessment conducted before project
                                                            implementation</li>
                                                        <li>Specialized studies conducted at sites, such as Ecological
                                                            Management Plan and Biodiversity Assessment to mitigate
                                                            impact on biodiversity</li>
                                                        <li>Tree plantation drives conducted at sites</li>
                                                        <li>ISO 14001 certified for Environmental Management system</li>
                                                        <li>Water Conservation through robotic&nbsp;plant cleaning
                                                            technology</li>
                                                        <li>Ground water recharge structures, recharge 50% of water used
                                                        </li>
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

</x-common-layout>
