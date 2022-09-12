@extends('templates.template',['titre'=>"Accueil"])
@section('titre', 'Accueil')
@section('content')
	<!-- Sidebar Cart Item -->
	<div class="xs-sidebar-group info-group">
		<div class="xs-overlay xs-bg-black"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading">
					<a href="#" class="close-side-widget">
						X
					</a>
				</div>
				<div class="sidebar-textwidget">

					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="content-inner">
							<div class="logo">
								<a href="#"><img src="images/logo-2.png" alt="" /></a>
							</div>
							<div class="content-box">
								<h5>About Us</h5>
								<p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
								<a href="" class="theme-btn btn-style-one"><span class="txt">Consultation</span></a>
							</div>
							<div class="contact-info">
								<h5>Contact Info</h5>
								<ul class="list-style-one">
									<li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA</li>
									<li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
									<li><span class="icon fa fa-envelope"></span>nextbit@gmail.com</li>
									<li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
								</ul>
							</div>
							<!-- Social Box -->
							<ul class="social-box">
								<li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
								<li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
								<li><a href="https://dribbble.com/" class="fa fa-dribbble"></a></li>
								<li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- END sidebar widget item -->

	<!-- Main Section Two -->
    <section class="main-slider-two">

		<div class="main-slider-carousel owl-carousel owl-theme">

            <div class="slide" style="background-image: url(assets/images/main-slider/image-2.jpg)">
				<div class="pattern-layer-one" style="background-image: url(assets/images/background/pattern-15.png)"></div>
				<div class="pattern-layer-two" style="background-image: url(assets/images/background/pattern-16.png)"></div>
				<div class="auto-container">

					<!-- Content Boxed -->
					<div class="content-boxed">
						<div class="inner-box">
							<h1>All Entertainment One Solutions</h1>
							<div class="text">Kick back with top networks and channel packs. Add premium channels, sports packages, ad-free and international programming anytime.</div>
							<div class="price"><span>$</span>95 <sup>/ Per Month</sup></div>
							<div class="btns-box">
								<a href="about.html" class="theme-btn btn-style-two"><span class="txt">Read More <i class="lnr lnr-arrow-right"></i></span></a>
								<a href="contact.html" class="theme-btn btn-style-three"><span class="txt">Contact Now <i class="lnr lnr-arrow-right"></i></span></a>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="slide" style="background-image: url(assets/images/main-slider/image-2.jpg)">
				<div class="pattern-layer-one" style="background-image: url(assets/images/background/pattern-15.png)"></div>
				<div class="pattern-layer-two" style="background-image: url(assets/images/background/pattern-16.png)"></div>
				<div class="auto-container">

					<!-- Content Boxed -->
					<div class="content-boxed">
						<div class="inner-box">
							<h1>All Entertainment One Solutions</h1>
							<div class="text">Kick back with top networks and channel packs. Add premium channels, sports packages, ad-free and international programming anytime.</div>
							<div class="price"><span>$</span>95 <sup>/ Per Month</sup></div>
							<div class="btns-box">
								<a href="about.html" class="theme-btn btn-style-two"><span class="txt">Read More <i class="lnr lnr-arrow-right"></i></span></a>
								<a href="contact.html" class="theme-btn btn-style-three"><span class="txt">Contact Now <i class="lnr lnr-arrow-right"></i></span></a>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="slide" style="background-image: url(assets/images/main-slider/image-2.jpg)">
				<div class="pattern-layer-one" style="background-image: url(assets/images/background/pattern-15.png)"></div>
				<div class="pattern-layer-two" style="background-image: url(assets/images/background/pattern-16.png)"></div>
				<div class="auto-container">

					<!-- Content Boxed -->
					<div class="content-boxed">
						<div class="inner-box">
							<h1>All Entertainment One Solutions</h1>
							<div class="text">Kick back with top networks and channel packs. Add premium channels, sports packages, ad-free and international programming anytime.</div>
							<div class="price"><span>$</span>95 <sup>/ Per Month</sup></div>
							<div class="btns-box">
								<a href="about.html" class="theme-btn btn-style-two"><span class="txt">Read More <i class="lnr lnr-arrow-right"></i></span></a>
								<a href="contact.html" class="theme-btn btn-style-three"><span class="txt">Contact Now <i class="lnr lnr-arrow-right"></i></span></a>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>

	</section>
	<!-- End Main Section -->

	<!-- Network Section -->
	<section class="network-section" style="background-image: url(assets/images/background/2.jpg)">
		<div class="auto-container">
			<div class="inner-container">
				<div class="row clearfix">

					<!-- Image Column -->
					<div class="images-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<img src="{{ asset('assets/images/resource/network-1.jpg') }}" alt="" />
							</div>
							<div class="image-two wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
								<img src="{{ asset('assets/images/resource/network-2.jpg') }}" alt="" />
							</div>
							<div class="image-three titlt" data-tilt data-tilt-max="6">
								<img src="{{ asset('assets/images/resource/network-3.png') }}" alt="" />
							</div>
						</div>
					</div>

					<!-- Content Column -->
					<div class="content-column col-lg-5 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title -->
							<div class="sec-title">
								<div class="separator"></div>
								<h2>We Provide Best Home Network For You.</h2>
							</div>
							<!-- Network List -->
							<ul class="network-list">
								<li>
									<span class="icon flaticon-tick-1"></span>
									<strong>A Reliable Connection</strong>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed magna aliqua.eius to mod incididunt ut labore
								</li>
								<li>
									<span class="icon flaticon-tick-1"></span>
									<strong>Powerful Secure Internet</strong>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed magna aliqua.eius to mod incididunt ut labore
								</li>
								<li>
									<span class="icon flaticon-tick-1"></span>
									<strong>Flex 4K & 8K streaming</strong>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed magna aliqua.eius to mod incididunt ut labore
								</li>
							</ul>

						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End Network Section -->

	<!-- Services Section Two -->
	<section class="services-section-two" style="background-image: url(assets/images/background/3.jpg)">
		<div class="pattern-layer-one" style="background-image: url(assets/images/background/pattern-17.png)"></div>
		<div class="pattern-layer-two" style="background-image: url(assets/images/background/pattern-18.png)"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<div class="separator"></div>
				<h2>Explore Our Services</h2>
			</div>

			<div class="four-item-carousel owl-carousel owl-theme">

				<!-- Service Block Two -->
				<div class="service-block-two">
					<div class="inner-box">
						<div class="color-layer"></div>
						<div class="icon-layer-one" style="background-image: url(assets/images/background/pattern-19.png)"></div>
						<div class="icon-layer-two" style="background-image: url(assets/images/background/pattern-20.png)"></div>
						<div class="icon"><img src="assets/images/icons/service-4.png" alt="" /></div>
						<h4><a href="services-detail.html">Broadband</a></h4>
						<div class="text">Lorem ipsum dolor sit amet them elit seding doeiumod Donec modern</div>
						<a class="learn-more" href="services-detail.html">Learn More</a>
					</div>
				</div>

				<!-- Service Block Two -->
				<div class="service-block-two">
					<div class="inner-box">
						<div class="color-layer"></div>
						<div class="icon-layer-one" style="background-image: url(assets/images/background/pattern-19.png)"></div>
						<div class="icon-layer-two" style="background-image: url(assets/images/background/pattern-20.png)"></div>
						<div class="icon"><img src="assets/images/icons/service-5.png" alt="" /></div>
						<h4><a href="services-detail.html">TV & Streaming</a></h4>
						<div class="text">Lorem ipsum dolor sit amet them elit seding doeiumod Donec modern</div>
						<a class="learn-more" href="services-detail.html">Learn More</a>
					</div>
				</div>

				<!-- Service Block Two -->
				<div class="service-block-two">
					<div class="inner-box">
						<div class="color-layer"></div>
						<div class="icon-layer-one" style="background-image: url(assets/images/background/pattern-19.png)"></div>
						<div class="icon-layer-two" style="background-image: url(assets/images/background/pattern-20.png)"></div>
						<div class="icon"><img src="assets/images/icons/service-6.png" alt="" /></div>
						<h4><a href="services-detail.html">Home Phone</a></h4>
						<div class="text">Lorem ipsum dolor sit amet them elit seding doeiumod Donec modern</div>
						<a class="learn-more" href="services-detail.html">Learn More</a>
					</div>
				</div>

				<!-- Service Block Two -->
				<div class="service-block-two">
					<div class="inner-box">
						<div class="color-layer"></div>
						<div class="icon-layer-one" style="background-image: url(assets/images/background/pattern-19.png)"></div>
						<div class="icon-layer-two" style="background-image: url(assets/images/background/pattern-20.png)"></div>
						<div class="icon"><img src="assets/images/icons/service-4.png" alt="" /></div>
						<h4><a href="services-detail.html">TV & Streaming</a></h4>
						<div class="text">Lorem ipsum dolor sit amet them elit seding doeiumod Donec modern</div>
						<a class="learn-more" href="services-detail.html">Learn More</a>
					</div>
				</div>

				<!-- Service Block Two -->
				<div class="service-block-two">
					<div class="inner-box">
						<div class="color-layer"></div>
						<div class="icon-layer-one" style="background-image: url(assets/images/background/pattern-19.png)"></div>
						<div class="icon-layer-two" style="background-image: url(assets/images/background/pattern-20.png)"></div>
						<div class="icon"><img src="assets/images/icons/service-4.png" alt="" /></div>
						<h4><a href="services-detail.html">Broadband</a></h4>
						<div class="text">Lorem ipsum dolor sit amet them elit seding doeiumod Donec modern</div>
						<a class="learn-more" href="services-detail.html">Learn More</a>
					</div>
				</div>

				<!-- Service Block Two -->
				<div class="service-block-two">
					<div class="inner-box">
						<div class="color-layer"></div>
						<div class="icon-layer-one" style="background-image: url(assets/images/background/pattern-19.png)"></div>
						<div class="icon-layer-two" style="background-image: url(assets/images/background/pattern-20.png)"></div>
						<div class="icon"><img src="assets/images/icons/service-5.png" alt="" /></div>
						<h4><a href="services-detail.html">TV & Streaming</a></h4>
						<div class="text">Lorem ipsum dolor sit amet them elit seding doeiumod Donec modern</div>
						<a class="learn-more" href="services-detail.html">Learn More</a>
					</div>
				</div>

				<!-- Service Block Two -->
				<div class="service-block-two">
					<div class="inner-box">
						<div class="color-layer"></div>
						<div class="icon-layer-one" style="background-image: url(assets/images/background/pattern-19.png)"></div>
						<div class="icon-layer-two" style="background-image: url(assets/images/background/pattern-20.png)"></div>
						<div class="icon"><img src="{{ asset('assets/images/icons/service-6.png') }}" alt="" /></div>
						<h4><a href="services-detail.html">Home Phone</a></h4>
						<div class="text">Lorem ipsum dolor sit amet them elit seding doeiumod Donec modern</div>
						<a class="learn-more" href="services-detail.html">Learn More</a>
					</div>
				</div>

				<!-- Service Block Two -->
				<div class="service-block-two">
					<div class="inner-box">
						<div class="color-layer"></div>
						<div class="icon-layer-one" style="background-image: url(assets/images/background/pattern-19.png)"></div>
						<div class="icon-layer-two" style="background-image: url(assets/images/background/pattern-20.png)"></div>
						<div class="icon"><img src="{{ asset('assets/images/icons/service-4.png') }}" alt="" /></div>
						<h4><a href="services-detail.html">TV & Streaming</a></h4>
						<div class="text">Lorem ipsum dolor sit amet them elit seding doeiumod Donec modern</div>
						<a class="learn-more" href="services-detail.html">Learn More</a>
					</div>
				</div>

				<!-- Service Block Two -->
				<div class="service-block-two">
					<div class="inner-box">
						<div class="color-layer"></div>
						<div class="icon-layer-one" style="background-image: url(assets/images/background/pattern-19.png)"></div>
						<div class="icon-layer-two" style="background-image: url(assets/images/background/pattern-20.png)"></div>
						<div class="icon"><img src="{{ asset('assets/images/icons/service-4.png') }}" alt="" /></div>
						<h4><a href="services-detail.html">Broadband</a></h4>
						<div class="text">Lorem ipsum dolor sit amet them elit seding doeiumod Donec modern</div>
						<a class="learn-more" href="services-detail.html">Learn More</a>
					</div>
				</div>

				<!-- Service Block Two -->
				<div class="service-block-two">
					<div class="inner-box">
						<div class="color-layer"></div>
						<div class="icon-layer-one" style="background-image: url(assets/images/background/pattern-19.png)"></div>
						<div class="icon-layer-two" style="background-image: url(assets/images/background/pattern-20.png)"></div>
						<div class="icon"><img src="{{ asset('assets/images/icons/service-5.png') }}" alt="" /></div>
						<h4><a href="services-detail.html">TV & Streaming</a></h4>
						<div class="text">Lorem ipsum dolor sit amet them elit seding doeiumod Donec modern</div>
						<a class="learn-more" href="services-detail.html">Learn More</a>
					</div>
				</div>

				<!-- Service Block Two -->
				<div class="service-block-two">
					<div class="inner-box">
						<div class="color-layer"></div>
						<div class="icon-layer-one" style="background-image: url(assets/images/background/pattern-19.png)"></div>
						<div class="icon-layer-two" style="background-image: url(assets/images/background/pattern-20.png)"></div>
						<div class="icon"><img src="{{ asset('assets/images/icons/service-6.png') }}" alt="" /></div>
						<h4><a href="services-detail.html">Home Phone</a></h4>
						<div class="text">Lorem ipsum dolor sit amet them elit seding doeiumod Donec modern</div>
						<a class="learn-more" href="services-detail.html">Learn More</a>
					</div>
				</div>

				<!-- Service Block Two -->
				<div class="service-block-two">
					<div class="inner-box">
						<div class="color-layer"></div>
						<div class="icon-layer-one" style="background-image: url(assets/images/background/pattern-19.png)"></div>
						<div class="icon-layer-two" style="background-image: url(assets/images/background/pattern-20.png)"></div>
						<div class="icon"><img src="{{ asset('assets/images/icons/service-4.png') }}" alt="" /></div>
						<h4><a href="services-detail.html">TV & Streaming</a></h4>
						<div class="text">Lorem ipsum dolor sit amet them elit seding doeiumod Donec modern</div>
						<a class="learn-more" href="services-detail.html">Learn More</a>
					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- End Services Section Two -->

	<!-- Appointment Section / Style Two -->
	<section class="appointment-section style-two" style="background-image: url(assets/images/background/pattern-21.png)">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Title Column -->
				<div class="title-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h3>Let's find deals and services available in your area</h3>
					</div>
				</div>

				<!-- Form Column -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="appointment-form">
							<form method="post" action="contact.html">
								<div class="form-group">
									<input type="email" name="email" value="" placeholder="Enter street address & apartment" required="">
									<button type="submit" class="theme-btn btn-style-five"><span class="txt">Check Availability <i class="lnr lnr-arrow-right"></i></span></button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Appointment Section -->

	<!-- Faq Section -->
	<section class="faq-section" style="background-image: url(assets/images/background/4.jpg)">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Accordion Column -->
				<div class="accordion-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title">
							<div class="separator"></div>
							<h3>Few Great Reasons Make <br> You Choose us</h3>
						</div>

						<!-- Accordian Box -->
						<ul class="accordion-box">

							<!--Block-->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Ultra-Fast and Ultra-Reliable Connection</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Business is the activity of making on's living or making money by producing cumsociis natoque penatibus et magnis dis partu rient to montes. Aene an massa. cumsociis natoque penatibus.  </div>
									</div>
								</div>
							</li>

							<!--Block-->
							<li class="accordion block active-block">
								<div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Free Installation For Combo Pack</div>
								<div class="acc-content current">
									<div class="content">
										<div class="text">Business is the activity of making on's living or making money by producing cumsociis natoque penatibus et magnis dis partu rient to montes. Aene an massa. cumsociis natoque penatibus.  </div>
									</div>
								</div>
							</li>

							<!--Block-->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>All kinds of Entertainment in One Place</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Business is the activity of making on's living or making money by producing cumsociis natoque penatibus et magnis dis partu rient to montes. Aene an massa. cumsociis natoque penatibus.  </div>
									</div>
								</div>
							</li>

							<!--Block-->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Flexible Pricing Plans and Bundles</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Business is the activity of making on's living or making money by producing cumsociis natoque penatibus et magnis dis partu rient to montes. Aene an massa. cumsociis natoque penatibus.  </div>
									</div>
								</div>
							</li>

						</ul>

					</div>
				</div>

				<!-- Image Column -->
				<div class="image-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="pattern-layer" style="background-image: url(assets/images/resource/faq-pattern.png)"></div>
						<div class="image titlt" data-tilt data-tilt-max="5">
							<img src="{{ asset('assets/images/resource/faq.png') }}" alt="" />
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Faq Section -->

	<!-- Pricing Section Two -->
	<section class="pricing-section-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="separator"></div>
				<h2>Discover Our Best Plans</h2>
			</div>
			<!-- End Sec Title -->

			<!-- Price Block Two -->
			<div class="price-block-two">
				<div class="inner-box">
					<!-- Title Box -->
					<div class="title-box">
						<div class="title">TV + Internet</div>
						<h4><a href="price.html">Easy Surfing</a></h4>
						<div class="text">Choose from a range of fast, reliable Internet speeds to fit your needs</div>
					</div>
					<!-- End Title Box -->

					<!-- Middle Content -->
					<div class="middle-content">
						<div class="middle-inner">
							<ul class="icon-list">
								<li><span class="icon"><img src="{{ asset('assets/images/icons/service-1.svg') }}" alt="" /></span></li>
								<li><span class="icon"><img src="{{ asset('assets/images/icons/service-2.svg') }}" alt="" /></span></li>
							</ul>
							<ul class="price-list">
								<li>Internet with a 100Mbps</li>
								<li>Connect multiple users</li>
								<li>WiFi router & prevention</li>
								<li>Unlimited devices</li>
							</ul>
						</div>
					</div>
					<!-- End Middle Content -->

					<!-- Price Box -->
					<div class="price-box">
						<div class="price">$55.00<span>Per Month</span></div>
						<a href="price.html" class="theme-btn btn-style-four"><span class="txt">Get Started</span></a>
					</div>
					<!-- End Price Box -->

				</div>
			</div>
			<!-- End Price Block Two -->

			<!-- Price Block Two -->
			<div class="price-block-two active">
				<div class="inner-box">
					<!-- Title Box -->
					<div class="title-box">
						<div class="title">Internet + Phone</div>
						<h4><a href="price.html">Home Basic</a></h4>
						<div class="text">Choose from a range of fast, reliable Internet speeds to fit your needs</div>
					</div>
					<!-- End Title Box -->

					<!-- Middle Content -->
					<div class="middle-content">
						<div class="middle-inner">
							<ul class="icon-list">
								<li><span class="icon"><img src="{{ asset('assets/images/icons/service-1.svg') }}" alt="" /></span></li>
								<li><span class="icon"><img src="{{ asset('assets/images/icons/service-3.svg') }}" alt="" /></span></li>
							</ul>
							<ul class="price-list">
								<li>Internet with a 100Mbps</li>
								<li>Connect multiple users</li>
								<li>WiFi router & prevention</li>
								<li>Unlimited devices</li>
							</ul>
						</div>
					</div>
					<!-- End Middle Content -->

					<!-- Price Box -->
					<div class="price-box">
						<div class="price">$75.00<span>Per Month</span></div>
						<a href="price.html" class="theme-btn btn-style-four"><span class="txt">Get Started</span></a>
					</div>
					<!-- End Price Box -->

				</div>
			</div>
			<!-- End Price Block Two -->

			<!-- Price Block Two -->
			<div class="price-block-two">
				<div class="inner-box">
					<!-- Title Box -->
					<div class="title-box">
						<div class="title">TV + Internet + Phone</div>
						<h4><a href="price.html">Premium Fast</a></h4>
						<div class="text">Choose from a range of fast, reliable Internet speeds to fit your needs</div>
					</div>
					<!-- End Title Box -->

					<!-- Middle Content -->
					<div class="middle-content">
						<div class="middle-inner">
							<ul class="icon-list">
								<li><span class="icon"><img src="{{ asset('assets/images/icons/service-1.svg') }}" alt="" /></span></li>
								<li><span class="icon"><img src="{{ asset('assets/images/icons/service-2.svg') }}" alt="" /></span></li>
								<li><span class="icon"><img src="{{ asset('assets/images/icons/service-3.svg') }}" alt="" /></span></li>
							</ul>
							<ul class="price-list">
								<li>Internet with a 100Mbps</li>
								<li>Connect multiple users</li>
								<li>WiFi router & prevention</li>
								<li>Unlimited devices</li>
							</ul>
						</div>
					</div>
					<!-- End Middle Content -->

					<!-- Price Box -->
					<div class="price-box">
						<div class="price">$55.00<span>Per Month</span></div>
						<a href="price.html" class="theme-btn btn-style-four"><span class="txt">Get Started</span></a>
					</div>
					<!-- End Price Box -->

				</div>
			</div>
			<!-- End Price Block Two -->

		</div>
	</section>
	<!-- End Pricing Section Two -->

	<!-- Streaming Section -->
	<section class="streaming-section" style="background-image: url(assets/images/background/5.jpg)">
		<div class="pattern-layer-one" style="background-image: url(assets/images/background/pattern-22.png)"></div>
		<div class="pattern-layer-two" style="background-image: url(assets/images/background/pattern-23.png)"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<div class="separator"></div>
				<h2>Now Streaming</h2>
			</div>

			<div class="three-item-carousel owl-carousel owl-theme">

				<!-- Streaming Block -->
				<div class="streaming-block">
					<div class="inner-box">
						<div class="image">
							<div class="gradient-layer"></div>
							<img src="{{ asset('assets/images/resource/streaming-1.jpg') }}" alt="" />
							<div class="content-overlay">
								<h4><a href="services-detail.html">Premier League Live</a></h4>
							</div>
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
						</div>
					</div>
				</div>

				<!-- Streaming Block -->
				<div class="streaming-block">
					<div class="inner-box">
						<div class="image">
							<div class="gradient-layer"></div>
							<img src="{{ asset('assets/images/resource/streaming-2.jpg') }}" alt="" />
							<div class="content-overlay">
								<h4><a href="services-detail.html">Live Music TV Show</a></h4>
							</div>
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
						</div>
					</div>
				</div>

				<!-- Streaming Block -->
				<div class="streaming-block">
					<div class="inner-box">
						<div class="image">
							<div class="gradient-layer"></div>
							<img src="{{ asset('assets/images/resource/streaming-3.jpg') }}" alt="" />
							<div class="content-overlay">
								<h4><a href="services-detail.html">Premier Movie Venom</a></h4>
							</div>
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
						</div>
					</div>
				</div>

				<!-- Streaming Block -->
				<div class="streaming-block">
					<div class="inner-box">
						<div class="image">
							<div class="gradient-layer"></div>
							<img src="{{ asset('assets/images/resource/streaming-1.jpg') }}" alt="" />
							<div class="content-overlay">
								<h4><a href="services-detail.html">Premier League Live</a></h4>
							</div>
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
						</div>
					</div>
				</div>

				<!-- Streaming Block -->
				<div class="streaming-block">
					<div class="inner-box">
						<div class="image">
							<div class="gradient-layer"></div>
							<img src="{{ asset('assets/images/resource/streaming-2.jpg') }}" alt="" />
							<div class="content-overlay">
								<h4><a href="services-detail.html">Live Music TV Show</a></h4>
							</div>
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
						</div>
					</div>
				</div>

				<!-- Streaming Block -->
				<div class="streaming-block">
					<div class="inner-box">
						<div class="image">
							<div class="gradient-layer"></div>
							<img src="{{ asset('assets/images/resource/streaming-3.jpg') }}" alt="" />
							<div class="content-overlay">
								<h4><a href="services-detail.html">Premier Movie Venom</a></h4>
							</div>
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
						</div>
					</div>
				</div>

				<!-- Streaming Block -->
				<div class="streaming-block">
					<div class="inner-box">
						<div class="image">
							<div class="gradient-layer"></div>
							<img src="{{ asset('assets/images/resource/streaming-1.jpg') }}" alt="" />
							<div class="content-overlay">
								<h4><a href="services-detail.html">Premier League Live</a></h4>
							</div>
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
						</div>
					</div>
				</div>

				<!-- Streaming Block -->
				<div class="streaming-block">
					<div class="inner-box">
						<div class="image">
							<div class="gradient-layer"></div>
							<img src="{{ asset('assets/images/resource/streaming-2.jpg') }}" alt="" />
							<div class="content-overlay">
								<h4><a href="services-detail.html">Live Music TV Show</a></h4>
							</div>
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
						</div>
					</div>
				</div>

				<!-- Streaming Block -->
				<div class="streaming-block">
					<div class="inner-box">
						<div class="image">
							<div class="gradient-layer"></div>
							<img src="{{ asset('assets/images/resource/streaming-3.jpg') }}" alt="" />
							<div class="content-overlay">
								<h4><a href="services-detail.html">Premier Movie Venom</a></h4>
							</div>
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
						</div>
					</div>
				</div>

				<!-- Streaming Block -->
				<div class="streaming-block">
					<div class="inner-box">
						<div class="image">
							<div class="gradient-layer"></div>
							<img src="{{ asset('assets/images/resource/streaming-1.jpg') }}" alt="" />
							<div class="content-overlay">
								<h4><a href="services-detail.html">Premier League Live</a></h4>
							</div>
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
						</div>
					</div>
				</div>

				<!-- Streaming Block -->
				<div class="streaming-block">
					<div class="inner-box">
						<div class="image">
							<div class="gradient-layer"></div>
							<img src="{{ asset('assets/images/resource/streaming-2.jpg') }}" alt="" />
							<div class="content-overlay">
								<h4><a href="services-detail.html">Live Music TV Show</a></h4>
							</div>
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
						</div>
					</div>
				</div>

				<!-- Streaming Block -->
				<div class="streaming-block">
					<div class="inner-box">
						<div class="image">
							<div class="gradient-layer"></div>
							<img src="{{ asset('assets/images/resource/streaming-3.jpg') }}" alt="" />
							<div class="content-overlay">
								<h4><a href="services-detail.html">Premier Movie Venom</a></h4>
							</div>
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Streaming Section -->

	<!-- Internet Section Two -->
	<section class="internet-section-two" style="background-image: url(assets/images/background/pattern-24.png)">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-layer-one" style="background-image: url(assets/images/icons/icon-4.png)"></div>
						<div class="icon-layer-two" style="background-image: url(assets/images/icons/icon-4.png)"></div>
						<div class="image">
							<img src="{{ asset('assets/images/resource/internet.jpg') }}" alt="" />
						</div>
						<div class="image-two titlt" data-tilt data-tilt-max="6">
							<img src="{{ asset('assets/images/resource/internet-1.png') }}" alt="" />
						</div>
						<div class="image-three titlt" data-tilt data-tilt-max="8">
							<img src="{{ asset('assets/images/resource/internet-2.png') }}" alt="" />
						</div>
					</div>
				</div>

				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title">
							<div class="separator"></div>
							<h2>Save Money by Bundling Your Internet Service With TV Service.</h2>
						</div>
						<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eius to mod tempor incididunt ut labore et dolore magna aliqua. Ut enims ad minim veniam. Aenean massa. Cum sociis natoque penatibus et magnis dis partu rient to montes.Aene an massa.</div>
						<div class="price">$25/ per month</div>
						<a href="about.html" class="theme-btn btn-style-four"><span class="txt">Read More <i class="lnr lnr-arrow-right"></i></span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Internet Section Two -->

	<!-- Clients Section -->
	<section class="clients-section">
		<div class="auto-container">

			<div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div></li>
					<li><div class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>
					<li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div></li>
                </ul>
            </div>

		</div>
	</section>
	<!-- End Clients Section -->

	<!-- Testimonial Section / Style Two -->
	<section class="testimonial-section style-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">testimonial</div>
				<h2>What our clients say</h2>
			</div>
			<!-- End Sec Title -->

			<div class="testimonial-carousel owl-carousel owl-theme">

				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consec tetur, adipisci velit, sed quia non num the quam eius modi the tempora Neque porro quis quam.</div>
						</div>
						<div class="lower-box">
							<div class="color-layer"></div>
							<div class="pattern-layer" style="background-image: url(images/background/pattern-8.png)"></div>
							<div class="author-image-outer">
								<span class="quote-icon fa fa-quote-left"></span>
								<div class="author-image">
									<img src="images/resource/author-1.jpg" alt="" />
								</div>
							</div>
							<div class="author-name">Stiven Morgan</div>
							<div class="designation">Pure Tecnology</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consec tetur, adipisci velit, sed quia non num the quam eius modi the tempora Neque porro quis quam.</div>
						</div>
						<div class="lower-box">
							<div class="color-layer"></div>
							<div class="pattern-layer" style="background-image: url(images/background/pattern-8.png)"></div>
							<div class="author-image-outer">
								<span class="quote-icon fa fa-quote-left"></span>
								<div class="author-image">
									<img src="images/resource/author-2.jpg" alt="" />
								</div>
							</div>
							<div class="author-name">Danial Pedro</div>
							<div class="designation">Northen City</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consec tetur, adipisci velit, sed quia non num the quam eius modi the tempora Neque porro quis quam.</div>
						</div>
						<div class="lower-box">
							<div class="color-layer"></div>
							<div class="pattern-layer" style="background-image: url(images/background/pattern-8.png)"></div>
							<div class="author-image-outer">
								<span class="quote-icon fa fa-quote-left"></span>
								<div class="author-image">
									<img src="images/resource/author-3.jpg" alt="" />
								</div>
							</div>
							<div class="author-name">Rannsan Wiks</div>
							<div class="designation">CEO, Glob Tech</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- End Testimonial Section -->

	<!-- News Section -->
	<section class="news-section" style="background-image: url(images/background/6.jpg)">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="separator"></div>
				<h2>Our News</h2>
			</div>
			<!-- End Sec Title -->

			<div class="row clearfix">

				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="news-detail.html"><img src="images/resource/news-1.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="icon flaticon-user"></span>By Admin</li>
								<li><span class="icon flaticon-chat-2"></span>3 comments</li>
							</ul>
							<h5><a href="news-detail.html">We Find The Best Uses of Internet From Broadband Resources</a></h5>
							<a href="news-detail.html" class="theme-btn btn-style-four"><span class="txt">Read More</span></a>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="news-detail.html"><img src="images/resource/news-2.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="icon flaticon-user"></span>By Admin</li>
								<li><span class="icon flaticon-chat-2"></span>3 comments</li>
							</ul>
							<h5><a href="news-detail.html">All of The Entertainment You loved However You Want it</a></h5>
							<a href="news-detail.html" class="theme-btn btn-style-four"><span class="txt">Read More</span></a>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="news-detail.html"><img src="images/resource/news-3.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="icon flaticon-user"></span>By Admin</li>
								<li><span class="icon flaticon-chat-2"></span>3 comments</li>
							</ul>
							<h5><a href="news-detail.html">Advanced Security to Protect and Help Stay Safe Online Device</a></h5>
							<a href="news-detail.html" class="theme-btn btn-style-four"><span class="txt">Read More</span></a>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- End News Section -->

	<!-- CTA Section -->
	<section class="cta-section">
		<div class="auto-container">
			<div class="inner-container" style="background-image: url(images/background/pattern-11.png)">
				<div class="row clearfix">

					<!-- Title Column -->
					<div class="title-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<h3>Sign up for our newsletter</h3>
							<div class="text">Stay up to update with our latest news and products.</div>
						</div>
					</div>

					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="newsletter-form">
								<form method="post" action="contact.html">
									<div class="form-group">
										<input type="email" name="email" value="" placeholder="Your Email Address" required="">
										<button type="submit" class="theme-btn btn-style-five"><span class="txt">Subscribe</span></button>
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End CTA Section -->

@endsection
