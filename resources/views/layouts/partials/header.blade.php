	  <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="images/loader.svg" alt=""></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Magic Cursor Start -->
    <div id="magic-cursor">
        <div id="ball"></div>
    </div>
    <!-- Magic Cursor End -->

    	<!-- Topbar Section Start -->
	<div class="topbar wow fadeInUp">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<!-- Topbar Contact Information Start -->
					<div class="topbar-contact-info">
						<ul>
							<li><a href="mailto:ir@azurepower.com"><i class="fa-solid fa-envelope"></i> ir@azurepower.com</a></li>
							<li><a href="tel:+911244155755"><i class="fa-solid fa-phone"></i> +91 124-4155755</a></li>
						</ul>
					</div>
					<!-- Topbar Contact Information End -->
				</div>

				<div class="col-md-4">
					<!-- Topbar Social Links Start -->
					<div class="header-social-links">
						<ul>
							<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
						</ul>
					</div>
					<!-- Topbar Social Links End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Topbar Section End -->

    <!-- Header Start -->
	<header class="main-header">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container-fluid">
					<!-- Logo Start -->
					<a class="navbar-brand" href="index.html">
						<img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
					</a>
					<!-- Logo End -->

					<!-- Main Menu start -->
					<div class="collapse navbar-collapse main-menu">
						@include('layouts.partials.menu')
					</div>
					<!-- Main Menu End -->

					<div class="navbar-toggle"></div>
				</div>
			</nav>

			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->
