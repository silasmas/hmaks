
  	<!-- Main Header / Header Style Two -->
      <header class="main-header header-style-two">

        <!-- Header Lower -->
        <div class="header-lower">

			<div class="auto-container clearfix">
				<div class="inner-container clearfix">

					<div class="pull-left logo-box">
						<div class="logo"><a href="{{ asset('assets/images/logo.png') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="" title=""></a></div>
					</div>
					<div class="nav-outer clearfix">

						<!-- Mobile Navigation Toggler -->
						<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
						<!-- Main Menu -->
						<nav class="main-menu show navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li class="{{ $titre=="Accueil"?"current":"" }}"><a href="#">Accueil</a>
									</li>
									<li class="{{ $titre=="about"?"current":"" }}"><a href="#">A propos</a>
									</li>
									<li class="{{ $titre=="service"?"current":"" }}"><a href="#">Nos services</a>
									</li>
									<li class="{{ $titre=="annonce"?"current":"" }}"><a href="#">Annonce</a>
									</li>
									<li class="{{ $titre=="rdv"?"current":"" }}"><a href="#">Prendre un rendez-vous</a>
									</li>
									<li class="{{ $titre=="pub"?"current":"" }}"><a href="#">Publicité</a></li>
								</ul>
							</div>

						</nav>
						<!-- Main Menu End-->

						<!-- Outer Box -->
						<div class="outer-box clearfix">

							<!--Search Box-->
							<div class="search-box-outer">
								<div class="search-box-btn"><span class="fa fa-search"></span></div>
							</div>

							<!-- Cart Box -->
							<div class="cart-box">
								<div class="dropdown">
									<button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-shopping-bag-2"></span><span class="total-cart">2</span></button>
									<div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu1">
										<div class="cart-product">
											<div class="inner">
												<div class="cross-icon"><span class="icon fa fa-remove"></span></div>
												<div class="image"><img src="images/resource/post-thumb-1.jpg" alt="" /></div>
												<h3><a href="shoping-cart.html">Product 01</a></h3>
												<div class="quantity-text">Quantity 1</div>
												<div class="price">$99.00</div>
											</div>
										</div>
										<div class="cart-product">
											<div class="inner">
												<div class="cross-icon"><span class="icon fa fa-remove"></span></div>
												<div class="image"><img src="images/resource/post-thumb-2.jpg" alt="" /></div>
												<h3><a href="shoping-cart.html">Product 02</a></h3>
												<div class="quantity-text">Quantity 1</div>
												<div class="price">$99.00</div>
											</div>
										</div>
										<div class="cart-total">Sub Total: <span>$198</span></div>
										<ul class="btns-boxed">
											<li><a href="shoping-cart.html">View Cart</a></li>
											<li><a href="checkout.html">CheckOut</a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End Cart Box -->

							<!-- Nav Btn -->
							<div class="nav-btn navSidebar-button"><span class="icon flaticon-dots-menu"></span></div>

						</div>
						<!-- End Outer Box -->

					</div>
				</div>

			</div>
        </div>
        <!-- End Header Lower -->

		<!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!-- Logo -->
                <div class="logo pull-left">
                    <a href="index.html" title=""><img src="images/logo-small.png" alt="" title=""></a>
                </div>

                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->

					<!-- Outer Box -->
					<div class="outer-box clearfix">

						<!--Search Box-->
						<div class="search-box-outer">
							<div class="search-box-btn"><span class="fa fa-search"></span></div>
						</div>

						<!-- Cart Box -->
						<div class="cart-box">
							<div class="dropdown">
								<button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-shopping-bag-2"></span><span class="total-cart">2</span></button>
								<div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu2">
									<div class="cart-product">
										<div class="inner">
											<div class="cross-icon"><span class="icon fa fa-remove"></span></div>
											<div class="image"><img src="images/resource/post-thumb-1.jpg" alt="" /></div>
											<h3><a href="shoping-cart.html">Product 01</a></h3>
											<div class="quantity-text">Quantity 1</div>
											<div class="price">$99.00</div>
										</div>
									</div>
									<div class="cart-product">
										<div class="inner">
											<div class="cross-icon"><span class="icon fa fa-remove"></span></div>
											<div class="image"><img src="images/resource/post-thumb-2.jpg" alt="" /></div>
											<h3><a href="shoping-cart.html">Product 02</a></h3>
											<div class="quantity-text">Quantity 1</div>
											<div class="price">$99.00</div>
										</div>
									</div>
									<div class="cart-total">Sub Total: <span>$198</span></div>
									<ul class="btns-boxed">
										<li><a href="shoping-cart.html">View Cart</a></li>
										<li><a href="checkout.html">CheckOut</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Cart Box -->

						<!-- Nav Btn -->
						<div class="nav-btn navSidebar-button"><span class="icon flaticon-dots-menu"></span></div>

					</div>
					<!-- End Outer Box -->

                </div>
            </div>
        </div><!-- End Sticky Menu -->

		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->
