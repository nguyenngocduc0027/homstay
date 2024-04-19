@extends('index')
@section('content')
<!-- ===================================================
			Loading Transition
		==================================================== -->
		<div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="icon"><img src="/images/loader.gif" alt="" class="m-auto d-block" width="64"></div>
			</div>
		</div>



		<!--
		=============================================
			Theme Main Menu
		==============================================
		-->
		<header class="theme-main-menu menu-overlay menu-style-one sticky-menu">
			<div class="alert-wrapper text-center">
				<p class="fs-16 m0 text-white">The <a href="listing_01.html" class="fw-500">flash sale</a> go on. The offer will end in — <span>This Sunday</span></p>
			</div>
			<!-- /.alert-wrapper -->
			<div class="inner-content gap-one">
				<div class="top-header position-relative">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo order-lg-0">
							<a href="index.html" class="d-flex align-items-center">
								<img src="/images/logo/logo_01.svg" alt="">
							</a>
						</div>
						<!-- logo -->
						<div class="right-widget ms-auto ms-lg-0 me-3 me-lg-0 order-lg-3">
							<ul class="d-flex align-items-center style-none">
								<li>
									<a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" class="btn-one"><i class="fa-regular fa-lock"></i> <span>Login</span></a>
                                </li>
								<li class="d-none d-md-inline-block ms-3">
                                    <a href="dashboard/add-property.html" class="btn-two" target="_blank"><span>Add Listing</span> <i class="fa-thin fa-arrow-up-right"></i></a>
                                </li>
							</ul>
						</div>
						<nav class="navbar navbar-expand-lg p0 order-lg-2">
							<button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
								data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
								aria-label="Toggle navigation">
								<span></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav align-items-lg-center">
									<li class="d-block d-lg-none"><div class="logo"><a href="index.html" class="d-block"><img src="/images/logo/logo_01.svg" alt=""></a></div></li>
									<li class="nav-item dashboard-menu">
										<a class="nav-link" href="dashboard/dashboard-index.html" target="_blank">Dashboard</a>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Home
										</a>
										<ul class="dropdown-menu">
											<li><a href="index.html" class="dropdown-item"><span>Home 01</span></a></li>
											<li><a href="index-2.html" class="dropdown-item"><span>Home 02</span></a></li>
											<li><a href="index-3.html" class="dropdown-item"><span>Home 03</span></a></li>
											<li><a href="index-4.html" class="dropdown-item"><span>Home 04</span></a></li>
											<li><a href="index-5.html" class="dropdown-item"><span>Home 05</span></a></li>
											<li><a href="index-6.html" class="dropdown-item"><span>Home 06</span></a></li>
											<li><a href="index-7.html" class="dropdown-item"><span>Home 07</span></a></li>
										</ul>
									</li>
									<li class="nav-item dropdown mega-dropdown-sm">
							        	<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Listing
										</a>
						                <ul class="dropdown-menu">
							                <li class="row gx-1">
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Listing Type</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="listing_01.html" class="dropdown-item"><span>Grid Sidebar-1</span></a></li>
															<li><a href="listing_05.html" class="dropdown-item"><span>Grid Sidebar-2</span></a></li>
															<li><a href="listing_02.html" class="dropdown-item"><span>List Sidebar-1</span></a></li>
															<li><a href="listing_06.html" class="dropdown-item"><span>List Sidebar-2</span></a></li>
															<li><a href="listing_03.html" class="dropdown-item"><span>Grid Top Filter-1</span></a></li>
															<li><a href="listing_07.html" class="dropdown-item"><span>Grid Top Filter-2</span></a></li>
															<li><a href="listing_04.html" class="dropdown-item"><span>List Top Filter-1</span></a></li>
															<li><a href="listing_08.html" class="dropdown-item"><span>List Top Filter-2</span></a></li>
															<li><a href="listing_09.html" class="dropdown-item"><span>Grid Banner Filter-1</span></a></li>
														</ul>
													</div> <!--/.menu-column -->
												</div>
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Listing Type</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="listing_11.html" class="dropdown-item"><span>Grid Banner Filter-2</span></a></li>
															<li><a href="listing_10.html" class="dropdown-item"><span>List Banner Filter-1</span></a></li>
															<li><a href="listing_12.html" class="dropdown-item"><span>List Banner Filter-2</span></a></li>
															<li><a href="listing_13.html" class="dropdown-item"><span>Grid Fullwidth</span></a></li>
															<li><a href="listing_14.html" class="dropdown-item"><span>Grid Fullwidth Map-1</span></a></li>
															<li><a href="listing_16.html" class="dropdown-item"><span>Grid Fullwidth Map-2</span></a></li>
															<li><a href="listing_15.html" class="dropdown-item"><span>List Fullwidth Map-1</span></a></li>
															<li><a href="listing_17.html" class="dropdown-item"><span>List Fullwidth Map-2</span></a></li>
														</ul>
													</div> <!--/.menu-column -->
												</div>
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Single Listing</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="listing_details_01.html" class="dropdown-item"><span>Listing Details-1</span></a></li>
															<li><a href="listing_details_02.html" class="dropdown-item"><span>Listing Details-2</span></a></li>
															<li><a href="listing_details_03.html" class="dropdown-item"><span>Listing Details-3</span></a></li>
															<li><a href="listing_details_04.html" class="dropdown-item"><span>Listing Details-4</span></a></li>
															<li><a href="listing_details_05.html" class="dropdown-item"><span>Listing Details-5</span></a></li>
															<li><a href="listing_details_06.html" class="dropdown-item"><span>Listing Details-6</span></a></li>
														</ul>
													</div> <!--/.menu-column -->
												</div>
											</li>
						                </ul>
						            </li>
									<li class="nav-item dropdown mega-dropdown-sm">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Pages
										</a>
										<ul class="dropdown-menu">
							                <li class="row gx-1">
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Essential</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="about_us_01.html" class="dropdown-item"><span>About us -1</span></a></li>
															<li><a href="about_us_02.html" class="dropdown-item"><span>About us -2</span></a></li>
															<li><a href="agency.html" class="dropdown-item"><span>Agency</span></a></li>
															<li><a href="agency_details.html" class="dropdown-item"><span>Agency Details</span></a></li>
															<li><a href="agent.html" class="dropdown-item"><span>Agent</span></a></li>
															<li><a href="agent_details.html" class="dropdown-item"><span>Agent Details</span></a></li>
														</ul>
													</div> <!--/.menu-column -->
												</div>
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Features</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="project_01.html" class="dropdown-item"><span>Project -1</span></a></li>
															<li><a href="project_02.html" class="dropdown-item"><span>Project -2</span></a></li>
															<li><a href="project_03.html" class="dropdown-item"><span>Project -3</span></a></li>
															<li><a href="project_04.html" class="dropdown-item"><span>Project -4</span></a></li>
															<li><a href="project_details_01.html" class="dropdown-item"><span>Project Details</span></a></li>
															<li><a href="service_01.html" class="dropdown-item"><span>Services -1</span></a></li>
															<li><a href="service_02.html" class="dropdown-item"><span>Services -2</span></a></li>
															<li><a href="service_details.html" class="dropdown-item"><span>Service Details</span></a></li>
														</ul>
													</div> <!--/.menu-column -->
												</div>
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Others</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="compare.html" class="dropdown-item"><span>Property Compare</span></a></li>
															<li><a href="pricing_01.html" class="dropdown-item"><span>Pricing -1</span></a></li>
															<li><a href="pricing_02.html" class="dropdown-item"><span>Pricing -2</span></a></li>
															<li><a href="contact.html" class="dropdown-item"><span>Contact Us</span></a></li>
															<li><a href="faq.html" class="dropdown-item"><span>FAQ's</span></a></li>
															<li><a href="404.html" class="dropdown-item"><span>404-Error</span></a></li>
														</ul>
													</div> <!--/.menu-column -->
												</div>
											</li>
						                </ul>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Blog
										</a>
										<ul class="dropdown-menu">
											<li><a href="blog_01.html" class="dropdown-item"><span>Blog Grid</span></a></li>
											<li><a href="blog_02.html" class="dropdown-item"><span>Blog List</span></a></li>
											<li><a href="blog_03.html" class="dropdown-item"><span>Blog 2 column</span></a></li>
											<li><a href="blog_details.html" class="dropdown-item"><span>Blog Details</span></a></li>
										</ul>
									</li>
									<li class="d-md-none ps-2 pe-2 mt-20">
										<a href="dashboard/add-property.html" class="btn-two w-100" target="_blank"><span>Add Listing</span> <i class="fa-thin fa-arrow-up-right"></i></a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div> <!--/.top-header-->
			</div> <!-- /.inner-content -->
		</header>
		<!-- /.theme-main-menu -->



		      <!--
		=============================================
			Hero Banner
		==============================================
		-->
        <div
        class="hero-banner-three position-relative z-1 pt-130 lg-pt-100 pb-170 xl-pb-130 lg-pb-100"
      >
        <div class="hero-slider-one m0">
          <div class="item m0">
            <div
              class="hero-img"
              style="background-image: url(images/media/img_26.jpg)"
            ></div>
          </div>
          <div class="item m0">
            <div
              class="hero-img"
              style="background-image: url(images/media/img_27.jpg)"
            ></div>
          </div>
          <div class="item m0">
            <div
              class="hero-img"
              style="background-image: url(images/media/img_28.jpg)"
            ></div>
          </div>
        </div>
        <!-- /.hero-slider-one -->
        <div class="container position-relative z-2">
          <div class="row">
            <div class="col-lg-10 m-auto">
              <h1
                class="hero-heading text-center text-white font-garamond fw-500 wow fadeInUp"
              >
                <span
                  ><img
                    src="images/lazy.svg"
                    data-src="images/shape/shape_34.svg"
                    alt=""
                    class="lazy-img"
                  />
                  Find the Right</span
                >
                <br />
                Home for Your Family
              </h1>
              <p
                class="fs-24 text-white text-center pt-35 md-pt-20 pb-55 lg-pb-40 wow fadeInUp"
                data-wow-delay="0.1s"
              >
                We’ve more than 745,000 apartments, place & plot.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-xxl-10 m-auto">
              <div
                class="search-wrapper-one layout-one position-relative wow fadeInUp"
                data-wow-delay="0.2s"
              >
                <div class="bg-wrapper">
                  <form
                    action="https://html.creativegigstf.com/homy/homy/listing_07.html"
                  >
                    <div class="row gx-0 align-items-center">
                      <div class="col-xl-3 col-lg-4">
                        <div class="input-box-one border-left">
                          <div class="label">I’m looking to...</div>
                          <select class="nice-select fw-normal">
                            <option value="1">Buy Apartments</option>
                            <option value="2">Rent Condos</option>
                            <option value="3">Sell Houses</option>
                            <option value="4">Rent Industrial</option>
                            <option value="6">Sell Villas</option>
                          </select>
                        </div>
                        <!-- /.input-box-one -->
                      </div>
                      <div class="col-xl-3 col-lg-4">
                        <div class="input-box-one border-left">
                          <div class="label">Location</div>
                          <select class="nice-select location fw-normal">
                            <option value="1">Dhanmondi, Dhaka</option>
                            <option value="2">Acapulco, Mexico</option>
                            <option value="3">Berlin, Germany</option>
                            <option value="4">Cannes, France</option>
                            <option value="5">Delhi, India</option>
                            <option value="6">Giza, Egypt</option>
                            <option value="7">Havana, Cuba</option>
                          </select>
                        </div>
                        <!-- /.input-box-one -->
                      </div>
                      <div class="col-xl-3 col-lg-4">
                        <div class="input-box-one border-left border-lg-0">
                          <div class="label">Price Range</div>
                          <select class="nice-select fw-normal">
                            <option value="1">$10,000 - $200,000</option>
                            <option value="2">$200,000 - $300,000</option>
                            <option value="2">$300,000 - $400,000</option>
                          </select>
                        </div>
                        <!-- /.input-box-one -->
                      </div>
                      <div class="col-xl-3">
                        <div class="input-box-one lg-mt-10">
                          <button class="fw-500 w-100 tran3s search-btn-three">
                            Search Now
                          </button>
                        </div>
                        <!-- /.input-box-one -->
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /.search-wrapper-one -->
            </div>
          </div>
        </div>
        <img
          src="images/lazy.svg"
          data-src="images/shape/shape_35.svg"
          alt=""
          class="lazy-img shapes shape_01"
        />
        <img
          src="images/lazy.svg"
          data-src="images/shape/shape_36.svg"
          alt=""
          class="lazy-img shapes shape_02"
        />
      </div>
      <!-- /.hero-banner-three -->



		<!--
		=============================================
			Feedback Section One
		==============================================
		-->
		<div class="feedback-section-one position-relative z-1 pt-70 md-pt-50 pb-80 md-pb-60">
			<div class="main-content m-auto">
				<div class="feedback-slider-one position-static">
					<div class="item">
						<div class="feedback-block-one text-center">
							<div class="row align-items-center">
								<div class="col-md-3">
									<img src="/images/media/img_01.jpg" alt="" class="rounded-circle m-auto avatar">
									<h6 class="fs-20 m0 pt-10">Jonathan Harry</h6>
									<span class="fs-16">Milan, Itlay</span>
								</div>
								<div class="col-md-6">
									<blockquote>Efficient, knowledgeable, & made our home search a smooth experience. Highly recommended agency!</blockquote>
								</div>
								<div class="col-md-3">
									<img src="/images/lazy.svg" data-src="/images/assets/rating_01.png" alt="" class="lazy-img m-auto">
									<p class="text-center m0 pt-10"><span class="fw-500 color-dark">13k rating</span> (4.7 Rating)</p>
								</div>
							</div>
						</div>
						<!-- /.feedback-block-one -->
					</div>
					<div class="item">
						<div class="feedback-block-one text-center">
							<div class="row align-items-center">
								<div class="col-md-3">
									<img src="/images/media/img_02.jpg" alt="" class="rounded-circle m-auto avatar">
									<h6 class="fs-20 m0 pt-10">Sofia Rena</h6>
									<span class="fs-16">New York, USA</span>
								</div>
								<div class="col-md-6">
									<blockquote>People who are sentinels are definitely the working very hard now, so that they can enjoy the fruits.</blockquote>
								</div>
								<div class="col-md-3">
									<img src="/images/lazy.svg" data-src="/images/assets/rating_01.png" alt="" class="lazy-img m-auto">
									<p class="text-center m0 pt-10"><span class="fw-500 color-dark">10k rating</span> (4.5 Rating)</p>
								</div>
							</div>
						</div>
						<!-- /.feedback-block-one -->
					</div>
					<div class="item">
						<div class="feedback-block-one text-center">
							<div class="row align-items-center">
								<div class="col-md-3">
									<img src="/images/media/img_03.jpg" alt="" class="rounded-circle m-auto avatar">
									<h6 class="fs-20 m0 pt-10">Rashed Kabir</h6>
									<span class="fs-16">Dhaka, BD</span>
								</div>
								<div class="col-md-6">
									<blockquote>They are very strict about themselves and their work, and do not have a carefree attitude to anything in life.</blockquote>
								</div>
								<div class="col-md-3">
									<img src="/images/lazy.svg" data-src="/images/assets/rating_01.png" alt="" class="lazy-img m-auto">
									<p class="text-center m0 pt-10"><span class="fw-500 color-dark">11k rating</span> (4.8 Rating)</p>
								</div>
							</div>
						</div>
						<!-- /.feedback-block-one -->
					</div>
				</div>
				<!-- /.feedback-slider-one -->
			</div>
		</div>
		<!-- /.feedback-section-one -->



		<!--
		=====================================================
			BLock Feature One
		=====================================================
		-->
		<div class="block-feature-one mt-150 xl-mt-120">
			<div class="container">
				<div class="title-one text-center mb-50 xl-mb-30 lg-mb-20 wow fadeInUp">
					<h3>Unlock Homy's <span>advantages <img src="/images/lazy.svg" data-src="/images/shape/title_shape_01.svg" alt="" class="lazy-img"></span></h3>
					<p class="fs-24">Your trusted real estate partner in every transaction.</p>
				</div>
				<!-- /.title-one -->

				<div class="row gx-xl-5">
					<div class="col-md-4">
						<div class="card-style-one text-center wow fadeInUp mt-40">
							<img src="/images/lazy.svg" data-src="/images/icon/icon_01.svg" alt="" class="lazy-img m-auto icon">
							<div class="fs-16 text-uppercase fw-500 fs-text mt-35 md-mt-30 mb-20">Buy a home</div>
							<p class="fs-24 ps-xxl-4 pe-xxl-4">Explore homy’s 2 million+ homes and uncover your ideal living space.</p>
						</div>
						<!-- /.card-style-one -->
					</div>
					<div class="col-md-4">
						<div class="card-style-one text-center wow fadeInUp mt-40" data-wow-delay="0.1s">
							<img src="/images/lazy.svg" data-src="/images/icon/icon_02.svg" alt="" class="lazy-img m-auto icon">
							<div class="fs-16 text-uppercase fw-500 fs-text mt-35 md-mt-30 mb-20">Rent a home</div>
							<p class="fs-24 ps-xxl-3 pe-xxl-3">Discover a rental you'll love on homy, thanks to 35+ filters and tailored keywords.</p>
						</div>
						<!-- /.card-style-one -->
					</div>
					<div class="col-md-4">
						<div class="card-style-one text-center wow fadeInUp mt-40" data-wow-delay="0.2s">
							<img src="/images/lazy.svg" data-src="/images/icon/icon_03.svg" alt="" class="lazy-img m-auto icon">
							<div class="fs-16 text-uppercase fw-500 fs-text mt-35 md-mt-30 mb-20">Sell property</div>
							<p class="fs-24 ps-xxl-4 pe-xxl-4">List, sell, thrive – with our top-notch real estate agency. It’s super easy & fun.</p>
						</div>
						<!-- /.card-style-one -->
					</div>
				</div>
			</div>
		</div>
		<!-- /.block-feature-one -->


		<!--
		=====================================================
			BLock Feature Two
		=====================================================
		-->
		<div class="block-feature-two mt-150 xl-mt-110">
			<div class="wrapper">
				<div class="row gx-xl-5">
					<div class="col-xxl-7 col-md-6 d-flex wow fadeInLeft">
						<div class="block-one w-100 h-100">
							<div class="position-relative z-1 h-100">
								<h3 class="mb-55">Secure your family's dream home.</h3>
								<a class="fancybox video-icon d-flex align-items-center justify-content-center rounded-circle ms-3" data-fancybox="" href="https://www.youtube.com/embed/aXFSJTjVjw0" tabindex="-1">
									<i class="fa-solid fa-play"></i>
								</a>
								<div class="card-box text-center">
									<h3 class="main-count fw-500">0<span class="counter">7</span>+</h3>
									<p class="fs-20">Years Experience <br>with proud.</p>
								</div>
								<!-- /.card-box -->
								<img src="/images/lazy.svg" data-src="/images/assets/screen_01.png" alt="" class="lazy-img shapes screen_01">
							</div>
						</div>
						<!-- /.block-one -->
					</div>
					<div class="col-xxl-5 col-md-6 wow fadeInRight">
						<div class="block-two">
							<div class="bg-wrapper">
								<h4>Who we are?</h4>
								<p class="fs-22 mt-20">Your premier partner in real estate. <br> Transforming properties into dreams. Let us guide you home with expertise.</p>
								<div class="counter-wrapper ps-xl-3 pb-30 mt-45 mb-50">
									<div class="row">
										<div class="col-6">
											<div class="counter-block-one mt-20">
												<div class="main-count fw-500 color-dark"><span class="counter">1.7</span>K+</div>
												<span>Completed Project</span>
											</div>
											<!-- /.counter-block-one -->
										</div>
										<div class="col-6">
											<div class="counter-block-one mt-20">
												<div class="main-count fw-500 color-dark"><span class="counter">1.3</span>mil+</div>
												<span>Happy Customers</span>
											</div>
											<!-- /.counter-block-one -->
										</div>
									</div>
								</div>
								<ul class="list-style-one fs-22 color-dark style-none">
									<li>Loan & low Interest facility</li>
									<li>Over 100k+ property & update regularly</li>
									<li>Expert agent consultation</li>
								</ul>
								<div class="d-inline-flex flex-wrap align-items-center mt-15 md-mt-10">
									<a href="about_us_01.html" class="btn-two mt-20 me-4"><span>More Details</span></a>
									<a href="contact.html" class="btn-three mt-20"><span>Request a Callback</span> <i class="fa-light fa-arrow-right-long"></i></a>
								</div>
							</div>
							<!-- /.bg-wrapper -->
						</div>
						<!-- /.block-two -->
					</div>
				</div>
			</div>
			<!-- /.wrapper -->
		</div>
		<!-- /.block-feature-two -->



		<!--
		=====================================================
			BLock Feature Three
		=====================================================
		-->
		<div class="block-feature-three mt-150 xl-mt-120">
			<div class="container">
				<div class="position-relative z-1">
					<div class="title-one text-center mb-75 xl-mb-50 md-mb-30 wow fadeInUp">
						<h3>Explore Popular <span>Location <img src="/images/lazy.svg" data-src="/images/shape/title_shape_02.svg" alt="" class="lazy-img"></span></h3>
						<p class="fs-22">Explore the latest listings & projects in diverse areas</p>
					</div>
					<!-- /.title-one -->

					<div class="property-location-slider-one">
						<div class="item">
							<div class="location-card-one position-relative z-1 d-flex align-items-end" style="background-image: url(/images/media/img_05.jpg);">
								<div class="content text-center w-100 tran3s">
									<h5 class="text-white fw-normal">Kelowna</h5>
									<p class="text-white fw-light">1,230 Properties</p>
								</div>
								<a href="listing_01.html" class="stretched-link"></a>
							</div>
							<!-- /.location-card-one -->
						</div>
						<div class="item">
							<div class="location-card-one position-relative z-1 d-flex align-items-end" style="background-image: url(/images/media/img_06.jpg);">
								<div class="content text-center w-100 tran3s">
									<h5 class="text-white fw-normal">California</h5>
									<p class="text-white fw-light">1,190 Properties</p>
								</div>
								<a href="listing_01.html" class="stretched-link"></a>
							</div>
							<!-- /.location-card-one -->
						</div>
						<div class="item">
							<div class="location-card-one position-relative z-1 d-flex align-items-end" style="background-image: url(/images/media/img_07.jpg);">
								<div class="content text-center w-100 tran3s">
									<h5 class="text-white fw-normal">New York</h5>
									<p class="text-white fw-light">1,710 Properties</p>
								</div>
								<a href="listing_01.html" class="stretched-link"></a>
							</div>
							<!-- /.location-card-one -->
						</div>
						<div class="item">
							<div class="location-card-one position-relative z-1 d-flex align-items-end" style="background-image: url(/images/media/img_08.jpg);">
								<div class="content text-center w-100 tran3s">
									<h5 class="text-white fw-normal">Miami</h5>
									<p class="text-white fw-light">670 Properties</p>
								</div>
								<a href="listing_01.html" class="stretched-link"></a>
							</div>
							<!-- /.location-card-one -->
						</div>
						<div class="item">
							<div class="location-card-one position-relative z-1 d-flex align-items-end" style="background-image: url(/images/media/img_09.jpg);">
								<div class="content text-center w-100 tran3s">
									<h5 class="text-white fw-normal">Dhaka</h5>
									<p class="text-white fw-light">1,670 Properties</p>
								</div>
								<a href="listing_01.html" class="stretched-link"></a>
							</div>
							<!-- /.location-card-one -->
						</div>
					</div>
					<ul class="slider-arrows slick-arrow-one d-flex justify-content-between style-none">
						<li class="prev_a slick-arrow"><i class="fa-sharp fa-light fa-angle-left"></i></li>
						<li class="next_a slick-arrow"><i class="fa-sharp fa-light fa-angle-right"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /.block-feature-three -->



		<!--
		=============================================
			Property Listing One
		==============================================
		-->
		<div class="property-listing-one bg-pink-two mt-150 xl-mt-120 pt-140 xl-pt-120 lg-pt-80 pb-180 xl-pb-120 lg-pb-100">
			<div class="container">
				<div class="position-relative">
					<div class="title-one text-center text-lg-start mb-45 xl-mb-30 lg-mb-20 wow fadeInUp">
						<h3>New <span>Listings <img src="/images/lazy.svg" data-src="/images/shape/title_shape_03.svg" alt="" class="lazy-img"></span></h3>
						<p class="fs-22 mt-xs">Explore latest & featured properties for sale.</p>
					</div>
					<!-- /.title-one -->

					<div class="row gx-xxl-5">
						<div class="col-lg-4 col-md-6 d-flex mt-40 wow fadeInUp">
							<div class="listing-card-one border-25 h-100 w-100">
								<div class="img-gallery p-15">
									<div class="position-relative border-25 overflow-hidden">
										<div class="tag border-25">FOR RENT</div>
										<div id="carousel1" class="carousel slide">
											<div class="carousel-indicators">
												<button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
												<button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
												<button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
											</div>
											<div class="carousel-inner">
												<div class="carousel-item active" data-bs-interval="1000000">
													<a href="listing_details_01.html" class="d-block"><img src="/images/listing/img_01.jpg" class="w-100" alt="..."></a>
												</div>
												<div class="carousel-item" data-bs-interval="1000000">
													<a href="listing_details_01.html" class="d-block"><img src="/images/listing/img_01.jpg" class="w-100" alt="..."></a>
												</div>
												<div class="carousel-item" data-bs-interval="1000000">
													<a href="listing_details_01.html" class="d-block"><img src="/images/listing/img_01.jpg" class="w-100" alt="..."></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /.img-gallery -->
								<div class="property-info p-25">
									<a href="listing_details_01.html" class="title tran3s">Blueberry villa</a>
									<div class="address">Mirpur 10, Stadium dhaka 1208</div>
									<ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
										<li class="d-flex align-items-center">
											<img src="/images/lazy.svg" data-src="/images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
											<span class="fs-16">1370 sqft</span>
										</li>
										<li class="d-flex align-items-center">
											<img src="/images/lazy.svg" data-src="/images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
											<span class="fs-16">03 bed</span>
										</li>
										<li class="d-flex align-items-center">
											<img src="/images/lazy.svg" data-src="/images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
											<span class="fs-16">02 bath</span>
										</li>
									</ul>
									<div class="pl-footer top-border d-flex align-items-center justify-content-between">
										<strong class="price fw-500 color-dark">$3,280/<sub>m</sub></strong>
										<a href="listing_details_01.html" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
									</div>
								</div>
								<!-- /.property-info -->
							</div>
							<!-- /.listing-card-one -->
						</div>
						<div class="col-lg-4 col-md-6 d-flex mt-40 wow fadeInUp" data-wow-delay="0.1s">
							<div class="listing-card-one border-25 h-100 w-100">
								<div class="img-gallery p-15">
									<div class="position-relative border-25 overflow-hidden">
										<div class="tag sale border-25">FOR SELL</div>
										<div id="carousel2" class="carousel slide">
											<div class="carousel-indicators">
												<button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
												<button type="button" data-bs-target="#carousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
												<button type="button" data-bs-target="#carousel2" data-bs-slide-to="2" aria-label="Slide 3"></button>
											</div>
											<div class="carousel-inner">
												<div class="carousel-item active" data-bs-interval="1000000">
													<a href="listing_details_01.html" class="d-block"><img src="/images/listing/img_02.jpg" class="w-100" alt="..."></a>
												</div>
												<div class="carousel-item" data-bs-interval="1000000">
													<a href="listing_details_01.html" class="d-block"><img src="/images/listing/img_03.jpg" class="w-100" alt="..."></a>
												</div>
												<div class="carousel-item" data-bs-interval="1000000">
													<a href="listing_details_01.html" class="d-block"><img src="/images/listing/img_01.jpg" class="w-100" alt="..."></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /.img-gallery -->
								<div class="property-info p-25">
									<a href="listing_details_01.html" class="title tran3s">White House villa</a>
									<div class="address">Muza link road, ca, usa</div>
									<ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
										<li class="d-flex align-items-center">
											<img src="/images/lazy.svg" data-src="/images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
											<span class="fs-16">1270 sqft</span>
										</li>
										<li class="d-flex align-items-center">
											<img src="/images/lazy.svg" data-src="/images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
											<span class="fs-16">02 bed</span>
										</li>
										<li class="d-flex align-items-center">
											<img src="/images/lazy.svg" data-src="/images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
											<span class="fs-16">02 bath</span>
										</li>
									</ul>
									<div class="pl-footer top-border d-flex align-items-center justify-content-between">
										<strong class="price fw-500 color-dark">$28,100.00</strong>
										<a href="listing_details_01.html" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
									</div>
								</div>
								<!-- /.property-info -->
							</div>
							<!-- /.listing-card-one -->
						</div>
						<div class="col-lg-4 col-md-6 d-flex mt-40 wow fadeInUp" data-wow-delay="0.2s">
							<div class="listing-card-one border-25 h-100 w-100">
								<div class="img-gallery p-15">
									<div class="position-relative border-25 overflow-hidden">
										<div class="tag sale border-25">FOR SELL</div>
										<div id="carousel3" class="carousel slide">
											<div class="carousel-indicators">
												<button type="button" data-bs-target="#carousel3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
												<button type="button" data-bs-target="#carousel3" data-bs-slide-to="1" aria-label="Slide 2"></button>
												<button type="button" data-bs-target="#carousel3" data-bs-slide-to="2" aria-label="Slide 3"></button>
											</div>
											<div class="carousel-inner">
												<div class="carousel-item active" data-bs-interval="1000000">
													<a href="listing_details_01.html" class="d-block"><img src="/images/listing/img_03.jpg" class="w-100" alt="..."></a>
												</div>
												<div class="carousel-item" data-bs-interval="1000000">
													<a href="listing_details_01.html" class="d-block"><img src="/images/listing/img_02.jpg" class="w-100" alt="..."></a>
												</div>
												<div class="carousel-item" data-bs-interval="1000000">
													<a href="listing_details_01.html" class="d-block"><img src="/images/listing/img_01.jpg" class="w-100" alt="..."></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /.img-gallery -->
								<div class="property-info p-25">
									<a href="listing_details_01.html" class="title tran3s">Luxury villa in Dal lake.</a>
									<div class="address">Mirpur 10, Stadium</div>
									<ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
										<li class="d-flex align-items-center">
											<img src="/images/lazy.svg" data-src="/images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
											<span class="fs-16">1270 sqft</span>
										</li>
										<li class="d-flex align-items-center">
											<img src="/images/lazy.svg" data-src="/images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
											<span class="fs-16">02 bed</span>
										</li>
										<li class="d-flex align-items-center">
											<img src="/images/lazy.svg" data-src="/images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
											<span class="fs-16">02 bath</span>
										</li>
									</ul>
									<div class="pl-footer top-border d-flex align-items-center justify-content-between">
										<strong class="price fw-500 color-dark">$42,500.00</strong>
										<a href="listing_details_01.html" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
									</div>
								</div>
								<!-- /.property-info -->
							</div>
							<!-- /.listing-card-one -->
						</div>
						<div class="col-lg-4 col-md-6 d-flex mt-40 wow fadeInUp">
							<div class="listing-card-one border-25 h-100 w-100">
								<div class="img-gallery p-15">
									<div class="position-relative border-25 overflow-hidden">
										<div class="tag border-25">FOR RENT</div>
										<div id="carousel4" class="carousel slide">
											<div class="carousel-indicators">
												<button type="button" data-bs-target="#carousel4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
												<button type="button" data-bs-target="#carousel4" data-bs-slide-to="1" aria-label="Slide 2"></button>
												<button type="button" data-bs-target="#carousel4" data-bs-slide-to="2" aria-label="Slide 3"></button>
											</div>
											<div class="carousel-inner">
												<div class="carousel-item active" data-bs-interval="1000000">
													<a href="listing_details_01.html" class="d-block"><img src="/images/listing/img_04.jpg" class="w-100" alt="..."></a>
												</div>
												<div class="carousel-item" data-bs-interval="1000000">
													<a href="listing_details_01.html" class="d-block"><img src="/images/listing/img_01.jpg" class="w-100" alt="..."></a>
												</div>
												<div class="carousel-item" data-bs-interval="1000000">
													<a href="listing_details_01.html" class="d-block"><img src="/images/listing/img_02.jpg" class="w-100" alt="..."></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /.img-gallery -->
								<div class="property-info p-25">
									<a href="listing_details_01.html" class="title tran3s">Blueberry villa</a>
									<div class="address">Mirpur 10, Stadium dhaka 1208</div>
									<ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
										<li class="d-flex align-items-center">
											<img src="/images/lazy.svg" data-src="/images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
											<span class="fs-16">1370 sqft</span>
										</li>
										<li class="d-flex align-items-center">
											<img src="/images/lazy.svg" data-src="/images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
											<span class="fs-16">03 bed</span>
										</li>
										<li class="d-flex align-items-center">
											<img src="/images/lazy.svg" data-src="/images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
											<span class="fs-16">02 bath</span>
										</li>
									</ul>
									<div class="pl-footer top-border d-flex align-items-center justify-content-between">
										<strong class="price fw-500 color-dark">$3,280/<sub>m</sub></strong>
										<a href="listing_details_01.html" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
									</div>
								</div>
								<!-- /.property-info -->
							</div>
							<!-- /.listing-card-one -->
						</div>
						<div class="col-lg-4 col-md-6 d-flex mt-40 wow fadeInUp" data-wow-delay="0.1s">
							<div class="listing-card-one border-25 h-100 w-100">
								<div class="img-gallery p-15">
									<div class="position-relative border-25 overflow-hidden">
										<div class="tag sale border-25">FOR SELL</div>
										<div id="carousel5" class="carousel slide">
											<div class="carousel-indicators">
												<button type="button" data-bs-target="#carousel5" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
												<button type="button" data-bs-target="#carousel5" data-bs-slide-to="1" aria-label="Slide 2"></button>
												<button type="button" data-bs-target="#carousel5" data-bs-slide-to="2" aria-label="Slide 3"></button>
											</div>
											<div class="carousel-inner">
												<div class="carousel-item active" data-bs-interval="1000000">
													<a href="listing_details_01.html" class="d-block"><img src="/images/listing/img_05.jpg" class="w-100" alt="..."></a>
												</div>
												<div class="carousel-item" data-bs-interval="1000000">
													<a href="listing_details_01.html" class="d-block"><img src="/images/listing/img_03.jpg" class="w-100" alt="..."></a>
												</div>
												<div class="carousel-item" data-bs-interval="1000000">
													<a href="listing_details_01.html" class="d-block"><img src="/images/listing/img_01.jpg" class="w-100" alt="..."></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /.img-gallery -->
								<div class="property-info p-25">
									<a href="listing_details_01.html" class="title tran3s">White House villa</a>
									<div class="address">Muza link road, ca, usa</div>
									<ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
										<li class="d-flex align-items-center">
											<img src="/images/lazy.svg" data-src="/images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
											<span class="fs-16">1270 sqft</span>
										</li>
										<li class="d-flex align-items-center">
											<img src="/images/lazy.svg" data-src="/images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
											<span class="fs-16">02 bed</span>
										</li>
										<li class="d-flex align-items-center">
											<img src="/images/lazy.svg" data-src="/images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
											<span class="fs-16">02 bath</span>
										</li>
									</ul>
									<div class="pl-footer top-border d-flex align-items-center justify-content-between">
										<strong class="price fw-500 color-dark">$28,100.00</strong>
										<a href="listing_details_01.html" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
									</div>
								</div>
								<!-- /.property-info -->
							</div>
							<!-- /.listing-card-one -->
						</div>
						<div class="col-lg-4 col-md-6 d-flex mt-40 wow fadeInUp" data-wow-delay="0.2s">
							<div class="listing-card-one border-25 h-100 w-100">
								<div class="img-gallery p-15">
									<div class="position-relative border-25 overflow-hidden">
										<div class="tag border-25">FOR RENT</div>
										<div id="carousel6" class="carousel slide">
											<div class="carousel-indicators">
												<button type="button" data-bs-target="#carousel6" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
												<button type="button" data-bs-target="#carousel6" data-bs-slide-to="1" aria-label="Slide 2"></button>
												<button type="button" data-bs-target="#carousel6" data-bs-slide-to="2" aria-label="Slide 3"></button>
											</div>
											<div class="carousel-inner">
												<div class="carousel-item active" data-bs-interval="1000000">
													<a href="listing_details_01.html" class="d-block"><img src="/images/listing/img_06.jpg" class="w-100" alt="..."></a>
												</div>
												<div class="carousel-item" data-bs-interval="1000000">
													<a href="listing_details_01.html" class="d-block"><img src="/images/listing/img_04.jpg" class="w-100" alt="..."></a>
												</div>
												<div class="carousel-item" data-bs-interval="1000000">
													<a href="listing_details_01.html" class="d-block"><img src="/images/listing/img_01.jpg" class="w-100" alt="..."></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /.img-gallery -->
								<div class="property-info p-25">
									<a href="listing_details_01.html" class="title tran3s">Luxury villa in Dal lake.</a>
									<div class="address">Mirpur 10, Stadium</div>
									<ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
										<li class="d-flex align-items-center">
											<img src="/images/lazy.svg" data-src="/images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
											<span class="fs-16">1270 sqft</span>
										</li>
										<li class="d-flex align-items-center">
											<img src="/images/lazy.svg" data-src="/images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
											<span class="fs-16">02 bed</span>
										</li>
										<li class="d-flex align-items-center">
											<img src="/images/lazy.svg" data-src="/images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
											<span class="fs-16">02 bath</span>
										</li>
									</ul>
									<div class="pl-footer top-border d-flex align-items-center justify-content-between">
										<strong class="price fw-500 color-dark">$3,280/<sub>m</sub></strong>
										<a href="listing_details_01.html" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
									</div>
								</div>
								<!-- /.property-info -->
							</div>
							<!-- /.listing-card-one -->
						</div>
					</div>

					<div class="section-btn text-center md-mt-60">
						<a href="listing_01.html" class="btn-five">Explore All</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /.property-listing-one -->




		<!--
		=====================================================
			Fancy Banner One
		=====================================================
		-->
		<div class="fancy-banner-one position-relative z-1 pt-160 xl-pt-140 lg-pt-80 pb-140 xl-pb-120 lg-pb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 wow fadeInLeft">
						<div class="title-one mb-45 lg-mb-30">
							<h3 class="text-white">Exclusive <span>Monthly <img src="/images/lazy.svg" data-src="/images/shape/title_shape_04.svg" alt="" class="lazy-img"></span>Deal for you.</h3>
							<p class="fs-24 text-white pe-xl-5 me-xxl-5">Don't miss out on this personalized monthly exclusive offer for you.</p>
						</div>
						<!-- /.title-one -->
						<a href="listing_details_02.html" class="btn-six">More Details</a>
					</div>
					<div class="col-lg-6 wow fadeInRight">
						<div class="property-item md-mt-60 position-relative z-1">
							<div class="row gx-0">
								<div class="col-md-5 d-flex">
									<div class="gutter border-right w-100 h-100">
										<div class="tag mb-20">FOR SELL</div>
										<h4 class="mb-70 sm-mb-40">Luxury fisa orkit villa.</h4>
										<ul class="style-none d-flex action-icons">
											<li><a href="#"><i class="fa-light fa-heart"></i></a></li>
											<li><a href="#"><i class="fa-light fa-bookmark"></i></a></li>
											<li><a href="#"><i class="fa-light fa-circle-plus"></i></a></li>
										</ul>
									</div>
									<!-- /.gutter -->
								</div>
								<div class="col-md-7 d-flex">
									<div class="gutter w-100 h-100">
										<p>Mirpur 10, National Stadium, 1210, Dhaka, BD</p>
										<h2 class="price text-center">$28,100.00</h2>
										<ul class="style-none d-flex feature">
											<li>
												<strong class="d-block color-dark fw-500 fs-20">2137</strong>
												<span class="fs-16">sqft</span>
											</li>
											<li class="text-center">
												<strong class="d-block color-dark fw-500 fs-20">03</strong>
												<span class="fs-16">bed</span>
											</li>
											<li class="text-end">
												<strong class="d-block color-dark fw-500 fs-20">02</strong>
												<span class="fs-16">bath</span>
											</li>
										</ul>
									</div>
									<!-- /.gutter -->
								</div>
							</div>
							<div class="button-group gutter d-flex justify-content-between align-items-center">
								<a href="listing_details_02.html" class="btn-three"><span>Check Full Details</span></a>
								<a href="listing_details_02.html" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
							</div>
						</div>
						<!-- /.property-item -->
					</div>
				</div>
			</div>
		</div>
		<!-- /.fancy-banner-one -->


		<!--
		=====================================================
			Agent Section One
		=====================================================
		-->
		<div class="agent-section-one position-relative z-1 mt-150 xl-mt-120">
			<div class="container">
				<div class="position-relative">
					<div class="title-one mb-85 lg-mb-50 wow fadeInLeft">
						<h3>Our <span>Agents<img src="/images/lazy.svg" data-src="/images/shape/title_shape_05.svg" alt="" class="lazy-img"></span></h3>
						<p class="fs-22 mt-xs">Lorem  is placeholder text commonly used  graphic </p>
					</div>
					<!-- /.title-one -->

					<div class="wrapper position-relative z-1">
						<div class="agent-slider-one">
							<div class="item">
								<div class="agent-card-one position-relative">
									<div class="img border-20">
										<img src="/images/agent/img_01.jpg" alt="" class="w-100 tran5s">
									</div>
									<div class="text-center">
										<h6>Mark Filo</h6>
										<a href="agent_details.html" class="stretched-link">CEO & Founder</a>
									</div>
								</div>
								<!-- /.agent-card-one -->
							</div>
							<div class="item">
								<div class="agent-card-one position-relative">
									<div class="img border-20">
										<img src="/images/agent/img_02.jpg" alt="" class="w-100 tran5s">
									</div>
									<div class="text-center">
										<h6>Chris Matial</h6>
										<a href="agent_details.html" class="stretched-link">Retailer</a>
									</div>
								</div>
								<!-- /.agent-card-one -->
							</div>
							<div class="item">
								<div class="agent-card-one position-relative">
									<div class="img border-20">
										<img src="/images/agent/img_03.jpg" alt="" class="w-100 tran5s">
									</div>
									<div class="text-center">
										<h6>Jubayer Al Hasan</h6>
										<a href="agent_details.html" class="stretched-link">Marketing Expert</a>
									</div>

								</div>
								<!-- /.agent-card-one -->
							</div>
							<div class="item">
								<div class="agent-card-one position-relative">
									<div class="img border-20">
										<img src="/images/agent/img_04.jpg" alt="" class="w-100 tran5s">
									</div>
									<div class="text-center">
										<h6>Jannatul Ferdaus</h6>
										<a href="agent_details.html" class="stretched-link">Broker</a>
									</div>
								</div>
								<!-- /.agent-card-one -->
							</div>
							<div class="item">
								<div class="agent-card-one position-relative">
									<div class="img border-20">
										<img src="/images/agent/img_05.jpg" alt="" class="w-100 tran5s">
									</div>
									<div class="text-center">
										<h6>Chris Matial</h6>
										<a href="agent_details.html" class="stretched-link">Broker</a>
									</div>
								</div>
								<!-- /.agent-card-one -->
							</div>
						</div>
					</div>
					<!-- /.wrapper -->

					<div class="section-btn text-center md-mt-60">
						<a href="agent.html" class="btn-one fw-normal">Meet Entire Team</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /.agent-section-one -->



		<!--
		=====================================================
			BLock Feature Four
		=====================================================
		-->
		<div class="block-feature-four mt-170 xl-mt-130 md-mt-40">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 d-flex order-lg-last">
						<div class="ps-xxl-5 ms-xl-4 pt-100 xl-pt-80 pb-45 w-100 h-100 wow fadeInRight">
							<div class="title-one mb-60 lg-mb-40">
								<div class="upper-title">CB ESTIMATE</div>
								<h3>Get quick <span>estimate<img src="/images/lazy.svg" data-src="/images/shape/title_shape_06.svg" alt="" class="lazy-img"></span> on your home.</h3>
								<p class="fs-24 color-dark">Master your property's valuation for a poised entry into the real estate market, armed with self-assurance and insight.</p>
							</div>
							<!-- /.title-one -->
							<form action="#" class="me-xl-4">
								<input type="email" placeholder="Your Email Address...">
								<button>Find out</button>
							</form>
							<div class="fs-16 mt-10 opacity-75">*For accurate info please <a href="contact.html" class="fst-italic color-dark text-decoration-underline">contact us.</a></div>
						</div>
					</div>
					<div class="col-lg-6 d-flex">
						<div class="img-gallery position-relative z-1 w-100 h-100 me-lg-5 wow fadeInLeft">
							<div class="img-bg" style="background-image: url(/images/media/img_11.jpg);"></div>
							<div class="card-one">
								<div class="text text-center z-1">
									<h6>Your estimate is in!</h6>
									<h3>$378,30.00</h3>
								</div>
								<img src="/images/lazy.svg" data-src="/images/assets/screen_12.png" alt="" class="lazy-img w-100">
							</div>
						</div>
						<!-- /.img-gallery -->
					</div>
				</div>
			</div>
		</div>
		<!-- /.block-feature-four -->



		<!--
		=====================================================
			BLock Feature Five
		=====================================================
		-->
		<div class="block-feature-five position-relative z-1 bg-pink pt-100 lg-pt-80 pb-130 xl-pb-100 lg-pb-80 mt-225 xl-mt-200 lg-mt-150">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 m-auto">
						<div class="title-one text-center mb-35 lg-mb-20">
							<h3>We’r here to help <br> you get your <span>dream home<img src="/images/lazy.svg" data-src="/images/shape/title_shape_07.svg" alt="" class="lazy-img"></span></h3>
							<p class="fs-24 color-dark">It’s easy to start with us with these simple steps</p>
						</div>
						<!-- /.title-one -->
					</div>
				</div>
				<div class="row justify-content-between">
					<div class="col-xxl-11 m-auto">
						<div class="row gx-xl-5 justify-content-center">
							<div class="col-lg-4 col-sm-6">
								<div class="card-style-one text-center wow fadeInUp mt-40">
									<img src="/images/lazy.svg" data-src="/images/icon/icon_07.svg" alt="" class="lazy-img m-auto icon">
									<h5 class="mt-50 lg-mt-30 mb-15">Create Account</h5>
									<p class="pe-xxl-4 ps-xxl-4">It’s very easy to open an account and start your journey.</p>
								</div>
								<!-- /.card-style-one -->
							</div>
							<div class="col-lg-4 col-sm-6">
								<div class="card-style-one text-center wow fadeInUp mt-40 arrow position-relative" data-wow-delay="0.1s">
									<img src="/images/lazy.svg" data-src="/images/icon/icon_08.svg" alt="" class="lazy-img m-auto icon">
									<h5 class="mt-50 lg-mt-30 mb-15">Find Home</h5>
									<p class="pe-xxl-4 ps-xxl-4">Complete your profile with all the info to get attention of client.</p>
								</div>
								<!-- /.card-style-one -->
							</div>
							<div class="col-lg-4 col-sm-6">
								<div class="card-style-one text-center wow fadeInUp mt-40" data-wow-delay="0.2s">
									<img src="/images/lazy.svg" data-src="/images/icon/icon_09.svg" alt="" class="lazy-img m-auto icon">
									<h5 class="mt-50 lg-mt-30 mb-15">Quick Process</h5>
									<p class="pe-xxl-4 ps-xxl-4">Apply & get your preferable jobs with all the requirements and get it.</p>
								</div>
								<!-- /.card-style-one -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<img src="/images/lazy.svg" data-src="/images/shape/shape_07.svg" alt="" class="lazy-img shapes shape_01">
			<img src="/images/lazy.svg" data-src="/images/shape/shape_08.svg" alt="" class="lazy-img shapes shape_02">
		</div>
		<!-- /.block-feature-five -->


		<!--
		=====================================================
			Fancy Banner Two
		=====================================================
		-->
		<div class="fancy-banner-two position-relative z-1 pt-90 lg-pt-50 pb-90 lg-pb-50">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="title-one text-center text-lg-start md-mb-40 pe-xl-5">
							<h3 class="text-white m0">Start your <span>Journey<img src="/images/lazy.svg" data-src="/images/shape/title_shape_06.svg" alt="" class="lazy-img"></span> As a Retailer.</h3>
						</div>
						<!-- /.title-one -->
					</div>
					<div class="col-lg-6">
						<div class="form-wrapper me-auto ms-auto me-lg-0">
							<form action="#">
								<input type="email" placeholder="Email address">
								<button>Get Started</button>
							</form>
							<div class="fs-16 mt-10 text-white">Already a Agent? <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Sign in.</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.fancy-banner-two -->



		<!--
		=====================================================
			Fancy Banner Three
		=====================================================
		-->
		<div class="fancy-banner-three position-relative text-center z-1 pt-200 xl-pt-150 lg-pt-100 pb-250 xl-pb-200 lg-pb-120">
			<div class="container">
				<div class="row">
					<div class="col-xl-7 col-md-8 m-auto">
						<div class="title-one mb-45 md-mb-30">
							<h2>Any Inquiry? <span>Feel free<img src="/images/lazy.svg" data-src="/images/shape/title_shape_08.svg" alt="" class="lazy-img"></span> To contact Us.</h2>
						</div>
						<!-- /.title-one -->
						<a href="contact.html" class="btn-five text-uppercase">SEND MESSAGE</a>
					</div>
				</div>
			</div>
			<img src="/images/lazy.svg" data-src="/images/assets/ils_02.svg" alt="" class="lazy-img shapes w-100 illustration">
		</div>
		<!-- /.fancy-banner-three -->




		<!--
		=====================================================
			Footer One
		=====================================================
		-->
		<div class="footer-one">
			<div class="position-relative z-1">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-4">
							<div class="footer-intro">
								<div class="bg-wrapper">
									<div class="logo mb-20">
										<a href="index.html">
											<img src="/images/logo/logo_01.svg" alt="">
										</a>
									</div>
									<!-- logo -->
									<p class="mb-60 lg-mb-40 md-mb-20">11910 Clyde Rapid Suite 70, Willyand, Virginia, United States</p>
									<h6>CONTACT</h6>
									<a href="#" class="email fs-24 text-decoration-underline tran3s mb-70 lg-mb-50">homyreal@demo.com</a>
									<ul class="style-none d-flex align-items-center social-icon">
										<li><a href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
										<li><a href="#"><i class="fa-brands fa-square-twitter"></i></a></li>
										<li><a href="#"><i class="fa-brands fa-square-instagram"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="d-flex flex-wrap">
								<div class="footer-nav mt-100 lg-mt-80 xs-mt-50">
									<h5 class="footer-title">Links</h5>
									<ul class="footer-nav-link style-none">
										<li><a href="index.html">Home</a></li>
										<li><a href="dashboard/membership.html" target="_blank">Membership</a></li>
										<li><a href="about_us_01.html">About Company</a></li>
										<li><a href="blog_01.html">Blog</a></li>
										<li><a href="blog_02.html">Explore Careers</a></li>
										<li><a href="pricing_02.html">Pricing</a></li>
										<li><a href="dashboard/dashboard-index.html" target="_blank">Dashboard</a></li>
									</ul>
								</div>
								<div class="footer-nav mt-100 lg-mt-80 xs-mt-30">
									<h5 class="footer-title">Legal</h5>
									<ul class="footer-nav-link style-none">
										<li><a href="faq.html">Terms & conditions</a></li>
										<li><a href="faq.html">Cookie</a></li>
										<li><a href="faq.html">Privacy policy</a></li>
										<li><a href="faq.html">Faq’s</a></li>
									</ul>
								</div>
								<div class="footer-nav mt-100 lg-mt-80 xs-mt-30">
									<h5 class="footer-title">New Listing</h5>
									<ul class="footer-nav-link style-none">
										<li><a href="listing_01.html">​Buy Apartments</a></li>
										<li><a href="listing_02.html">Buy Condos</a></li>
										<li><a href="listing_03.html">Rent Houses</a></li>
										<li><a href="listing_04.html">Rent Industrial</a></li>
										<li><a href="listing_05.html">Buy Villas</a></li>
										<li><a href="listing_06.html">Rent Office</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /.footer-one -->


		<!-- ################### Login Modal ####################### -->
        <!-- Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen modal-dialog-centered">
                <div class="container">
                    <div class="user-data-form modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						<div class="form-wrapper m-auto">
							<ul class="nav nav-tabs w-100" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active" data-bs-toggle="tab" data-bs-target="#fc1" role="tab">Login</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" data-bs-toggle="tab" data-bs-target="#fc2" role="tab">Signup</button>
								</li>
							</ul>
							<div class="tab-content mt-30">
								<div class="tab-pane show active" role="tabpanel" id="fc1">
									<div class="text-center mb-20">
										<h2>Welcome Back!</h2>
										<p class="fs-20 color-dark">Still don't have an account? <a href="#">Sign up</a></p>
									</div>
									<form action="#">
										<div class="row">
											<div class="col-12">
												<div class="input-group-meta position-relative mb-25">
													<label>Email*</label>
													<input type="email" placeholder="Youremail@gmail.com">
												</div>
											</div>
											<div class="col-12">
												<div class="input-group-meta position-relative mb-20">
													<label>Password*</label>
													<input type="password" placeholder="Enter Password" class="pass_log_id">
													<span class="placeholder_icon"><span class="passVicon"><img src="/images/icon/icon_68.svg" alt=""></span></span>
												</div>
											</div>
											<div class="col-12">
												<div class="agreement-checkbox d-flex justify-content-between align-items-center">
													<div>
														<input type="checkbox" id="remember">
														<label for="remember">Keep me logged in</label>
													</div>
													<a href="#">Forget Password?</a>
												</div> <!-- /.agreement-checkbox -->
											</div>
											<div class="col-12">
												<button class="btn-two w-100 text-uppercase d-block mt-20">Login</button>
											</div>
										</div>
									</form>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" role="tabpanel" id="fc2">
									<div class="text-center mb-20">
										<h2>Register</h2>
										<p class="fs-20 color-dark">Already have an account? <a href="#">Login</a></p>
									</div>
									<form action="#">
										<div class="row">
											<div class="col-12">
												<div class="input-group-meta position-relative mb-25">
													<label>Name*</label>
													<input type="text" placeholder="Zubayer Hasan">
												</div>
											</div>
											<div class="col-12">
												<div class="input-group-meta position-relative mb-25">
													<label>Email*</label>
													<input type="email" placeholder="zubayerhasan@gmail.com">
												</div>
											</div>
											<div class="col-12">
												<div class="input-group-meta position-relative mb-20">
													<label>Password*</label>
													<input type="password" placeholder="Enter Password" class="pass_log_id">
													<span class="placeholder_icon"><span class="passVicon"><img src="/images/icon/icon_68.svg" alt=""></span></span>
												</div>
											</div>
											<div class="col-12">
												<div class="agreement-checkbox d-flex justify-content-between align-items-center">
													<div>
														<input type="checkbox" id="remember2">
														<label for="remember2">By hitting the "Register" button, you agree to the <a href="#">Terms conditions</a> & <a href="#">Privacy Policy</a></label>
													</div>
												</div> <!-- /.agreement-checkbox -->
											</div>
											<div class="col-12">
												<button class="btn-two w-100 text-uppercase d-block mt-20">Sign Up</button>
											</div>
										</div>
									</form>
								</div>
								<!-- /.tab-pane -->
							</div>

							<div class="d-flex align-items-center mt-30 mb-10">
								<div class="line"></div>
								<span class="pe-3 ps-3 fs-6">OR</span>
								<div class="line"></div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<a href="#" class="social-use-btn d-flex align-items-center justify-content-center tran3s w-100 mt-10">
										<img src="/images/icon/google.png" alt="">
										<span class="ps-3">Signup with Google</span>
									</a>
								</div>
								<div class="col-sm-6">
									<a href="#" class="social-use-btn d-flex align-items-center justify-content-center tran3s w-100 mt-10">
										<img src="/images/icon/facebook.png" alt="">
										<span class="ps-3">Signup with Facebook</span>
									</a>
								</div>
							</div>
						</div>
						<!-- /.form-wrapper -->
                    </div>
                    <!-- /.user-data-form -->
                </div>
            </div>
        </div>
@endsection
