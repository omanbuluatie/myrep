<!DOCTYPE html>
<html lang="en">

<head>
	<title>Booking - Multipurpose Online Booking Theme</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Booking - Multipurpose Online Booking Theme">

	<!-- Dark mode -->
	<script type="text/javascript">
		var theme = localStorage.getItem('data-theme');
		var root = document.documentElement;
		if (theme === 'dark' && theme !== undefined) {
			root.classList.add('dark-mode');
		} else {
			root.classList.remove('dark-mode');
		}
	</script>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= asset('/front') ?>/assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@400;500;700&amp;display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="<?= asset('/front') ?>/assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?= asset('/front') ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="<?= asset('/front') ?>/assets/vendor/tiny-slider/tiny-slider.css">
	<link rel="stylesheet" type="text/css" href="<?= asset('/front') ?>/assets/vendor/choices/css/choices.min.css">
	<link rel="stylesheet" type="text/css" href="<?= asset('/front') ?>/assets/vendor/flatpickr/css/flatpickr.min.css">
	<link rel="stylesheet" type="text/css" href="<?= asset('/front') ?>/assets/vendor/glightbox/css/glightbox.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="<?= asset('/front') ?>/assets/css/style.css">

</head>

<body>

<!-- Header START -->
<header class="header-transparent">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-dark navbar-expand-xl">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="index.html">
				<img class="navbar-brand-item" src="<?= asset('/front') ?>/assets/images/logo-light.svg" alt="logo">
			</a>
			<!-- Logo END -->

      <!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto me-3 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button>

			<!-- Main navbar START -->
			<div class="navbar-collapse collapse" id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll mx-auto">

					<!-- Nav item Listing -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="listingMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listings</a>
						<ul class="dropdown-menu" aria-labelledby="listingMenu">
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Hotel</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="index.html">Hotel Home</a></li>
									<li> <a class="dropdown-item" href="index-hotel-chain.html">Hotel Chain</a></li>
									<li> <a class="dropdown-item" href="index-resort.html">Hotel Resort</a></li>
									<li> <a class="dropdown-item" href="hotel-grid.html">Hotel Grid</a></li>
									<li> <a class="dropdown-item" href="hotel-list.html">Hotel List</a></li>
									<li> <a class="dropdown-item" href="hotel-detail.html">Hotel Detail</a></li>
									<li> <a class="dropdown-item" href="room-detail.html">Room Detail</a></li>
									<li> <a class="dropdown-item" href="hotel-booking.html">Hotel Booking</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Flight</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="index-flight.html">Flight Home</a></li>
									<li> <a class="dropdown-item" href="flight-list.html">Flight List</a></li>
									<li> <a class="dropdown-item" href="flight-detail.html">Flight Detail</a></li>
									<li> <a class="dropdown-item" href="flight-booking.html">Flight Booking</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Tour</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="index-tour.html">Tour Home</a></li>
									<li> <a class="dropdown-item" href="tour-grid.html">Tour Grid</a></li>
									<li> <a class="dropdown-item" href="tour-detail.html">Tour Detail</a></li>
									<li> <a class="dropdown-item" href="tour-booking.html">Tour Booking</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Cab</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="index-cab.html">Cab Home</a></li>
									<li> <a class="dropdown-item" href="cab-list.html">Cab List</a></li>
									<li> <a class="dropdown-item" href="cab-detail.html">Cab Detail</a></li>
									<li> <a class="dropdown-item" href="cab-booking.html">Cab Booking</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Directory<span class="badge bg-success ms-1 smaller">New</span></a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="index-directory.html">Directory Home</a></li>
									<li> <a class="dropdown-item" href="directory-detail.html">Directory Detail</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Add Listing</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="join-us.html">Join us</a></li>
									<li> <a class="dropdown-item" href="add-listing.html">Add Listing</a></li>
									<li> <a class="dropdown-item" href="add-listing-minimal.html">Add Listing Minimal</a></li>
									<li> <a class="dropdown-item" href="listing-added.html">Listing Added</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Hero</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="hero-inline-form.html">Hero Inline Form</a></li>
									<li> <a class="dropdown-item" href="hero-multiple-search.html">Hero Multiple Search</a></li>
									<li> <a class="dropdown-item" href="hero-image-gallery.html">Hero Image Gallery</a></li>
									<li> <a class="dropdown-item" href="hero-split.html">Hero Split</a></li>
								</ul>
							</li>

							<li> <a class="dropdown-item" href="booking-confirm.html">Booking Confirmed</a></li>
							<li> <a class="dropdown-item" href="compare-listing.html">Compare Listing</a></li>
							<li> <a class="dropdown-item" href="offer-detail.html">Offer Detail</a></li>
						</ul>
					</li>

					<!-- Nav item Pages -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
						<ul class="dropdown-menu" aria-labelledby="pagesMenu">

							<li> <a class="dropdown-item" href="about.html">About</a></li>
							<li> <a class="dropdown-item" href="contact.html">Contact</a></li>
							<li> <a class="dropdown-item" href="contact-2.html">Contact 2</a></li>
							<li> <a class="dropdown-item" href="team.html">Our Team</a></li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Authentication</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="sign-in.html">Sign In</a></li>
									<li> <a class="dropdown-item" href="sign-up.html">Sign Up</a></li>
									<li> <a class="dropdown-item" href="forgot-password.html">Forgot Password</a></li>
									<li> <a class="dropdown-item" href="two-factor-auth.html">Two factor authentication</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Blog</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="blog.html">Blog</a></li>
									<li> <a class="dropdown-item" href="blog-detail.html">Blog Detail</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Help</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="help-center.html">Help Center</a></li>
									<li> <a class="dropdown-item" href="help-detail.html">Help Detail</a></li>
									<li> <a class="dropdown-item" href="privacy-policy.html">Privacy Policy</a></li>
									<li> <a class="dropdown-item" href="terms-of-service.html">Terms of Service</a></li>
								</ul>
							</li>

							<li> <a class="dropdown-item" href="pricing.html">Pricing</a></li>
							<li> <a class="dropdown-item" href="faq.html">FAQs</a></li>
							<li> <a class="dropdown-item" href="error.html">Error 404</a></li>
							<li> <a class="dropdown-item" href="coming-soon.html">Coming Soon</a></li>
						</ul>
					</li>

					<!-- Nav item Link -->
					<li class="nav-item"> <a class="nav-link" href="#">Contact us</a> </li>

					<!-- Nav item Link -->
					<li class="nav-item"> <a class="nav-link" href="#">About us</a> </li>

					<!-- Nav item link-->
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="advanceMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-ellipsis-h"></i>
						</a>
						<ul class="dropdown-menu min-w-auto" data-bs-popper="none">
							<li> 
								<a class="dropdown-item" href="https://support.webestica.com/" target="_blank">
									<i class="text-warning fa-fw bi bi-life-preserver me-2"></i>Support
								</a> 
							</li>
							<li> 
								<a class="dropdown-item" href="docs/index.html" target="_blank">
									<i class="text-danger fa-fw bi bi-card-text me-2"></i>Documentation
								</a> 
							</li>
							<li> <hr class="dropdown-divider"></li>
							<li> 
								<a class="dropdown-item" href="rtl/index.html" target="_blank">
									<i class="text-info fa-fw bi bi-toggle-off me-2"></i>RTL demo
								</a> 
							</li>
							<li> 
								<a class="dropdown-item" href="https://themes.getbootstrap.com/store/webestica/" target="_blank">
									<i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>Buy Booking!
								</a> 
							</li>
							<li> <hr class="dropdown-divider"></li>
							<li> 
								<a class="dropdown-item" href="docs/alerts.html" target="_blank">
									<i class="text-orange fa-fw bi bi-puzzle-fill me-2"></i>Components
								</a> 
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- Main navbar END -->

			<!-- Profile and Notification START -->
			<ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">

				<!-- Notification dropdown START -->
				<li class="nav-item dropdown ms-0 ms-md-3">
					<!-- Notification button -->
					<a class="nav-notification btn btn-light p-0 mb-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
						<i class="bi bi-bell fa-fw"></i>
					</a>
					<!-- Notification dote -->
					<span class="notif-badge animation-blink"></span>

					<!-- Notification dropdown menu START -->
					<div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md shadow-lg p-0">
						<div class="card bg-transparent">
							<!-- Card header -->
							<div class="card-header bg-transparent d-flex justify-content-between align-items-center border-bottom">
								<h6 class="m-0">Notifications <span class="badge bg-danger bg-opacity-10 text-danger ms-2">4 new</span></h6>
								<a class="small" href="#">Clear all</a>
							</div>

							<!-- Card body START -->
							<div class="card-body p-0">
								<ul class="list-group list-group-flush list-unstyled p-2">
									<!-- Notification item -->
									<li>
										<a href="#" class="list-group-item list-group-item-action rounded notif-unread border-0 mb-1 p-3">
											<h6 class="mb-2">New! Booking flights from New York ✈️</h6>
											<p class="mb-0 small">Find the flexible ticket on flights around the world. Start searching today</p>
											<span>Wednesday</span>
										</a>
									</li>
									<!-- Notification item -->
									<li>
										<a href="#" class="list-group-item list-group-item-action rounded border-0 mb-1 p-3">
											<h6 class="mb-2">Sunshine saving are here 🌞 save 30% or more on a stay</h6>
											<span>15 Nov 2022</span>
										</a>
									</li>
								</ul>
							</div>
							<!-- Card body END -->

							<!-- Card footer -->
							<div class="card-footer bg-transparent text-center border-top">
								<a href="#" class="btn btn-sm btn-link mb-0 p-0">See all incoming activity</a>
							</div>
						</div>
					</div>
					<!-- Notification dropdown menu END -->
				</li>
				<!-- Notification dropdown END -->

				<!-- Profile dropdown START -->
				<li class="nav-item ms-3 dropdown">
					<!-- Avatar -->
					<a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
						<img class="avatar-img rounded-2" src="<?= asset('/front') ?>/assets/images/avatar/01.jpg" alt="avatar">
					</a>

					<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
						<!-- Profile info -->
						<li class="px-3 mb-3">
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar me-3">
									<img class="avatar-img rounded-circle shadow" src="<?= asset('/front') ?>/assets/images/avatar/01.jpg" alt="avatar">
								</div>
								<div>
									<a class="h6 mt-2 mt-sm-0" href="#">Lori Ferguson</a>
									<p class="small m-0">example@gmail.com</p>
								</div>
							</div>
						</li>

						<!-- Links -->
						<li> <hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="#"><i class="bi bi-bookmark-check fa-fw me-2"></i>My Bookings</a></li>
						<li><a class="dropdown-item" href="#"><i class="bi bi-heart fa-fw me-2"></i>My Wishlist</a></li>
						<li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Settings</a></li>
						<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help Center</a></li>
						<li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
						<li> <hr class="dropdown-divider"></li>

						<!-- Dark mode switch START -->
						<li>
							<div class="modeswitch-wrap" id="darkModeSwitch">
								<div class="modeswitch-item">
									<div class="modeswitch-icon"></div>
								</div>
								<span>Dark mode</span>
							</div>
						</li> 
						<!-- Dark mode switch END -->
					</ul>
				</li>
				<!-- Profile dropdown END -->
			</ul>
			<!-- Profile and Notification START -->

		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Main banner START -->
<section class="position-relative py-8 py-lg-9" style="background-image:url(<?= asset('/front') ?>/assets/images/bg/20.jpg); background-position: center left; background-size: cover;">
	<!-- Background dark overlay -->
	<div class="bg-overlay bg-dark opacity-8"></div>
	<div class="container z-index-9 position-relative">
		<div class="row py-sm-5">
			<!-- Title -->
			<div class="col-xl-8 m-auto text-center">
				<h6 class="text-white fw-normal mb-3">Discover & Connect With Great Places Around The World</h6>
				<h1 class="display-4 text-white mb-0">Let's Discover
					<span class="position-relative z-index-9 d-block">London
							<!-- SVG START -->
							<span class="position-absolute top-50 start-50 translate-middle z-index-n1 d-none d-md-block mt-4">
								<svg width="390.5px" height="21.5px" viewBox="0 0 445.5 21.5">
									<path class="fill-primary opacity-7" d="M409.9,2.6c-9.7-0.6-19.5-1-29.2-1.5c-3.2-0.2-6.4-0.2-9.7-0.3c-7-0.2-14-0.4-20.9-0.5 c-3.9-0.1-7.8-0.2-11.7-0.3c-1.1,0-2.3,0-3.4,0c-2.5,0-5.1,0-7.6,0c-11.5,0-23,0-34.5,0c-2.7,0-5.5,0.1-8.2,0.1 c-6.8,0.1-13.6,0.2-20.3,0.3c-7.7,0.1-15.3,0.1-23,0.3c-12.4,0.3-24.8,0.6-37.1,0.9c-7.2,0.2-14.3,0.3-21.5,0.6 c-12.3,0.5-24.7,1-37,1.5c-6.7,0.3-13.5,0.5-20.2,0.9C112.7,5.3,99.9,6,87.1,6.7C80.3,7.1,73.5,7.4,66.7,8 C54,9.1,41.3,10.1,28.5,11.2c-2.7,0.2-5.5,0.5-8.2,0.7c-5.5,0.5-11,1.2-16.4,1.8c-0.3,0-0.7,0.1-1,0.1c-0.7,0.2-1.2,0.5-1.7,1 C0.4,15.6,0,16.6,0,17.6c0,1,0.4,2,1.1,2.7c0.7,0.7,1.8,1.2,2.7,1.1c6.6-0.7,13.2-1.5,19.8-2.1c6.1-0.5,12.3-1,18.4-1.6 c6.7-0.6,13.4-1.1,20.1-1.7c2.7-0.2,5.4-0.5,8.1-0.7c10.4-0.6,20.9-1.1,31.3-1.7c6.5-0.4,13-0.7,19.5-1.1c2.7-0.1,5.4-0.3,8.1-0.4 c10.3-0.4,20.7-0.8,31-1.2c6.3-0.2,12.5-0.5,18.8-0.7c2.1-0.1,4.2-0.2,6.3-0.2c11.2-0.3,22.3-0.5,33.5-0.8 c6.2-0.1,12.5-0.3,18.7-0.4c2.2-0.1,4.4-0.1,6.7-0.1c11.5-0.1,23-0.2,34.6-0.4c7.2-0.1,14.4-0.1,21.6-0.1c12.2,0,24.5,0.1,36.7,0.1 c2.4,0,4.8,0.1,7.2,0.2c6.8,0.2,13.5,0.4,20.3,0.6c5.1,0.2,10.1,0.3,15.2,0.4c3.6,0.1,7.2,0.4,10.8,0.6c10.6,0.6,21.1,1.2,31.7,1.8 c2.7,0.2,5.4,0.4,8,0.6c2.9,0.2,5.8,0.4,8.6,0.7c0.4,0.1,0.9,0.2,1.3,0.3c1.1,0.2,2.2,0.2,3.2-0.4c0.9-0.5,1.6-1.5,1.9-2.5 c0.6-2.2-0.7-4.5-2.9-5.2c-1.9-0.5-3.9-0.7-5.9-0.9c-1.4-0.1-2.7-0.3-4.1-0.4c-2.6-0.3-5.2-0.4-7.9-0.6 C419.7,3.1,414.8,2.9,409.9,2.6z"/>
								</svg>
							</span>
							<!-- SVG END -->
						</span>
				</h1>
			</div>

			<!-- Search START -->
			<div class="col-xl-10 mx-auto">
				<div class="bg-blur bg-white bg-opacity-10 border border-light border-opacity-25 rounded-3 p-4 mt-5">
					<!-- Form START -->
					<form class="row g-3 justify-content-center align-items-center">
						<div class="col-lg-5">
							<!-- Input -->
							<div class="form-input-dropdown position-relative">
								<input class="form-control form-control-lg me-1 ps-5" type="text" data-bs-toggle="dropdown" placeholder="What are you looking for..">
								<!-- dropdown button -->
								<ul class="dropdown-menu input-dropdown shadow rounded-0 rounded-bottom w-100">
									<li><a class="dropdown-item" href="#"><i class="bi bi-building fa-fw text-primary me-2"></i>Hotels</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-egg-fried fa-fw text-primary me-2"></i>Restaurants</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-airplane fa-fw text-primary me-2"></i>Flights</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-cup-straw fa-fw text-primary me-2"></i>Bars</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-tv fa-fw text-primary me-2"></i>Arts & Entertainment</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-car-front fa-fw text-primary me-2"></i>Automotive</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-emoji-kiss fa-fw text-primary me-2"></i>Beauty & Spa</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-fire fa-fw text-primary me-2"></i>Nightlife</a></li>
								</ul>
								<!-- Icon -->
								<span class="position-absolute top-50 start-0 translate-middle ps-5"><i class="bi bi-search fs-5"></i></span>
							</div>
						</div>

						<div class="col-lg-5">
							<!-- Choices -->
							<div class="form-mix-icon-input form-size-lg">
								<select class="form-select js-choice" data-search-enabled="true">
									<option value="">Search hotel</option>
									<option>San Jacinto, USA</option>
									<option>North Dakota, Canada</option>
									<option>West Virginia, Paris</option>
								</select>
								<!-- Icons -->
								<span class="position-absolute top-50 start-0 translate-middle ps-5"><i class="bi bi-geo-alt fs-5"></i></span>
								<a href="#" class="h6 mb-0 position-absolute top-50 end-0 translate-middle pe-1">
									<i class="fa-solid fa-crosshairs"></i>
								</a>
							</div>
						</div>

						<div class="col-lg-2 d-grid">
							<!-- Search -->
							<a class="btn btn-lg btn-primary mb-0" href="#">Search</a>
						</div>
					</form>
					<!-- Form END -->
				</div>
			</div>	
			<!-- Search END -->

		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Main banner END -->

<!-- =======================
Category START -->
<Section>
	<div class="container">
		<div class="row g-4 align-items-center">

			<!-- Title -->
			<div class="col-lg-2">
				<h4>Browse by Category</h4>
				<a href="#" class="h6 fw-normal text-primary mb-0">View all <i class="bi bi-arrow-right"></i></a>
			</div>

			<!-- Category START -->
			<div class="col-lg-10">
				<!-- Slider START -->
				<div class="tiny-slider arrow-round arrow-xs arrow-dark">
					<div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-edge="2" data-dots="false" data-items-xl="5" data-items-lg="3" data-items-sm="2" data-items-xs="1">
						<!-- Slider item -->
						<div>
							<div class="card card-body bg-light text-center align-items-center">
								<!-- Icon -->
								<div class="icon-xl bg-mode rounded-circle mb-3">
									<figure>
										<svg width="47.9px" height="47.3px" viewBox="0 0 47.9 47.3" style="enable-background:new 0 0 47.9 47.3;" xml:space="preserve">
											<path class="fill-mode-inverse" d="M37.5,20.3c-2.3,1.5-3.6,4.1-3.3,6.9l-10,6.4l-10-6.4c0.3-2.7-1-5.4-3.3-6.9c-1.5-1-3.3-1.5-5.2-1.3 c-3.2,0.3-5.6,3.2-5.3,6.4c0,0.4,0.1,0.7,0.2,1.1c0.5,1.8,1.6,3.3,3.1,4.3c2.2,1.6,5.2,1.8,7.6,0.5l7.8,5.5l-7.4,4.7 c-1.4,0.9-1.9,2.8-1,4.3c0,0,0,0.1,0.1,0.1c1,1.4,2.9,1.8,4.3,0.8c0,0,0,0,0.1,0l8.9-6.3l8.9,6.3c1.4,1,3.3,0.7,4.3-0.7 c1-1.4,0.7-3.3-0.7-4.3c-0.1,0-0.1-0.1-0.2-0.1l-7.4-4.7l7.8-5.5c2.4,1.3,5.4,1.1,7.6-0.5c3.3-2.2,4.3-6.3,2.4-9.2 S40.8,18.1,37.5,20.3L37.5,20.3z M14.4,45.4c-0.7,0.5-1.7,0.3-2.1-0.4c-0.5-0.7-0.3-1.6,0.4-2.1c0,0,0,0,0,0l7.9-5.1l2.2,1.6 L14.4,45.4z M36.4,43.9c0.2,0.8-0.4,1.6-1.2,1.8c-0.4,0.1-0.8,0-1.2-0.2L11.9,29.7c-0.3-0.2-0.6-0.2-0.9,0c-1.9,1.3-4.4,1.2-6.3-0.2 c-1.2-0.8-2.1-2-2.5-3.4c-0.7-2.3,0.6-4.6,2.8-5.3c0.3-0.1,0.6-0.1,0.9-0.2c1.4-0.2,2.9,0.2,4.1,1c2,1.2,3,3.5,2.5,5.7 c-0.1,0.3,0.1,0.7,0.3,0.9l22.9,14.7C36.1,43.1,36.4,43.5,36.4,43.9z M43.7,29.5c-1.8,1.4-4.3,1.4-6.3,0.2c-0.3-0.2-0.6-0.2-0.9,0 l-8.7,6.2l-2.1-1.3l9.9-6.3c0.3-0.2,0.4-0.5,0.3-0.9c-0.4-2.2,0.6-4.5,2.5-5.7c2.5-1.7,5.8-1.3,7.2,0.8 C47.1,24.6,46.2,27.8,43.7,29.5L43.7,29.5z"/>
											<path class="fill-primary" d="M32.9,27l2.3-11.3c3.9-0.3,6.8-3.8,6.5-7.7c-0.3-3.7-3.4-6.5-7.1-6.5c-1.6,0-3.2,0.5-4.4,1.5 c-2.2-3.2-6.6-4.1-9.9-1.9c-0.7,0.5-1.4,1.1-1.9,1.9c-1.3-1-2.8-1.5-4.4-1.5c-3.9,0-7.1,3.2-7.1,7.1c0,3.7,2.8,6.8,6.5,7.1L15.5,27 l1.6-0.3l-0.4-2.2h15.2l-0.4,2.2L32.9,27z M29.1,22.9l0.7-4.6l-1.6-0.2l-0.7,4.9H25v-8.7h-1.6v8.7h-2.5l-0.7-4.9l-1.6,0.2l0.7,4.6 h-3l-1.6-8.1c-0.1-0.4-0.4-0.6-0.8-0.6c-3.1,0-5.5-2.5-5.5-5.5s2.5-5.5,5.5-5.5c1.5,0,3,0.6,4,1.7c0.3,0.3,0.8,0.3,1.1,0 c0.1-0.1,0.1-0.1,0.2-0.2c1.3-2.7,4.6-3.9,7.4-2.6c1.1,0.5,2,1.4,2.6,2.6c0.2,0.4,0.7,0.6,1.1,0.4c0.1,0,0.2-0.1,0.2-0.2 c1-1.1,2.5-1.7,4-1.7c3.1,0,5.5,2.5,5.5,5.5s-2.5,5.5-5.5,5.5c-0.4,0-0.7,0.3-0.8,0.6l-1.6,8.1H29.1z"/>
										</svg>
									</figure>
								</div>
								<h6 class="mb-0"><a href="#" class="stretched-link">Restaurant</a></h6>
							</div>
						</div>

						<!-- Slider item -->
						<div>
							<div class="card card-body bg-light text-center align-items-center">
								<!-- Icon -->
								<div class="icon-xl bg-mode rounded-circle mb-3">
									<figure>
										<svg width="43.4px" height="51px" viewBox="0 0 43.4 51" style="enable-background:new 0 0 43.4 51;" xml:space="preserve">
											<path class="fill-mode-inverse" d="M10.5,45.4L10.5,45.4c0.8,0,1.4-0.6,1.4-1.4V31.4c0-0.7-0.6-1.4-1.4-1.4h-0.1c-0.7,0-1.4,0.6-1.4,1.4v12.7 C9.2,44.8,9.8,45.4,10.5,45.4z M10.3,31.4c0-0.1,0.1-0.2,0.2-0.2h0.1c0.1,0,0.2,0.1,0.2,0.2v12.7c0,0.1-0.1,0.2-0.2,0.2h-0.1 c-0.1,0-0.2-0.1-0.2-0.2V31.4z"/>
											<path class="fill-mode-inverse" d="M14.9,45.4L14.9,45.4c0.8,0,1.4-0.6,1.4-1.4V31.4c0-0.7-0.6-1.4-1.4-1.4h-0.1c-0.7,0-1.4,0.6-1.4,1.4v12.7 C13.5,44.8,14.1,45.4,14.9,45.4z M14.7,31.4c0-0.1,0.1-0.2,0.2-0.2h0.1c0.1,0,0.2,0.1,0.2,0.2v12.7c0,0.1-0.1,0.2-0.2,0.2h-0.1 c-0.1,0-0.2-0.1-0.2-0.2V31.4z"/>
											<path class="fill-primary" d="M2.1,47.6c0,1.9,1.5,3.4,3.4,3.4h10.1c1.9,0,3.4-1.5,3.4-3.4v-3h2.2c1.9,0,3.4-1.5,3.4-3.4v-9.5 c0-1.9-1.5-3.4-3.4-3.4H19v-0.9c0.8-0.4,1.4-1.3,1.4-2.3c0-1.1-0.7-2-1.7-2.4c0,0,0-0.1,0-0.1c0-1.2-1-2.1-2.1-2.1 c-0.2,0-0.4,0-0.6,0.1c-0.6-1.4-2-2.3-3.6-2.3c-1.5,0-2.8,0.8-3.4,2c-0.7-0.5-1.6-0.8-2.5-0.8c-1.6,0-3,0.9-3.7,2.3 c-1.5,0.2-2.6,1.4-2.6,3c0,1.6,1.3,3,3,3v-1.1c-1,0-1.9-0.8-1.9-1.9S2,22.6,3,22.6h0.4l0.2-0.3c0.6-1.2,1.7-1.9,2.9-1.9 c0.8,0,1.5,0.3,2,0.8c-0.1,0.3-0.1,0.6-0.1,0.9h1.1c0-1.6,1.3-2.8,2.8-2.8c1.2,0,2.2,0.7,2.7,1.8c-0.4,0.4-0.6,0.9-0.6,1.5 c0,0.5,0.2,1,0.6,1.4l0.8-0.7c-0.2-0.2-0.3-0.4-0.3-0.7c0-0.3,0.2-0.6,0.4-0.8c0.2-0.1,0.4-0.2,0.6-0.2c0.6,0,1,0.5,1,1 c0,0.1,0,0.2-0.1,0.4l-0.2,0.7l0.7,0.1c0.7,0.1,1.3,0.7,1.3,1.5c0,0.6-0.3,1.1-0.8,1.3H8.9c-1.2,0-2.2,1-2.2,2.2l0,7 c0,0.2-0.1,0.3-0.3,0.3H6.2c-0.2,0-0.3-0.1-0.3-0.3v-3.5c0-0.8-0.6-1.4-1.4-1.4c-0.8,0-1.4,0.6-1.4,1.4v6.8c0,0.3-0.2,0.5-0.5,0.5 S2,39.1,2,38.9V28.3H0.9v10.6c0,0.7,0.5,1.4,1.2,1.6C2.1,40.4,2.1,47.6,2.1,47.6z M21.2,29.3c1.3,0,2.3,1,2.3,2.3v9.5 c0,1.3-1,2.3-2.3,2.3H19v-1h2.1c0.7,0,1.4-0.6,1.4-1.4v-9.4c0-0.7-0.6-1.4-1.4-1.4H19v-1L21.2,29.3L21.2,29.3z M19,41.3v-9.9h2.1 c0.1,0,0.2,0.1,0.2,0.2v9.4c0,0.1-0.1,0.2-0.2,0.2L19,41.3L19,41.3z M4.2,38.9v-6.8c0-0.2,0.1-0.3,0.3-0.3c0.2,0,0.3,0.1,0.3,0.3 v3.5c0,0.8,0.6,1.4,1.4,1.4h0.2c0.8,0,1.4-0.6,1.4-1.4l0-7c0-0.6,0.5-1.1,1.1-1.1h9v0.7h0v3.2h0v9.9h0v3.2h0v2h-1.7v1.1h1.7 c0,1.2-1,2.2-2.3,2.2H5.5c-1.2,0-2.2-1-2.3-2.2h11.4v-1.1H3.2v-6.1C3.8,40.1,4.2,39.5,4.2,38.9z"/>
											<path class="fill-mode-inverse" d="M43.3,43.1L43.3,43.1l0-0.9h0V27.5h0c0-4.2-1-8.1-2.7-11.2l-1.2-2.1c-1.3-2.4-2-5.5-2.1-8.8l0-5.2h-5.7l0,5.2 c0,3.3-0.7,6.4-2.1,8.8l-1.2,2.1c-1.5,2.6-2.4,5.9-2.6,9.5l0,0v3.5c0,0.1,0,0.2-0.1,0.3v15.1h0l0,2.6c0,2.1,1.4,3.8,3.1,3.8l4.7,0 l6.6,0c1.7,0,3.1-1.7,3.1-3.8l0-2.4l0,0V43.1z M32.9,1.2h3.4l0,1.3h-3.4L32.9,1.2z M32.9,3.6h3.4l0,0.9h-3.4L32.9,3.6z M29.3,17.1 L29.3,17.1c0.1-0.1,0.2-0.3,0.3-0.4c0.1-0.2,0.2-0.5,0.3-0.7h0l0.7-1.3c1.4-2.5,2.1-5.6,2.2-9h3.4c0.1,3.3,0.8,6.5,2.2,9l0.7,1.3 h0c0.1,0.1,0.2,0.3,0.2,0.5c0,0,0,0,0,0c0,0.1,0.1,0.1,0.1,0.2c0.2,0.2,0.3,0.4,0.3,0.6c1.5,2.8,2.3,6.4,2.3,10.2H27.6l0,0 c0,0,0,0,0,0c-0.2,0-0.3-0.1-0.4-0.2C27,27.1,27,27,27,26.8l0,0C27.1,23.2,27.9,19.8,29.3,17.1z M42.2,43.1c0,0.2-0.1,0.3-0.2,0.3 l0,0H42c-0.1,0-0.2,0-0.3,0H31.2v1.1h11.1l0,2.6c0,1.5-0.9,2.7-2,2.7l-6.6,0l-4.7,0c-1.1,0-2-1.2-2-2.7l0-2.6h2.5v-1.1h-2.5l0-1.1 c0-0.3,0-0.5,0-0.7c0-0.1,0-0.1,0-0.2c0-0.2,0-0.3,0-0.4l0-9.7c0-0.4-0.1-0.9,0-1.3c0-0.1,0-0.2,0-0.2c0-0.1,0-0.1,0-0.2l0-1h0.2 c0,0,0,0,0.1,0h1.6c0,0,0,0,0.1,0h13.4l0,1.2h-2.4v1.1h2.4l0,10c0,0,0,0.1,0,0.1V43.1z"/>
										</svg>
									</figure>
								</div>
								<h6 class="mb-0"><a href="#" class="stretched-link">Bars</a></h6>
							</div>
						</div>

						<!-- Slider item -->
						<div>
							<div class="card card-body bg-light text-center align-items-center">
								<!-- Icon -->
								<div class="icon-xl bg-mode rounded-circle mb-3">
									<figure>
										<svg width="43.7px" height="38.7px" viewBox="0 0 43.7 38.7" style="enable-background:new 0 0 43.7 38.7;" xml:space="preserve">
											<path class="fill-mode-inverse" d="M43.2,12.5c-0.5-0.4-1.1-0.5-1.6-0.3c-0.5,0.2-0.9,0.7-1.1,1.1l-1.4,4.1l-2.1,3.1L36.2,21l0.1-0.2c0.4-0.9,0-1.9-0.8-2.3 c-0.8-0.4-1.7-0.2-2.2,0.5L30,23.1l-3.7,1.7c-2,0.9-3.4,2.9-3.7,5.1c0,0,0,0.1,0,0.1l0,3.7c-0.3,0-0.5,0.1-0.7,0.3 c-0.2-0.1-0.4-0.2-0.7-0.3l0-3.7c0,0,0-0.1,0-0.1c-0.3-2.2-1.7-4.1-3.7-5.1l-3.7-1.7L10.5,19C10,18.4,9,18.2,8.3,18.5 C7.4,19,7.1,20,7.4,20.9L7.5,21l-0.7-0.4l-2.1-3.1l-1.4-4.1c-0.2-0.5-0.6-0.9-1.1-1.1C1.6,12,1,12.1,0.6,12.5 c-0.5,0.4-0.7,1-0.5,1.6l1.1,4.9C1.4,20.4,2,21.7,2.9,23l1.3,1.9c0.9,1.3,2.1,2.4,3.5,3.3c0.1,0.1,0.3,0.2,0.4,0.3 c0.3,0.2,0.7,0.1,0.9-0.2c0.2-0.3,0.1-0.7-0.2-0.9c-0.1-0.1-0.3-0.2-0.4-0.3c-1.2-0.7-2.3-1.7-3.1-2.9l-1.3-1.9 c-0.8-1.1-1.3-2.3-1.6-3.6l-1.1-4.9c0-0.2,0.1-0.3,0.1-0.3c0,0,0.2-0.1,0.3-0.1c0.1,0,0.3,0.2,0.3,0.4L3.5,18c0,0.1,0,0.1,0.1,0.2 l2.2,3.3c0.1,0.1,0.1,0.1,0.2,0.2L8.4,23l0.7,1.4c0.1,0.2,0.3,0.3,0.6,0.3c0.1,0,0.2,0,0.3-0.1c0.3-0.2,0.4-0.5,0.3-0.9l-0.8-1.5 l-0.8-2c-0.1-0.3,0-0.6,0.3-0.7c0.2-0.1,0.5,0,0.7,0.2l3.4,4.2c0.1,0.1,0.1,0.1,0.2,0.2l3.8,1.7c1.6,0.7,2.8,2.3,3,4l0,3.6h-6.5 c-0.1-1.6-0.3-2.6-0.8-3.2c-0.4-0.5-0.8-0.9-1.3-1.4c-0.3-0.2-0.7-0.2-0.9,0.1c-0.2,0.3-0.2,0.7,0.1,0.9c0.4,0.4,0.8,0.8,1.1,1.2 c0.1,0.2,0.4,0.8,0.5,2.4H12c-0.8,0-1.5,0.7-1.5,1.5v2.3c0,0.8,0.7,1.5,1.5,1.5h9c0.3,0,0.6-0.1,0.9-0.3c0.2,0.2,0.6,0.3,0.9,0.3 h9c0.8,0,1.5-0.7,1.5-1.5v-2.3c0-0.8-0.7-1.5-1.5-1.5h-0.1c0.1-1.7,0.4-2.3,0.5-2.4c1-1.4,2.7-2.4,3.9-3.1 c1.4-0.8,2.6-1.9,3.5-3.3l1.3-1.9c0.9-1.2,1.5-2.6,1.8-4.1l1.1-4.9C43.8,13.5,43.6,12.9,43.2,12.5z M21.2,37.4 c0,0.1-0.1,0.2-0.2,0.2h-9c-0.1,0-0.2-0.1-0.2-0.2v-2.3c0-0.1,0.1-0.2,0.2-0.2h9c0.1,0,0.2,0.1,0.2,0.2V37.4z M31.7,34.9 c0.1,0,0.2,0.1,0.2,0.2v2.3c0,0.1-0.1,0.2-0.2,0.2h-9c-0.1,0-0.2-0.1-0.2-0.2v-2.3c0-0.1,0.1-0.2,0.2-0.2H31.7z M42.5,13.8 l-1.1,4.9c-0.3,1.3-0.8,2.5-1.6,3.6l-1.3,1.9c-0.8,1.2-1.9,2.2-3.1,2.9c-1.3,0.7-3.1,1.9-4.2,3.4c-0.5,0.6-0.7,1.7-0.8,3.2h-6.5 l0-3.6c0.2-1.8,1.4-3.3,3-4l3.8-1.7c0.1,0,0.2-0.1,0.2-0.2l3.4-4.2c0.2-0.2,0.5-0.3,0.7-0.2c0.3,0.1,0.4,0.4,0.3,0.7l-0.8,2 l-0.8,1.5c-0.2,0.3,0,0.7,0.3,0.9c0.1,0.1,0.2,0.1,0.3,0.1c0.2,0,0.4-0.1,0.6-0.3l0.7-1.4l2.4-1.4c0.1,0,0.1-0.1,0.2-0.2l2.2-3.3 c0,0,0.1-0.1,0.1-0.2l1.4-4.2c0-0.1,0.2-0.3,0.3-0.4c0.2-0.1,0.3,0,0.3,0.1C42.4,13.5,42.5,13.6,42.5,13.8z"/>
											<path class="fill-primary" d="M33.6,6.5c-0.2-0.2-0.4-0.2-0.7-0.1c-0.4,0.1-1.4,0.4-2.6,0.9c-0.2-2-0.6-3.5-0.7-3.9 c-0.1-0.2-0.2-0.4-0.5-0.5c-0.2-0.1-0.5,0-0.7,0.1c-0.4,0.3-1.5,1.2-2.8,2.5c-1.3-2.7-2.8-4.7-3.2-5.2C22.3,0.1,22.1,0,21.9,0 c-0.2,0-0.4,0.1-0.6,0.3c-0.4,0.5-1.9,2.5-3.2,5.2c-1.3-1.3-2.4-2.2-2.8-2.5c-0.2-0.1-0.5-0.2-0.7-0.1c-0.2,0.1-0.4,0.3-0.5,0.5 c-0.1,0.5-0.5,2-0.7,3.9c-1.2-0.5-2.2-0.8-2.6-0.9c-0.2-0.1-0.5,0-0.7,0.1C9.9,6.7,9.8,6.9,9.8,7.2c0.1,0.9,0.4,5.5,3.2,9.5 c2.3,3.4,6.4,3.8,8.1,3.8c0.4,0,0.6,0,0.7,0c0,0,0,0,0,0c0,0,0,0,0,0c0.1,0,0.4,0,0.7,0c1.7,0,5.8-0.4,8.1-3.8 c2.8-4,3.1-8.6,3.2-9.5C33.9,6.9,33.8,6.7,33.6,6.5z M28.6,4.5c0.2,0.8,0.4,1.9,0.5,3.3c-0.5,0.2-1.1,0.5-1.6,0.8c0,0,0,0,0,0 c-0.2,0.1-0.3,0.2-0.5,0.3c0,0,0,0,0,0c-0.2-0.7-0.5-1.5-0.7-2.1C27.2,5.7,28,5,28.6,4.5z M15.1,4.5c0.6,0.5,1.5,1.3,2.4,2.3 c-0.3,0.7-0.5,1.4-0.7,2.1c0,0,0,0,0,0c-0.2-0.1-0.3-0.2-0.5-0.3c0,0,0,0,0,0c-0.6-0.3-1.1-0.6-1.6-0.8 C14.7,6.4,14.9,5.2,15.1,4.5z M14,15.9c-2.1-3.1-2.7-6.5-2.9-8.1c0.9,0.3,2.5,0.9,4.3,1.8c0.1,0,0.1,0.1,0.2,0.1 c0,0,0.1,0,0.1,0.1c0.1,0,0.2,0.1,0.3,0.1c0,0,0.1,0,0.1,0c0.1,0.1,0.2,0.1,0.3,0.2c0,0,0,0,0,0c0,0.1,0,0.2-0.1,0.2c0,0,0,0,0,0 c0,0.1,0,0.2,0,0.2c0,0,0,0,0,0c0,0.1,0,0.2,0,0.2c0,0,0,0,0,0c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.3c0,0,0,0.1,0,0.1 c0,0.1,0,0.2,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0,0.2,0,0.3c0,0,0,0,0,0c0,0.1,0,0.2,0,0.3c0,0,0,0.1,0,0.1c0,0.1,0,0.1,0,0.2 c0,0,0,0.1,0,0.1c0,0.1,0,0.2,0,0.3c0,0,0,0,0,0c0,0.1,0,0.2,0,0.3c0,0,0,0.1,0,0.1c0,0.1,0,0.1,0,0.2c0,0,0,0.1,0,0.1 c0,0.1,0,0.2,0.1,0.3c0,0,0,0,0,0c0,0.1,0,0.2,0.1,0.3c0,0,0,0,0,0.1c0,0.1,0,0.1,0.1,0.2c0,0,0,0,0,0.1c0,0.1,0.1,0.2,0.1,0.2 c0,0,0,0,0,0c0,0.1,0.1,0.2,0.1,0.2c0,0,0,0,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0,0,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0,0,0,0 c0,0.1,0.1,0.2,0.1,0.2c0,0,0,0,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0,0,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0,0,0,0 c0,0.1,0.1,0.1,0.1,0.2c0,0,0,0,0,0c0,0.1,0.1,0.1,0.1,0.2c0,0,0,0,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0,0,0,0 c0,0.1,0.1,0.1,0.2,0.2c0,0,0,0,0,0c0,0,0.1,0.1,0.1,0.1c0,0,0,0,0,0c0.1,0.1,0.2,0.2,0.3,0.3c0,0,0,0,0,0c0,0,0.1,0.1,0.1,0.1 c0,0,0,0,0,0c0.1,0.1,0.2,0.2,0.3,0.3c0,0,0,0,0,0c0,0,0.1,0.1,0.1,0.1c0,0,0,0,0,0c0.1,0.1,0.2,0.2,0.3,0.3c0,0,0,0,0,0 c0,0,0.1,0.1,0.1,0.1c0,0,0,0,0,0C17.9,18.9,15.5,18.1,14,15.9z M29.7,15.9c-1.5,2.2-3.9,2.9-5.6,3.1c0.7-0.6,1.5-1.3,2.1-2.3 c0.2-0.3,0.1-0.7-0.2-0.9c-0.3-0.2-0.7-0.1-0.9,0.2c-1.1,1.6-2.6,2.6-3.3,3c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0 c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0-0.1,0c0,0,0,0,0,0c0,0,0,0-0.1,0c0,0,0,0,0,0 c0,0,0,0-0.1,0c0,0,0,0,0,0c0,0,0,0-0.1,0c0,0,0,0,0,0c0,0,0,0-0.1,0c0,0,0,0,0,0c0,0,0,0-0.1,0c0,0,0,0,0,0c0,0,0,0-0.1,0 c0,0,0,0,0,0c0,0,0,0-0.1-0.1c0,0,0,0,0,0c0,0,0,0-0.1-0.1c0,0,0,0,0,0c0,0-0.1,0-0.1-0.1c0,0,0,0,0,0c0,0-0.1,0-0.1-0.1 c0,0,0,0,0,0c0,0-0.1,0-0.1-0.1c0,0,0,0,0,0c0,0-0.1,0-0.1-0.1c0,0,0,0,0,0c0,0-0.1,0-0.1-0.1c0,0,0,0,0,0c0,0-0.1-0.1-0.1-0.1 c0,0,0,0,0,0c0,0-0.1-0.1-0.1-0.1c0,0,0,0,0,0c-0.3-0.3-0.7-0.6-1-1c0,0,0,0,0,0c0,0-0.1-0.1-0.1-0.1c0,0,0,0,0,0 c0,0-0.1-0.1-0.1-0.1c0,0,0,0,0,0c0,0-0.1-0.1-0.1-0.1c0,0,0,0,0,0c0,0,0-0.1-0.1-0.1c0,0,0,0,0,0c0,0,0-0.1-0.1-0.1c0,0,0,0,0,0 c0,0,0-0.1-0.1-0.1c0,0,0,0,0,0c0,0,0-0.1-0.1-0.1c0,0,0,0,0,0c0,0,0-0.1-0.1-0.1c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0,0-0.1 c0,0,0-0.1-0.1-0.1c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1c0,0,0,0,0-0.1 c0,0,0-0.1,0-0.1c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1c0,0,0,0,0-0.1 c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1 c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1 c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1 c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0,0,0-0.1c0-0.1,0-0.1,0-0.2c0-0.1,0-0.3,0.1-0.4 c0-0.1,0-0.1,0-0.2c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0.1-0.3c0,0,0-0.1,0-0.1c0-0.1,0-0.2,0.1-0.3c0,0,0,0,0-0.1 c0.2-1,0.6-2.1,1-3.1c0,0,0,0,0,0c1-2.4,2.3-4.3,3-5.2c0.7,0.9,2,2.8,3,5.2c0,0,0,0,0,0c0.4,1,0.8,2.1,1,3.1c0,0,0,0,0,0.1 c0,0.1,0,0.2,0.1,0.3c0,0,0,0.1,0,0.1c0,0.1,0,0.2,0.1,0.3c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4 c0.1,0.7,0.1,1.4,0,2.1c-0.1,0.3,0.2,0.7,0.5,0.7c0.3,0.1,0.7-0.2,0.7-0.5c0.1-0.8,0.2-1.6,0-2.5c0-0.1,0-0.2,0-0.3c0,0,0,0,0,0 c0-0.1,0-0.2,0-0.2c0,0,0,0,0,0c0-0.1,0-0.2,0-0.2c0,0,0,0,0,0c0-0.1,0-0.2-0.1-0.2c0,0,0,0,0,0c0.1-0.1,0.2-0.1,0.3-0.2 c0,0,0.1,0,0.1,0c0.1,0,0.2-0.1,0.3-0.1c0,0,0.1,0,0.1-0.1c0.1,0,0.2-0.1,0.2-0.1c1.8-0.9,3.4-1.5,4.3-1.8 C32.4,9.4,31.8,12.9,29.7,15.9z"/>
										</svg>
									</figure>
								</div>
								<h6 class="mb-0"><a href="#" class="stretched-link">Spa</a></h6>
							</div>
						</div>

						<!-- Slider item -->
						<div>
							<div class="card card-body bg-light text-center align-items-center">
								<!-- Icon -->
								<div class="icon-xl bg-mode rounded-circle mb-3">
									<figure>
										<svg width="44px" height="44px" viewBox="0 0 44 44" style="enable-background:new 0 0 44 44;" xml:space="preserve">
											<path class="fill-primary" d="M20.6,12.1c-6.3,0-11.4,5.1-11.4,11.4s5.1,11.4,11.4,11.4s11.4-5.1,11.4-11.4S26.8,12.1,20.6,12.1z M20.6,33.4 c-5.5,0-9.9-4.5-9.9-9.9s4.5-9.9,9.9-9.9s9.9,4.5,9.9,9.9S26.1,33.4,20.6,33.4z"/>
											<path class="fill-primary" d="M20.6,19.2c-2.3,0-4.3,1.9-4.3,4.3c0,2.3,1.9,4.3,4.3,4.3s4.3-1.9,4.3-4.3S22.9,19.2,20.6,19.2z M20.6,26.3 c-1.6,0-2.8-1.3-2.8-2.8c0-1.6,1.3-2.8,2.8-2.8c1.6,0,2.8,1.3,2.8,2.8S22.1,26.3,20.6,26.3z"/>
											<path class="fill-mode-inverse" d="M20.6,18.5c1.2,0,2.1-1,2.1-2.1s-1-2.1-2.1-2.1c-1.2,0-2.1,1-2.1,2.1S19.4,18.5,20.6,18.5z M20.6,15.6 c0.4,0,0.7,0.3,0.7,0.7S21,17,20.6,17c-0.4,0-0.7-0.3-0.7-0.7S20.2,15.6,20.6,15.6z"/>
											<path class="fill-mode-inverse" d="M20.6,28.4c-1.2,0-2.1,1-2.1,2.1c0,1.2,1,2.1,2.1,2.1c1.2,0,2.1-1,2.1-2.1C22.7,29.3,21.8,28.4,20.6,28.4z M20.6,31.2 c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7S21,31.2,20.6,31.2z"/>
											<path class="fill-mode-inverse" d="M13.5,21.3c-1.2,0-2.1,1-2.1,2.1c0,1.2,1,2.1,2.1,2.1s2.1-1,2.1-2.1C15.6,22.2,14.7,21.3,13.5,21.3z M13.5,24.1 c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7s0.7,0.3,0.7,0.7S13.9,24.1,13.5,24.1z"/>
											<path class="fill-mode-inverse" d="M25.5,23.4c0,1.2,1,2.1,2.1,2.1c1.2,0,2.1-1,2.1-2.1c0-1.2-1-2.1-2.1-2.1C26.5,21.3,25.5,22.2,25.5,23.4z M27.7,22.7 c0.4,0,0.7,0.3,0.7,0.7s-0.3,0.7-0.7,0.7S27,23.8,27,23.4S27.3,22.7,27.7,22.7z"/>
											<path class="fill-mode-inverse" d="M41.2,11.3l0.5-2c0.1-0.6,0.1-1.1-0.2-1.6l-1.6-2.7c-0.2-0.3-0.4-0.6-0.7-0.7l-2.7-1.6c-0.5-0.3-1.1-0.4-1.6-0.2l-2,0.5 C29.5,1,25.9,0,22,0c-0.4,0-0.7,0.3-0.7,0.7v2.1h-0.7C9.2,2.8,0,12.1,0,23.4S9.2,44,20.6,44s20.6-9.2,20.6-20.6v-0.7h2.1 c0.4,0,0.7-0.3,0.7-0.7C44,18.1,43,14.5,41.2,11.3z M35.1,3.7c0.2,0,0.4,0,0.5,0.1l2.7,1.6c0.1,0.1,0.2,0.1,0.2,0.2l1.6,2.7 c0.1,0.2,0.1,0.4,0.1,0.5l-0.2,0.7c-1.5-2.3-3.5-4.2-5.8-5.8L35.1,3.7z M20.6,42.6C10,42.6,1.4,34,1.4,23.4S10,4.3,20.6,4.3h0.7 v2.1c0,0.4,0.3,0.7,0.7,0.7c8.2,0,14.9,6.7,14.9,14.9c0,0.4,0.3,0.7,0.7,0.7h2.1v0.7C39.7,34,31.1,42.6,20.6,42.6z M40.5,21.3h-2.1 c-0.4-8.4-7.2-15.2-15.6-15.6V3.5V1.4c10.8,0.4,19.5,9.1,19.9,19.9H40.5z"/>
											<path class="fill-primary" d="M6.4,23.4H5C5,32,12,39,20.6,39v-1.4C12.8,37.6,6.4,31.2,6.4,23.4z"/>
										</svg>
									</figure>
								</div>
								<h6 class="mb-0"><a href="#" class="stretched-link">Automotive</a></h6>
							</div>
						</div>

						<!-- Slider item -->
						<div>
							<div class="card card-body bg-light text-center align-items-center">
								<!-- Icon -->
								<div class="icon-xl bg-mode rounded-circle mb-3">
									<figure>
										<svg width="42.7px" height="42.7px" viewBox="0 0 42.7 42.7" style="enable-background:new 0 0 42.7 42.7;" xml:space="preserve">
											<path class="fill-mode-inverse" d="M41.2,6.7L22,0.1c-0.5-0.2-0.9-0.2-1.4,0L1.4,6.7C0.6,7,0,7.8,0,8.8v4.8c0,1.2,1,2.1,2.1,2.1v2.1 c0,0.9,0.6,1.7,1.4,2v14.5c-0.8,0.3-1.4,1.1-1.4,2v1.4c-1.2,0-2.1,1-2.1,2.1v1.4c0,0.8,0.6,1.4,1.4,1.4h39.8c0.8,0,1.4-0.6,1.4-1.4 v-1.4c0-1.2-1-2.1-2.1-2.1v-1.4c0-0.9-0.6-1.7-1.4-2V19.8c0.8-0.3,1.4-1.1,1.4-2v-2.1c1.2,0,2.1-1,2.1-2.1V8.8 C42.7,7.8,42.1,7,41.2,6.7z M9.2,15.6v2.1c0,0.4-0.3,0.7-0.7,0.7H4.3c-0.4,0-0.7-0.3-0.7-0.7v-2.1H9.2z M34.8,34.1V19.9h2.8v14.2 H34.8z M33.4,19.8v14.4H9.2V19.8c0.8-0.3,1.4-1.1,1.4-2v-2.1H32v2.1C32,18.7,32.6,19.5,33.4,19.8z M7.8,19.9v14.2H5V19.9H7.8z  M41.2,39.8v1.4H1.4v-1.4c0-0.4,0.3-0.7,0.7-0.7h38.4C40.9,39.1,41.2,39.4,41.2,39.8z M3.6,37.7v-1.4c0-0.4,0.3-0.7,0.7-0.7h34.2 c0.4,0,0.7,0.3,0.7,0.7v1.4H3.6z M39.1,17.8c0,0.4-0.3,0.7-0.7,0.7h-4.3c-0.4,0-0.7-0.3-0.7-0.7v-2.1h5.7V17.8z M41.2,13.5 c0,0.4-0.3,0.7-0.7,0.7H2.1c-0.4,0-0.7-0.3-0.7-0.7l0-4.8c0-0.3,0.2-0.6,0.5-0.7l19.2-6.6c0.1,0,0.2,0,0.2,0c0.1,0,0.2,0,0.2,0 l19.2,6.6c0.3,0.1,0.5,0.4,0.5,0.7V13.5z"/>
											<path class="fill-primary" d="M38.4,8.7L22,3c-0.4-0.2-0.9-0.2-1.4,0L4.2,8.7C3.3,9.1,2.7,10,2.9,11c0.2,1,1,1.7,2,1.8h32.9 c1,0,1.9-0.8,2-1.8C40,10,39.4,9.1,38.4,8.7L38.4,8.7z M37.8,11.4H4.9c-0.4,0-0.6-0.3-0.6-0.7c0-0.3,0.2-0.5,0.4-0.6l16.4-5.8 c0.1,0,0.3,0,0.4,0L38,10.1c0.3,0.1,0.4,0.4,0.4,0.6c0,0.2-0.1,0.3-0.2,0.5S37.9,11.4,37.8,11.4z"/>
											<path class="fill-primary" d="M27,17.1H15.6c-0.8,0-1.4,0.6-1.4,1.4v12.8c0,0.8,0.6,1.4,1.4,1.4H27c0.8,0,1.4-0.6,1.4-1.4V18.5 C28.4,17.7,27.8,17.1,27,17.1z M27,18.5v6.8l-1.6-1.6c-0.3-0.3-0.7-0.3-1,0L21,27.1l-1.3-1.3c-0.3-0.3-0.7-0.3-1,0l-3.1,3.1V18.5 L27,18.5z M15.6,31.3v-0.4l3.6-3.6l1.3,1.3l1.1,1.1c0.3,0.3,0.7,0.3,1,0c0.3-0.3,0.3-0.7,0-1L22,28.1l2.9-2.9l2.1,2.1v4L15.6,31.3z "/>
										</svg>
									</figure>
								</div>
								<h6 class="mb-0"><a href="#" class="stretched-link">Museums</a></h6>
							</div>
						</div>

						<!-- Slider item -->
						<div>
							<div class="card card-body bg-light text-center align-items-center">
								<!-- Icon -->
								<div class="icon-xl bg-mode rounded-circle mb-3">
									<figure>
										<svg width="46.6px" height="53.3px" viewBox="0 0 46.6 53.3" style="enable-background:new 0 0 46.6 53.3;" xml:space="preserve">
											<path class="fill-primary" d="M14.8,5h1.8c0,0,0,0,0,0c-0.1-0.2-0.2-0.4-0.2-0.6V2.7c0-0.5,0.4-0.9,0.9-0.9h12.1c0.5,0,0.9,0.4,0.9,0.9 v1.7c0,0.2-0.1,0.4-0.2,0.6c0,0,0,0,0,0h1.9c0,0,0,0,0,0c0-0.2,0.1-0.4,0.1-0.6V2.7c0-1.4-1.2-2.6-2.6-2.6H17.3 c-1.4,0-2.6,1.2-2.6,2.6v1.7C14.7,4.6,14.7,4.8,14.8,5C14.8,5,14.8,5,14.8,5z"/>
											<path class="fill-mode-inverse" d="M44,20.5l-5.1,0c-0.3,0-0.6,0.1-0.9,0.2c0,0,0,0,0,0V7.5c0-1.4-1.2-2.6-2.6-2.6h-2.2c0,0,0,0,0,0c0,0-0.1,0-0.1,0H14.8 c0,0-0.1,0-0.1,0c0,0,0,0,0,0h-3.5c-1.4,0-2.6,1.2-2.6,2.6v13.1c0,0,0,0,0,0c-0.3-0.1-0.6-0.2-0.9-0.2l-5.1,0 c-1.4,0-2.6,1.1-2.6,2.4c-0.1,1.2,0.7,2.2,1.7,2.6c0,0,0,0,0,0V30c0,2.1,1.5,3.9,3.5,4.2c0,0,0,0,0,0c0.4,2,2.1,3.5,4.2,3.5H19 c0,0,0,0,0,0v5.2c0,0,0,0,0,0h-1.5c0,0,0,0,0,0l-1.7,5.2c0,0,0,0,0,0h-4.6c-1.4,0-2.6,1.2-2.6,2.6v2.6c0,0,0,0,0,0H38 c0,0,0,0,0,0v-2.6c0-1.4-1.2-2.6-2.6-2.6h-4.6c0,0,0,0,0,0l-1.7-5.2c0,0,0,0,0,0h-1.5c0,0,0,0,0,0v-5.2c0,0,0,0,0,0h9.5 c2.1,0,3.9-1.5,4.2-3.5c0,0,0,0,0,0c2-0.4,3.5-2.1,3.5-4.2v-4.5c0,0,0,0,0,0c1-0.4,1.8-1.4,1.7-2.6C46.5,21.5,45.4,20.5,44,20.5z  M19.9,6.6h6.9c0,0,0,0,0,0v0.9c0,0.5-0.4,0.9-0.9,0.9h-5.2c-0.5,0-0.9-0.4-0.9-0.9L19.9,6.6C19.9,6.6,19.9,6.6,19.9,6.6z  M10.4,7.5c0-0.5,0.4-0.9,0.9-0.9h6.9c0,0,0,0,0,0v0.9c0,1.4,1.2,2.6,2.6,2.6h5.2c1.4,0,2.6-1.2,2.6-2.6V6.6c0,0,0,0,0,0h6.9 c0.5,0,0.9,0.4,0.9,0.9v19.9c0,0,0,0,0,0H10.4c0,0,0,0,0,0V7.5z M5.2,32.4C5.2,32.4,5.2,32.4,5.2,32.4c-1-0.4-1.7-1.3-1.7-2.4 v-4.3c0,0,0,0,0,0h1.7c0,0,0,0,0,0V32.4z M2.6,23.9c-0.5,0-0.9-0.4-0.9-0.9c0-0.5,0.4-0.8,0.9-0.8h5.1c0.5,0,0.9,0.3,0.9,0.8 c0,0.5-0.4,0.9-0.9,0.9H2.6z M8.6,25.5v1.9c0,0,0,0,0,0H6.9c0,0,0,0,0,0v-1.7c0,0,0,0,0,0h0.9C8.1,25.6,8.4,25.6,8.6,25.5 C8.6,25.5,8.6,25.5,8.6,25.5z M27.9,44.6l1.1,3.4c0,0,0,0,0,0h-1.4c0,0,0,0,0,0v1.7c0,0,0,0,0,0h7.8c0.5,0,0.9,0.4,0.9,0.9v0.9 c0,0,0,0,0,0H10.4c0,0,0,0,0,0v-0.9c0-0.5,0.4-0.9,0.9-0.9h14.7c0,0,0,0,0,0v-1.7c0,0,0,0,0,0h-8.3c0,0,0,0,0,0l1.1-3.4 c0,0,0,0,0,0h3.7c0,0,0,0,0,0v-1.7c0,0,0,0,0,0h-1.7c0,0,0,0,0,0v-5.2c0,0,0,0,0,0h5.2c0,0,0,0,0,0v5.2c0,0,0,0,0,0h-1.7 c0,0,0,0,0,0v1.7c0,0,0,0,0,0L27.9,44.6C27.9,44.6,27.9,44.6,27.9,44.6z M39.7,33.4c0,1.4-1.2,2.6-2.6,2.6H9.5 c-1.4,0-2.6-1.2-2.6-2.6v-4.3c0,0,0,0,0,0h32.8c0,0,0,0,0,0V33.4z M39.7,27.4H38c0,0,0,0,0,0v-1.9c0,0,0,0,0,0 c0.3,0.1,0.6,0.2,0.9,0.2h0.9c0,0,0,0,0,0L39.7,27.4C39.7,27.4,39.7,27.4,39.7,27.4z M43.2,30c0,1.1-0.7,2.1-1.7,2.4c0,0,0,0,0,0 v-6.7c0,0,0,0,0,0h1.7c0,0,0,0,0,0V30z M44,23.9h-5.1c-0.5,0-0.9-0.3-0.9-0.8c0-0.5,0.4-0.9,0.9-0.9l5.1,0c0.5,0,0.9,0.3,0.9,0.8 C44.9,23.5,44.5,23.9,44,23.9z"/>
											<path class="fill-primary" d="M31.1,11.8H15.6c-2,0-3.6,1.7-3.5,3.7c0.1,1.8,1.6,3.2,3.4,3.2H31c2,0,3.6-1.7,3.5-3.7 C34.4,13.3,32.9,11.8,31.1,11.8z M31.1,17l-15.5,0c-0.9,0-1.7-0.6-1.8-1.5c-0.1-1,0.7-1.9,1.7-1.9H31c0.9,0,1.7,0.6,1.8,1.5 C32.9,16.1,32.1,17,31.1,17z"/>
										</svg>
									</figure>
								</div>
								<h6 class="mb-0"><a href="#" class="stretched-link">Salon</a></h6>
							</div>
						</div>
					</div>	
				</div>
			</div>
			<!-- Category END -->
		</div>
	</div>
</Section>
<!-- =======================
Category END -->

<!-- =======================
Listing START -->
<section class="pt-0 pt-sm-5">
	<div class="container">
		<!-- Title -->
		<div class="row mb-4 mb-sm-5">
			<div class="col-12 text-center">
				<h2 class="mb-0">Great places to Explore</h2>
				<p class="mb-0">Book your hotel with us and don't forget to grab an awesome hotel deal to save massive on your stay.</p>
			</div>	
		</div>

		<div class="row g-4">
			<!-- Card item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card shadow h-100">
					<div class="position-relative">
						<!-- Image -->
						<img src="<?= asset('/front') ?>/assets/images/category/directory/01.jpg" class="card-img-top" alt="Card image">
						<!-- Overlay -->
						<div class="card-img-overlay p-3 z-index-1">
							<div class="badge text-bg-dark"><i class="fa-solid fa-building-columns fa-fw text-warning"></i> Museum</div>
							<div class="badge text-bg-success">Open</div>
						</div>
					</div>	

					<!-- Card body START -->
					<div class="card-body">
						<!-- Title -->
						<h5 class="card-title me-2"><a href="directory-detail.html">Portland New Art Museum</a></h5>

						<!-- Address and Contact -->
						<ul class="list-group list-group-borderless mb-0">
							<li class="list-group-item small pb-0">
								<i class="bi bi-pin-map-fill fa-fw h6 small mb-0"></i> W Century Blvd, Los Angeles
							</li>
							<li class="list-group-item small pb-0">
								<i class="bi bi-telephone-fill fa-fw h6 small mb-0"></i> +(125) 548 996
							</li>
						</ul>
					</div>
					<!-- Card body END -->

					<!-- Card footer START-->
					<div class="card-footer border-top">
						<!-- Buttons -->
						<div class="d-flex justify-content-between align-items-center">
							<a href="directory-detail.html" class="btn btn-link p-0 mb-0">View detail<i class="bi bi-arrow-right ms-1"></i></a>
							<a href="#" class="h6 mb-0 z-index-2"><i class="fa-regular fa-heart"></i></a>
						</div>
					</div>
				</div>
			</div>

			<!-- Card item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card shadow h-100">
					<div class="position-relative">
						<!-- Image -->
						<img src="<?= asset('/front') ?>/assets/images/category/directory/02.jpg" class="card-img-top" alt="Card image">
						<!-- Overlay -->
						<div class="card-img-overlay p-3 z-index-1">
							<div class="badge text-bg-dark"><i class="fa-solid fa-bag-shopping fa-fw text-warning"></i> Shopping</div>
							<div class="badge text-bg-success">Open</div>
						</div>
					</div>	

					<!-- Card body START -->
					<div class="card-body">
						<div class="badge bg-danger bg-opacity-10 text-danger mb-2">Recommended</div>
						<!-- Title -->
						<h5 class="card-title me-2"><a href="directory-detail.html">JP Shopping Mall in California</a></h5>

						<!-- Content -->
						<p class="mb-0">Starts at <span class="text-success">$449</span> for 1 person</p>
					</div>
					<!-- Card body END -->

					<!-- Card footer START-->
					<div class="card-footer border-top">
						<!-- Buttons -->
						<div class="d-flex justify-content-between align-items-center">
							<a href="directory-detail.html" class="btn btn-link p-0 mb-0">View detail<i class="bi bi-arrow-right ms-1"></i></a>
							<a href="#" class="h6 mb-0 z-index-2"><i class="fa-solid fa-heart text-danger"></i></a>
						</div>
					</div>
				</div>
			</div>

			<!-- Card item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card shadow h-100">
					<div class="position-relative">
						<!-- Image -->
						<img src="<?= asset('/front') ?>/assets/images/category/hotel/4by3/02.jpg" class="card-img-top" alt="Card image">
						<!-- Overlay -->
						<div class="card-img-overlay p-3 z-index-1">
							<div class="badge text-bg-dark"><i class="fa-solid fa-hotel fa-fw text-warning"></i> Hotel</div>
							<div class="badge text-bg-success">Open</div>
						</div>
					</div>	

					<!-- Card body START -->
					<div class="card-body">
						<!-- Title -->
						<h5 class="card-title me-2"><a href="directory-detail.html">Courtyard by Marriott New York</a></h5>

						<!-- Address and Contact -->
						<ul class="list-group list-group-borderless mb-0">
							<li class="list-group-item small pb-0">
								<i class="bi bi-pin-map-fill fa-fw h6 small mb-0"></i> W Century Blvd, Los Angeles
							</li>
							<li class="list-group-item small pb-0">
								<i class="bi bi-telephone-fill fa-fw h6 small mb-0"></i> +(125) 548 996
							</li>
						</ul>
					</div>
					<!-- Card body END -->

					<!-- Card footer START-->
					<div class="card-footer border-top">
						<!-- Buttons -->
						<div class="d-flex justify-content-between align-items-center">
							<a href="directory-detail.html" class="btn btn-link p-0 mb-0">View detail<i class="bi bi-arrow-right ms-1"></i></a>
							<a href="#" class="h6 mb-0 z-index-2"><i class="fa-regular fa-heart"></i></a>
						</div>
					</div>
				</div>
			</div>

			<!-- Card item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card shadow h-100">
					<div class="position-relative">
						<!-- Image -->
						<img src="<?= asset('/front') ?>/assets/images/category/directory/03.jpg" class="card-img-top" alt="Card image">
						<!-- Overlay -->
						<div class="card-img-overlay p-3 z-index-1">
							<div class="badge text-bg-dark"><i class="fa-solid fa-spa fa-fw text-warning"></i> Spa</div>
							<div class="badge text-bg-danger">Closed</div>
						</div>
					</div>	

					<!-- Card body START -->
					<div class="card-body">
						<div class="badge bg-danger bg-opacity-10 text-danger mb-2">Recommended</div>
						<!-- Title -->
						<h5 class="card-title me-2"><a href="directory-detail.html">Emperor Resort & Spa</a></h5>

						<!-- Content -->
						<p class="mb-0">Starts at <span class="text-success">$350</span> for 1 person</p>
					</div>
					<!-- Card body END -->

					<!-- Card footer START-->
					<div class="card-footer border-top">
						<!-- Buttons -->
						<div class="d-flex justify-content-between align-items-center">
							<a href="directory-detail.html" class="btn btn-link p-0 mb-0">View detail<i class="bi bi-arrow-right ms-1"></i></a>
							<a href="#" class="h6 mb-0 z-index-2"><i class="fa-regular fa-heart"></i></a>
						</div>
					</div>
				</div>
			</div>

			<!-- Card item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card shadow h-100">
					<div class="position-relative">
						<!-- Image -->
						<img src="<?= asset('/front') ?>/assets/images/category/directory/04.jpg" class="card-img-top" alt="Card image">
						<!-- Overlay -->
						<div class="card-img-overlay p-3 z-index-1">
							<div class="badge text-bg-dark"><i class="fa-solid fa-dumbbell fa-fw text-warning"></i> Gym</div>
							<div class="badge text-bg-success">Open</div>
						</div>
					</div>	

					<!-- Card body START -->
					<div class="card-body">
						<!-- Title -->
						<h5 class="card-title me-2"><a href="directory-detail.html">Phoenix Power Gym</a></h5>

						<!-- Address and Contact -->
						<ul class="list-group list-group-borderless mb-0">
							<li class="list-group-item small pb-0">
								<i class="bi bi-pin-map-fill fa-fw h6 small mb-0"></i> W Century Blvd, Los Angeles
							</li>
							<li class="list-group-item small pb-0">
								<i class="bi bi-telephone-fill fa-fw h6 small mb-0"></i> +(125) 548 996
							</li>
						</ul>
					</div>
					<!-- Card body END -->

					<!-- Card footer START-->
					<div class="card-footer border-top">
						<!-- Buttons -->
						<div class="d-flex justify-content-between align-items-center">
							<a href="directory-detail.html" class="btn btn-link p-0 mb-0">View detail<i class="bi bi-arrow-right ms-1"></i></a>
							<a href="#" class="h6 mb-0 z-index-2"><i class="fa-solid fa-heart text-danger"></i></a>
						</div>
					</div>
				</div>
			</div>

			<!-- Card item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card shadow h-100">
					<div class="position-relative">
						<!-- Image -->
						<img src="<?= asset('/front') ?>/assets/images/category/hotel/4by3/08.jpg" class="card-img-top" alt="Card image">
						<!-- Overlay -->
						<div class="card-img-overlay p-3 z-index-1">
							<div class="badge text-bg-dark"><i class="fa-solid fa-hotel fa-fw text-warning"></i> Hotel</div>
							<div class="badge text-bg-success">Open</div>
						</div>
					</div>	

					<!-- Card body START -->
					<div class="card-body">
						<!-- Title -->
						<h5 class="card-title me-2"><a href="directory-detail.html">Park Plaza Lodge Hotel</a></h5>

						<!-- Address and Contact -->
						<ul class="list-group list-group-borderless mb-0">
							<li class="list-group-item small pb-0">
								<i class="bi bi-pin-map-fill fa-fw h6 small mb-0"></i> W Century Blvd, Los Angeles
							</li>
							<li class="list-group-item small pb-0">
								<i class="bi bi-telephone-fill fa-fw h6 small mb-0"></i> +(125) 548 996
							</li>
						</ul>
					</div>
					<!-- Card body END -->

					<!-- Card footer START-->
					<div class="card-footer border-top">
						<!-- Buttons -->
						<div class="d-flex justify-content-between align-items-center">
							<a href="directory-detail.html" class="btn btn-link p-0 mb-0">View detail<i class="bi bi-arrow-right ms-1"></i></a>
							<a href="#" class="h6 mb-0 z-index-2"><i class="fa-regular fa-heart"></i></a>
						</div>
					</div>
				</div>
			</div>

			<!-- Card item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card shadow h-100">
					<div class="position-relative">
						<!-- Image -->
						<img src="<?= asset('/front') ?>/assets/images/category/directory/05.jpg" class="card-img-top" alt="Card image">
						<!-- Overlay -->
						<div class="card-img-overlay p-3 z-index-1">
							<div class="badge text-bg-dark"><i class="fa-solid fa-car fa-fw text-warning"></i> Automotive</div>
							<div class="badge text-bg-success">Open</div>
						</div>
					</div>	

					<!-- Card body START -->
					<div class="card-body">
						<div class="badge bg-danger bg-opacity-10 text-danger mb-2">Recommended</div>
						<!-- Title -->
						<h5 class="card-title me-2"><a href="directory-detail.html">Car Service & Repair</a></h5>

						<!-- Content -->
						<p class="mb-0">Starts at <span class="text-success">$599</span> for 1 person</p>
					</div>
					<!-- Card body END -->

					<!-- Card footer START-->
					<div class="card-footer border-top">
						<!-- Buttons -->
						<div class="d-flex justify-content-between align-items-center">
							<a href="directory-detail.html" class="btn btn-link p-0 mb-0">View detail<i class="bi bi-arrow-right ms-1"></i></a>
							<a href="#" class="h6 mb-0 z-index-2"><i class="fa-regular fa-heart"></i></a>
						</div>
					</div>
				</div>
			</div>

			<!-- Card item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card shadow h-100">
					<div class="position-relative">
						<!-- Image -->
						<img src="<?= asset('/front') ?>/assets/images/category/directory/06.jpg" class="card-img-top" alt="Card image">
						<!-- Overlay -->
						<div class="card-img-overlay p-3 z-index-1">
							<div class="badge text-bg-dark"><i class="fa-solid fa-champagne-glasses fa-fw text-warning"></i> Restaurant</div>
							<div class="badge text-bg-danger">Closed</div>
						</div>
					</div>	

					<!-- Card body START -->
					<div class="card-body">
						<!-- Title -->
						<h5 class="card-title me-2"><a href="directory-detail.html">El Torero Restaurant & Bar</a></h5>

						<!-- Address and Contact -->
						<ul class="list-group list-group-borderless mb-0">
							<li class="list-group-item small pb-0">
								<i class="bi bi-pin-map-fill fa-fw h6 small mb-0"></i> W Century Blvd, Los Angeles
							</li>
							<li class="list-group-item small pb-0">
								<i class="bi bi-telephone-fill fa-fw h6 small mb-0"></i> +(125) 548 996
							</li>
						</ul>
					</div>
					<!-- Card body END -->

					<!-- Card footer START-->
					<div class="card-footer border-top">
						<!-- Buttons -->
						<div class="d-flex justify-content-between align-items-center">
							<a href="directory-detail.html" class="btn btn-link p-0 mb-0">View detail<i class="bi bi-arrow-right ms-1"></i></a>
							<a href="#" class="h6 mb-0 z-index-2"><i class="fa-regular fa-heart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Listing END -->

<!-- =======================
Offer action box START -->
<section class="pt-0 pt-sm-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Card -->
				<div class="card bg-dark p-3">
					<div class="card-body border border-2 border-dashed border-white rounded position-relative">
						<!-- Scissor Svg -->
						<figure class="position-absolute top-0 start-0 mt-n3 ms-3">
							<svg class="pt-1" width="30.1px" height="23.4px" viewBox="0 0 30.1 23.4" style="enable-background:new 0 0 30.1 23.4;" xml:space="preserve">
								<path class="fill-white" d="M30.1,4.4c0,0-1.9-1.6-3.4-0.7c-1.2,0.7-8.9,4.5-12.3,6.2L9.6,7.2c0.5-0.9,0.6-2,0.3-3C9.6,2.8,8.6,1.6,7.2,0.8 C4.7-0.6,1.7-0.1,0.5,2C0,3-0.1,4,0.2,5.1c0.4,1.3,1.3,2.6,2.7,3.4C3.5,8.8,4.1,9,4.8,9.1v0c0,0,0,0,0,0c0.1,0,0.1,0,0.2,0 c4,0.6,6,1.7,7,2.5c-1,0.8-3,1.9-7,2.5c-0.1,0-0.1,0-0.2,0c0,0,0,0,0,0l0,0c-0.6,0.1-1.3,0.3-1.9,0.7c-1.4,0.8-2.3,2-2.7,3.4 c-0.3,1-0.2,2.1,0.3,3.1c1.2,2.1,4.2,2.7,6.7,1.2c1.4-0.8,2.3-2,2.7-3.4c0.3-1,0.2-2.1-0.3-3l4.8-2.8c3.4,1.7,11.1,5.6,12.3,6.2 c1.6,0.9,3.4-0.7,3.4-0.7l-12.7-7.3L30.1,4.4z M7.5,6C7,7,5.4,7.2,4,6.4C3.2,5.9,2.6,5.2,2.4,4.5C2.3,4.1,2.3,3.6,2.6,3.2 c0.5-1,2.2-1.1,3.5-0.3C6.9,3.3,7.4,4,7.6,4.8C7.7,5.1,7.8,5.6,7.5,6z M7.6,18.6c-0.2,0.8-0.8,1.5-1.6,1.9c-1.4,0.8-3,0.6-3.5-0.3 c-0.3-0.4-0.2-0.9-0.1-1.3C2.6,18.1,3.2,17.4,4,17c1.4-0.8,3-0.6,3.5,0.3C7.8,17.8,7.7,18.2,7.6,18.6z"/>
							</svg>
						</figure>
						<!-- Scissor Svg -->
						<figure class="position-absolute bottom-0 end-0 mb-n3 me-3">
							<svg class="pb-1" width="30.1px" height="23.4px" viewBox="0 0 30.1 23.4" style="enable-background:new 0 0 30.1 23.4;" xml:space="preserve">
								<path class="fill-white" d="M0,19c0,0,1.9,1.6,3.4,0.7c1.2-0.7,8.8-4.6,12.2-6.3l4.8,2.7c-0.5,0.9-0.6,2-0.3,3c0.4,1.3,1.3,2.5,2.7,3.3 c2.5,1.4,5.5,0.9,6.7-1.3c0.5-0.9,0.6-2,0.3-3.1c-0.4-1.3-1.3-2.5-2.7-3.3c-0.6-0.3-1.3-0.6-1.9-0.7l0,0c0,0,0,0,0,0 c-0.1,0-0.1,0-0.2,0c-4-0.6-6-1.7-7-2.5c1-0.8,3-1.9,7-2.5c0.1,0,0.1,0,0.2,0c0,0,0,0,0,0l0,0C26,9,26.6,8.7,27.2,8.4 c1.4-0.8,2.3-2.1,2.7-3.4c0.3-1,0.2-2.1-0.4-3.1c-1.2-2.1-4.2-2.6-6.7-1.2c-1.4,0.8-2.3,2.1-2.7,3.4c-0.3,1-0.2,2.1,0.3,3L15.7,10 C12.3,8.3,4.6,4.5,3.4,3.8C1.8,2.9,0,4.5,0,4.5l12.7,7.2L0,19z M22.6,17.3c0.5-1,2.1-1.1,3.5-0.4c0.8,0.4,1.4,1.2,1.6,1.9 c0.1,0.3,0.2,0.8-0.1,1.3c-0.5,1-2.1,1.1-3.5,0.4c-0.8-0.5-1.4-1.2-1.6-1.9C22.4,18.2,22.4,17.7,22.6,17.3z M22.4,4.7 C22.6,4,23.2,3.3,24,2.8c1.3-0.8,3-0.6,3.5,0.3c0.3,0.4,0.2,0.9,0.1,1.3c-0.2,0.8-0.8,1.5-1.6,1.9c-1.3,0.8-3,0.6-3.5-0.3 C22.3,5.6,22.3,5.1,22.4,4.7z"/>
							</svg>
						</figure>

						<!-- Title -->
						<h2 class="text-white">Get an Extra 45% Discount Code</h2>
						<!-- Content -->
						<div class="d-flex justify-content-between flex-wrap">
							<h4 class="fw-light text-white mb-0">On all restaurant deals</h4>
							<a href="#" class="text-warning fs-4 stretched-link">Use Code: BOOK56</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Offer action box END -->

<!-- =======================
Action box START -->
<section class="my-md-5" style="background-image:url(<?= asset('/front') ?>/assets/images/about/11.jpg); background-position: center left; background-size: cover;">
	<div class="container">
		<div class="row py-lg-7">
			<div class="col-lg-6 ms-auto">
				<h5 class="badge text-bg-white mb-3"><i class="bi bi-star-fill text-warning me-2"></i>Featured</h5>
				<h2 class="mb-4 text-white">Start Your Day With
					<span class="position-relative z-index-9">Black Coffee
						<!-- SVG START -->
						<span class="position-absolute top-50 start-50 translate-middle z-index-n1 d-none d-md-block mt-3">
							<svg width="300px" height="21.5px" viewBox="0 0 445.5 21.5">
								<path class="fill-success" d="M409.9,2.6c-9.7-0.6-19.5-1-29.2-1.5c-3.2-0.2-6.4-0.2-9.7-0.3c-7-0.2-14-0.4-20.9-0.5 c-3.9-0.1-7.8-0.2-11.7-0.3c-1.1,0-2.3,0-3.4,0c-2.5,0-5.1,0-7.6,0c-11.5,0-23,0-34.5,0c-2.7,0-5.5,0.1-8.2,0.1 c-6.8,0.1-13.6,0.2-20.3,0.3c-7.7,0.1-15.3,0.1-23,0.3c-12.4,0.3-24.8,0.6-37.1,0.9c-7.2,0.2-14.3,0.3-21.5,0.6 c-12.3,0.5-24.7,1-37,1.5c-6.7,0.3-13.5,0.5-20.2,0.9C112.7,5.3,99.9,6,87.1,6.7C80.3,7.1,73.5,7.4,66.7,8 C54,9.1,41.3,10.1,28.5,11.2c-2.7,0.2-5.5,0.5-8.2,0.7c-5.5,0.5-11,1.2-16.4,1.8c-0.3,0-0.7,0.1-1,0.1c-0.7,0.2-1.2,0.5-1.7,1 C0.4,15.6,0,16.6,0,17.6c0,1,0.4,2,1.1,2.7c0.7,0.7,1.8,1.2,2.7,1.1c6.6-0.7,13.2-1.5,19.8-2.1c6.1-0.5,12.3-1,18.4-1.6 c6.7-0.6,13.4-1.1,20.1-1.7c2.7-0.2,5.4-0.5,8.1-0.7c10.4-0.6,20.9-1.1,31.3-1.7c6.5-0.4,13-0.7,19.5-1.1c2.7-0.1,5.4-0.3,8.1-0.4 c10.3-0.4,20.7-0.8,31-1.2c6.3-0.2,12.5-0.5,18.8-0.7c2.1-0.1,4.2-0.2,6.3-0.2c11.2-0.3,22.3-0.5,33.5-0.8 c6.2-0.1,12.5-0.3,18.7-0.4c2.2-0.1,4.4-0.1,6.7-0.1c11.5-0.1,23-0.2,34.6-0.4c7.2-0.1,14.4-0.1,21.6-0.1c12.2,0,24.5,0.1,36.7,0.1 c2.4,0,4.8,0.1,7.2,0.2c6.8,0.2,13.5,0.4,20.3,0.6c5.1,0.2,10.1,0.3,15.2,0.4c3.6,0.1,7.2,0.4,10.8,0.6c10.6,0.6,21.1,1.2,31.7,1.8 c2.7,0.2,5.4,0.4,8,0.6c2.9,0.2,5.8,0.4,8.6,0.7c0.4,0.1,0.9,0.2,1.3,0.3c1.1,0.2,2.2,0.2,3.2-0.4c0.9-0.5,1.6-1.5,1.9-2.5 c0.6-2.2-0.7-4.5-2.9-5.2c-1.9-0.5-3.9-0.7-5.9-0.9c-1.4-0.1-2.7-0.3-4.1-0.4c-2.6-0.3-5.2-0.4-7.9-0.6 C419.7,3.1,414.8,2.9,409.9,2.6z"></path>
							</svg>
						</span>
						<!-- SVG END -->
					</span>
				</h2>
				<p class="text-white mb-4">Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do. Water timed folly right aware if oh truth. Large above be to means. Dashwood does provide stronger is.</p>
				<a href="#" class="btn btn-primary mb-0">Check Listing</a>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Action box END -->

<!-- =======================
About START -->
<section>
	<div class="container">
		<div class="row g-4">
			
			<div class="col-lg-4 position-relative">
				<h2>We find perfect place for you and your family</h2>
				<p>Book your hotel with us and don't forget to grab an awesome hotel deal to save massive on your stay.</p>
				<img src="<?= asset('/front') ?>/assets/images/about/09.jpg" class="rounded-3" alt="">
				<!-- Svg decoration -->
				<figure class="position-absolute bottom-0 end-0 me-lg-n5 mb-n3">
					<svg class="fill-info" width="150px" height="133.5px" viewBox="0 0 150 133.5" style="enable-background:new 0 0 150 133.5;" xml:space="preserve">
						<path d="M66.4,84.6c1,0,2,0.2,2.8,0c1.5-0.4,3.6-3.5,3.5-5.1c0-0.2-0.1-0.6-0.3-0.7c-0.8-0.4-1.6-0.8-2.4-1.2 c-0.5,0.8-2-0.1-2.2,1.3c-0.1,0.6-1.4,0.2-1,1.2C66,81.5,66.6,83,66.4,84.6 M62.3,78.2c0.3-0.4,0.6-0.8,0.7-1.3 c0.6-1.7,2-2.3,3.4-2.7c1-0.3,2-0.6,3.1-0.5c2.5,0.2,4.3,1.4,5.6,3.5c0.6,1,1.2,2,1.4,3.2c0.2,0.8,0.4,1.7,0.2,2.4 c-0.9,2.7-2.4,5-5.2,6.1c-0.8,0.3-1.6,0.5-2.4,0.8c-0.1,0-0.3,0.1-0.4,0c-2.1-1-4-2.1-5.2-4.2c-0.5-0.9-1-1.9-0.9-3 c0.2-1.3-0.4-2.7,0.4-4C62.8,78.5,62.6,78.4,62.3,78.2"/>
						<path d="M1.3,102.8c-0.7-0.2-1-0.4-0.8-1.2c0.1,0,0.3-0.1,0.4-0.2c1.4-1,3-1.1,4.5-1.6c0.7-0.2,1.7,0,2.3,0.4 c1.7,1.3,3.6,2.5,4.5,4.7c0.7,1.9,0.4,4.3-0.8,5.8c-0.7,0.9-1.7,1.5-2.4,2.4c-1.2-0.2-2.4,0.3-3.6-0.4c-0.5-0.3-2.9-1.6-3.4-1.9 c-1.1-0.8-1.5-2-1.9-3.2c-0.1-0.2-0.2-0.6-0.1-0.8C0.6,105.5,0.2,103.9,1.3,102.8"/>
						<path d="M95.6,59.7c1.7,1.6,4.4,2.5,6.7,2.4c1.1,0,1.9-0.4,2.6-1.2c0.4-0.4,0.8-0.9,1.3-1.3c-0.2-0.3-0.5-0.5-0.5-0.8 c-0.3-1.1-0.9-1.7-2.1-1.8c-0.6,0-1.1-0.4-1.6-0.6c-0.4-0.1-1-0.3-1.1-0.2c-0.5,0.8-0.8-0.4-1.4,0.1c-0.4,0.4-1,1-1.7,1.6 c-0.5-0.4-0.9-0.7-1.3-1C95.2,57.7,95.8,58.8,95.6,59.7 M108.5,61.1c0.4,0.1,0.6,0.2,0.9,0.3c-0.2,0.7-0.4,1.3-0.6,1.9 c-0.3,0-0.7,0.1-1.1,0.1c0.2,0.2,0.2,0.3,0.4,0.5c-0.7,0.9-1.5,1.5-2.8,1.5c-0.3,0-0.6,0.1-0.9,0.2c-0.9,0.3-1.7,0.3-2.5,0 c-0.3-0.1-0.8-0.3-0.9-0.2c-0.8,1-1.4-0.3-2.2-0.1c-0.3,0.1-0.6-0.8-1.3-0.8c-0.4,0-0.7-0.6-1.1-0.8c-0.5-0.3-0.6-0.9-1.3-0.8 c-0.3-1-1.3-1.5-1.9-2.4c-1.2-1.9-1.2-4.6-0.2-6.5c0.8-1.6,2.4-2.1,3.9-1c0.7,0.5,1.2,1,2,0.3c0.3,0.4,0.5,0.3,0.7-0.1 c0.3-0.5,0.8-0.5,1.3-0.4c1.7,0.3,3.3,0.8,4.7,1.8c1.2,0.9,2,2.2,3,3.3C108.4,59,109.7,60,108.5,61.1"/>
						<path d="M123.8,108.6c0.6-0.3,1.3-0.9,2.4-0.5c-0.1,0.1-0.2,0.3-0.4,0.5c0.4,0.1,1.1,0.1,1.1,0.3 c0.3,1.3,1.8,1.6,2.2,2.8c0.7,2,1.4,4,0.3,6.1c-0.1,0.2-0.2,0.3-0.1,0.6c0.5,0.9,0,1.6-0.8,2c-0.6,0.3-0.3,0.7,0.1,1 c-0.7,0.9-1.4,1.9-2.2,2.8h-2.3c-0.4-0.5-0.9-1-1.5-1.6c-0.5-0.5-1.1-0.8-1.5-1.4c-0.9-1.4-1.1-2.9-0.8-4.4c0.2-1.2,0.8-2.3,1.1-3.5 c0.2-0.8,0.4-1.4,1.1-1.8c0.3-0.2,0.5-0.8,0.5-1.2c0-0.6,0.4-0.8,0.7-1.2C123.9,109.1,123.8,108.9,123.8,108.6"/>
						<path d="M144.9,43.1c-0.1-0.1-0.2-0.2-0.3-0.3c-0.3-0.9-1.3-0.7-1.9-1c-0.3-0.1-0.9,0.4-1.4,0.7 c-0.2,0.1-0.6,0.8-0.9,1.3c-0.2,0.4-0.5,1-0.7,1.1c-0.7,0.1-0.5,0.5-0.6,0.8c0,0.3-0.2,0.5-0.3,0.7c1.5,1.5,2.8,0.9,4.3,0.2 C144.7,45.9,145,44.6,144.9,43.1 M141.1,50.4c-0.3,0.5-0.6,0.9-0.9,1.3c-0.2-0.2-0.4-0.4-0.5-0.4c-1.5,0.2-2-1.2-3-1.8 c-0.1-0.1-0.2-0.5-0.1-0.5c1-0.9-0.1-1.5-0.2-2.3c-0.2,0.1-0.3,0.3-0.5,0.4c0,0-0.1-0.1-0.1-0.1c0-0.9-0.4-1.9,0.5-2.7 c0.2-0.2,0.2-0.6,0.3-0.9c0.4-0.7,0.5-1.6,1.2-2.1c0.7-0.5,0.5-1.4,1.2-1.9c1.3-0.9,3.2-1.4,4.7-0.8c2.1,0.8,3.5,2.4,4.3,4.4 c0.6,1.6,0.9,3.4,0.6,5.1c-0.2,1-1.1,1.7-1.9,2.3c-0.2,0.2-0.8-0.1-1.4-0.2c0,0.1,0,0.5,0.2,0.7c0.2,0.3,0.3,0.7-0.1,0.8 c-0.4,0.1-0.6-0.2-0.6-0.6c0-0.1-0.2-0.2-0.4-0.3c-0.3,0.3-0.7,0.6-1.1,0.9c-0.1-0.2-0.1-0.5-0.3-0.9c-0.5,0.5-1,1-1.8,1.6 C141.2,51.6,141.2,51,141.1,50.4"/>
						<path d="M35.9,71.9c0.3,0.3,0.5,0.4,0.7,0.6c0.1-0.3,0.2-0.7,0.4-0.8c0.4-0.1,1-0.1,1.4,0.1c1,0.7,2,1.4,2.8,2.4 c0.7,0.9,1.2,2,1.5,3.1c0.2,0.6,0.1,1.4-0.3,2.1c-0.8,1.6-1.5,3-3.1,3.9c-0.7,0.4-1.5,0.4-2.2,0.8c-0.3,0.2-0.6,0.2-0.9,0.4 c-0.1-0.2-0.3-0.5-0.4-0.7c-0.2,0.3-0.4,0.3-0.8,0c-0.6-0.4-1.9-1.6-2.5-2c-1.8-1.4-0.7-3.2-0.7-4.9c0-0.4,0.7-0.8,1.1-1.2 c1.4,0.8,2.2,2,2.7,3.4c1.4-0.2,1.6-1.5,2.4-2.2c0.2-0.2,0.1-0.6,0.1-1.3c-0.7,0.7-1.1,1.1-1.5,1.5c-1.1-0.1-0.9-1.4-1.8-1.4 c0-0.8-0.2-1.7,0-2.5C34.8,72.8,35.4,72.4,35.9,71.9"/>
						<path d="M115.7,17.7c0.6-0.6,1-1,1.6-1.6h2.6c0.3-1.1-0.6-0.7-1.1-0.8c0.1-0.1,0.1-0.3,0.2-0.4c0.7-0.6-0.3-0.8-0.2-1.4 c0.4-1,1.7-1.2,2.6-1.8c0.3-0.2,0.8-0.1,1.1,0.1c1.7,0.7,2.3,2.2,3,3.7c0.4,1,0,2.1,0.8,3c-0.3,1.1-0.4,2.4-1,3.4 c-0.6,1.1-1.8,1.6-3,1.8c-0.6,0.1-1.2,0.8-1.8,0.3c-0.5-0.4-1.3-0.2-1.8-0.8c-0.3-0.5-1.1-0.5-1.3-1.3c-0.1-0.4-0.9-0.5-1.2-1.1 C115.5,19.6,115.9,18.6,115.7,17.7"/>
						<path d="M108.3,83.1c0.3,1,0.5,1.9,0.7,2.8c0,0.2,0.1,0.5,0,0.6c-0.9,0.9-0.1,1.6,0.2,2.3c1.6,0,1.6-0.1,2.4-1.2 c1-1.4,0.8-2.9,0.8-4.4c0-0.3-0.3-0.6-0.5-0.8c-0.5-0.4-1.2,0.2-1.7-0.4l-0.4,0.7C108.9,81.9,108.7,82.8,108.3,83.1 M106.4,84.4 c-0.3-0.5-0.5-1-0.7-1.4c0.2-1.2,1.7-0.9,2.1-1.9c0.5-1,1.8-0.5,2.6-1.5c-0.3-0.2-0.6-0.4-0.9-0.6c0-0.1,0.1-0.2,0.2-0.2 c1.4-0.3,2.4,0.5,3.4,1.3c0.8,0.7,1.3,1.7,1.9,2.5c0.3,0.5-0.2,0.9,0.3,1.2c0.5,0.3,0.6,0.7,0.5,1.2c-0.1,0.6,0.4,1.2,0.3,1.5 c-0.2,0.7-0.2,1.4-0.5,2.1c-0.4,1.3-1.1,2.4-2.1,3.3c-0.6,0.5-1.4,0.7-2.3,0.5c-2.4-0.4-2.4-0.4-3.5-1.6c-0.8-0.9-1.4-2-1.6-3.3 c-0.1-0.7-0.6-1.4,0-2.1C105.3,84.9,106.3,84.9,106.4,84.4"/>
						<path d="M50.4,27.8c1.9,1.1,2.3,2,1.3,3.6c-0.5,0.8,0.1,1.8-0.6,2.5c-0.1,0.1,0.2,0.7,0.3,1c0.3,0.9,0.6,1,1.7,0.8 c2-0.5,2.9-1.9,3.4-3.8c-0.7-0.2-1.5-0.4-2.2-0.6c-0.9-0.3-0.6-1.3-0.9-1.7c0.4-0.4,0.9-0.9,1.3-1.3c1.3-0.7,2.1,0.7,3.2,1 c0.9,1.4,2,2.6,1.9,4.4c-0.2,2.3-1.2,4.3-3.7,5.2c-2.1,0.8-3.8,0.5-5.6-1.2c-1.1-1-2-2-2.1-3.7C48.3,31.5,48.8,29.5,50.4,27.8"/>
						<path d="M47.5,113.4c-1.8,0.5-2.9-0.7-4.1-1.4c-1.1-0.7-1.3-2-1.6-3.1c-0.3-1,0.3-2,0.7-3c0.3-0.8,0.8-1.6,1.2-2.3 c-0.2-0.1-0.4-0.2-0.7-0.3c0.3-0.3,0.6-0.6,0.9-1c-0.4-0.1-0.8-0.1-1.4-0.3c0.4-0.3,0.7-0.7,0.9-0.7c0.7,0,1.4-0.2,2.2,0.2 c1.9,1.1,2.9,2.8,3.6,4.7C50.3,109,49.7,111.4,47.5,113.4"/>
						<path d="M70.7,123.3c-0.2,0.4-0.4,0.7-0.6,1.1c1.4,1.4,1.9,3.1,1.7,5.1c-0.1,0.5,0,0.9-0.4,1.3c-0.7,0.8-0.8,2-2,2.5 c-0.6,0.2-1.2,0.3-1.5,0.2c-1-0.5-2.2-1-2.9-2c-0.3-0.5-0.6-1.1-0.7-1.8c-0.2-2.3,0.7-4.2,1.9-6.1c0.3-0.4,0.7-0.7,1.2-1 c0.6-0.3,1-0.5,1.6,0C69.5,122.9,70.1,123,70.7,123.3"/>
						<path d="M146,75.4c-0.8-0.6-1.3-1.8-2.6-1.7c-0.3-0.6-0.8-1.1-0.9-1.7c-0.2-1.4,0.1-2.7,1.6-3.4 c0.2-0.1,0.3-0.3,0.5-0.5c-0.3-0.1-0.5-0.2-0.5-0.2c0.4-0.4,0.8-0.8,1.3-1.3c-0.1-0.1-0.2-0.2-0.3-0.3c0.2,0,0.4-0.1,0.6-0.1 c0.8,0.1,1.8-0.4,2.5,0.4c0.9,1.1,1.6,2.3,1.9,3.8c0.4,1.9-1.5,4.1-2.9,4.8C146.6,75.5,146.2,74.7,146,75.4"/>
						<path d="M90.6,100.9c0,0.6,0,0.9,0,1.1c0.2,1.4-1,1.9-1.8,2.5c-0.8,0.6-1.6-0.3-2.4-0.5c-0.7-0.2-1.3-0.9-1.9-1.4 c-1-0.9-1.4-3-0.8-4.2c0.1-0.3,0-0.8,0.7-0.8c0.4,0,0.8-0.7,1.1-1.1c0.9-1.1,1.6-1.2,2.5-0.3c0.6,0.6,1.3,1.1,1.7,2 C90.3,99.1,90.9,100,90.6,100.9"/>
						<path d="M67.9,53.3c0.9,1,1.9,1.8,2.4,3.2c0.6,1.7,0.3,2.6-1.2,3.6c-1.6,1.1-2.7,0.9-4.2-0.5c-0.2-0.2-0.4-0.4-0.5-0.5 c-0.2-0.7,0.3-1.6-0.5-2.1c-0.4-1.9,0.9-3.5,2.9-3.5C67.2,53.3,67.5,53.3,67.9,53.3"/>
						<path d="M87.3,31.9c0.4-0.3,0.6-0.5,0.8-0.7c-0.3-0.2-0.5-0.5-0.8-0.7c0.1-0.1,0.2-0.3,0.4-0.5 c-0.5-0.1-0.9-0.2-1.4-0.3c0.6-1.6,2-1.7,3.2-2.2c0.2-0.1,0.7,0.2,1,0.4c1.1,0.9,1.9,2,2.5,3.3c0.1,0.2,0.2,0.5,0.1,0.5 c-1,0.8,0.3,2.5-1,3c-0.3,0.1-0.8-0.5-1.5-0.6c0.3,0.3,0.6,0.6,0.9,1c-0.5,0.3-1,0.7-1.5,1c-0.2,0.1-0.4,0-0.6,0 c-0.1,0-0.3-0.1-0.3-0.1c0.2-1.1-1.2-0.3-1.3-1c-0.1-0.4-0.4-0.7-0.4-1.1C87.2,33.3,87.3,32.6,87.3,31.9"/>
						<path d="M90.3,1.3V0.3h1.9c0.9,1.4,2.2,2.8,1.8,4.9c-0.3,0-0.7,0-1.2,0.1V3.6c-0.3,0.1-0.6,0-0.7,0.1 c-0.2,0.2-0.2,0.5-0.3,0.7c-0.3,0.4-0.4,0.3-0.8-0.3c-0.2-0.4-0.6-0.7-0.9-1.1c0.4-0.2,0.7-0.3,1-0.5c-0.9-0.4-0.9-0.4-0.1-1.2 C91.1,1.3,91,1,91,0.6C90.7,0.8,90.6,1,90.3,1.3"/>
					</svg>
				</figure>
			</div>

			<div class="col-lg-7 position-relative ms-auto">
				<!-- Svg decoration -->
				<figure class="position-absolute top-0 start-0 translate-middle mt-8 ms-n4 z-index-9 d-none d-xl-block">
					<svg class="fill-orange" width="153.6px" height="71.4px" viewBox="0 0 153.6 71.4" style="enable-background:new 0 0 153.6 71.4;" xml:space="preserve">
						<path d="M14.4,0.8c-2.3,0.4-4.6,0.9-6.8,1.5C6.7,2.6,5.8,2.8,4.9,3.1S3,3.7,2.3,4.2c-0.6,0.3-1.1,1-1.5,1.4C0.3,6.2,0,6.9,0,7.6 c0,0.1,0,0.2,0.1,0.3C0.2,8.1,0.6,8,0.8,7.9c0.7-0.4,1.4-0.7,2.1-1.1c0.5-0.3,1-0.6,1.6-0.7c1.1-0.2,2.1-0.6,3.1-0.9 c3.4-1,7-1.4,10.5-1.7c6.5-0.6,12.9,0,19.2,1.4c2.7,0.6,5.5,1.3,8.2,1.9c2.2,0.6,4.5,1.1,6.7,1.8c1.1,0.3,2.2,0.6,3.4,1 c1,0.3,2.2,0.6,3.2,1c0.3,0.2,0.6,0.4,0.9,0.6c0.5,0.2,1,0.3,1.4,0.5c1,0.3,1.9,0.7,2.8,1.2c1.8,0.9,3.5,2,5.1,3.3 c1.5,1.2,3,2.5,4.4,3.8c0.6,0.6,1.4,1.4,2,2.1c0.1,0.1,0.4,0.3,0.3,0.5c0,0.2-1,0.2-1.1,0.2c-0.7,0-1.4,0.1-2.1,0.2 c-2.9,0.3-5.8,0.7-8.6,1.4c-2,0.6-4,1.3-5.8,2.2c-0.9,0.5-1.8,1-2.6,1.7c-0.7,0.6-1.4,1.4-2.2,1.8c-1,0.6-1.8,1.8-2.2,3 c-0.6,1.3-0.8,2.7-0.8,4.1c-0.1,2.1,2.6,5.3,4.9,6.1c4.4,1.5,8.5,0.1,12.7-0.6c3.8-0.6,6.9-2.6,10.1-4.6c2.8-1.8,5.3-3.9,4.6-7.8 c-0.2-1.5,0.5-1.4,1.6-1.2c0.2,0,0.2,0.1,0.4,0.1c4.5,0.7,9,1,13.4,2.2c4.6,1.2,8.9,3,13,5.1c3.5,1.9,6.7,4.4,9.8,6.9 c0.9,0.6,1.8,1.4,2.6,2.1c0.8,0.6,1.8,1.2,2.5,2c0.6,0.7,1.4,1.1,2.1,1.6c0.8,0.6,1.7,1.2,2.5,1.8c0.7,0.6,1.4,1.1,2.1,1.8 c0.3,0.3,0.6,0.6,1,1c1,0.9,2.2,1.4,3.1,2.2c0.3,0.2,0.5,0.6,0.7,0.8c0.5,0.4,0.9,0.8,1.4,1.2c0.9,0.8,1.8,1.5,2.7,2.3 c0.4,0.3,0.7,0.6,1.1,1c0.2,0.2,0.7,0.5,0.7,0.8c0,0.2,0,0.2-0.2,0.2c-0.2,0.1-0.7-0.1-1-0.1c-0.2,0-0.4,0-0.6,0 c-0.6,0.1-1.1,0.1-1.7,0.2c-2.2,0.2-4.4,0.8-6.5,1.4c-0.6,0.2-1.2,0.3-1.5,0.8c-0.4,0.5-0.2,1.3,0.3,1.4c0.2,0.1,0.4,0,0.6,0 c3.8-0.6,7.6,0,11,1.4c1.6,0.6,3.2,1.4,4.6,2.5c0.3,0.2,0.6,0.4,0.9,0.6c0.7,0.4,1.4,0.9,2.1,1.3c0.3,0.2,0.6,0.4,1,0.4 c0.6-0.1,1-0.7,1.3-1.4c0.1-0.3,0.2-0.6,0.2-0.9c-0.1-0.2-0.2-0.5-0.7-0.7c-0.6-0.7-1.4-1.4-1.7-2.2c-0.4-0.9-1-1.6-1.4-2.4 c-0.9-1.7-1.4-3.7-1.6-5.6c-0.4-3,0-5.9,0.6-8.9c0.1-0.2,0.1-0.3,0-0.5c-0.1-0.1-0.2-0.2-0.3-0.2c-0.6-0.3-1.4-0.1-1.9,0.5 c-0.5,0.5-0.7,1.2-0.9,1.9c-0.4,1.4-0.6,3-0.6,4.4c0,0.6,0.2,1,0.2,1.6c-0.8-0.6-1.4-1.4-2.2-2.2c-0.6-0.6-1.2-1-1.8-1.5 c-0.8-0.7-1.7-1.5-2.5-2.2c-0.8-0.7-1.7-1.4-2.4-2.2c-0.9-1-1.9-1.8-2.9-2.6c-1.1-1-2.3-2.1-3.4-3.1c-0.6-0.6-1.2-1.2-1.9-1.6 c-0.7-0.3-1.4-0.7-2-1.3c-1.5-1.4-3.1-2.6-4.7-3.9c-3.2-2.5-6.5-4.9-10.1-6.6c-4-2-8.5-3.1-12.8-4.3c-1.4-0.4-2.7-0.7-4.1-1.1 c-2.6-0.7-5.2-1-7.8-1.3c-0.6,0-1-0.2-1.5-0.2c-1.1,0-2.2,0.2-3.4,0.1c-0.4,0-0.7-0.2-1-0.5c-0.8-0.9-1.4-1.8-2.2-2.7 c-0.2-0.4-0.5-0.8-0.7-1.1c-0.2-0.4-0.8-0.6-1.1-1c-0.6-0.7-1.3-1.4-2-2.2c-1.4-1.4-2.9-2.6-4.5-3.8c-2.2-1.6-4.5-3-6.9-4.2 c-1-0.6-2.2-1.3-3.4-1.4c-0.3-0.1-0.6-0.1-1-0.1c-0.5-0.1-1-0.2-1.4-0.4c-2.2-0.7-4.3-1.4-6.5-2c-4.3-1.2-8.7-2.2-13.2-2.9 c-0.8-0.1-1.5-0.3-2.3-0.2c-0.4,0-0.8,0.1-1.2,0c-1.1-0.2-2.3-0.3-3.4-0.4C28.9,0,26.6,0,24.3,0c-2.1,0.1-4.2,0.3-6.2,0.4 c-0.2,0-0.2,0-0.3,0C16.6,0.5,15.4,0.7,14.4,0.8z M71.3,28.3c0.7-0.1,1.4-0.4,2.2-0.4c2-0.1,4,0.1,5.9,0.4c0.3,0,0.6,0.1,0.7,0.2 c0.2,0.2,0.1,0.5,0,0.7C80,29.5,80,29.8,79.9,30c-0.2,0.6-0.7,1.2-1.2,1.7c-3,3-6.9,4.6-10.8,5.6c-3.7,1-7.6,2.2-11.6,1 c-1.1-0.4-2.5-0.5-2.8-1.8c-0.4-1.4,1-2,1.8-2.7c4-3.4,8.9-4.3,12.9-4.9C69.2,28.6,70.2,28.5,71.3,28.3z"/>
					</svg>
				</figure>
				<!-- Image -->
				<div class="position-relative mb-5">
					<!-- Image -->
					<img src="<?= asset('/front') ?>/assets/images/about/10.jpg" class="rounded-3" alt="">
					<!-- Manager -->
					<div class="position-absolute bottom-0 start-0 ms-n3 ms-lg-n6 mb-2 z-index-1">
						<div class="bg-mode shadow d-inline-block text-center rounded-3 position-relative p-4">
							<span class="h3 text-primary mb-2">10M+</span>
							<h6 class="fw-normal">Total Booking</h6>
						</div>
					</div>
				</div>	
				<!-- Features START -->
				<div class="row g-4 g-md-5">
					<!-- Item -->
					<div class="col-sm-6">
						<div class="d-flex">
							<!-- Svg icon -->
							<figure>
								<svg width="50.1px" height="49.9px" viewBox="0 0 50.1 49.9" style="enable-background:new 0 0 50.1 49.9;" xml:space="preserve">
									<path class="fill-primary" d="M49.8,41.1l-5-3.4l0.8-1.5c0.1-0.3,0.1-0.6-0.1-0.8c-0.1-0.1-1.4-1.6-4.5-3.2c1.1-2.4,2-5.1,2.7-7.9 c2-8.6,1.3-15.9,1.3-16.2c0-0.3-0.3-0.6-0.7-0.7c-5.8-0.6-10.6-2.6-13.6-4.1c-3.2-1.7-5.1-3.2-5.1-3.2c-0.3-0.2-0.7-0.2-0.9,0 c-0.1,0.1-7.5,6.1-18.7,7.3c-0.3,0-0.6,0.3-0.7,0.7c0,0.1-0.3,3.4,0,8.2c0,0.4,0.4,0.7,0.8,0.7c0.4,0,0.7-0.4,0.7-0.8 C6.5,12.7,6.6,10,6.7,8.9c5.8-0.7,10.5-2.6,13.5-4.2c2.4-1.3,4.1-2.4,4.9-3c0.8,0.6,2.4,1.7,4.9,3c3,1.5,7.7,3.5,13.5,4.2 c0.1,1.9,0.4,8.2-1.3,15.1c-0.7,3-1.7,5.8-2.9,8.3c0,0.1-0.1,0.1-0.1,0.2C39.1,32.7,39,32.8,39,33c0,0.1-0.1,0.2-0.1,0.3 c-0.1,0.2-0.2,0.3-0.2,0.5c-0.1,0.1-0.1,0.3-0.2,0.4c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.1,0.2-0.2,0.3c0,0.1-0.1,0.2-0.1,0.2 c-0.2,0.3-0.3,0.5-0.5,0.8c0,0,0,0,0,0.1c-0.1,0.1-0.2,0.3-0.3,0.4c0,0.1-0.1,0.1-0.1,0.2c-0.5,0.7-1,1.5-1.6,2.1c0,0,0,0,0,0 c-0.1,0.1-0.2,0.3-0.3,0.4c-0.1,0.1-0.2,0.2-0.3,0.3c0,0,0,0-0.1,0.1c-0.1,0.1-0.2,0.2-0.3,0.3c0,0,0,0,0,0 c-2.6,2.8-5.7,4.9-9.3,6.4c-3.5-1.4-7.5-3.9-10.8-8.1c0,0,0,0,0,0c-0.1-0.1-0.1-0.2-0.2-0.3c-1.2-1.6-2.3-3.4-3.2-5.3 c0,0,0-0.1-0.1-0.1c-1.7-3.5-3-7.8-3.7-13c-0.1-0.4-0.4-0.7-0.8-0.6c-0.4,0.1-0.7,0.4-0.6,0.8c0.6,4.8,1.8,9.1,3.6,12.9 c-3.1,1.6-4.5,3.2-4.5,3.2c-0.2,0.2-0.2,0.6-0.1,0.8l0.8,1.5l-5,3.4C0.1,41.3,0,41.5,0,41.8s0.2,0.5,0.4,0.6l4.1,2.3v4.5 c0,0.3,0.1,0.5,0.4,0.6c0.1,0.1,0.2,0.1,0.4,0.1c0.1,0,0.3,0,0.4-0.1l8.2-4.8c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0 c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0-0.1c0,0,0,0,0,0c0,0,0-0.1,0-0.1c0,0,0,0,0,0 c0,0,0,0,0-0.1c0,0,0,0,0,0c0,0,0-0.1,0-0.1c0,0,0,0,0,0c0,0,0-0.1,0-0.1c0,0,0,0,0,0c0,0,0-0.1,0-0.1c0,0,0,0,0,0 c0,0,0-0.1,0-0.1c0,0,0,0,0,0c0,0,0-0.1,0-0.1L13,42c0.6-0.3,1.3-0.6,2.1-0.9c2.7,2.8,5.9,4.9,9.6,6.4c0.1,0,0.2,0.1,0.3,0.1 c0.1,0,0.2,0,0.3-0.1c3.7-1.5,6.9-3.6,9.6-6.4c0.8,0.3,1.5,0.6,2.1,0.9l-1,2.1c0,0,0,0.1,0,0.1c0,0,0,0,0,0c0,0,0,0.1,0,0.1 c0,0,0,0,0,0c0,0,0,0.1,0,0.1c0,0,0,0,0,0c0,0,0,0.1,0,0.1c0,0,0,0,0,0c0,0,0,0.1,0,0.1c0,0,0,0,0,0c0,0,0,0,0,0.1c0,0,0,0,0,0 c0,0,0,0.1,0,0.1c0,0,0,0,0,0c0,0,0,0,0,0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0.1,0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0 c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0l8.2,4.8c0.1,0.1,0.2,0.1,0.4,0.1c0.1,0,0.3,0,0.4-0.1c0.2-0.1,0.4-0.4,0.4-0.6v-4.5l4.1-2.3 c0.2-0.1,0.4-0.4,0.4-0.6C50.1,41.5,50,41.3,49.8,41.1z M6,47.9v-3.7c0-0.3-0.1-0.5-0.4-0.6l-3.4-1.9L6,39.1L8.6,44 c0,0,0,0.1,0,0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0.1,0c0,0,0,0,0,0 c0,0,0,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0,0l2.1,0.4L6,47.9z M10.9,43.2C11,43.2,11,43.2,10.9,43.2 c0.1-0.1,0.1-0.1,0.2-0.1c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0,0,0.1,0 c0.1,0,0.1-0.1,0.2-0.1c0,0,0,0,0,0l0.4,0.7L10.9,43.2z M11.7,41C11.7,41,11.7,41,11.7,41C11.7,41,11.7,41,11.7,41 C11.7,41,11.7,41,11.7,41C11.7,41,11.7,41,11.7,41c-0.1,0-0.1,0.1-0.1,0.1c-0.1,0-0.1,0.1-0.2,0.1c0,0-0.1,0-0.1,0.1c0,0,0,0,0,0 c0,0,0,0,0,0c-0.1,0.1-0.2,0.1-0.3,0.2c0,0,0,0,0,0c-0.1,0-0.1,0.1-0.1,0.1c0,0,0,0,0,0c0,0,0,0,0,0c-0.6,0.4-1,0.7-1.3,1 l-2.4-4.6l-1-1.8c0.5-0.5,1.7-1.5,3.7-2.5c0.1,0.1,0.2,0.3,0.2,0.4c0,0.1,0.1,0.1,0.1,0.2c0.1,0.2,0.2,0.4,0.3,0.6 c0,0,0,0.1,0.1,0.1c0.8,1.4,1.6,2.7,2.6,3.9c0,0,0,0.1,0.1,0.1c0.1,0.1,0.2,0.2,0.2,0.3c0,0,0.1,0.1,0.1,0.1 c0.1,0.1,0.1,0.2,0.2,0.2c0.1,0.1,0.2,0.2,0.3,0.4C13.2,40.2,12.4,40.6,11.7,41z M36.1,39.9C36.1,39.9,36.1,39.9,36.1,39.9 c0.1-0.1,0.1-0.2,0.2-0.2c0,0,0.1-0.1,0.1-0.1c0.1-0.1,0.2-0.2,0.3-0.3c0,0,0,0,0,0c0.5-0.6,0.9-1.1,1.3-1.7 c0.1-0.1,0.1-0.2,0.2-0.2c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.2,0.2-0.3,0.3-0.5 c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.1,0.1-0.2,0.2-0.4c0.1-0.1,0.2-0.3,0.2-0.4c0-0.1,0.1-0.2,0.1-0.2c0.1-0.2,0.2-0.4,0.3-0.6 c0-0.1,0.1-0.1,0.1-0.2c0,0,0-0.1,0.1-0.1c2,1,3.2,2,3.7,2.5l-3.4,6.4c-0.3-0.3-0.8-0.6-1.3-1c0,0,0,0,0,0c0,0,0,0,0,0 c0,0-0.1-0.1-0.1-0.1c0,0,0,0,0,0c-0.1,0-0.2-0.1-0.2-0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1 c0,0-0.1,0-0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0C37.8,40.6,37,40.2,36.1,39.9z M38.2,43l0.1-0.3c0,0,0,0,0,0 c0.1,0,0.1,0.1,0.2,0.1c0,0,0,0,0.1,0c0,0,0.1,0.1,0.1,0.1c0,0,0.1,0,0.1,0.1c0,0,0.1,0.1,0.1,0.1c0,0,0.1,0,0.1,0.1 c0,0,0.1,0.1,0.1,0.1c0,0,0,0,0.1,0L38,43.4L38.2,43z M44.6,43.6c-0.2,0.1-0.4,0.4-0.4,0.6v3.7l-5.3-3.1l2.1-0.4c0,0,0,0,0,0 c0,0,0,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0 c0,0,0,0,0-0.1c0,0,0,0,0,0c0,0,0-0.1,0-0.1l2.6-4.9l3.9,2.6L44.6,43.6z"/>
									<path class="fill-primary" d="M40.3,11.8c0-0.3-0.3-0.6-0.7-0.7c-8.5-0.9-14.1-5.5-14.1-5.5c-0.3-0.2-0.7-0.2-0.9,0c-0.1,0-5.7,4.6-14.1,5.5 c-0.3,0-0.6,0.3-0.7,0.7c0,0.1-0.3,3.4,0.2,7.8c0.5,4.1,1.8,10,5.3,14.9c0.1,0.2,0.4,0.3,0.6,0.3c0.1,0,0.3,0,0.4-0.1 c0.3-0.2,0.4-0.7,0.2-1c-3.4-4.6-4.6-10.3-5-14.2c-0.4-3.2-0.3-5.8-0.2-7c7.3-0.9,12.3-4.3,13.8-5.4c1.5,1.1,6.6,4.5,13.8,5.4 c0.1,0.8,0.1,2.4,0,4.5c0,0.4,0.3,0.8,0.7,0.8c0.4,0,0.8-0.3,0.8-0.7C40.5,14,40.3,11.9,40.3,11.8z"/>
									<path class="fill-primary" d="M39.5,19.4c-0.4-0.1-0.8,0.2-0.8,0.6C37,32.9,30.4,38.3,25.1,40.5c-2.6-1.1-4.9-2.6-6.7-4.6c-0.3-0.3-0.7-0.3-1,0 c-0.3,0.3-0.3,0.7,0,1c2.1,2.2,4.6,3.9,7.5,5c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.2,0,0.3-0.1c4.7-1.9,8.4-5.2,11-9.7 c1.9-3.4,3.2-7.4,3.7-12C40.1,19.8,39.9,19.4,39.5,19.4z"/>
									<path class="fill-primary" d="M33.3,17.6c-1-1-2.6-1-3.6,0l-6.5,6.5l-2.4-2.4c-1-1-2.6-1-3.6,0c-1,1-1,2.6,0,3.6l4.2,4.2 c0.5,0.5,1.1,0.8,1.8,0.8c0.7,0,1.3-0.3,1.8-0.8l8.4-8.4C34.3,20.2,34.3,18.6,33.3,17.6z M32.2,20.2l-8.4,8.4 c-0.2,0.2-0.5,0.3-0.8,0.3s-0.6-0.1-0.8-0.3l-4.2-4.2c-0.4-0.4-0.4-1.1,0-1.6c0.2-0.2,0.5-0.3,0.8-0.3c0.3,0,0.6,0.1,0.8,0.3 l2.9,2.9c0.1,0.1,0.3,0.2,0.5,0.2c0.2,0,0.4-0.1,0.5-0.2l7.1-7.1c0.4-0.4,1.1-0.4,1.6,0C32.7,19,32.7,19.7,32.2,20.2z"/>
								</svg>
							</figure>
							<div class="ms-3">
								<h5 class="mb-2">Best Rate Guarantee</h5>
								<p class="mb-0">In no impression assistance contrasted she wishing justice hastily.</p>
							</div>
						</div>
					</div>	
					
					<!-- Item -->
					<div class="col-sm-6">
						<div class="d-flex">
							<!-- Svg icon -->
							<figure>
								<svg width="49.3px" height="56.1px" viewBox="0 0 49.3 56.1" style="enable-background:new 0 0 49.3 56.1;" xml:space="preserve">
									<path class="fill-primary" d="M25.3,30.7c-0.1,0-0.2,0-0.3,0c-1.1-0.1-1.8-1-1.8-2.1c0-0.5-0.4-0.9-0.9-0.9c-0.5,0-0.9,0.4-0.9,0.9c0,1.8,1.2,3.3,2.9,3.8 v0.9c0,0.5,0.4,0.9,0.9,0.9s0.9-0.4,0.9-0.9v-0.9c2-0.4,3.3-2.2,3.1-4.2c-0.2-2-1.9-3.5-3.9-3.5c-1.2,0-2.1-0.9-2.1-2.1 s0.9-2.1,2.1-2.1c1.2,0,2.1,0.9,2.1,2.1c0,0.5,0.4,0.9,0.9,0.9c0.5,0,0.9-0.4,0.9-0.9c0-1.9-1.3-3.5-3.1-3.8v-0.8 c0-0.5-0.4-0.9-0.9-0.9s-0.9,0.4-0.9,0.9v0.9c-1.9,0.5-3.1,2.4-2.9,4.3c0.3,1.9,1.9,3.4,3.9,3.4c1.1,0,2.1,0.9,2.1,2 C27.3,29.7,26.5,30.6,25.3,30.7z"/>
									<path class="fill-primary" d="M11.9,25.7c0,7.4,6,13.3,13.3,13.3s13.3-6,13.3-13.3s-6-13.3-13.3-13.3C17.9,12.3,11.9,18.3,11.9,25.7z M25.2,14.2 c6.3,0,11.5,5.1,11.5,11.5s-5.1,11.5-11.5,11.5S13.8,32,13.8,25.7C13.8,19.3,18.9,14.2,25.2,14.2z"/>
									<path class="fill-primary" d="M43.1,41.2l-7.2,3.4c-1-1.8-2.9-3-5-3.1l-6.6-0.2c-1.1,0-2.1-0.3-3-0.8l-0.7-0.4c-3.5-1.8-7.6-1.8-11,0l0-1.5 c0-0.5-0.4-0.9-0.9-0.9l-7.3-0.2c-0.5,0-0.9,0.4-0.9,0.9L0,54.5c0,0.5,0.4,0.9,0.9,0.9l7.3,0.2h0c0.5,0,0.9-0.4,0.9-0.9l0-0.8l1.9-1 c0.7-0.4,1.6-0.5,2.4-0.3l11.3,3.2c0,0,0,0,0.1,0c0.8,0.2,1.6,0.3,2.5,0.3c1.8,0,3.5-0.4,5.1-1.1c0,0,0.1,0,0.1-0.1l16.4-10.6 c0.4-0.3,0.5-0.8,0.3-1.2C48,41,45.3,40.1,43.1,41.2z M1.9,53.6l0.4-14.1l5.4,0.1L7.3,53.7L1.9,53.6z M31.6,53.4 c-2,0.9-4.2,1.1-6.4,0.7L14,50.9c-1.3-0.4-2.6-0.2-3.8,0.4l-1,0.5l0.3-9.4c3.1-2,7-2.2,10.3-0.5l0.7,0.4c1.2,0.6,2.5,0.9,3.8,1 l6.6,0.2c1.9,0.1,3.5,1.4,3.8,3.2l-9.9-0.3c-0.5,0-0.9,0.4-0.9,0.9c0,0.5,0.4,0.9,0.9,0.9l10.9,0.3h0c0.5,0,0.9-0.4,0.9-0.9 c0-0.4,0-0.8-0.1-1.2l7.4-3.5c0,0,0,0,0,0c1-0.5,2.3-0.4,3.2,0.4L31.6,53.4z"/>
									<path class="fill-primary" d="M26.2,9.8V1c0-0.5-0.4-0.9-0.9-0.9c-0.5,0-0.9,0.4-0.9,0.9v8.7c0,0.5,0.4,0.9,0.9,0.9C25.7,10.7,26.2,10.3,26.2,9.8z"/>
									<path class="fill-primary" d="M33.1,9.8V5.6c0-0.5-0.4-0.9-0.9-0.9c-0.5,0-0.9,0.4-0.9,0.9v4.1c0,0.5,0.4,0.9,0.9,0.9C32.6,10.7,33.1,10.3,33.1,9.8z"/>
									<path class="fill-primary" d="M19.3,9.8V5.6c0-0.5-0.4-0.9-0.9-0.9s-0.9,0.4-0.9,0.9v4.1c0,0.5,0.4,0.9,0.9,0.9S19.3,10.3,19.3,9.8z"/>
								</svg>
							</figure>
							<div class="ms-3">
								<h5 class="mb-2">No Booking Fee</h5>
								<p class="mb-0">In no impression assistance contrasted she wishing justice hastily.</p>
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="col-sm-6">
						<div class="d-flex">
							<!-- Svg icon -->
							<figure>
								<svg width="50.5px" height="44.2px" viewBox="0 0 50.5 44.2" style="enable-background:new 0 0 50.5 44.2;" xml:space="preserve">
									<path class="fill-primary" d="M39.2,34.7c-1,0-0.8-1.2-0.8-2c0-1,1.6-1,1.6,0C40,33.5,40.2,34.7,39.2,34.7z M28.5,29.8H4.3 C2,29.8,0,27.9,0,25.5V4.3C0,1.9,2,0,4.3,0h36c2.4,0,4.3,1.9,4.3,4.3v16.1c1.3,0.5,3,1,5.1,1.3c0.3,0.1,0.6,0.3,0.7,0.7 c0,0.1,2,15.5-10.7,21.8c-0.2,0.1-0.5,0.1-0.7,0C32,40.7,29.4,34.7,28.5,29.8z M43.6,21.6c-0.1,0-0.1,0-0.2-0.1 c-2.2-1-3.5-2.2-4.2-3.1c-1.1,1.4-3.7,3.6-9.6,4.6c-0.2,2.7-0.4,14.2,9.6,19.4c10.1-5.2,9.8-16.7,9.6-19.4 C46.7,22.8,44.9,22.2,43.6,21.6z M43,19.6v-5.7H1.6v11.6c0,1.5,1.2,2.7,2.7,2.7h23.9c-0.4-3.3-0.1-5.8-0.1-5.9 c0.1-0.4,0.3-0.6,0.7-0.7c8.5-1.3,9.6-5,9.6-5c0.2-0.8,1.3-0.8,1.5,0C40,16.7,40.5,18.2,43,19.6z M43,12.3V8.1H1.6v4.2H43z M43,6.5 V4.3c0-1.5-1.2-2.7-2.7-2.7h-36c-1.5,0-2.7,1.2-2.7,2.7v2.2H43z M10.2,19.3H5.7c-1,0-1-1.6,0-1.6h4.5 C11.3,17.7,11.3,19.3,10.2,19.3z M18,19.3h-4.6c-1,0-1-1.6,0-1.6H18C19,17.7,19,19.3,18,19.3z M18,24.4H5.7c-1,0-1-1.6,0-1.6H18 C19,22.8,19,24.4,18,24.4z M39.2,38c-2.8,0-5.1-2.3-5.1-5.1v-4.3c0-1,1.1-0.8,1.8-0.8v-2.2c0-4.3,6.6-4.3,6.6,0v2.2 c0.7,0,1.9-0.2,1.9,0.8v4.3C44.4,35.7,42.1,38,39.2,38z M37.6,27.7H41v-2.2c0-2.2-3.4-2.2-3.4,0V27.7z M35.7,29.3v3.5 c0,2,1.6,3.5,3.5,3.5c2,0,3.5-1.6,3.5-3.5v-3.5H35.7z"/>
								</svg>
							</figure>
							<div class="ms-3">
								<h5 class="mb-2">Security Payment</h5>
								<p class="mb-0">In no impression assistance contrasted she wishing justice hastily.</p>
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="col-sm-6">
						<div class="d-flex">
							<!-- Svg icon -->
							<figure>
								<svg width="52px" height="58.3px" viewBox="0 0 52 58.3" style="enable-background:new 0 0 52 58.3;" xml:space="preserve">
									<path class="fill-primary" d="M50.8,26.2C49.2,13.7,38.7,4.2,26.1,4l1.7-1.7c0.5-0.5,0.5-1.4,0-1.9s-1.4-0.5-1.9,0c0,0,0,0,0,0l-4.2,4.2 c-0.5,0.5-0.5,1.4,0,1.9c0,0,0,0,0,0l4.2,4.3c0.5,0.5,1.4,0.5,1.9,0c0.5-0.5,0.5-1.4,0-1.9c0,0,0,0,0,0l-2.2-2.2 c12.5,0,22.7,10.2,22.7,22.7c0,6.9-3.1,13.4-8.5,17.7c-0.6,0.5-0.7,1.3-0.2,1.9s1.3,0.7,1.9,0.2l0,0C48.4,43.6,51.9,35,50.8,26.2 L50.8,26.2z"/>
									<path class="fill-primary" d="M25.4,48c-0.5-0.5-1.4-0.5-1.9,0c-0.5,0.5-0.5,1.4,0,1.9c0,0,0,0,0,0l2.2,2.2C13.1,52,3,41.9,3,29.3 c0-6.9,3.1-13.4,8.5-17.7c0.6-0.5,0.7-1.3,0.2-1.9c-0.5-0.6-1.3-0.7-1.9-0.2l0,0c-6.9,5.6-10.4,14.1-9.3,23 c1.6,12.5,12.1,22,24.7,22.2l-1.7,1.7c-0.5,0.5-0.5,1.4,0,1.9c0.5,0.5,1.4,0.5,1.9,0c0,0,0,0,0,0l4.2-4.2c0.5-0.5,0.5-1.4,0-1.9 c0,0,0,0,0,0L25.4,48z"/>
									<path class="fill-primary" d="M26.7,28.3c-0.2-0.1-0.4-0.1-0.5-0.2c-0.2-0.1-0.4-0.2-0.6-0.2c-1.3-0.5-1.9-0.9-1.9-1.5c0-0.3,0.3-0.7,0.9-1 c0.4-0.2,1.8-0.8,3.7,0.6c0.6,0.4,1.4,0.3,1.9-0.3c0.4-0.6,0.3-1.4-0.3-1.9c0,0,0,0,0,0c-0.8-0.6-1.8-1-2.8-1.3v-1.2 c0-0.7-0.6-1.3-1.3-1.3c-0.7,0-1.3,0.6-1.3,1.3v1.3c-0.3,0.1-0.7,0.2-1,0.4c-1.4,0.7-2.3,2-2.3,3.4c0,2.6,2.5,3.5,3.7,4 c0.2,0.1,0.3,0.1,0.5,0.2c0.2,0.1,0.4,0.2,0.6,0.3c1.3,0.5,1.9,0.8,1.9,1.5c0,0.3-0.3,0.7-0.9,1c-0.4,0.2-1.8,0.8-3.7-0.6 c-0.6-0.4-1.4-0.3-1.9,0.3c-0.4,0.6-0.3,1.4,0.3,1.9c0.8,0.6,1.8,1.1,2.8,1.3v1.3c0,0.7,0.6,1.3,1.3,1.3c0.7,0,1.3-0.6,1.3-1.3V36 c0.3-0.1,0.7-0.2,1-0.4c1.4-0.7,2.3-2,2.3-3.4C30.3,29.7,28,28.8,26.7,28.3L26.7,28.3z"/>
									<path class="fill-primary" d="M25.7,14.7c-8.1,0-14.7,6.6-14.7,14.7S17.6,44,25.7,44s14.7-6.6,14.7-14.7l0,0C40.3,21.3,33.8,14.7,25.7,14.7L25.7,14.7z  M25.7,41.4c-6.6,0-12-5.4-12-12s5.4-12,12-12s12,5.4,12,12C37.7,36,32.3,41.4,25.7,41.4z"/>
								</svg>
							</figure>
							<div class="ms-3">
								<h5 class="mb-2">Money Back	 Guarantee</h5>
								<p class="mb-0">In no impression assistance contrasted she wishing justice hastily.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Features END -->
			</div>
		</div>
	</div>
</section>
<!-- =======================
About END -->

<!-- =======================
Testimonials START -->
<section class="pt-0 pt-md-5">
	<div class="container">
		<div class="text-center position-relative py-5" style="background-image:url(<?= asset('/front') ?>/assets/images/element/map.svg); background-position: center left; background-size: cover;">
			<!-- Avatar decoration -->
			<div class="avatar position-absolute top-50 end-0 mt-5 me-7">
				<img class="avatar-img rounded-circle border border-2 border-light d-none d-md-block" src="<?= asset('/front') ?>/assets/images/avatar/09.jpg" alt="avatar">
			</div>
			<!-- Avatar decoration -->
			<div class="avatar avatar-lg position-absolute top-0 end-0 mt-5">
				<img class="avatar-img rounded-circle border border-2 border-light d-none d-lg-block" src="<?= asset('/front') ?>/assets/images/avatar/05.jpg" alt="avatar">
			</div>
			<!-- Avatar decoration -->
			<div class="avatar position-absolute top-50 start-0 ms-5">
				<img class="avatar-img rounded-circle border border-2 border-light d-none d-md-block" src="<?= asset('/front') ?>/assets/images/avatar/04.jpg" alt="avatar">
			</div>
			<!-- Avatar decoration -->
			<div class="avatar avatar-sm position-absolute bottom-0 start-0 mb-5 ms-8">
				<img class="avatar-img rounded-circle border border-2 border-light d-none d-md-block" src="<?= asset('/front') ?>/assets/images/avatar/07.jpg" alt="avatar">
			</div>
			<!-- Avatar decoration -->
			<div class="avatar avatar-lg position-absolute top-0 start-0 mt-5">
				<img class="avatar-img rounded-circle border border-2 border-light d-none d-lg-block" src="<?= asset('/front') ?>/assets/images/avatar/06.jpg" alt="avatar">
			</div>
			
			<!-- Title -->
			<div class="row mb-5">
				<div class="col-12">
					<h2>Hear From Our Happy Clients</h2>
				</div>
			</div>
			
			<!-- Testimonials -->
			<div class="row">
				<div class="col-md-9 col-xl-7 mx-auto">
					<!-- Slider START -->
					<div class="tiny-slider dots-primary">
						<div class="tiny-slider-inner" data-autoplay="true" data-arrow="false" data-dots="true" data-edge="2" data-items="1">
							<!-- Slider item -->
							<div>
								<!-- Avatar -->
								<div class="avatar avatar-xl mb-4">
									<img class="avatar-img rounded-circle" src="<?= asset('/front') ?>/assets/images/avatar/01.jpg" alt="avatar">
								</div>
								<!-- Content -->
								<p class="h5 fw-light mb-3">"Size-like body someone had. Are conduct viewing boy minutes warrant the expense? Tolerably behavior may admit daughters offending her ask own. Praise effects wish change way and any wanted."</p>
								<ul class="list-inline small mb-3">
									<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
									<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
									<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
									<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
									<li class="list-inline-item"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
								</ul>
								<h5 class="mb-0">Carolyn Ortiz</h5>
								<span>Ceo of Google</span>
							</div>	

							<!-- Slider item -->
							<div>
								<!-- Avatar -->
								<div class="avatar avatar-xl mb-4">
									<img class="avatar-img rounded-circle" src="<?= asset('/front') ?>/assets/images/avatar/03.jpg" alt="avatar">
								</div>
								<!-- Content -->
								<p class="h5 fw-light mb-3">"Are conduct viewing boy minutes warrant the expense? Tolerably behavior may admit daughters offending her ask own. Praise effects wish change way and any wanted."</p>
								<ul class="list-inline small mb-3">
									<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
									<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
									<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
									<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
									<li class="list-inline-item"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
								</ul>
								<h5 class="mb-0">Louis Ferguson</h5>
								<span>Editor in Chief</span>
							</div>
						</div>
					</div>	
					<!-- Slider END -->	
				</div>
			</div>

		</div>
	</div>
</section>
<!-- =======================
Testimonials END -->

<!-- =======================
Top City START -->
<section class="bg-light">
	<div class="container">
		<div class="row g-4 align-items-center">
			<!-- Title -->
			<div class="col-lg-4">
				<h2 class="mb-4">Search destination by city</h2>
				<button class="btn btn-primary mb-0">View all</button>
			</div>

			<!-- Listing -->
			<div  class="col-lg-8">
				<div class="row g-4">
					<!-- Card item -->
					<div class="col-md-6">
						<div class="card card-body h-100 p-3">
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and text -->
								<div class="d-flex align-items-center">
									<img src="<?= asset('/front') ?>/assets/images/category/hotel/nearby/01.jpg" class="h-70px rounded-2" alt="">
		
									<div class="ms-3">
										<h5 class="mb-0"><a href="#">San Francisco</a></h5>
										<span>25 Listing</span>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-primary-soft btn-round flex-shrink-0 ms-2 mb-0"><i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>
		
					<!-- Card item -->
					<div class="col-md-6">
						<div class="card card-body h-100 p-3">
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and text -->
								<div class="d-flex align-items-center">
									<img src="<?= asset('/front') ?>/assets/images/category/hotel/nearby/02.jpg" class="h-70px rounded-2" alt="">
		
									<div class="ms-3">
										<h5 class="mb-0"><a href="#">Los Angeles</a></h5>
										<span>18 Listing</span>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-primary-soft btn-round flex-shrink-0 ms-2 mb-0"><i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>

					<!-- Card item -->
					<div class="col-md-6">
						<div class="card card-body h-100 p-3">
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and text -->
								<div class="d-flex align-items-center">
									<img src="<?= asset('/front') ?>/assets/images/category/hotel/nearby/04.jpg" class="h-70px rounded-2" alt="">
		
									<div class="ms-3">
										<h5 class="mb-0"><a href="#">Sanjosh</a></h5>
										<span>15 Listing</span>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-primary-soft btn-round flex-shrink-0 ms-2 mb-0"><i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>

					<!-- Card item -->
					<div class="col-md-6">
						<div class="card card-body h-100 p-3">
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and text -->
								<div class="d-flex align-items-center">
									<img src="<?= asset('/front') ?>/assets/images/category/hotel/nearby/05.jpg" class="h-70px rounded-2" alt="">
		
									<div class="ms-3">
										<h5 class="mb-0"><a href="#">New York</a></h5>
										<span>12 Listing</span>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-primary-soft btn-round flex-shrink-0 ms-2 mb-0"><i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>

					<!-- Card item -->
					<div class="col-md-6">
						<div class="card card-body h-100 p-3">
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and text -->
								<div class="d-flex align-items-center">
									<img src="<?= asset('/front') ?>/assets/images/category/hotel/nearby/07.jpg" class="h-70px rounded-2" alt="">
		
									<div class="ms-3">
										<h5 class="mb-0"><a href="#">Brazil, Rio</a></h5>
										<span>16 Listing</span>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-primary-soft btn-round flex-shrink-0 ms-2 mb-0"><i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>

					<!-- Card item -->
					<div class="col-md-6">
						<div class="card card-body h-100 p-3">
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and text -->
								<div class="d-flex align-items-center">
									<img src="<?= asset('/front') ?>/assets/images/category/hotel/nearby/09.jpg" class="h-70px rounded-2" alt="">
		
									<div class="ms-3">
										<h5 class="mb-0"><a href="#">Las Vegas</a></h5>
										<span>13 Listing</span>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-primary-soft btn-round flex-shrink-0 ms-2 mb-0"><i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
</section>
<!-- =======================
Top City END -->

<!-- =======================
Best deal START -->
<section>
	<div class="container">
		<!-- Title -->
		<div class="row mb-5">
			<div class="col-12 text-center">
				<h2 class="mb-0">Special Offers</h2>
			</div>
		</div>

		<!-- Slider START -->
		<div class="tiny-slider arrow-round arrow-blur arrow-hover">
			<div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-edge="2" data-dots="false" data-items-xl="3" data-items-lg="2" data-items-sm="1">

				<!-- Slider item -->
				<div class="h-100">
					<div class="card bg-primary bg-opacity-10 border border-2 border-primary border-dashed border-opacity-75 rounded-3 h-100">
						<div class="card-body">
							<!-- Title -->
							<h5 class="text-primary">Get extra 20% discount on all SPA deals</h5>
							<div class="d-flex justify-content-between flex-wrap align-items-center">
								<div class="bg-mode rounded-2 px-3 py-2 d-inline-block">
									<h6 class="fw-normal user-select-all mb-0">LOG125F</h6>
								</div>
								<span class="h6 fw-light small mb-0">Valid till: 31 Dec</span>
							</div>	
						</div>
					</div>
				</div>

				<!-- Slider item -->
				<div class="h-100">
					<div class="card border rounded-3 overflow-hidden h-100">
						<div class="row g-0 align-items-center">
							<!-- Image -->
							<div class="col-sm-6">
								<img src="<?= asset('/front') ?>/assets/images/offer/02.jpg" class="card-img rounded-0" alt="">
							</div>

							<!-- Title and content -->
							<div class="col-sm-6">
								<div class="card-body px-3">
									<h6 class="card-title"><a href="offer-detail.html" class="stretched-link">Hot Summer Nights</a></h6>
									<p class="mb-0">Up to 3 nights free!</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider item -->
				<div class="h-100">
					<div class="card bg-info bg-opacity-10 border border-2 border-info border-dashed border-opacity-75 rounded-3 h-100">
						<div class="card-body">
							<!-- Title -->
							<h5 class="text-info">Get extra 20% discount on all Activity deals</h5>
							<div class="d-flex justify-content-between flex-wrap align-items-center">
								<div class="bg-mode rounded-2 px-3 py-2 d-inline-block">
									<h6 class="fw-normal user-select-all mb-0">LOG125F</h6>
								</div>
								<span class="h6 fw-light small mb-0">Valid till: 31 Dec</span>
							</div>	
						</div>
					</div>
				</div>

				<!-- Slider item -->
				<div class="h-100">
					<div class="card border rounded-3 overflow-hidden h-100">
						<div class="row g-0 align-items-center">
							<!-- Image -->
							<div class="col-sm-6">
								<img src="<?= asset('/front') ?>/assets/images/offer/01.jpg" class="card-img rounded-0" alt="">
							</div>

							<!-- Title and content -->
							<div class="col-sm-6">
								<div class="card-body px-3">
									<h6 class="card-title"><a href="offer-detail.html" class="stretched-link">Daily 50 Lucky Winners get a Free Stay</a></h6>
									<p class="mb-0">Valid till: 15 Nov</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider item -->
				<div class="h-100">
					<div class="card border rounded-3 overflow-hidden h-100">
						<div class="row g-0 align-items-center">
							<!-- Image -->
							<div class="col-sm-6">
								<img src="<?= asset('/front') ?>/assets/images/offer/03.jpg" class="card-img rounded-0" alt="">
							</div>

							<!-- Title and content -->
							<div class="col-sm-6">
								<div class="card-body px-3">
									<h6 class="card-title"><a href="offer-detail.html" class="stretched-link">Book & Enjoy</a></h6>
									<p class="mb-0">20% Off on the best available room rate</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<!-- Slider END -->
	</div>
</section>
<!-- =======================
Best deal END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class="bg-dark py-7">
	<div class="container">
		<div class="row mx-auto">
			<div class="col-md-10 col-xl-6 mx-auto text-center">
				<!-- Logo -->
				<img class="mx-auto h-60px" src="<?= asset('/front') ?>/assets/images/logo-light.svg" alt="logo">
				<p class="mt-3 text-white">Speedily say has suitable disposal add boy. On forth doubt miles of child. Exercise joy man children rejoiced.</p>
				<!-- Links -->
				<ul class="nav justify-content-between text-primary-hover mt-3 mt-md-0">
					<li class="nav-item"><a class="nav-link p-2 text-white" href="#">About</a></li>
					<li class="nav-item"><a class="nav-link p-2 text-white" href="#">Terms</a></li>
					<li class="nav-item"><a class="nav-link p-2 text-white" href="#">Privacy</a></li>
					<li class="nav-item"><a class="nav-link p-2 text-white" href="#">Career</a></li>
					<li class="nav-item"><a class="nav-link p-2 text-white" href="#">Contact us</a></li>
					<li class="nav-item"><a class="nav-link p-2 text-white" href="#">Cookies</a></li>
				</ul>
				<!-- Social media button -->
				<ul class="list-inline mt-3 mb-0">
					<li class="list-inline-item"> 
						<a class="btn btn-white btn-sm shadow px-2 text-facebook" href="#">
							<i class="fab fa-fw fa-facebook-f"></i>
						</a> 
					</li>
					<li class="list-inline-item"> 
						<a class="btn btn-white btn-sm shadow px-2 text-instagram" href="#">
							<i class="fab fa-fw fa-instagram"></i>
						</a> 
					</li>
					<li class="list-inline-item"> 
						<a class="btn btn-white btn-sm shadow px-2 text-twitter" href="#">
							<i class="fab fa-fw fa-twitter"></i>
						</a> 
					</li>
					<li class="list-inline-item"> 
						<a class="btn btn-white btn-sm shadow px-2 text-linkedin" href="#">
							<i class="fab fa-fw fa-linkedin-in"></i>
						</a> 
					</li>
				</ul>
				<!-- copyright text -->
				<div class="text-muted text-primary-hover mt-3"> Copyrights <a href="#" class="text-muted">©2022 Booking</a>. All rights reserved. </div>
			</div>
		</div>
		
	</div>
</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"></div>

<!-- Bootstrap JS -->
<script src="<?= asset('/front') ?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="<?= asset('/front') ?>/assets/vendor/choices/js/choices.min.js"></script>
<script src="<?= asset('/front') ?>/assets/vendor/tiny-slider/tiny-slider.js"></script>
<script src="<?= asset('/front') ?>/assets/vendor/flatpickr/js/flatpickr.min.js"></script>
<script src="<?= asset('/front') ?>/assets/vendor/glightbox/js/glightbox.js"></script>

<!-- ThemeFunctions -->
<script src="<?= asset('/front') ?>/assets/js/functions.js"></script>

</body>

</html>