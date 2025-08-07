<x-common-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription" :pageScript="$pageScript">

    <x-addons.pageheader :banners="$banners" />
    <!-- Contact Information Section Start -->
    <div class="contact-information">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Contact Details</h3>
                        <h2 class="text-anime">Happy to Answer All Your Questions</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <div class="contact-form-box">

                        <!-- Contact Form start -->
                        <div class="contact-form wow fadeInUp" data-wow-delay="0.75s">
                            @include('frontend.partials.contact-form')
                        </div>
                        <!-- Contact Form end -->
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="investor">
                        <div class="container-fluid">
                            <div class="row align-items-center">

                                <ul class="nav nav-tabs d-none d-lg-flex p-0" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="corporate-office-tab" data-bs-toggle="tab"
                                            data-bs-target="#corporate-office-tab-pane" type="button" role="tab"
                                            aria-controls="corporate-office-tab-pane" aria-selected="true">Corporate
                                            Office</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="registered-office-tab" data-bs-toggle="tab"
                                            data-bs-target="#registered-office-tab-pane" type="button" role="tab"
                                            aria-controls="registered-office-tab-pane"
                                            aria-selected="false">Registered Office</button>
                                    </li>
                                </ul>
                                <div class="container">
                                    <div class="tab-content accordion" id="myTabContent">
                                        <div class="tab-pane fade show active accordion-item border-0 investor-bg-grey"
                                            id="corporate-office-tab-pane" role="tabpanel"
                                            aria-labelledby="corporate-office-tab" tabindex="0">
                                            <h2 class="accordion-header d-lg-none" id="headingOne">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">Corporate
                                                    Office</button>
                                            </h2>
                                            <div class="container">
                                                <div id="collapseOne"
                                                    class="accordion-collapse collapse show  d-lg-block"
                                                    aria-labelledby="headingOne" data-bs-parent="#myTabContent">
                                                    <div class="accordion-body">

                                                        <div class="footer-widget-info">
                                                            <ul>
                                                                <li>
                                                                    <div class="contact-icon">
                                                                        <img src="{{ asset('assets/img/location.png') }}">
                                                                    </div>
                                                                    <div class="contact-text">
                                                                        <h5 class="contact-title"
                                                                            style="text-align:left;">8th Floor, Tower
                                                                            A, DLF Infinity, Cyber City, Phase II,
                                                                            Gurugram-122002, Haryana</h5>
                                                                    </div>
                                                                </li>

                                                                <li>
                                                                    <div class="contact-icon">
                                                                        <img src="{{ asset('assets/img/sms.png') }}">
                                                                    </div>
                                                                    <div class="contact-text">
                                                                        <h5>
                                                                            <a class="contact-title"
                                                                                href="mailto:ir@azurepower.com">ir@azurepower.com</a>
                                                                        </h5>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="contact-icon">
                                                                        <img src="{{ asset('assets/img/call.png') }}">
                                                                    </div>
                                                                    <div class="contact-text">
                                                                        <h5 class="contact-title"> <a
                                                                                class="contact-title"
                                                                                href="tel:+91 124-4155755">+91
                                                                                124-4155755</a></h5>
                                                                    </div>
                                                                </li>
                                                            </ul>

                                                        </div>

                                                        <div class="google-map-form">
                                                            <div class="google-map">
                                                                <iframe
                                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d876.6227920156896!2d77.08975006962994!3d28.494866677127053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce18698e50473%3A0xac885e14b24da95b!2sAzure%20Power!5e0!3m2!1sen!2sin!4v1753698616800!5m2!1sen!2sin"
                                                                    width="600" height="450" style="border:0;"
                                                                    allowfullscreen="" loading="lazy"
                                                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade accordion-item border-0 investor-bg-grey"
                                            id="registered-office-tab-pane" role="tabpanel"
                                            aria-labelledby="registered-office-tab" tabindex="0">
                                            <h2 class="accordion-header d-lg-none" id="headingFour">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    Registered Office
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse d-lg-block"
                                                aria-labelledby="headingFour" data-bs-parent="#myTabContent">
                                                <div class="accordion-body">



                                                    <div class="footer-widget-info">
                                                        <ul>
                                                            <li>
                                                                <div class="contact-icon">
                                                                    <img src="{{ asset('assets/img/location.png') }}">
                                                                </div>
                                                                <div class="contact-text">
                                                                    <h5 class="contact-title"
                                                                        style="text-align:left;">DSC-304, Second Floor,
                                                                        DLF South Court, Saket District Centre, New
                                                                        Delhi – 110017</h5>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="contact-icon">
                                                                    <img src="{{ asset('assets/img/sms.png') }}">
                                                                </div>
                                                                <div class="contact-text">
                                                                    <h5>
                                                                        <a class="contact-title"
                                                                            href="mailto:ir@azurepower.com">ir@azurepower.com</a>
                                                                    </h5>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="contact-icon">
                                                                    <img src="{{ asset('assets/img/call.png') }}">
                                                                </div>
                                                                <div class="contact-text">
                                                                    <h5 class="contact-title"> <a
                                                                            class="contact-title"
                                                                            href="tel:+91 11-49409800">+91
                                                                            11-49409800</a></h5>
                                                                </div>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                    <div class="google-map-form">
                                                        <div class="google-map">
                                                            <iframe
                                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d876.6227920156896!2d77.08975006962994!3d28.494866677127053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce18698e50473%3A0xac885e14b24da95b!2sAzure%20Power!5e0!3m2!1sen!2sin!4v1753698616800!5m2!1sen!2sin"
                                                                width="600" height="450" style="border:0;"
                                                                allowfullscreen="" loading="lazy"
                                                                referrerpolicy="no-referrer-when-downgrade"></iframe>
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
    </div>
    <!-- Contact Information Section End -->

</x-common-layout>
