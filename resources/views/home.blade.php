<x-common-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription" :pageScript="$pageScript" >


<x-addons.hero-section :slides="$slides" />



	<!-- About Section Start -->
	<div class="about-us about-us-bg">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<!-- About us Image Start -->
					<div class="about-image">
						<div class="about-img-1">
							<figure class="reveal image-anime">
								<img src="{{ asset('assets/img/about-img1.png') }}" alt="">
							</figure>
						</div>

						<div class="about-img-2">
							<figure class="reveal image-anime">
								<img src="{{ asset('assets/img/about-img2.png') }}" alt="">
							</figure>
						</div>

						<div class="experience bounce-y">
							<img src="{{ asset('assets/img/satisfied-client-icon.png') }}" alt="" class="icon">
							<strong>600+</strong> Satisfied Client
						</div>

					</div>

					<!-- About us Image End -->
				</div>

				<div class="col-lg-6">
					<!-- Section Title Start -->
					<div class="section-title">
						<h3 class="wow fadeInUp">What We Do</h3>
						<h2 class="text-anime">Our goal is to ensure solar energy accessibility</h2>
					</div>
					<!-- Section Title End -->

					<!-- About us Content Start -->
					<div class="about-content wow fadeInUp" data-wow-delay="0.25s">
						<strong>We are one of the Top Solar energy and sustainable development company in India</strong>

						<p>We build and operate some of the largest grid-scale Solar power projects in the country, and supply the generated renewable power to government utilities, and independent industrial & commercial customers on long term fixed price contracts.</p>

						<div class="content-box-rgt-section">
							<div class="info-box">
								<h5 class="title">High Quality Solartect Energy Solutions</h5>
							</div>

							<div class="about-block">
								<i class="icon flaticon-wind-turbine"></i>
								<img class="icon" src="{{ asset('assets/img/utility-icon.png') }}" />
								<h5 class="title">Utility</h5>
								<div class="text">We build and operate large grid-scale solar, wind, and hybrid projects across India...</div>
							</div>

							<div class="about-block">
								<i class="icon flaticon-save"></i>
								<img class="icon" src="{{ asset('assets/img/energy-transition-icon.png') }}" />
								<h5 class="title">Energy Transition</h5>
								<div class="text">Azure Power Energy Transition Services, a B2B arm of Azure Power, helps commercial...</div>
							</div>

						</div>
					</div>
					<!-- About us Content End -->
				</div>
			</div>
		</div>
	</div>
	<!-- About Section End -->




	<!-- Latest Project Layout 3 Start -->
	<div class="project-layout3">
		<div class="container">
			<div class="row align-items-center section-title-row">
				<div class="col-lg-12">
					<!-- Section Title Start -->
					<div class="section-title text-center">
						<h3 class="wow fadeInUp">Featured Projects</h3>
						<h2 class="text-anime">Our goal is to ensure solar <br>energy accessibility</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row no-gap">
				<div class="col-md-12">
					<!-- Project Layout 3 Slider Start -->
					<div class="project-layout3-slider">
						<div class="swiper">
							<div class="swiper-wrapper">
								<!-- Project Slide Start -->
								<div class="swiper-slide">
									<div class="project-slide3">
										<div class="project-image">
											<figure class="image-anime">
												<img src="{{ asset('assets/img/Punjab-4-2.jpg') }}" alt="">
											</figure>
										</div>

										<div class="project-content">
											<h3>Punjab 4</h3>
											<p><i class="fa-solid fa-location-dot"></i> Project Location : (Dist: Fazilka, Muktasar, Bhathinda), Punjab<br>
											<i class="fa-solid fa-expand"></i> Project Size : 150 MW</p>
										</div>
									</div>
								</div>
								<!-- Project Slide End -->

								<!-- Project Slide Start -->
								<div class="swiper-slide">
									<div class="project-slide3">
										<div class="project-image">
											<figure class="image-anime">
												<img src="{{ asset('assets/img/Andhra-Pradesh-2.jpg') }}" alt="">
											</figure>
										</div>

										<div class="project-content">
											<h3>Andhra Pradesh 2</h3>
											<p><i class="fa-solid fa-location-dot"></i> Project Location : Kurnool, Andhra Pradesh<br>
											<i class="fa-solid fa-expand"></i> Project Size : 100 MW</p>
										</div>
									</div>
								</div>
								<!-- Project Slide End -->

								<!-- Project Slide Start -->
								<div class="swiper-slide">
									<div class="project-slide3">
										<div class="project-image">
											<figure class="image-anime">
												<img src="{{ asset('assets/img/Telangana-1.jpg') }}" alt="">
											</figure>
										</div>

										<div class="project-content">
											<h3>Telangana 1</h3>
											<p><i class="fa-solid fa-location-dot"></i> Project Location : (Dist: Rachur, Jillella, Marchala, Rachallapalli, Veljala), Telangana<br>
											<i class="fa-solid fa-expand"></i> Project Size : 100 MW</p>
										</div>
									</div>
								</div>
								<!-- Project Slide End -->

								<!-- Project Slide Start -->
								<div class="swiper-slide">
									<div class="project-slide3">
										<div class="project-image">
											<figure class="image-anime">
												<img src="{{ asset('assets/img/Gujarat-2.jpg') }}" alt="">
											</figure>
										</div>

										<div class="project-content">
											<h3>Gujarat 2</h3>
											<p><i class="fa-solid fa-location-dot"></i> Project Location : (Dist: Sanes, Chiddra, Vadol, Malooj, Netramali, Vartol, Semaliya), Gujarat<br>
											<i class="fa-solid fa-expand"></i> Project Size : 260 MW</p>
										</div>
									</div>
								</div>
								<!-- Project Slide End -->
							</div>
							<div class="container text-center mt-5"><a href="#" class="btn-default align-items-center text-center">View Solar Power Projects</a></div>
							<div class="swiper-pagination"></div>
						</div>
					</div>
					<!-- Project Layout 3 Slider End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Latest Project Layout 3 End -->


<!-- Map Layout Start -->


	<div class="map">
		<div class="container">
			<div class="row align-items-center section-title-row">
				<div class="col-lg-12">
					<!-- Section Title Start -->
					<div class="section-title text-center">
						<h3 class="wow fadeInUp">We Complete 100+ Project Yearly Successfully</h3>
						<h2 class="text-anime">We deliver clean, reliable, and affordable renewable energy to communities worldwide <br>preserving our planet for future generations.</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>
		</div>



		</div>

		<!-- Map Layout End -->



	<!-- Counter Section Start -->
	<div class="stat-counter">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 counter-border counter-border-radius">
					<!-- Counter Item Start -->
					<div class="counter-item">
						<div class="counter-icon">
							<img src="{{ asset('assets/img/Total-Capacity-Installed.png') }}" alt="">
						</div>

						<div class="counter-content">
							<h3><span class="counter">8.5</span>GW</h3>
							<p>Total Capacity Installed</p>
						</div>
					</div>
					<!-- Counter Item End -->
				</div>

				<div class="col-lg-3 col-md-6 counter-border2 counter-border3">
					<!-- Counter Item Start -->
					<div class="counter-item">
						<div class="counter-icon">
							<img src="{{ asset('assets/img/Years-in-Operation-icon.png') }}" alt="">
						</div>

						<div class="counter-content">
							<h3><span class="counter">15</span>+</h3>
							<p>Years in Operation</p>
						</div>
					</div>
					<!-- Counter Item End -->
				</div>

				<div class="col-lg-3 col-md-6 counter-border2">
					<!-- Counter Item Start -->
					<div class="counter-item">
						<div class="counter-icon">
							<img src="{{ asset('assets/img/Projects-Delivered-icon.png') }}" alt="">
						</div>

						<div class="counter-content">
							<h3><span class="counter">200</span>+</h3>
							<p>Projects Delivered</p>
						</div>
					</div>
					<!-- Counter Item End -->
				</div>

				<div class="col-lg-3 col-md-6 counter-border counter-border-radius2">
					<!-- Counter Item Start -->
					<div class="counter-item">
						<div class="counter-icon">
							<img src="{{ asset('assets/img/Lives-Impacted-icon.png') }}" alt="">
						</div>

						<div class="counter-content">
							<h3><span class="counter">2</span>M+</h3>
							<p>Lives Impacted</p>
						</div>
					</div>
					<!-- Counter Item End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Counter Section End -->



<!-- Why Choose us Section Start -->
	<div class="why-choose-us">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section Title Start -->
					<div class="section-title">
						<h3 class="wow fadeInUp">WHY CHOOSE US</h3>
						<h2 class="text-anime">Providing solar energy solutions</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-6">
					<!-- Why Choose Item Start -->
					<div class="why-choose-item wow fadeInUp text-center" data-wow-delay="0.25s">
						<div class="why-choose-image">
							<img src="{{ asset('assets/img/banner.png') }}" alt="">
						</div>

						<div class="why-choose-content">
							<div class="why-choose-icon">
								<img src="{{ asset('assets/img/Technical-Focus-icon.png') }}" alt="">
							</div>

							<h3>Technical Focus</h3>
							<p>Smart tech meets engineering to maximize energy.</p>
						</div>
					</div>
					<!-- Why Choose Item End -->
				</div>

				<div class="col-lg-3 col-md-6">
					<!-- Why Choose Item Start -->
					<div class="why-choose-item wow fadeInUp text-center" data-wow-delay="0.5s">
						<div class="why-choose-image">
							<img src="{{ asset('assets/img/banner.png') }}" alt="">
						</div>

						<div class="why-choose-content">
							<div class="why-choose-icon">
								<img src="{{ asset('assets/img/Trust-&-Warranty-icon.png') }}" alt="">
							</div>

							<h3>Trust & Warranty</h3>
							<p>Built on trust, supported by industry leading warranties.</p>
						</div>
					</div>
					<!-- Why Choose Item End -->
				</div>

				<div class="col-lg-3 col-md-6">
					<!-- Why Choose Item Start -->
					<div class="why-choose-item wow fadeInUp text-center" data-wow-delay="0.75s">
						<div class="why-choose-image">
							<img src="{{ asset('assets/img/banner.png') }}" alt="">
						</div>

						<div class="why-choose-content">
							<div class="why-choose-icon">
								<img src="{{ asset('assets/img/Quality-Work-icon.png') }}" alt="">
							</div>

							<h3>Quality Work</h3>
							<p>Quality-driven execution for long term performance.</p>
						</div>
					</div>
					<!-- Why Choose Item End -->
				</div>

				<div class="col-lg-3 col-md-6">
					<!-- Why Choose Item Start -->
					<div class="why-choose-item wow fadeInUp text-center" data-wow-delay="1.0s">
						<div class="why-choose-image">
							<img src="{{ asset('assets/img/banner.png') }}" alt="">
						</div>

						<div class="why-choose-content">
							<div class="why-choose-icon">
								<img src="{{ asset('assets/img/Customer-Support-icon.png') }}" alt="">
							</div>

							<h3>Customer Support</h3>
							<p>Constant support to keep your power flowing.</p>
						</div>
					</div>
					<!-- Why Choose Item End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Why Choose us Section End -->


	<!-- Our Process Section Start -->
	    <div class="our-process">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our process</h3>
                        <h2 class="text-anime">Our Work Process</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <!-- Step Item Start -->
                    <div class="step-item step-1 wow fadeInUp" data-wow-delay="0.25s">
                        <div class="step-header">
                            <div class="step-icon">
                                <figure>
                                    <img src="{{ asset('assets/images/icon-step-1.svg') }}" alt="">
                                </figure>
                                <span class="step-no">01</span>
                            </div>
                        </div>

                        <div class="step-content">
                            <h3>Project Planning</h3>
                            <p>Smart, scalable planning for every stage of your energy project.</p>
                        </div>
                    </div>
                    <!-- Step Item End -->
                </div>

                <div class="col-md-4">
                    <!-- Step Item Start -->
                    <div class="step-item step-2 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="step-header">
                            <div class="step-icon">
                                <figure>
                                    <img src="{{ asset('assets/images/icon-step-2.svg') }}" alt="">
                                </figure>
                                <span class="step-no">02</span>
                            </div>
                        </div>

                        <div class="step-content">
                            <h3>Strategic Research</h3>
                            <p>Data-driven insights to guide smarter energy decisions.</p>
                        </div>
                    </div>
                    <!-- Step Item End -->
                </div>

                <div class="col-md-4">
                    <!-- Step Item Start -->
                    <div class="step-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="step-header">
                            <div class="step-icon">
                                <figure>
                                    <img src="{{ asset('assets/images/icon-step-3.svg') }}" alt="">
                                </figure>
                                <span class="step-no">03</span>
                            </div>
                        </div>

                        <div class="step-content">
                            <h3>Solar Integration</h3>
                            <p>Expertly installed solar solutions, ready to power your future.</p>
                        </div>
                    </div>
                    <!-- Step Item End -->
                </div>
            </div>
        </div>
    </div>
	<!-- Our Process Section End -->


	<!-- Intro Video Section Start -->
	<div class="intro-video">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Intro Video Box Start -->
					<div class="intro-video-box">
						<div class="video-image">
							<img src="{{ asset('assets/img/video-bg.png') }}" alt="">
						</div>

						<div class="video-play-button">
							<a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video">
								<img src="{{ asset('assets/images/play.svg') }}" alt="">
							</a>
						</div>
					</div>
					<!-- Intro Video Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Intro Video Section End -->



	<!-- Our Services Section Start -->
	<div class="our-services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section Title Start -->
					<div class="section-title">
						<h3 class="wow fadeInUp">Meet Professionals</h3>
						<h2 class="text-anime">Board of Directors</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<!-- Services Slider Start -->
					<div class="services-slider">
						<div class="swiper">
							<div class="swiper-wrapper">
								<!-- Service Slide Start -->
								<div class="swiper-slide">
									<a href="#"><div class="service-item">
										<div class="service-image">
											<figure>
												<img src="{{ asset('assets/img/brijesh-mehra.jpg') }}" alt="">
											</figure>
										</div>

										<div class="service-content">
											<h3>Mr. Brijesh Mehra</h3>
											<p>Non-Executive Director & Chairman of the Board </p>
										</div>
									</div></a>
								</div>
								<!-- Service Slide End -->

								<!-- Service Slide Start -->
								<div class="swiper-slide">
									<a href="#"><div class="service-item">
										<div class="service-image">
											<figure>
												<img src="{{ asset('assets/img/Richard-Payette-img_2.jpg') }}" alt="">
											</figure>
										</div>

										<div class="service-content">
											<h3>Richard Payette</h3>
											<p>Independent non-executive Director</p>
										</div>
									</div></a>
								</div>
								<!-- Service Slide End -->

								<!-- Service Slide Start -->
								<div class="swiper-slide">
									<a href="#">
									<div class="service-item">
										<div class="service-image">
											<figure>
												<img src="{{ asset('assets/img/Jean_Francois.jpg') }}" alt="">
											</figure>
										</div>
											<div class="service-content">
											<h3>Jean-François Boisvenu</h3>
											<p>Independent Non-Executive Director</p>
										</div>
									</div>
									</a>
								</div>
								<!-- Service Slide End -->

								<!-- Service Slide Start -->
								<div class="swiper-slide">
									<a href="#"><div class="service-item">
										<div class="service-image">
											<figure>
												<img src="{{ asset('assets/img/Dabee_Greyscale.jpg') }}" alt="">
											</figure>
										</div>

										<div class="service-content">
											<h3>Gowtamsingh Dabee</h3>
											<p>Independent Non-Executive Director</p>
										</div>
									</div></a>
								</div>
								<!-- Service Slide End -->
							</div>

							<div class="swiper-pagination"></div>
						</div>
					</div>
					<!-- Services Slider End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Our Services Section End -->


<!-- Latest News Section Start -->
	<div class="latest-news">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section Title Start -->
					<div class="section-title">
						<h3 class="wow fadeInUp">Our Blog</h3>
						<h2 class="text-anime">Latest News</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">
					<!-- Blog Item Start -->
					<div class="blog-item wow fadeInUp" data-wow-delay="0.25s">
						<div class="post-featured-image">
							<figure class="image-anime">
								<img src="{{ asset('assets/img/blog-3.png') }}" alt="">
							</figure>
						</div>

						<div class="post-item-body">
							<div class="post-meta">
								<ul>
									<li><a href="#"><i class="fa-regular fa-calendar-days"></i> 09 July 2025</a></li>
								</ul>
							</div>
							<h2><a href="#">Azure Power Secures $500M Financing for Expansion</a></h2>

							<div class="btn-readmore">
								<a href="#" class="btn-default">Read More</a>
							</div>
						</div>
					</div>
					<!-- Blog Item End -->
				</div>

				<div class="col-lg-4">
					<!-- Blog Item Start -->
					<div class="blog-item wow fadeInUp" data-wow-delay="0.5s">
						<div class="post-featured-image">
							<figure class="image-anime">
								<img src="{{ asset('assets/img/blog-1.png') }}" alt="">
							</figure>
						</div>

						<div class="post-item-body">
						<div class="post-meta">
								<ul>
									<li><a href="#"><i class="fa-regular fa-calendar-days"></i> 08 July 2025</a></li>
								</ul>
							</div>
							<h2><a href="#">The Future of Solar Technology: What's Next?</a></h2>

							<div class="btn-readmore">
								<a href="#" class="btn-default">Read More</a>
							</div>
						</div>
					</div>
					<!-- Blog Item End -->
				</div>

				<div class="col-lg-4">
					<!-- Blog Item Start -->
					<div class="blog-item wow fadeInUp" data-wow-delay="0.75s">
						<div class="post-featured-image">
							<figure class="image-anime">
								<img src="{{ asset('assets/img/blog-2.png') }}" alt="">
							</figure>
						</div>

						<div class="post-item-body">
														<div class="post-meta">
								<ul>
									<li><a href="#"><i class="fa-regular fa-calendar-days"></i> 07 July 2025</a></li>
								</ul>
							</div>
							<h2><a href="#">Transforming Rural India Through Solar Energy</a></h2>

							<div class="btn-readmore">
								<a href="#" class="btn-default">Read More</a>
							</div>
						</div>
					</div>
					<!-- Blog Item End -->
				</div>
			</div>
			<div class="container text-center mt-5"><a href="#" class="btn-default align-items-center text-center">Explore Projects</a></div>
		</div>
	</div>
	<!-- Latest News Section End -->


	<!-- Solar Calculator Section Start -->
	<div class="solar-calculator">
		<div class="form-color-bg"></div>
		<div class="container" style="position: relative; z-index: 9999;">
			<div class="row">
				<div class="col-md-12">
					<!-- Solar Calculator Form Start -->
					<div class="wow fadeInUp">
						<div class="row">
							<div class="col-lg-8 pr-100">
								<!-- Section Title Start -->
									<h1>Safe Environment</h1>
									<h2>Creating lasting value through innovation and evolving solutions.</h2>
									<p>We harness cutting-edge technology and forward-thinking strategies to deliver impactful, long-term energy solutions.</p>
								<!-- Section Title End -->
								 <div class="row">
									<div class="col-lg-4">
										<div class="form-item">
											<div class="form-icon">
												<img src="{{ asset('assets/img/Environmental-Responsibility-icon.png') }}" />
												</div>
											<div class="form-content">
												<h3>Environmental Responsibility</h3>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-item">
											<div class="form-icon">
												<img src="{{ asset('assets/img/Custom-Energy-Solutions-icon.png') }}" />
												</div>
											<div class="form-content">
												<h3>Custom Energy Solutions</h3>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-item">
											<div class="form-icon">
												<img src="{{ asset('assets/img/Performance-Metrics-icon.png') }}" />
												</div>
											<div class="form-content">
												<h3>Performance Metrics</h3>
											</div>
										</div>
									</div>
								 </div>
							</div>

							<div class="col-lg-4 calculator-box wow fadeInUp">
								<!-- Solar Form Start -->
								 <div class="section-title">
									<h4>Request A Quote</h4>
								</div>
								<div class="solar-form">
									<form id="solarForm" action="#" method="POST" data-toggle="validator">
										<div class="row">
											<div class="form-group col-md-12 mb-3">
												<input type="text" name="name" class="form-control" id="name" placeholder="Full Name*" required >
												<div class="help-block with-errors"></div>
											</div>

											<div class="form-group col-md-12 mb-3">
												<input type="email" name ="email" class="form-control" id="email" placeholder="Email*" required >
												<div class="help-block with-errors"></div>
											</div>

											<div class="form-group col-md-12 mb-3">
												<input type="text" name="phone" class="form-control" id="phone" placeholder="Phone*" required >
												<div class="help-block with-errors"></div>
											</div>

											<div class="form-group col-md-12 mb-3">
												<input type="text" name="subject" class="form-control" id="subject" placeholder="Subject Of Message*" required >
												<div class="help-block with-errors"></div>
											</div>

											<div class="form-group col-md-12 mb-3">
												 <textarea name="comment" class="form-control">Enter text here...</textarea>
												<div class="help-block with-errors"></div>
											</div>

											<div class="col-md-12">
												<button type="submit" class="btn-default">Send Your Request</button>
												<div id="msgSubmit" class="h3 text-left hidden"></div>
											</div>
										</div>
									</form>
								</div>
								<!-- Solar Form End -->
							</div>
						</div>
					</div>
					<!-- Solar Calculator Form End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Solar Calculator Section End -->



</x-common-layout>
