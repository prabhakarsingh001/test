<!doctype html>
<html lang="en">

<!-- Mirrored from golohtml.uxper.co/demo/city-details-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 06:29:13 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>City Details</title>
	<meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
	<!-- favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">

	<!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="fonts/jost/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="libs/line-awesome/css/line-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="libs/fontawesome-pro/css/fontawesome.css" />
    <link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="libs/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="libs/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="libs/quilljs/css/quill.bubble.css" />
    <link rel="stylesheet" type="text/css" href="libs/quilljs/css/quill.core.css" />
    <link rel="stylesheet" type="text/css" href="libs/quilljs/css/quill.snow.css" />
    <link rel="stylesheet" type="text/css" href="libs/chosen/chosen.min.css" />
    <link rel="stylesheet" type="text/css" href="libs/datetimepicker/jquery.datetimepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="libs/venobox/venobox.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <!-- jQuery -->    
    <script src="js/jquery-1.12.4.js"></script>
	<script src="libs/popper/popper.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="libs/slick/slick.min.js"></script>
	<script src="libs/slick/jquery.zoom.min.js"></script>
	<script src="libs/isotope/isotope.pkgd.min.js"></script>
	<script src="libs/quilljs/js/quill.core.js"></script>
    <script src="libs/quilljs/js/quill.js"></script>
    <script src="libs/chosen/chosen.jquery.min.js"></script>
    <script src="libs/datetimepicker/jquery.datetimepicker.full.min.js"></script>
    <script src="libs/venobox/venobox.min.js"></script>
    <script src="libs/waypoints/jquery.waypoints.min.js"></script>
    <!-- orther script -->
    <script src="js/main.js"></script>
</head>

<body>
	<div id="wrapper">
	<?php include 'assest/header_with_search.php' ?>

		<main id="main" class="site-main">
			<div class="page-title" style="background-image: url(images/city/paris-lager.jpg);">
				<div class="container">
					<div class="page-title__content">
						<h4 class="page-title__capita">France</h4>
						<h1 class="page-title__name">Paris</h1>
						<p class="page-title__slogan">the city of love</p>
					</div>
				</div>	
			</div><!-- .page-title -->
			<div class="intro">
				<div class="container">
					<h2 class="title">Introducing</h2>
					<div class="intro__content">
						<div class="row">
							<div class="col-lg-6">
								<div class="intro__text">Second City? Not by our count. It's world-class in so many categories magnificent architecture, stunning museums, brilliant chefs, a massive brewing scene, and so much to do that you'll never see it all. Scratch the surface in the Loop and on the Gold Coast.</div>
							</div>
							<div class="col-lg-6">
								<div class="intro__meta">
									<div class="row">
										<div class="col-md-4 col-sm-4">
											<div class="intro__meta__item">
												<h3>Currency</h3>
												<p>
													<i class="la la-money-bill"></i>
													<span>U.S. dollar</span>
												</p>
											</div><!-- .intro__meta__item -->
										</div>
										<div class="col-md-4 col-sm-4">
											<div class="intro__meta__item">
												<h3>Languages</h3>
												<p>
													<i class="la la-globe"></i>
													<span>English</span>
												</p>
											</div><!-- .intro__meta__item -->
										</div>
										<div class="col-md-4 col-sm-4">
											<div class="intro__meta__item">
												<h3>Best time to visit</h3>
												<p>
													<i class="la la-clock"></i>
													<span>Anytime</span>
												</p>
											</div><!-- .intro__meta__item -->
										</div>
									</div>
								</div><!-- .intro__meta -->
							</div>
						</div>
					</div><!-- .intro__content -->
				</div>
			</div><!-- .intro -->
			<div class="city-content">
				<div class="city-content__tabtitle tabs">
					<div class="container">
						<div class="city-content__tabtitle__tablist">
							<ul>
								<li class="active"><a title="France" href="#france">France</a></li>
								<li><a title="Stay" href="#stay">Stay</a></li>
								<li><a title="Eat &amp; Drink" href="#eat">Eat &amp; Drink</a></li>
								<li><a title="See &amp; do" href="#see">See &amp; do</a></li>
							</ul>
						</div><!-- .city-content__tabtitle__tablist -->
						<a class="city-content__tabtitle__button btn btn-mapsview" title="Maps view" href="maps-view.html">
							<i class="la la-map-marked-alt la-24"></i>
							Maps view
						</a><!-- .city-content__tabtitle__button -->
					</div>
				</div><!-- .city-content__tabtitle -->
				<div class="city-content__panels">
					<div class="container">
						<div class="city-content__panel" id="france">
							<div class="city-content__item">
								<h2 class="title title--more">
									Must See & Do
									<a title="See all" href="#">See all (16)</a>
								</h2>
								<div class="city-slider">
									<div class="city-slider__grid">
										<div class="places-item hover__box">
											<div class="places-item__thumb hover__box__thumb">
												<a title="barca" href="04_place-details-1.html"><img src="images/listing/02.jpg" alt=""></a>
											</div>
											<a title="Add Wishlist" href="#" class="place-item__addwishlist">					
												<i class="la la-bookmark la-24"></i>
											</a>
											<div class="places-item__info">
												<div class="places-item__category">
													<a title="Restaurants" href="#">Restaurants</a>
													<a title="Bakeries" href="#">Bakeries</a>
												</div>
												<h3><a title="Tartine Manufactory" href="04_place-details-1.html">Tartine Manufactory</a></h3>
												<div class="places-item__meta">
													<div class="places-item__reviews">
														<span class="places-item__number">
															<span class="places-item__count">(no reviews)</span>
														</span>
													</div>
													<div class="places-item__currency">$$</div>
												</div>
											</div>
										</div>
										<div class="places-item hover__box">
											<div class="places-item__thumb hover__box__thumb">
												<a title="angeles" href="04_place-details-1.html"><img src="images/listing/03.jpg" alt=""></a>
											</div>
											<a title="Add Wishlist" href="#" class="place-item__addwishlist">					
												<i class="la la-bookmark la-24"></i>
											</a>
											<div class="places-item__info">
												<div class="places-item__category">
													<a title="Coffee Shop" href="#">Coffee Shop</a>
												</div>
												<h3><a title="Mister Jiu's" href="04_place-details-1.html">Mister Jiu's</a></h3>
												<div class="places-item__meta">
													<div class="places-item__reviews">
														<span class="places-item__number">
															4.8										
															<i class="la la-star"></i>
															<span class="places-item__count">(3 reviews)</span>
														</span>
													</div>
													<div class="places-item__currency">$$</div>
												</div>
											</div>
										</div>
										<div class="places-item hover__box">
											<div class="places-item__thumb hover__box__thumb">
												<a title="Amsterdam" href="04_place-details-1.html"><img src="images/listing/04.jpg" alt=""></a>
											</div>
											<a title="Add Wishlist" href="#" class="place-item__addwishlist">					
												<i class="la la-bookmark la-24"></i>
											</a>
											<div class="places-item__info">
												<div class="places-item__category">
													<a title="Restaurant" href="#">Restaurant</a>
												</div>
												<h3><a title="Hayes Street Grill" href="04_place-details-1.html">Hayes Street Grill</a></h3>
												<div class="places-item__meta">
													<div class="places-item__reviews">
														<span class="places-item__number">
															4.7										
															<i class="la la-star"></i>
															<span class="places-item__count">(6 reviews)</span>
														</span>
													</div>
													<div class="places-item__currency">$</div>
												</div>
											</div>
										</div>
										<div class="places-item hover__box">
											<div class="places-item__thumb hover__box__thumb">
												<a title="Rome" href="04_place-details-1.html"><img src="images/listing/05.jpg" alt=""></a>
											</div>
											<a title="Add Wishlist" href="#" class="place-item__addwishlist">				
												<i class="la la-bookmark la-24"></i>
											</a>
											<div class="places-item__info">
												<div class="places-item__category">
													<a title="Coffee Shop" href="04_place-details-1.html">Coffee Shop</a>
												</div>
												<h3><a title="Zuni Café" href="#">Zuni Café</a></h3>
												<div class="places-item__meta">
													<div class="places-item__reviews">
														<span class="places-item__number">
															4.8										
															<i class="la la-star"></i>
															<span class="places-item__count">(9 reviews)</span>
														</span>
													</div>
													<div class="places-item__currency">$$</div>
												</div>
											</div>
										</div>
										<div class="places-item hover__box">
											<div class="places-item__thumb hover__box__thumb">
												<a title="barca" href="04_place-details-1.html"><img src="images/listing/06.jpg" alt=""></a>
											</div>
											<a title="Add Wishlist" href="#" class="place-item__addwishlist">				
												<i class="la la-bookmark la-24"></i>
											</a>
											<div class="places-item__info">
												<div class="places-item__category">
													<a title="Restaurants" href="#">Restaurants</a>
													<a title="Bakeries" href="#">Bakeries</a>
												</div>
												<h3><a title="Tartine Manufactory" href="04_place-details-1.html">Tartine Manufactory</a></h3>
												<div class="places-item__meta">
													<div class="places-item__reviews">
														<span class="places-item__number">
															<span class="places-item__count">(no reviews)</span>
														</span>
													</div>
													<div class="places-item__currency">$$</div>
												</div>
											</div>
										</div>
									</div><!-- .city-slider__grid -->
									<div class="city-slider__nav slick-nav">
										<div class="city-slider__prev slick-nav__prev">									
											<i class="la la-arrow-left"></i>
										</div><!-- .city-slider__prev -->
										<div class="city-slider__next slick-nav__next">		
											<i class="la la-arrow-right"></i>
										</div><!-- .city-slider__next -->
									</div><!-- .city-slider__nav -->
								</div><!-- .city-slider -->
							</div><!-- .city-content__item -->
							<div class="city-content__item">
								<h2 class="title title--more">
									Where to Eat
									<a href="#">See all (16)</a>
								</h2>
								<div class="city-slider">
									<div class="city-slider__grid">
										<div class="places-item hover__box">
											<div class="places-item__thumb hover__box__thumb">
												<a title="barca" href="04_place-details-1.html"><img src="images/listing/07.jpg" alt=""></a>
											</div>
											<a title="Add Wishlist" href="#" class="place-item__addwishlist">					
												<i class="la la-bookmark la-24"></i>
											</a>
											<div class="places-item__info">
												<div class="places-item__category">
													<a title="Restaurants" href="#">Restaurants</a>
													<a title="Bakeries" href="#">Bakeries</a>
												</div>
												<h3><a title="Tartine Manufactory" href="04_place-details-1.html">Tartine Manufactory</a></h3>
												<div class="places-item__meta">
													<div class="places-item__reviews">
														<span class="places-item__number">
															<span class="places-item__count">(no reviews)</span>
														</span>
													</div>
													<div class="places-item__currency">$$</div>
												</div>
											</div>
										</div>
										<div class="places-item hover__box">
											<div class="places-item__thumb hover__box__thumb">
												<a title="angeles" href="04_place-details-1.html"><img src="images/listing/08.jpg" alt=""></a>
											</div>
											<a title="Add Wishlist" href="#" class="place-item__addwishlist">					
												<i class="la la-bookmark la-24"></i>
											</a>
											<div class="places-item__info">
												<div class="places-item__category">
													<a title="Coffee Shop" href="#">Coffee Shop</a>
												</div>
												<h3><a title="Mister Jiu's" href="04_place-details-1.html">Mister Jiu's</a></h3>
												<div class="places-item__meta">
													<div class="places-item__reviews">
														<span class="places-item__number">
															4.8										
															<i class="la la-star"></i>
															<span class="places-item__count">(3 reviews)</span>
														</span>
													</div>
													<div class="places-item__currency">$$</div>
												</div>
											</div>
										</div>
										<div class="places-item hover__box">
											<div class="places-item__thumb hover__box__thumb">
												<a title="Amsterdam" href="04_place-details-1.html"><img src="images/listing/01.jpg" alt=""></a>
											</div>
											<a title="Add Wishlist" href="#" class="place-item__addwishlist">					
												<i class="la la-bookmark la-24"></i>
											</a>
											<div class="places-item__info">
												<div class="places-item__category">
													<a title="Restaurant" href="#">Restaurant</a>
												</div>
												<h3><a title="Hayes Street Grill" href="04_place-details-1.html">Hayes Street Grill</a></h3>
												<div class="places-item__meta">
													<div class="places-item__reviews">
														<span class="places-item__number">
															4.7										
															<i class="la la-star"></i>
															<span class="places-item__count">(6 reviews)</span>
														</span>
													</div>
													<div class="places-item__currency">$</div>
												</div>
											</div>
										</div>
										<div class="places-item hover__box">
											<div class="places-item__thumb hover__box__thumb">
												<a title="Rome" href="04_place-details-1.html"><img src="images/listing/02.jpg" alt=""></a>
											</div>
											<a title="Add Wishlist" href="#" class="place-item__addwishlist">				
												<i class="la la-bookmark la-24"></i>
											</a>
											<div class="places-item__info">
												<div class="places-item__category">
													<a title="Coffee Shop" href="#">Coffee Shop</a>
												</div>
												<h3><a title="Zuni Café" href="04_place-details-1.html">Zuni Café</a></h3>
												<div class="places-item__meta">
													<div class="places-item__reviews">
														<span class="places-item__number">
															4.8										
															<i class="la la-star"></i>
															<span class="places-item__count">(9 reviews)</span>
														</span>
													</div>
													<div class="places-item__currency">$$</div>
												</div>
											</div>
										</div>
										<div class="places-item hover__box">
											<div class="places-item__thumb hover__box__thumb">
												<a title="barca" href="04_place-details-1.html"><img src="images/listing/gallery-02.jpg" alt=""></a>
											</div>
											<a title="Add Wishlist" href="#" class="place-item__addwishlist">				
												<i class="la la-bookmark la-24"></i>
											</a>
											<div class="places-item__info">
												<div class="places-item__category">
													<a title="Restaurants" href="#">Restaurants</a>
													<a title="Bakeries" href="#">Bakeries</a>
												</div>
												<h3><a title="Tartine Manufactory" href="04_place-details-1.html">Tartine Manufactory</a></h3>
												<div class="places-item__meta">
													<div class="places-item__reviews">
														<span class="places-item__number">
															<span class="places-item__count">(no reviews)</span>
														</span>
													</div>
													<div class="places-item__currency">$$</div>
												</div>
											</div>
										</div>
									</div><!-- .city-slider__grid -->
									<div class="city-slider__nav slick-nav">
										<div class="city-slider__prev slick-nav__prev">
											<i class="la la-arrow-left"></i>
										</div><!-- .city-slider__prev -->
										<div class="city-slider__next slick-nav__next">		
											<i class="la la-arrow-right"></i>
										</div><!-- .city-slider__next -->
									</div><!-- .city-slider__nav -->
								</div>
							</div><!-- .city-content__item -->
							<div class="city-content__item">
								<h2 class="title title--more">
									Place to stay
									<a href="#">See all (16)</a>
								</h2>
								<div class="city-slider">
									<div class="city-slider__grid">
										<div class="places-item hover__box">
											<div class="places-item__thumb hover__box__thumb">
												<a title="barca" href="04_place-details-1.html"><img src="images/listing/gallery-03.jpg" alt=""></a>
											</div>
											<a title="Add Wishlist" href="#" class="place-item__addwishlist">					
												<i class="la la-bookmark la-24"></i>
											</a>
											<div class="places-item__info">
												<div class="places-item__category">
													<a title="Restaurants" href="#">Restaurants</a>
													<a title="Bakeries" href="#">Bakeries</a>
												</div>
												<h3><a title="Tartine Manufactory" href="04_place-details-1.html">Tartine Manufactory</a></h3>
												<div class="places-item__meta">
													<div class="places-item__reviews">
														<span class="places-item__number">
															<span class="places-item__count">(no reviews)</span>
														</span>
													</div>
													<div class="places-item__currency">$$</div>
												</div>
											</div>
										</div>
										<div class="places-item hover__box">
											<div class="places-item__thumb hover__box__thumb">
												<a title="angeles" href="04_place-details-1.html"><img src="images/listing/gallery-04.jpg" alt=""></a>
											</div>
											<a title="Add Wishlist" href="#" class="place-item__addwishlist">					
												<i class="la la-bookmark la-24"></i>
											</a>
											<div class="places-item__info">
												<div class="places-item__category">
													<a title="Coffee Shop" href="#">Coffee Shop</a>
												</div>
												<h3><a title="Mister Jiu's" href="04_place-details-1.html">Mister Jiu's</a></h3>
												<div class="places-item__meta">
													<div class="places-item__reviews">
														<span class="places-item__number">
															4.8										
															<i class="la la-star"></i>
															<span class="places-item__count">(3 reviews)</span>
														</span>
													</div>
													<div class="places-item__currency">$$</div>
												</div>
											</div>
										</div>
										<div class="places-item hover__box">
											<div class="places-item__thumb hover__box__thumb">
												<a title="Amsterdam" href="04_place-details-1.html"><img src="images/listing/gallery-05.jpg" alt=""></a>
											</div>
											<a title="Add Wishlist" href="#" class="place-item__addwishlist">					
												<i class="la la-bookmark la-24"></i>
											</a>
											<div class="places-item__info">
												<div class="places-item__category">
													<a title="Restaurant" href="#">Restaurant</a>
												</div>
												<h3><a title="Hayes Street Grill" href="04_place-details-1.html">Hayes Street Grill</a></h3>
												<div class="places-item__meta">
													<div class="places-item__reviews">
														<span class="places-item__number">
															4.7										
															<i class="la la-star"></i>
															<span class="places-item__count">(6 reviews)</span>
														</span>
													</div>
													<div class="places-item__currency">$</div>
												</div>
											</div>
										</div>
										<div class="places-item hover__box">
											<div class="places-item__thumb hover__box__thumb">
												<a title="Rome" href="04_place-details-1.html"><img src="images/listing/gallery-06.jpg" alt=""></a>
											</div>
											<a title="Add Wishlist" href="#" class="place-item__addwishlist">				
												<i class="la la-bookmark la-24"></i>
											</a>
											<div class="places-item__info">
												<div class="places-item__category">
													<a title="Coffee Shop" href="#">Coffee Shop</a>
												</div>
												<h3><a title="Zuni Café" href="04_place-details-1.html">Zuni Café</a></h3>
												<div class="places-item__meta">
													<div class="places-item__reviews">
														<span class="places-item__number">
															4.8										
															<i class="la la-star"></i>
															<span class="places-item__count">(9 reviews)</span>
														</span>
													</div>
													<div class="places-item__currency">$$</div>
												</div>
											</div>
										</div>
										<div class="places-item hover__box">
											<div class="places-item__thumb hover__box__thumb">
												<a title="barca" href="04_place-details-1.html"><img src="images/city/barca.jpg" alt=""></a>
											</div>
											<a title="Add Wishlist" href="#" class="place-item__addwishlist">				
												<i class="la la-bookmark la-24"></i>
											</a>
											<div class="places-item__info">
												<div class="places-item__category">
													<a title="Restaurants" href="#">Restaurants</a>
													<a title="Bakeries" href="#">Bakeries</a>
												</div>
												<h3><a title="Tartine Manufactory" href="04_place-details-1.html">Tartine Manufactory</a></h3>
												<div class="places-item__meta">
													<div class="places-item__reviews">
														<span class="places-item__number">
															<span class="places-item__count">(no reviews)</span>
														</span>
													</div>
													<div class="places-item__currency">$$</div>
												</div>
											</div>
										</div>
									</div><!-- .city-slider__grid -->
									<div class="city-slider__nav slick-nav">
										<div class="city-slider__prev slick-nav__prev">
											<i class="la la-arrow-left"></i>
										</div><!-- .city-slider__prev -->
										<div class="city-slider__next slick-nav__next">		
											<i class="la la-arrow-right"></i>
										</div><!-- .city-slider__next -->
									</div><!-- .city-slider__nav -->
								</div>
							</div><!-- .city-content__item -->
						</div><!-- .city-content__panel -->
					</div>
				</div><!-- .city-content__panel -->
			</div><!-- .city-content -->
			<div class="other-city banner-dark">
				<div class="container">
					<h2 class="title title--while">Explorer Other Cities</h2>
					<div class="other-city__content">
						<div class="row">
							<div class="col-lg-3 col-md-6">
								<div class="cities__item hover__box">
									<div class="cities__thumb hover__box__thumb">
										<a title="New York" href="#">
											<img src="images/city/newyork.jpg" alt="newyork">
										</a>
									</div>
									<h4 class="cities__name">United states</h4>
									<div class="cities__info">
										<h3 class="cities__capital">New York</h3>
										<p class="cities__number">55 places</p>
									</div>
								</div><!-- .cities__item -->
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="cities__item hover__box">
									<div class="cities__thumb hover__box__thumb">
										<a title="Tokyo" href="#">
											<img src="images/city/tokyo.jpg" alt="Tokyo">
										</a>
									</div>
									<h4 class="cities__name">Japan</h4>
									<div class="cities__info">
										<h3 class="cities__capital">Tokyo</h3>
										<p class="cities__number">32 places</p>
									</div>
								</div><!-- .cities__item -->
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="cities__item hover__box">
									<div class="cities__thumb hover__box__thumb">
										<a title="Singapore" href="#">
											<img src="images/city/singapo.jpg" alt="Singapo">
										</a>
									</div>
									<h4 class="cities__name">Singapore</h4>
									<div class="cities__info">
										<h3 class="cities__capital">Singapore</h3>
										<p class="cities__number">22 places</p>
									</div>
								</div><!-- .cities__item -->
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="cities__item hover__box">
									<div class="cities__thumb hover__box__thumb">
										<a title="barca" href="#">
											<img src="images/city/barca.jpg" alt="barca">
										</a>
									</div>
									<h4 class="cities__name">Spain</h4>
									<div class="cities__info">
										<h3 class="cities__capital">Barca</h3>
										<p class="cities__number">78 places</p>
									</div>
								</div><!-- .cities__item -->
							</div>
						</div>
					</div>
				</div>
			</div><!-- .other-city -->
		</main><!-- .site-main -->
		<?php include 'assest/footer.html' ?>
	</div><!-- #wrapper -->
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>

<!-- Mirrored from golohtml.uxper.co/demo/city-details-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 06:29:15 GMT -->
</html>