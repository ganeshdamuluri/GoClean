
		<!DOCTYPE html>

		<html>

			<head>

				<title>Booking a car Clean- mr Car Clean</title>
				<meta name="keywords" content="" />
				<meta name="description" content="" />

				<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
				<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

				<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,700,900&amp;subset=latin,latin-ext">
				<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Serif:700italic,700,400italic&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic">

				<link rel="stylesheet" type="text/css" href="../../assets/style/jquery.qtip.css"/>
				<link rel="stylesheet" type="text/css" href="../../assets/style/jquery-ui.min.css"/>
				<link rel="stylesheet" type="text/css" href="../../assets/style/superfish.css"/>
				<link rel="stylesheet" type="text/css" href="../../assets/style/flexnav.css"/>
				<link rel="stylesheet" type="text/css" href="../../assets/style/DateTimePicker.min.css"/>
				<link rel="stylesheet" type="text/css" href="../../assets/style/fancybox/jquery.fancybox.css"/>
				<link rel="stylesheet" type="text/css" href="../../assets/style/fancybox/helpers/jquery.fancybox-buttons.css"/>
				<link rel="stylesheet" type="text/css" href="../../assets/style/revolution/layers.css"/>
				<link rel="stylesheet" type="text/css" href="../../assets/style/revolution/settings.css"/>
				<link rel="stylesheet" type="text/css" href="../../assets/style/revolution/navigation.css"/>
				<link rel="stylesheet" type="text/css" href="../../assets/style/base.css"/>
				<link rel="stylesheet" type="text/css" href="../../assets/style/responsive.css"/>

				<script type="text/javascript" src="../../assets/script/jquery.min.js"></script>

			</head>

			<body class="template-page-book-your-wash">

				<!-- Header -->
				<div class="template-header template-header-background template-header-background-1">

					<!-- Top header -->
					<div class="template-header-top">

						<!-- Logo -->
						<div class="template-header-top-logo">
							<a href="index.html" title="">
								<img src="../../assets/media/image/logo.png" alt="" class="template-logo"/>
								<img src="../../assets/media/image/logo_sticky.png" alt="" class="template-logo template-logo-sticky"/>
							</a>
						</div>

						<!-- Menu-->
						<div class="template-header-top-menu template-main">
							<nav>

								<!-- Default menu-->
								<div class="template-component-menu-default">
									<ul class="sf-menu">
										<li><a href="">Home</a></li>
										<li><a href="">About Us</a></li>
										<li><a href="" class="template-state-selected">Booking</a></li>
										<li><a href="">Services</a></li>
										<li><a href="">Contact</a></li>
									</ul>
								</div>

							</nav>
							<nav>

								<!-- Mobile menu-->
								<div class="template-component-menu-responsive">
									<ul class="flexnav">
										<li><a href="#"><span class="touch-button template-icon-meta-arrow-large-tb template-component-menu-button-close"></span>&nbsp;</a></li>
										<li><a href="index.html">Home</a></li>
										<li><a href="#.html">About Us</a></li>
										<li><a href="book-your-wash.html" class="template-state-selected">Booking</a></li>
										<li><a href="#.html">Services</a></li>
										<li><a href="#.html">Contact</a></li>
									</ul>
								</div>

							</nav>
							<script type="text/javascript">
								jQuery(document).ready(function($)
								{
									$('.template-header-top').templateHeader();
								});
							</script>
						</div>

						<!-- Social icons -->
						<div class="template-header-top-icon-list template-component-social-icon-list-1">
							<ul class="template-component-social-icon-list">
								<li><a href="https://twitter.com/quanticalabs" class="template-icon-social-twitter" target="_blank"></a></li>
								<li><a href="https://www.facebook.com/QuanticaLabs" class="template-icon-social-facebook" target="_blank"></a></li>
								<li><a href="https://dribbble.com/quanticalabs" class="template-icon-social-dribbble" target="_blank"></a></li>
								<li><a href="book-your-wash.html" class="template-icon-meta-cart"></a></li>
								<li><a href="#" class="template-icon-meta-search"></a></li>
								<li><a href="#" class="template-icon-meta-menu"></a></li>
							</ul>
						</div>

					</div>

					<div class="template-header-bottom">

						<div class="template-main">

							<div class="template-header-bottom-page-title">
								<h1>Book your wash</h1>
							</div>

							<div class="template-header-bottom-page-breadcrumb">
								<a href="index.html">Home</a><span class="template-icon-meta-arrow-right-12"></span><a href="#">Book your wash</a>
							</div>

						</div>

					</div>

				</div>

				<!-- Content -->
				<div class="template-content">

					<!-- Section -->
					<div class="template-component-booking template-section template-main" id="template-booking">

						<!-- Booking form -->
						<form action="{{ route('addorder') }}"  method="POST" id="form2">
                        {{ csrf_field() }}

							<ul>

								<!-- Vehcile list -->

								<li>

									<!-- Step -->
									<div class="template-component-booking-item-header template-clear-fix">
										<span>
											<span>1</span>
											<span>/</span>
											<span>4</span>
										</span>
										<h3>Vehicle type</h3>
										<h5>Select vehicle type below.</h5>
									</div>

									<!-- Content -->
									<div class="template-component-booking-item-content">

										<!-- Vehicle list -->
										<ul class="template-component-booking-vehicle-list">

											<!-- Vehicle -->
											<li data-id="regular-size-car">

												<div>

													<!-- Icon -->
													<div class="template-icon-vehicle-small-car"></div>

													<!-- Name -->
													<div>Regular Size Car</div>

												</div>

											</li>

											<!-- Vehicle -->
											<li data-id="medium-size-car">
												<div>
													<div class="template-icon-vehicle-car-mid-size"></div>
													<div>Medium Size Car</div>
												</div>
											</li>

											<!-- Vehicle -->
											<li data-id="compact-suv">
												<div>
													<div class="template-icon-vehicle-suv"></div>
													<div>Compact SUV</div>
												</div>
											</li>

											<!-- Vehicle -->
											<li data-id="minivan">
												<div>
													<div class="template-icon-vehicle-minivan"></div>
													<div>Minivan</div>
												</div>
											</li>

											<!-- Vehicle -->
											<li data-id="pickup-truck">
												<div>
													<div class="template-icon-vehicle-pickup"></div>
													<div>Pickup Truck</div>
												</div>
											</li>

											<!-- Vehicle -->
											<li data-id="cargo-truck">
												<div>
													<div class="template-icon-vehicle-truck-mid-size"></div>
													<div>Cargo Truck</div>
												</div>
											</li>

										</ul>

									</div>

								</li>
														<!-- Package list -->


								<li>

									<!-- Step -->
									<div class="template-component-booking-item-header template-clear-fix">
										<span>
											<span>2</span>
											<span>/</span>
											<span>4</span>
										</span>
										<h3>Wash packages</h3>
										<h5>Which wash is best for your vehicle?</h5>
									</div>

									<!-- Content -->
									<div class="template-component-booking-item-content">

										<!-- Package list -->
										<ul class="template-component-booking-package-list">

											<!-- Package -->
											<li data-id="basic-hand-wash-1" data-id-vehicle-rel="regular-size-car,compact-suv,minivan,pickup-truck,cargo-truck">

												<!-- Header -->
												<h4 class="template-component-booking-package-name">Basic Hand Wash</h4>

												<!-- Price -->
												<div class="template-component-booking-package-price">
													<span class="template-component-booking-package-price-currency">$</span>
													<span class="template-component-booking-package-price-total">15</span>
													<span class="template-component-booking-package-price-decimal">95</span>
												</div>

												<!-- Duration -->
												<div class="template-component-booking-package-duration">
													<span class="template-icon-booking-meta-duration"></span>
													<span class="template-component-booking-package-duration-value">25</span>
													<span class="template-component-booking-package-duration-unit">min</span>
												</div>

												<!-- Services -->
												<ul class="template-component-booking-package-service-list">
													<li data-id="exterior-hand-wash">Exterior Hand Wash</li>
													<li data-id="towel-hand-dry">Towel Hand Dry</li>
													<li data-id="wheel-shine">Wheel Shine</li>
												</ul>

												<!-- Button -->
												<div class="template-component-button-box">
													<a href="#" class="template-component-button">Book Now</a>
												</div>

											</li>

											<!-- Package -->
											<li data-id="basic-hand-wash-2" data-id-vehicle-rel="medium-size-car">

												<!-- Header -->
												<h4 class="template-component-booking-package-name">Basic Hand Wash</h4>

												<!-- Price -->
												<div class="template-component-booking-package-price">
													<span class="template-component-booking-package-price-currency">$</span>
													<span class="template-component-booking-package-price-total">17</span>
													<span class="template-component-booking-package-price-decimal">95</span>
												</div>

												<!-- Duration -->
												<div class="template-component-booking-package-duration">
													<span class="template-icon-booking-meta-duration"></span>
													<span class="template-component-booking-package-duration-value">30</span>
													<span class="template-component-booking-package-duration-unit">min</span>
												</div>

												<!-- Services -->
												<ul class="template-component-booking-package-service-list">
													<li data-id="exterior-hand-wash">Exterior Hand Wash</li>
													<li data-id="towel-hand-dry">Towel Hand Dry</li>
													<li data-id="wheel-shine">Wheel Shine</li>
												</ul>

												<!-- Button -->
												<div class="template-component-button-box">
													<a href="#" class="template-component-button">Book Now</a>
												</div>

											</li>

											<!-- Package -->
											<li data-id="deluxe-wash-1" data-id-vehicle-rel="regular-size-car,compact-suv,minivan,pickup-truck,cargo-truck">
												<h4 class="template-component-booking-package-name">Deluxe Wash</h4>
												<div class="template-component-booking-package-price">
													<span class="template-component-booking-package-price-currency">$</span>
													<span class="template-component-booking-package-price-total">27</span>
													<span class="template-component-booking-package-price-decimal">95</span>
												</div>
												<div class="template-component-booking-package-duration">
													<span class="template-icon-booking-meta-duration"></span>
													<span class="template-component-booking-package-duration-value">45</span>
													<span class="template-component-booking-package-duration-unit">min</span>
												</div>
												<ul class="template-component-booking-package-service-list">
													<li data-id="exterior-hand-wash">Exterior Hand Wash</li>
													<li data-id="towel-hand-dry">Towel Hand Dry</li>
													<li data-id="wheel-shine">Wheel Shine</li>
													<li data-id="tire-dressing">Tire Dressing</li>
													<li data-id="windows-in-and-out">Windows In &amp; Out</li>
													<li data-id="sealer-hand-wax">Sealer Hand Wax</li>
												</ul>
												<div class="template-component-button-box">
													<a href="#" class="template-component-button">Book Now</a>
												</div>
											</li>

											<!-- Package -->
											<li data-id="deluxe-wash-2" data-id-vehicle-rel="medium-size-car">
												<h4 class="template-component-booking-package-name">Deluxe Wash</h4>
												<div class="template-component-booking-package-price">
													<span class="template-component-booking-package-price-currency">$</span>
													<span class="template-component-booking-package-price-total">30</span>
													<span class="template-component-booking-package-price-decimal">95</span>
												</div>
												<div class="template-component-booking-package-duration">
													<span class="template-icon-booking-meta-duration"></span>
													<span class="template-component-booking-package-duration-value">55</span>
													<span class="template-component-booking-package-duration-unit">min</span>
												</div>
												<ul class="template-component-booking-package-service-list">
													<li data-id="exterior-hand-wash">Exterior Hand Wash</li>
													<li data-id="towel-hand-dry">Towel Hand Dry</li>
													<li data-id="wheel-shine">Wheel Shine</li>
													<li data-id="tire-dressing">Tire Dressing</li>
													<li data-id="windows-in-and-out">Windows In &amp; Out</li>
													<li data-id="sealer-hand-wax">Sealer Hand Wax</li>
												</ul>
												<div class="template-component-button-box">
													<a href="#" class="template-component-button">Book Now</a>
												</div>
											</li>

											<!-- Package -->
											<li data-id="ultimate-shine-1" data-id-vehicle-rel="regular-size-car,compact-suv,minivan">
												<h4 class="template-component-booking-package-name">Ultimate Shine</h4>
												<div class="template-component-booking-package-price">
													<span class="template-component-booking-package-price-currency">$</span>
													<span class="template-component-booking-package-price-total">40</span>
													<span class="template-component-booking-package-price-decimal">45</span>
												</div>
												<div class="template-component-booking-package-duration">
													<span class="template-icon-booking-meta-duration"></span>
													<span class="template-component-booking-package-duration-value">60</span>
													<span class="template-component-booking-package-duration-unit">min</span>
												</div>
												<ul class="template-component-booking-package-service-list">
													<li data-id="exterior-hand-wash">Exterior Hand Wash</li>
													<li data-id="towel-hand-dry">Towel Hand Dry</li>
													<li data-id="wheel-shine">Wheel Shine</li>
													<li data-id="tire-dressing">Tire Dressing</li>
													<li data-id="windows-in-and-out">Windows In &amp; Out</li>
													<li data-id="sealer-hand-wax">Sealer Hand Wax</li>
													<li data-id="interior-vacuum">Interior Vacuum</li>
													<li data-id="trunk-vacuum">Trunk Vacuum</li>
													<li data-id="door-shuts-and-plastics">Door Shuts &amp; Plastics</li>
													<li data-id="dashboard-clean">Dashboard Clean</li>
												</ul>
												<div class="template-component-button-box">
													<a href="#" class="template-component-button">Book Now</a>
												</div>
											</li>

											<!-- Package -->
											<li data-id="ultimate-shine-2" data-id-vehicle-rel="medium-size-car">
												<h4 class="template-component-booking-package-name">Ultimate Shine</h4>
												<div class="template-component-booking-package-price">
													<span class="template-component-booking-package-price-currency">$</span>
													<span class="template-component-booking-package-price-total">52</span>
													<span class="template-component-booking-package-price-decimal">95</span>
												</div>
												<div class="template-component-booking-package-duration">
													<span class="template-icon-booking-meta-duration"></span>
													<span class="template-component-booking-package-duration-value">80</span>
													<span class="template-component-booking-package-duration-unit">min</span>
												</div>
												<ul class="template-component-booking-package-service-list">
													<li data-id="exterior-hand-wash">Exterior Hand Wash</li>
													<li data-id="towel-hand-dry">Towel Hand Dry</li>
													<li data-id="wheel-shine">Wheel Shine</li>
													<li data-id="tire-dressing">Tire Dressing</li>
													<li data-id="windows-in-and-out">Windows In &amp; Out</li>
													<li data-id="sealer-hand-wax">Sealer Hand Wax</li>
													<li data-id="interior-vacuum">Interior Vacuum</li>
													<li data-id="trunk-vacuum">Trunk Vacuum</li>
													<li data-id="door-shuts-and-plastics">Door Shuts &amp; Plastics</li>
													<li data-id="dashboard-clean">Dashboard Clean</li>
												</ul>
												<div class="template-component-button-box">
													<a href="#" class="template-component-button">Book Now</a>
												</div>
											</li>

											<!-- Package -->
											<li data-id="platinium-works-1" data-id-vehicle-rel="regular-size-car">
												<h4 class="template-component-booking-package-name">Platinum Works</h4>
												<div class="template-component-booking-package-price">
													<span class="template-component-booking-package-price-currency">$</span>
													<span class="template-component-booking-package-price-total">65</span>
													<span class="template-component-booking-package-price-decimal">95</span>
												</div>
												<div class="template-component-booking-package-duration">
													<span class="template-icon-booking-meta-duration"></span>
													<span class="template-component-booking-package-duration-value">100</span>
													<span class="template-component-booking-package-duration-unit">min</span>
												</div>
												<ul class="template-component-booking-package-service-list">
													<li data-id="exterior-hand-wash">Exterior Hand Wash</li>
													<li data-id="towel-hand-dry">Towel Hand Dry</li>
													<li data-id="wheel-shine">Wheel Shine</li>
													<li data-id="tire-dressing">Tire Dressing</li>
													<li data-id="windows-in-and-out">Windows In &amp; Out</li>
													<li data-id="sealer-hand-wax">Sealer Hand Wax</li>
													<li data-id="interior-vacuum">Interior Vacuum</li>
													<li data-id="trunk-vacuum">Trunk Vacuum</li>
													<li data-id="door-shuts-and-plastics">Door Shuts &amp; Plastics</li>
													<li data-id="dashboard-clean">Dashboard Clean</li>
													<li data-id="air-freshener">Air Freshener</li>
													<li data-id="triple-coat-hand-wax">Triple Coat Hand Wax</li>
													<li data-id="exterior-vinyl-protectant">Exterior Vinyl Protectant</li>
												</ul>
												<div class="template-component-button-box">
													<a href="#" class="template-component-button">Book Now</a>
												</div>
											</li>

											<!-- Package -->
											<li data-id="platinium-works-2" data-id-vehicle-rel="medium-size-car">
												<h4 class="template-component-booking-package-name">Platinum Works</h4>
												<div class="template-component-booking-package-price">
													<span class="template-component-booking-package-price-currency">$</span>
													<span class="template-component-booking-package-price-total">82</span>
													<span class="template-component-booking-package-price-decimal">95</span>
												</div>
												<div class="template-component-booking-package-duration">
													<span class="template-icon-booking-meta-duration"></span>
													<span class="template-component-booking-package-duration-value">125</span>
													<span class="template-component-booking-package-duration-unit">min</span>
												</div>
												<ul class="template-component-booking-package-service-list">
													<li data-id="exterior-hand-wash">Exterior Hand Wash</li>
													<li data-id="towel-hand-dry">Towel Hand Dry</li>
													<li data-id="wheel-shine">Wheel Shine</li>
													<li data-id="tire-dressing">Tire Dressing</li>
													<li data-id="windows-in-and-out">Windows In &amp; Out</li>
													<li data-id="sealer-hand-wax">Sealer Hand Wax</li>
													<li data-id="interior-vacuum">Interior Vacuum</li>
													<li data-id="trunk-vacuum">Trunk Vacuum</li>
													<li data-id="door-shuts-and-plastics">Door Shuts &amp; Plastics</li>
													<li data-id="dashboard-clean">Dashboard Clean</li>
													<li data-id="air-freshener">Air Freshener</li>
													<li data-id="triple-coat-hand-wax">Triple Coat Hand Wax</li>
													<li data-id="exterior-vinyl-protectant">Exterior Vinyl Protectant</li>
												</ul>
												<div class="template-component-button-box">
													<a href="#" class="template-component-button">Book Now</a>
												</div>
											</li>

										</ul>

									</div>

								</li>
														<!-- Service list -->


								<li>

									<!-- Step -->
									<div class="template-component-booking-item-header template-clear-fix">
										<span>
											<span>3</span>
											<span>/</span>
											<span>4</span>
										</span>
										<h3>Services menu</h3>
										<h5>A la carte services menu.</h5>
									</div>

									<!-- Content -->
									<div class="template-component-booking-item-content">

										<!-- Service list -->
										<ul class="template-component-booking-service-list">

											<!-- Service -->
											<li data-id="exterior-hand-wash" class="template-clear-fix">

												<!-- Name -->
												<div class="template-component-booking-service-name">
													<span>Exterior Hand Wash</span>
													<a href="#" class="template-component-more-link">
														<span>More...</span>
														<span>Less...</span>
													</a>
													<div class="template-component-more-content">
														We hand wash your paint with a pH neutral shampoo, we remove dirt without damaging paint or trims. Your car&#309;s
														exterior is chamois-dried to prevent water marks forming on the paint and high pressure air is used to remove
														water from panel joins and trim.
													</div>
												</div>

												<!-- Duration -->
												<div class="template-component-booking-service-duration">
													<span class="template-icon-booking-meta-duration"></span>
													<span class="template-component-booking-service-duration-value">10</span>
													<span class="template-component-booking-service-duration-unit">min</span>
												</div>

												<!-- Price -->
												<div class="template-component-booking-service-price">
													<span class="template-icon-booking-meta-price"></span>
													<span class="template-component-booking-service-price-currency">$</span>
													<span class="template-component-booking-service-price-value"></span>
													<span class="template-component-booking-service-price-unit">7</span>
													<span class="template-component-booking-service-price-decimal">.95</span>
												</div>

												<!-- Button -->
												<div class="template-component-button-box">
													<a href="#" class="template-component-button">Select</a>
												</div>

											</li>

											<!-- Service -->
											<li data-id="towel-hand-dry" class="template-clear-fix">
												<div class="template-component-booking-service-name">
													<span>Towel Hand Dry</span>
													<a href="#" class="template-component-more-link">
														<span>More...</span>
														<span>Less...</span>
													</a>
													<div class="template-component-more-content">
														Your car’s exterior is chamois-dried to prevent water marks forming on the paint and high pressure air is used
														to remove water from panel joins and trim.
													</div>
												</div>
												<div class="template-component-booking-service-duration">
													<span class="template-icon-booking-meta-duration"></span>
													<span class="template-component-booking-service-duration-value">10</span>
													<span class="template-component-booking-service-duration-unit">min</span>
												</div>
												<div class="template-component-booking-service-price">
													<span class="template-icon-booking-meta-price"></span>
													<span class="template-component-booking-service-price-currency">$</span>
													<span class="template-component-booking-service-price-value">5.50</span>
												</div>
												<div class="template-component-button-box">
													<a href="#" class="template-component-button">Select</a>
												</div>
											</li>

											<!-- Service -->
											<li data-id="wheel-shine" class="template-clear-fix">
												<div class="template-component-booking-service-name">
													<span>Wheel Shine</span>
												</div>
												<div class="template-component-booking-service-duration">
													<span class="template-icon-booking-meta-duration"></span>
													<span class="template-component-booking-service-duration-value">5</span>
													<span class="template-component-booking-service-duration-unit">min</span>
												</div>
												<div class="template-component-booking-service-price">
													<span class="template-icon-booking-meta-price"></span>
													<span class="template-component-booking-service-price-currency">$</span>
													<span class="template-component-booking-service-price-value">5.00</span>
												</div>
												<div class="template-component-button-box">
													<a href="#" class="template-component-button">Select</a>
												</div>
											</li>

											<!-- Service -->
											<li data-id="tire-dressing" class="template-clear-fix">
												<div class="template-component-booking-service-name">
													<span>Tire Dressing</span>
												</div>
												<div class="template-component-booking-service-duration">
													<span class="template-icon-booking-meta-duration"></span>
													<span class="template-component-booking-service-duration-value">5</span>
													<span class="template-component-booking-service-duration-unit">min</span>
												</div>
												<div class="template-component-booking-service-price">
													<span class="template-icon-booking-meta-price"></span>
													<span class="template-component-booking-service-price-currency">$</span>
													<span class="template-component-booking-service-price-value">2.50</span>
												</div>
												<div class="template-component-button-box">
													<a href="#" class="template-component-button">Select</a>
												</div>
											</li>

											<!-- Service -->
											<li data-id="windows-in-and-out" class="template-clear-fix">
												<div class="template-component-booking-service-name">
													<span>Windows In &amp; Out</span>
													<a href="#" class="template-component-more-link">
														<span>More...</span>
														<span>Less...</span>
													</a>
													<div class="template-component-more-content">
														We clean the inside of your windscreen and other interior windows. We give special attention to the rear view
														mirror and any vanity mirrors. If you have got a glass sunroof that will be cleaned too.
													</div>
												</div>
												<div class="template-component-booking-service-duration">
													<span class="template-icon-booking-meta-duration"></span>
													<span class="template-component-booking-service-duration-value">5</span>
													<span class="template-component-booking-service-duration-unit">min</span>
												</div>
												<div class="template-component-booking-service-price">
													<span class="template-icon-booking-meta-price"></span>
													<span class="template-component-booking-service-price-currency">$</span>
													<span class="template-component-booking-service-price-value">4.25</span>
												</div>
												<div class="template-component-button-box">
													<a href="#" class="template-component-button">Select</a>
												</div>
											</li>

											<!-- Service -->
											<li data-id="sealer-hand-wax" class="template-clear-fix">
												<div class="template-component-booking-service-name">
													<span>Sealer Hand Wax</span>
												</div>
												<div class="template-component-booking-service-duration">
													<span class="template-icon-booking-meta-duration"></span>
													<span class="template-component-booking-service-duration-value">0</span>
													<span class="template-component-booking-service-duration-unit">min</span>
												</div>
												<div class="template-component-booking-service-price">
													<span class="template-icon-booking-meta-price"></span>
													<span class="template-component-booking-service-price-currency">$</span>
													<span class="template-component-booking-service-price-value">4.95</span>
												</div>
												<div class="template-component-button-box">
													<a href="#" class="template-component-button">Select</a>
												</div>
											</li>

											<!-- Service -->
											<li data-id="interior-vacuum" class="template-clear-fix">
												<div class="template-component-booking-service-name">
													<span>Interior Vacuum</span>
													<a href="#" class="template-component-more-link">
														<span>More...</span>
														<span>Less...</span>
													</a>
													<div class="template-component-more-content">
														We vacuum your seats, including all the creases in your fabric or leather, carpets and mats.
														We will not miss under your seats.
													</div>
												</div>
												<div class="template-component-booking-service-duration">
													<span class="template-icon-booking-meta-duration"></span>
													<span class="template-component-booking-service-duration-value">5</span>
													<span class="template-component-booking-service-duration-unit">min</span>
												</div>
												<div class="template-component-booking-service-price">
													<span class="template-icon-booking-meta-price"></span>
													<span class="template-component-booking-service-price-currency">$</span>
													<span class="template-component-booking-service-price-value">4.95</span>
												</div>
												<div class="template-component-button-box">
													<a href="#" class="template-component-button">Select</a>
												</div>
											</li>

											<!-- Service -->
											<li data-id="trunk-vacuum" class="template-clear-fix">
												<div class="template-component-booking-service-name">
													<span>Trunk Vacuum</span>
												</div>
												<div class="template-component-booking-service-duration">
													<span class="template-icon-booking-meta-duration"></span>
													<span class="template-component-booking-service-duration-value">5</span>
													<span class="template-component-booking-service-duration-unit">min</span>
												</div>
												<div class="template-component-booking-service-price">
													<span class="template-icon-booking-meta-price"></span>
													<span class="template-component-booking-service-price-currency">$</span>
													<span class="template-component-booking-service-price-value">3.50</span>
												</div>
												<div class="template-component-button-box">
													<a href="#" class="template-component-button">Select</a>
												</div>
											</li>

											<!-- Service -->
											<li data-id="door-shuts-and-plastics" class="template-clear-fix">
												<div class="template-component-booking-service-name">
													<span>Door Shuts &amp; Plastics</span>
												</div>
												<div class="template-component-booking-service-duration">
													<span class="template-icon-booking-meta-duration"></span>
													<span class="template-component-booking-service-duration-value">5</span>
													<span class="template-component-booking-service-duration-unit">min</span>
												</div>
												<div class="template-component-booking-service-price">
													<span class="template-icon-booking-meta-price"></span>
													<span class="template-component-booking-service-price-currency">$</span>
													<span class="template-component-booking-service-price-value">4.50</span>
												</div>
												<div class="template-component-button-box">
													<a href="#" class="template-component-button">Select</a>
												</div>
											</li>

											<!-- Service -->
											<li data-id="dashboard-clean" class="template-clear-fix">
												<div class="template-component-booking-service-name">
													<span>Dashboard Clean</span>
												</div>
												<div class="template-component-booking-service-duration">
													<span class="template-icon-booking-meta-duration"></span>
													<span class="template-component-booking-service-duration-value">5</span>
													<span class="template-component-booking-service-duration-unit">min</span>
												</div>
												<div class="template-component-booking-service-price">
													<span class="template-icon-booking-meta-price"></span>
													<span class="template-component-booking-service-price-currency">$</span>
													<span class="template-component-booking-service-price-value">5.50</span>
												</div>
												<div class="template-component-button-box">
													<a href="#" class="template-component-button">Select</a>
												</div>
											</li>

											<!-- Service -->
											<li data-id="air-freshener" class="template-clear-fix">
												<div class="template-component-booking-service-name">
													<span>Air Freshener</span>
												</div>
												<div class="template-component-booking-service-duration">
													<span class="template-icon-booking-meta-duration"></span>
													<span class="template-component-booking-service-duration-value">0</span>
													<span class="template-component-booking-service-duration-unit">min</span>
												</div>
												<div class="template-component-booking-service-price">
													<span class="template-icon-booking-meta-price"></span>
													<span class="template-component-booking-service-price-currency">$</span>
													<span class="template-component-booking-service-price-value">1.50</span>
												</div>
												<div class="template-component-button-box">
													<a href="#" class="template-component-button">Select</a>
												</div>
											</li>

											<!-- Service -->
											<li data-id="triple-coat-hand-wax" class="template-clear-fix">
												<div class="template-component-booking-service-name">
													<span>Triple Coat Hand Wax</span>
												</div>
												<div class="template-component-booking-service-duration">
													<span class="template-icon-booking-meta-duration"></span>
													<span class="template-component-booking-service-duration-value">30</span>
													<span class="template-component-booking-service-duration-unit">min</span>
												</div>
												<div class="template-component-booking-service-price">
													<span class="template-icon-booking-meta-price"></span>
													<span class="template-component-booking-service-price-currency">$</span>
													<span class="template-component-booking-service-price-value">17.95</span>
												</div>
												<div class="template-component-button-box">
													<a href="#" class="template-component-button">Select</a>
												</div>
											</li>

											<!-- Service -->
											<li data-id="exterior-vinyl-protectant" class="template-clear-fix">
												<div class="template-component-booking-service-name">
													<span>Exterior Vinyl Protectant</span>
												</div>
												<div class="template-component-booking-service-duration">
													<span class="template-icon-booking-meta-duration"></span>
													<span class="template-component-booking-service-duration-value">5</span>
													<span class="template-component-booking-service-duration-unit">min</span>
												</div>
												<div class="template-component-booking-service-price">
													<span class="template-icon-booking-meta-price"></span>
													<span class="template-component-booking-service-price-currency">$</span>
													<span class="template-component-booking-service-price-value">5.25</span>
												</div>
												<div class="template-component-button-box">
													<a href="#" class="template-component-button">Select</a>
												</div>
											</li>

											<!-- Service -->
											<li data-id="rain-x-complete" class="template-clear-fix">
												<div class="template-component-booking-service-name">
													<span>Rain-X Complete</span>
													<a href="#" class="template-component-more-link">
														<span>More...</span>
														<span>Less...</span>
													</a>
													<div class="template-component-more-content">
														Rain-X Complete is a surface protectant designed to add premium shine, protection and water repellency to glass,
														paint, trim and chrome. After 24 hours Rain-X Complete actually cures onto the surfaces of your vehicle for
														better adhesion and enhanced protection.
													</div>
												</div>
												<div class="template-component-booking-service-duration">
													<span class="template-icon-booking-meta-duration"></span>
													<span class="template-component-booking-service-duration-value">5</span>
													<span class="template-component-booking-service-duration-unit">min</span>
												</div>
												<div class="template-component-booking-service-price">
													<span class="template-icon-booking-meta-price"></span>
													<span class="template-component-booking-service-price-currency">$</span>
													<span class="template-component-booking-service-price-value">4.75</span>
												</div>
												<div class="template-component-button-box">
													<a href="#" class="template-component-button">Select</a>
												</div>
											</li>

											<!-- Service -->
											<li data-id="engine-steam-clean" class="template-clear-fix">
												<div class="template-component-booking-service-name">
													<span>Engine Steam Clean</span>
												</div>
												<div class="template-component-booking-service-duration">
													<span class="template-icon-booking-meta-duration"></span>
													<span class="template-component-booking-service-duration-value">30</span>
													<span class="template-component-booking-service-duration-unit">min</span>
												</div>
												<div class="template-component-booking-service-price">
													<span class="template-icon-booking-meta-price"></span>
													<span class="template-component-booking-service-price-currency">$</span>
													<span class="template-component-booking-service-price-value">39.95</span>
												</div>
												<div class="template-component-button-box">
													<a href="#" class="template-component-button">Select</a>
												</div>
											</li>

											<!-- Service -->
											<li data-id="paint-protection" class="template-clear-fix">
												<div class="template-component-booking-service-name">
													<span>Paint Protection</span>
													<a href="#" class="template-component-more-link">
														<span>More...</span>
														<span>Less...</span>
													</a>
													<div class="template-component-more-content">
														Paint Protection helps preserve a car&#039;s original manufacturers paint.
														Using our high quality paint&nbsp;protectant can give your exterior the added strength, preserving it
														that glow and shine over many years to come.
													</div>
												</div>
												<div class="template-component-booking-service-duration">
													<span class="template-icon-booking-meta-duration"></span>
													<span class="template-component-booking-service-duration-value">180</span>
													<span class="template-component-booking-service-duration-unit">min</span>
												</div>
												<div class="template-component-booking-service-price">
													<span class="template-icon-booking-meta-price"></span>
													<span class="template-component-booking-service-price-currency">$</span>
													<span class="template-component-booking-service-price-value">350.00</span>
												</div>
												<div class="template-component-button-box">
													<a href="#" class="template-component-button">Select</a>
												</div>
											</li>

										</ul>

									</div>

								</li>
														<!-- Summary -->


								<li>

									<!-- Step -->
									<div class="template-component-booking-item-header template-clear-fix">
										<span>
											<span>4</span>
											<span>/</span>
											<span>4</span>
										</span>
										<h3>Booking summary</h3>
										<h5>Please provide us with your contact information.</h5>
									</div>


									<!-- Content -->
									<div class="template-component-booking-item-content">

										<ul class="template-component-booking-summary template-clear-fix">

											<!-- Duration -->
											<li class="template-component-booking-summary-duration">
												<div class="template-icon-booking-meta-total-duration"></div>
												<h5>
													<span>0</span>
													<span>h</span>
													&nbsp;
													<span>0</span>
													<span>min</span>
												</h5>
												<span>Duration</span>
											</li>

											<!-- Price -->
											<li class="template-component-booking-summary-price ">
												<div class="template-icon-booking-meta-total-price"></div>
												<h5>
													<span class="template-component-booking-summary-price-symbol">$</span>
													<span class="template-component-booking-summary-price-value">0.00</span>
												</h5>
												<span>Total Price</span>
											</li>

										</ul>

									</div>

									<!-- Content -->
									<div class="template-component-booking-item-content template-margin-top-reset">

										<!-- Layout -->
										<ul class="template-layout-50x50 template-layout-margin-reset template-clear-fix">

											<!-- First name -->
											<li class="template-layout-column-left template-margin-bottom-reset">
												<div class="template-component-form-field">
													<label for="booking-form-first-name">First Name *</label>
													<input type="text" name="booking-form-first-name" id="booking-form-first-name"/>
												</div>
											</li>

											<!-- Second name -->
											<li class="template-layout-column-right template-margin-bottom-reset">
												<div class="template-component-form-field">
													<label for="booking-form-second-name">Second Name *</label>
													<input type="text" name="booking-form-second-name" id="booking-form-second-name"/>
												</div>
											</li>

										</ul>

										<!-- Layout -->
										<ul class="template-layout-50x50 template-layout-margin-reset template-clear-fix">

											<!-- E-mail address -->
											<li class="template-layout-column-left template-margin-bottom-reset">
												<div class="template-component-form-field">
													<label for="booking-form-email">E-mail Address *</label>
													<input type="text" name="booking-form-email" id="booking-form-email"/>
												</div>
											</li>

											<!-- Phone number -->
											<li class="template-layout-column-right template-margin-bottom-reset">
												<div class="template-component-form-field">
													<label for="booking-form-phone">Phone Number *</label>
													<input type="text" name="booking-form-phone" id="booking-form-phone"/>
												</div>
											</li>

										</ul>

										<!-- Layout -->
										<ul class="template-layout-33x33x33 template-layout-margin-reset template-clear-fix">

											<!-- Vehicle make -->
											<li class="template-layout-column-left template-margin-bottom-reset">
												<div class="template-component-form-field">
													<label for="booking-form-vehicle-make">Vehicle Make</label>
													<input type="text" name="booking-form-vehicle-make" id="booking-form-vehicle-make"/>
												</div>
											</li>

											<!-- Vehicle model -->
											<li class="template-layout-column-center template-margin-bottom-reset">
												<div class="template-component-form-field">
													<label for="booking-form-vehicle-model">Vehicle Model</label>
													<input type="text" name="booking-form-vehicle-model" id="booking-form-vehicle-model"/>
												</div>
											</li>


											<!-- Booking date -->
											<li class="template-layout-column-right template-margin-bottom-reset">
												<div class="template-component-form-field">
													<label for="booking-form-date">Booking Date *</label>
													<input type="text" data-field="datetime" name="booking-form-date" id="booking-form-date"/>
												</div>
											</li>

										</ul>

										<!-- Layout -->
										<ul class="template-layout-100 template-layout-margin-reset template-clear-fix">

											<!-- Message -->
											<li>
												<div class="template-component-form-field">
													<label for="booking-form-message">Message *</label>
													<textarea rows="1" cols="1" name="booking-form-message" id="booking-form-message"></textarea>
												</div>
											</li>

										</ul>

										<!-- Text + submit button -->
										<div class="template-align-center template-clear-fix template-margin-top-2">
											<p class="template-padding-reset template-margin-bottom-2">We will confirm your appointment with you by phone or e-mail within 24 hours of receiving your request.</p>
											<input type="hidden" value="" name="booking-form-data" id="booking-form-data"/>
											<input action="{{ route('addorder') }}" type="submit" value="Confirm Booking" class="template-component-button" name="booking-form-submit" id="booking-form-submit"/> 
											
										</div>

									</div>

								</li>

							</ul>

						</form>

					</div>

				</div>

				<script type="text/javascript">
					jQuery(document).ready(function($)
					{
						$('#template-booking').booking();
					});
				</script>

				<!-- Footer -->
				<div class="template-footer">

					<div class="template-main">

						<!-- Footer top -->
						<div class="template-footer-top">

							<!-- Layout 25x25x25x25 -->
							<div class="template-layout-25x25x25x25 template-clear-fix">

								<!-- Left column -->
								<div class="template-layout-column-left">
									<h6>About</h6>
									<p>Autospan Hand Wash is an eco-friendly hand car wash and detailing service based in Portland.</p>
									<img src="../../assert/media/image/logo.png" alt="" class="template-logo" />
								</div>

								<!-- Center left column -->
								<div class="template-layout-column-center-left">
									<h6>Services</h6>
									<ul class="template-list-reset">
										<li><a href="service-style-1.html">Exterior Hand Wash</a></li>
										<li><a href="service-style-1.html">Tower Hand Dry</a></li>
										<li><a href="service-style-1.html">Tire Dressing</a></li>
										<li><a href="service-style-1.html">Wheel Shine</a></li>
										<li><a href="service-style-1.html">Interior Vacuum</a></li>
										<li><a href="service-style-1.html">Sealer Hand Wax</a></li>
									</ul>
								</div>

								<!-- Center right column -->
								<div class="template-layout-column-center-right">
									<h6>Company</h6>
									<ul class="template-list-reset">
										<li><a href="about-style-1.html">About Us</a></li>
										<li><a href="gallery.html">Gallery</a></li>
										<li><a href="service-style-2.html">Our Services</a></li>
										<li><a href="book-your-wash.html">Book Your Wash</a></li>
										<li><a href="gallery.html">Portfolio</a></li>
										<li><a href="contact-style-1.html">Contact</a></li>
									</ul>
								</div>

								<!-- Right column -->
								<div class="template-layout-column-right">
									<h6>Newsletter</h6>
									<form class="template-component-newsletter-form">
										<div class="template-component-form-field">
											<label for="newsletter-form-email">Your e-mail address *</label>
											<input type="text" name="newsletter-form-email" id="newsletter-form-email"/>
										</div>
										<div class="template-margin-top-2">
											<input type="submit" value="Subscribe" class="template-component-button" name="newsletter-form-submit" id="newsletter-form-submit"/>
										</div>
									</form>
								</div>

							</div>

						</div>

						<!-- Footer bottom -->
						<div class="template-footer-bottom">

							<!-- Social icon list -->
							<ul class="template-component-social-icon-list template-component-social-icon-list-2">
								<li><a href="https://twitter.com/quanticalabs" class="template-icon-social-twitter" target="_blank"></a></li>
								<li><a href="https://www.facebook.com/QuanticaLabs" class="template-icon-social-facebook" target="_blank"></a></li>
								<li><a href="https://dribbble.com/quanticalabs" class="template-icon-social-dribbble" target="_blank"></a></li>
								<li><a href="http://themeforest.net/user/QuanticaLabs/portfolio?ref=quanticalabs" class="template-icon-social-envato" target="_blank"></a></li>
								<li><a href="https://www.behance.net/quanticalabs" class="template-icon-social-behance" target="_blank"></a></li>
								<li><a href="https://www.youtube.com/user/quanticalabs" class="template-icon-social-youtube" target="_blank"></a></li>
							</ul>

							<!-- Copyright -->
							<div class="template-footer-bottom-copyright">
								By <a href="http://quanticalabs.com" target="_blank">QuanticaLabs</a> &copy; 2016 <a href="http://themeforest.net/user/QuanticaLabs/portfolio?ref=quanticalabs" target="_blank">Auto Spa Template</a>
							</div>

						</div>

					</div>

				</div>

				<!-- Search box -->
				<div class="template-component-search-form">
					<div></div>
					<form>
						<div>
							<input type="search" name="search"/>
							<span class="template-icon-meta-search"></span>
							<input type="submit" name="submit" value=""/>
						</div>
					</form>
				</div>

				<!-- Go to top button -->
				<a href="#go-to-top" class="template-component-go-to-top template-icon-meta-arrow-large-tb"></a>

				<!-- Wrapper for date picker -->
				<div id="dtBox"></div>

				<!-- JS files -->
				<script type="text/javascript" src="../../assets/script/jquery-ui.min.js"></script>
				<script type="text/javascript" src="../../assets/script/superfish.min.js"></script>
				<script type="text/javascript" src="../../assets/script/jquery.easing.js"></script>
				<script type="text/javascript" src="../../assets/script/jquery.blockUI.js"></script>
				<script type="text/javascript" src="../../assets/script/jquery.qtip.min.js"></script>
				<script type="text/javascript" src="../../assets/script/jquery.fancybox.js"></script>
				<script type="text/javascript" src="../../assets/script/isotope.pkgd.min.js"></script>
				<script type="text/javascript" src="../../assets/script/jquery.actual.min.js"></script>
				<script type="text/javascript" src="../../assets/script/jquery.flexnav.min.js"></script>
				<script type="text/javascript" src="../../assets/script/jquery.waypoints.min.js"></script>
				<script type="text/javascript" src="../../assets/script/sticky.min.js"></script>
				<script type="text/javascript" src="../../assets/script/jquery.scrollTo.min.js"></script>
				<script type="text/javascript" src="../../assets/script/jquery.fancybox-media.js"></script>
				<script type="text/javascript" src="../../assets/script/jquery.fancybox-buttons.js"></script>
				<script type="text/javascript" src="../../assets/script/jquery.carouFredSel.packed.js"></script>
				<script type="text/javascript" src="../../assets/script/jquery.responsiveElement.js"></script>
				<script type="text/javascript" src="../../assets/script/jquery.touchSwipe.min.js"></script>
				<script type="text/javascript" src="../../assets/script/DateTimePicker.min.js"></script>
				<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>

				<!-- Revolution Slider files -->
				<script type="text/javascript" src="../../assets/script/revolution/jquery.themepunch.revolution.min.js"></script>
				<script type="text/javascript" src="../../assets/script/revolution/jquery.themepunch.tools.min.js"></script>
				<script type="text/javascript" src="../../assets/script/revolution/extensions/revolution.extension.actions.min.js"></script>
				<script type="text/javascript" src="../../assets/script/revolution/extensions/revolution.extension.carousel.min.js"></script>
				<script type="text/javascript" src="../../assets/script/revolution/extensions/revolution.extension.kenburn.min.js"></script>
				<script type="text/javascript" src="../../assets/script/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
				<script type="text/javascript" src="../../assets/script/revolution/extensions/revolution.extension.migration.min.js"></script>
				<script type="text/javascript" src="../../assets/script/revolution/extensions/revolution.extension.navigation.min.js"></script>
				<script type="text/javascript" src="../../assets/script/revolution/extensions/revolution.extension.parallax.min.js"></script>
				<script type="text/javascript" src="../../assets/script/revolution/extensions/revolution.extension.slideanims.min.js"></script>
				<script type="text/javascript" src="../../assets/script/revolution/extensions/revolution.extension.video.min.js"></script>

				<!-- Plugins files -->
				<script type="text/javascript" src="../../assets/plugin/booking/jquery.booking.js"></script>

				<!-- Components files -->
				<script type="text/javascript" src="../../assets/script/template/jquery.template.tab.js"></script>
				<script type="text/javascript" src="../../assets/script/template/jquery.template.image.js"></script>
				<script type="text/javascript" src="../../assets/script/template/jquery.template.helper.js"></script>
				<script type="text/javascript" src="../../assets/script/template/jquery.template.header.js"></script>
				<script type="text/javascript" src="../../assets/script/template/jquery.template.counter.js"></script>
				<script type="text/javascript" src="../../assets/script/template/jquery.template.gallery.js"></script>
				<script type="text/javascript" src="../../assets/script/template/jquery.template.goToTop.js"></script>
				<script type="text/javascript" src="../../assets/script/template/jquery.template.fancybox.js"></script>
				<script type="text/javascript" src="../../assets/script/template/jquery.template.moreLess.js"></script>
				<script type="text/javascript" src="../../assets/script/template/jquery.template.googleMap.js"></script>
				<script type="text/javascript" src="../../assets/script/template/jquery.template.accordion.js"></script>
				<script type="text/javascript" src="../../assets/script/template/jquery.template.searchForm.js"></script>
				<script type="text/javascript" src="../../assets/script/template/jquery.template.testimonial.js"></script>
				<script type="text/javascript" src="../../assets/script/public.js"></script>

			</body>

		</html>