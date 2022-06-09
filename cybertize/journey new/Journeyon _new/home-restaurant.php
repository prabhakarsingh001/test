<!doctype html>
<html lang="en">

<!-- Mirrored from golohtml.uxper.co/demo/home-restaurant.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 06:28:26 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Golo | Restaurant</title>
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
<?php include "assest/header.html" ?>

		<main id="main" class="site-main overflow">
			<section class="banner-wrap">
				<div class="flex">
					<div class="banner-left"></div>
					<div class="banner slick-sliders">
						<div class="banner-sliders slick-slider" data-item="1" data-arrows="false" data-dots="true">
							<div class="item"><img src="images/bg/bg-hero-1.jpg" alt="Banner"></div>
							<div class="item"><img src="images/bg/bg-hero-2.jpg" alt="Banner"></div>
							<div class="item"><img src="images/bg/bg-hero-3.jpg" alt="Banner"></div>
						</div>
					</div><!-- .banner -->
				</div>
				<div class="container">
					<div class="banner-content">
						<span class="offset-item">Drink, Food & Enjoy</span>
						<h1 class="offset-item">Discover the best restaurant.</h1>
					<?php include 'assest/search.html' ?>
					</div>
				</div>
			</section><!-- .banner-wrap -->
			<section class="restaurant-wrap">
				<div class="container">
					<div class="title_home offset-item">
						<h2>Popular Restaurants in Town</h2>
					</div>
					<div class="restaurant-sliders slick-sliders offset-item">
						<div class="restaurant-slider slick-slider" data-item="4" data-itemScroll="4" data-arrows="true" data-dots="true" data-tabletItem="2" data-tabletScroll="2" data-mobileItem="1" data-mobileScroll="1">
							<div class="place-item layout-02 place-hover" data-maps_name="mattone_restaurant">
							    <div class="place-inner">
					                <div class="place-thumb hover-img">
					            		<a class="entry-thumb" href="single-3.html"><img src="images/listing/01.jpg" alt=""></a>
										<a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
											<span class="icon-heart">
												<i class="la la-bookmark large"></i>
											</span>                                    
										</a>       
						                <a class="entry-category rosy-pink" href="#">
						                    <i class="las la-utensils"></i><span>Restaurant</span>
						                </a>
						                <a href="#" class="author" title="Author"><img src="images/avatars/male-3.jpg" alt="Author"></a>
									</div>       
							        <div class="entry-detail">
							            <div class="entry-head">
							                <div class="place-type list-item">
							                    <span>Restaurant</span>
							               	</div>
							                <div class="place-city">
							                    <a href="#">Paris</a>
							                </div>
							            </div>
							            <h3 class="place-title"><a href="single-3.html">Mattone Restaurant</a></h3>
							            <div class="open-now"><i class="las la-door-open"></i>Open now</div>
							            <div class="entry-bottom">
							                <div class="place-preview">
							                    <div class="place-rating">
							                        <span>5.0</span>
							                        <i class="la la-star"></i>
							                    </div>
							                    <span class="count-reviews">(2 Reviews)</span>
							                </div>
											<div class="place-price">
							                    <span>$$</span>
							                </div>
							            </div>
							        </div>
							    </div>
							</div>
							<div class="place-item layout-02 place-hover" data-maps_name="retro_fitness">
							    <div class="place-inner">
					                <div class="place-thumb hover-img">
					            		<a class="entry-thumb" href="single-3.html"><img src="images/listing/09.jpg" alt=""></a>
										<a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
											<span class="icon-heart">
												<i class="la la-bookmark large"></i>
											</span>                                    
										</a>       
						                <a class="entry-category rosy-pink" href="#">
                                            <i class="las la-utensils"></i><span>Restaurant</span>
                                        </a>
						                <a href="#" class="author" title="Author"><img src="images/avatars/male-2.jpg" alt="Author"></a>
									</div>       
							        <div class="entry-detail">
							            <div class="entry-head">
							                <div class="place-type list-item">
							                    <span>Pizza</span>
							               	</div>
							                <div class="place-city">
							                    <a href="#">Bordeaux</a>
							                </div>
							            </div>
							            <h3 class="place-title"><a href="single-3.html">Retro Pizz</a></h3>
							            <div class="open-now"><i class="las la-door-open"></i>Open now</div>
							            <div class="entry-bottom">
							                <div class="place-preview">
							                    <div class="place-rating">
							                        <span>5.0</span>
							                        <i class="la la-star"></i>
							                    </div>
							                    <span class="count-reviews">(2 Reviews)</span>
							                </div>
											<div class="place-price">
							                    <span>$$</span>
							                </div>
							            </div>
							        </div>
							    </div>
							</div>
							<div class="place-item layout-02 place-hover" data-maps_name="body_spa">
							    <div class="place-inner">
					                <div class="place-thumb hover-img">
					            		<a class="entry-thumb" href="single-3.html"><img src="images/listing/gallery-06.jpg" alt=""></a>
										<a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
											<span class="icon-heart">
												<i class="la la-bookmark large"></i>
											</span>                                    
										</a>       
						                <a class="entry-category rosy-pink" href="#">
                                            <i class="las la-utensils"></i><span>Restaurant</span>
                                        </a>
						                <a href="#" class="author" title="Author"><img src="images/avatars/female-3.jpg" alt="Author"></a>
									</div>       
							        <div class="entry-detail">
							            <div class="entry-head">
							                <div class="place-type list-item">
							                    <span>Fastfood</span>
							               	</div>
							                <div class="place-city">
							                    <a href="#">Lyon</a>
							                </div>
							            </div>
							            <h3 class="place-title"><a href="single-1.html">Antino Bin</a></h3>
							            <div class="close-now"><i class="las la-door-closed"></i>Close now</div>
							            <div class="entry-bottom">
							                <div class="place-preview">
							                    <div class="place-rating">
							                        <span>5.0</span>
							                        <i class="la la-star"></i>
							                    </div>
							                    <span class="count-reviews">(2 Reviews)</span>
							                </div>
											<div class="place-price">
							                    <span>$$</span>
							                </div>
							            </div>
							        </div>
							    </div>
							</div>
							<div class="place-item layout-02 place-hover" data-maps_name="antoinette">
							    <div class="place-inner">
					                <div class="place-thumb hover-img">
					            		<a class="entry-thumb" href="single-1.html"><img src="images/listing/05.jpg" alt=""></a>
										<a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
											<span class="icon-heart">
												<i class="la la-bookmark large"></i>
											</span>                                    
										</a>       
						                <a class="entry-category rosy-pink" href="#">
                                            <i class="las la-utensils"></i><span>Restaurant</span>
                                        </a>
						                <a href="#" class="author" title="Author"><img src="images/avatars/male-4.jpg" alt="Author"></a>
									</div>       
							        <div class="entry-detail">
							            <div class="entry-head">
							                <div class="place-type list-item">
							                    <span>Coffee</span>
							               	</div>
							                <div class="place-city">
							                    <a href="#">Nantes</a>
							                </div>
							            </div>
							            <h3 class="place-title"><a href="single-1.html">Unisho Ramen</a></h3>
							            <div class="close-now"><i class="las la-door-closed"></i>Close now</div>
							            <div class="entry-bottom">
							                <div class="place-preview">
							                    <span class="no-reviews">(no reviews)</span>
							                </div>
											<div class="place-price">
							                    <span>$$$</span>
							                </div>
							            </div>
							        </div>
							    </div>
							</div>
							<div class="place-item layout-02 place-hover" data-maps_name="kathay_cinema">
							    <div class="place-inner">
					                <div class="place-thumb hover-img">
					            		<a class="entry-thumb" href="single-1.html"><img src="images/listing/gallery-03.jpg" alt=""></a>
										<a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
											<span class="icon-heart">
												<i class="la la-bookmark large"></i>
											</span>                                    
										</a>       
						                 <a class="entry-category rosy-pink" href="#">
                                            <i class="las la-utensils"></i><span>Restaurant</span>
                                        </a>
						                <a href="#" class="author" title="Author"><img src="images/avatars/female-3.jpg" alt="Author"></a>
									</div>       
							        <div class="entry-detail">
							            <div class="entry-head">
							                <div class="place-type list-item">
							                    <span>Restaurant</span>
							               	</div>
							                <div class="place-city">
							                    <a href="#">Paris</a>
							                </div>
							            </div>
							            <h3 class="place-title"><a href="single-1.html">Kathay Restaurant</a></h3>
							            <div class="close-now"><i class="las la-door-closed"></i>Close now</div>
							            <div class="entry-bottom">
							                <div class="place-preview">
							                    <span class="no-reviews">(no reviews)</span>
							                </div>
											<div class="place-price">
							                    <span>$$</span>
							                </div>
							            </div>
							        </div>
							    </div>
							</div>
						</div><!-- .restaurant-slider -->
						<div class="place-slider__nav slick-nav">
							<div class="place-slider__prev slick-nav__prev">
								<i class="las la-angle-left"></i>
							</div><!-- .place-slider__prev -->
							<div class="place-slider__next slick-nav__next">		
								<i class="las la-angle-right"></i>
							</div><!-- .place-slider__next -->
						</div><!-- .place-slider__nav -->
					</div><!-- .restaurant-sliders -->
				</div>
			</section><!-- .restaurant-wrap -->
			<section class="cuisine-wrap section-bg">
				<div class="container">
					<div class="title_home offset-item">
						<h2>Search By Cuisine</h2>
						<p>Explore restaurants and cafes by your favorite cuisine</p>
					</div>
					<div class="cuisine-sliders slick-sliders offset-item">
						<div class="cuisine-slider slick-slider" data-item="6" data-itemScroll="6" data-arrows="true" data-dots="true" data-smallpcItem="4" data-smallpcScroll="4" data-tabletItem="3" data-tabletScroll="3" data-mobileItem="2" data-mobileScroll="2">
							<div class="item">
								<a href="ex-half-map-1.html" title="Pizza">
									<span class="hover-img"><img src="images/menu/pizza.jpg" alt="Pizza"></span>
									<span class="title">Pizza<span class="number">(34)</span></span>
								</a>
							</div>
							<div class="item">
								<a href="ex-half-map-1.html" title="Fastfood">
									<span class="hover-img"><img src="images/menu/fastfood.png" alt="Fastfood"></span>
									<span class="title">Fastfood<span class="number">(57)</span></span>
								</a>
							</div>
							<div class="item">
								<a href="ex-half-map-1.html" title="Vegatarian">
									<span class="hover-img"><img src="images/menu/vegetables.jpg" alt="Vegatarian"></span>
									<span class="title">Vegatarian<span class="number">(85)</span></span>
								</a>
							</div>
							<div class="item">
								<a href="ex-half-map-1.html" title="Mexican">
									<span class="hover-img"><img src="images/menu/mexican.jpg" alt="Mexican"></span>
									<span class="title">Mexican<span class="number">(22)</span></span>
								</a>
							</div>
							<div class="item">
								<a href="ex-half-map-1.html" title="Italian">
									<span class="hover-img"><img src="images/menu/italian.jpg" alt="Italian"></span>
									<span class="title">Italian<span class="number">(48)</span></span>
								</a>
							</div>
							<div class="item">
								<a href="ex-half-map-1.html" title="Japan">
									<span class="hover-img"><img src="images/menu/japan.jpg" alt="Japan"></span>
									<span class="title">Japan<span class="number">(12)</span></span>
								</a>
							</div>
							<div class="item">
								<a href="ex-half-map-1.html" title="Vietnamese">
									<span class="hover-img"><img src="images/menu/vietnamese.jpg" alt="Pizza"></span>
									<span class="title">Vietnamese<span class="number">(34)</span></span>
								</a>
							</div>
						</div><!-- .cuisine-slider -->
						<div class="place-slider__nav slick-nav">
							<div class="place-slider__prev slick-nav__prev">
								<i class="las la-angle-left"></i>
							</div><!-- .place-slider__prev -->
							<div class="place-slider__next slick-nav__next">		
								<i class="las la-angle-right"></i>
							</div><!-- .place-slider__next -->
						</div><!-- .place-slider__nav -->
					</div><!-- .cuisine-sliders -->
				</div><!-- .container -->
			</section><!-- .cuisine-wrap -->
			<section class="featured-home featured-wrap">
				<div class="container">
					<div class="title_home offset-item">
						<h2>Featured Cities</h2>
						<p>Explore restaurants & cafes by locality</p>
					</div>
					<div class="featured-inner offset-item">
						<div class="item">
							<div class="flex">
								<div class="flex-col">
									<div class="cities">
										<div class="cities-inner">
											<a href="city-details-1.html" class="hover-img">
												<span class="entry-thumb"><img src="images/city/chicago-small.jpg" alt="Chicago"></span>
												<span class="entry-details">
													<h3>Chicago</h3>
												    <span>80 places</span>
												</span>
											</a>
										</div>
									</div>
								</div>
								<div class="flex-col">
									<div class="cities">
										<div class="cities-inner">
											<a href="city-details-1.html" class="hover-img">
												<span class="entry-thumb"><img src="images/city/losangeles-small.jpg" alt="Los Angeles"></span>
												<span class="entry-details">
													<h3>Los Angeles</h3>
												    <span>70 places</span>
												</span>
											</a>
										</div>
									</div>
                                    <div class="cities">
                                        <div class="cities-inner">
                                            <a href="city-details-1.html" class="hover-img">
                                                <span class="entry-thumb"><img src="images/city/newyork-small.jpg" alt="New York"></span>
                                                <span class="entry-details">
                                                    <h3>New York</h3>
                                                    <span>85 places</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
								</div>
								<div class="flex-col">
									<div class="cities">
                                        <div class="cities-inner">
                                            <a href="city-details-1.html" class="hover-img">
                                                <span class="entry-thumb"><img src="images/city/sandiego-small.jpg" alt="San Diego"></span>
                                                <span class="entry-details">
                                                    <h3>San Diego</h3>
                                                    <span>60 places</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
									<div class="cities">
										<div class="cities-inner">
											<a href="city-details-1.html" class="hover-img">
												<span class="entry-thumb"><img src="images/city/san-fransico-small.jpg" alt="San Fransico"></span>
												<span class="entry-details">
													<h3>San Fransico</h3>
												    <span>65 places</span>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- .featured-inner -->
				</div><!-- .container -->
			</section><!-- .featured-wrap -->
			<section class="join-wrap" style="background-image: url(images/bg/bg-join-us.jpg);">
				<div class="container">
					<div class="join-inner">
						<h2 class="offset-item">Restaurateurs Join Us</h2>
						<p class="offset-item">Join the more than 10,000 restaurants which fill seats and manage reservations with Golo.</p>
						<a href="#" class="btn offset-item" title="Learn More">Learn More</a>
					</div>
				</div>
			</section><!-- .join-wrap -->
			<section class="home-testimonials testimonials">
				<div class="container">
					<div class="title_home offset-item">
						<h2>People Talking About Us</h2>
					</div>
					<div class="testimonial-sliders slick-sliders offset-item">
						<div class="testimonial-slider slick-slider" data-item="2" data-itemScroll="2" data-arrows="true" data-dots="true" data-tabletItem="1" data-tabletScroll="1" data-mobileItem="1" data-mobileScroll="1">
							<div class="item">
								<div class="testimonial-item flex">
									<div class="testimonial-thumb">
										<img src="images/avatars/female-1.jpg" alt="Kari Granleese" class="avatar">
										<img src="images/assets/quote-active.png" alt="quote" class="quote">
									</div>
									<div class="testimonial-info">
										<p>Really useful app to find interesting things to see do, drink and eat in new places. I’ve been using it regularly in my travels over the past few months.</p>
										<div class="cite">
											<h4>Kari Granleese</h4>
											<span>CEO Alididi</span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimonial-item flex">
									<div class="testimonial-thumb">
										<img src="images/avatars/female-2.jpg" alt="Kari Granleese" class="avatar">
										<img src="images/assets/quote-active.png" alt="quote" class="quote">
									</div>
									<div class="testimonial-info">
										<p> Amazing work. I wonder how to change the main menu to the Home 2 which I found much more interesting!</p>
										<div class="cite">
											<h4>Cristina</h4>
											<span>Foot Blogger</span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimonial-item flex">
									<div class="testimonial-thumb">
										<img src="images/avatars/female-3.jpg" alt="Kari Granleese" class="avatar">
										<img src="images/assets/quote-active.png" alt="quote" class="quote">
									</div>
									<div class="testimonial-info">
										<p> There are very few themes in Themeforest that work 99% smoothly, and one of them is "Golo" Simply The Best !!!</p>
										<div class="cite">
											<h4>John Doe</h4>
											<span>Traverler</span>
										</div>
									</div>
								</div>
							</div>
						</div><!-- .testimonial-slider -->
						<div class="place-slider__nav slick-nav">
							<div class="place-slider__prev slick-nav__prev">
								<i class="las la-angle-left"></i>
							</div><!-- .place-slider__prev -->
							<div class="place-slider__next slick-nav__next">		
								<i class="las la-angle-right"></i>
							</div><!-- .place-slider__next -->
						</div><!-- .place-slider__nav -->
					</div><!-- .testimonial-sliders -->
				</div>
			</section><!-- .testimonials -->
			<section class="blogs-wrap section-bg">
				<div class="container">
					<div class="title_home offset-item">
						<h2>From Our Blog</h2>
					</div>
					<div class="blog-wrap offset-item">
						<div class="row">
							<div class="col-md-4">
								<article class="post hover__box">
									<div class="post__thumb hover-img">
										<a title="The 8 Most Affordable Michelin Restaurants in Paris" href="blog-detail.html"><img src="images/blog/blog-01.jpg" alt="The 8 Most Affordable Michelin Restaurants in Paris"></a>
									</div>
									<div class="post__info">
										<ul class="post__category">
											<li><a title="Paris" href="02_city-details_1.html">Paris</a></li>
											<li><a title="Food" href="02_city-details_1.html">Food</a></li>
										</ul>
										<h3 class="post__title"><a title="The 8 Most Affordable Michelin Restaurants in Paris" href="blog-detail.html">The 8 Most Affordable Michelin Restaurants in Paris</a></h3>
									</div>
								</article>
							</div>
							<div class="col-md-4">
								<article class="post hover__box">
									<div class="post__thumb hover-img">
										<a title="The 7 Best Restaurants to Try Kobe Beef in London" href="blog-detail.html"><img src="images/blog/blog-02.jpg" alt="The 7 Best Restaurants to Try Kobe Beef in London"></a>
									</div>
									<div class="post__info">
										<ul class="post__category">
											<li><a title="London" href="02_city-details_1.html">London</a></li>
											<li><a title="Art & Decor" href="02_city-details_1.html">Art & Decor</a></li>
										</ul>
										<h3 class="post__title"><a title="The 7 Best Restaurants to Try Kobe Beef in London" href="blog-detail.html">The 7 Best Restaurants to Try Kobe Beef in London</a></h3>
									</div>
								</article>
							</div>
							<div class="col-md-4">
								<article class="post hover__box">
									<div class="post__thumb hover-img">
										<a title="The 8 Most Affordable Michelin Restaurants in Paris" href="blog-detail.html"><img src="images/blog/blog-03.jpg" alt="The 8 Most Affordable Michelin Restaurants in Paris"></a>
									</div>
									<div class="post__info">
										<ul class="post__category">
											<li><a title="Paris" href="02_city-details_1.html">Paris</a></li>
											<li><a title="Stay" href="02_city-details_1.html">Stay</a></li>
										</ul>
										<h3 class="post__title"><a title="The 8 Most Affordable Michelin Restaurants in Paris" href="blog-detail.html">The 9 Best Cheap Hotels in New York City</a></h3>
									</div>
								</article>
							</div>
						</div>
						<div class="button-wrap">
							<a href="#" class="btn" title="View more">View more</a>
						</div>
					</div>
				</div>
			</section><!-- .blogs-wrap -->
		</main><!-- .site-main -->
 <?php include "./assest/footer.html" ?>
	</div> <!-- #wrapper -->
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>

<!-- Mirrored from golohtml.uxper.co/demo/home-restaurant.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 06:28:32 GMT -->
</html>