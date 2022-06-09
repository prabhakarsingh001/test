<!doctype html>
<html lang="en">

<!-- Mirrored from golohtml.uxper.co/demo/shop-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 06:29:55 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Shop - Detail</title>
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
			<div class="page-title page-title--small align-left" style="background-image: url(images/bg/bg-shop.png);">
				<div class="container">
					<div class="page-title__content">
						<h1 class="page-title__name">Shop</h1>
						<p class="page-title__slogan">Travel Products We Love</p>
					</div>
				</div>	
			</div><!-- .page-title -->
			<div class="shop-details">
				<div class="container">
					<ul class="shop-details__breadcrumbs breadcrumbs">
						<li><a title="Shop" href="#">Shop</a></li>
						<li><a title="France Travel Guide" href="#">Mongolia Travel Guide</a></li>
					</ul><!-- .place__breadcrumbs -->
					<div class="shop-details__wrap">
						<div class="row">
							<div class="col-md-5">
								<div class="shop-details__thumb">
									<a title="France city guide" href="#"><img src="images/shop/product-07.jpg" alt="France"></a>
								</div>
							</div>
							<div class="col-md-7">
								<div class="shop-details__summary">
									<h2>Mongolia city guide</h2>
									<div class="shop-details__review">
										<span class="shop-details__review_star">								
											<i class="la la-star"></i>
											<i class="la la-star"></i>
											<i class="la la-star"></i>
											<i class="la la-star"></i>
											<i class="la la-star"></i>
										</span>
										<span>(1 reviews)</span>
									</div>	
									<div class="shop-details__price">$39</div>
									<div class="shop-details__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
									<form action="#" class="shop-details__addcart">
										<div class="shop-details__quantity">
											<span class="plus">											
												<i class="la la-plus"></i>
											</span>
											<input type="number" name="quantity" value="1" class="qty">
											<span class="minus">		
												<i class="la la-minus"></i>
											</span>
										</div>
										<button type="submit">Add to cart</button>
									</form>
									<div class="shop-details__details">
										<div class="shop-details__sku"><b>Sku: </b><span>006</span></div>
										<div class="shop-details__cat"><b>Category: </b><a title="Books" href="#">Books</a></div>
										<div class="shop-details__tag"><b>Tags: </b><a title="Adventure" href="#">Adventure</a><a title="tourist" href="#">tourist</a></div>
									</div>
									<div class="shop-details__share">
										<ul>
											<li>
												<a title="Facebook" href="#">											
													<i class="la la-facebook-f"></i>
												</a>
											</li>
											<li>
												<a title="Twitter" href="#">																		
													<i class="la la-twitter"></i>
												</a>
											</li>
											<li>
												<a title="Instagram" href="#">																		
													<i class="la la-instagram"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div><!-- .shop-details__wrap -->
					<div class="shop-details__tabs">
						<ul class="shop-details__tablist tabs">
							<li class="active"><a title="Description" href="#panel_description">Description</a></li>
							<li><a title="Additional information" href="#panel_information">Additional information</a></li>
							<li><a title="Reviews (2)" href="#panel_review">Reviews (2)</a></li>
						</ul>
						<div class="shop-details__panel" id="panel_description">
							<p>Eu tollit nonumy oblique pri, qui ne equidem interesset, usu ea quando facilisi senserit. Eu sit aliquid vituperata omittantur. Eos in quis mundi, ne sit possit possim, eu sint viris quo. Facilis sensibus eam ea, elit ocurreret has. Quo ei corpora constituam, discere reprimique. No qui posse deseruisse. Cu vel choro iracundia, has cu modus mucius expetenda, oblique singulis eleifend an nec vitae impedit dignissim.</p>
							<b>What’s inside?</b>
							<ul>
								<li>– Getting Over Your Fears</li>
								<li>– What About My Career?</li>
								<li>– What to Do About Naysayers</li>
								<li>– Building Self-Confidence</li>
							</ul>
						</div>
						<div class="shop-details__panel" id="panel_information">
							<p>Eu tollit nonumy oblique pri, qui ne equidem interesset, usu ea quando facilisi senserit. Eu sit aliquid vituperata omittantur. Eos in quis mundi, ne sit possit possim, eu sint viris quo. Facilis sensibus eam ea, elit ocurreret has. Quo ei corpora constituam, discere reprimique. No qui posse deseruisse. Cu vel choro iracundia, has cu modus mucius expetenda, oblique singulis eleifend an nec vitae impedit dignissim.</p>
						</div>
						<div class="shop-details__panel" id="panel_review">
							<b>What’s inside?</b>
							<ul>
								<li>– Getting Over Your Fears</li>
								<li>– What About My Career?</li>
								<li>– What to Do About Naysayers</li>
								<li>– Building Self-Confidence</li>
							</ul>
						</div>
					</div><!-- .shop-details__tabs -->
				</div>
			</div><!-- .shop-details -->
			<div class="other-products">
				<div class="container">
					<h2 class="other-products__title title">Other products</h2>
					<div class="other-products__content">
						<div class="row">
							<div class="col-lg-3 col-sm-6">
								<div class="shop__products__item hover__box">
									<div class="shop__products__thumb hover__box__thumb">
										<a title="Taiwan travel guide" href="#"><img src="images/shop/product-06.jpg" alt="Taiwan"></a>
									</div>
									<div class="shop__products__info">
										<h3><a title="Taiwan travel guide" href="#">Taiwan travel guide</a></h3>
										<span class="shop__products__price">$39</span>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="shop__products__item hover__box">
									<div class="shop__products__thumb hover__box__thumb">
										<a title="India travel guide" href="#"><img src="images/shop/product-07.jpg" alt="India"></a>
									</div>
									<div class="shop__products__info">
										<h3><a title="India travel guide" href="#">India travel guide</a></h3>
										<span class="shop__products__price">$42</span>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="shop__products__item hover__box">
									<div class="shop__products__thumb hover__box__thumb">
										<a title="Kerala travel guide" href="#"><img src="images/shop/product-08.jpg" alt="South India"></a>
									</div>
									<div class="shop__products__info">
										<h3><a title="Kerala travel guide" href="#">Kerala travel guide</a></h3>
										<span class="shop__products__price">$69</span>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="shop__products__item hover__box">
									<div class="shop__products__thumb hover__box__thumb">
										<a title="Rajasthan travel guide" href="#"><img src="images/shop/product-04.jpg" alt="Rajasthan"></a>
									</div>
									<div class="shop__products__info">
										<h3><a title="Rajasthan travel guide" href="#">Rajasthan travel guide</a></h3>
										<span class="shop__products__price">$74</span>
									</div>
								</div>
							</div>
						</div>
					</div><!-- .other-products__content -->
				</div>
			</div><!-- .other-products -->
		</main><!-- .site-main -->

        <?php include 'assest/footer.html' ?>
	</div><!-- #wrapper -->
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>

<!-- Mirrored from golohtml.uxper.co/demo/shop-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 06:29:55 GMT -->
</html>