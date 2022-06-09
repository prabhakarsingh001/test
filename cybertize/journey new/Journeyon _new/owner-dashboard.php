<!doctype html>
<html lang="en">

<!-- Mirrored from golohtml.uxper.co/demo/owner-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 06:30:04 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Owner - Dashboard</title>
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
			<div class="site-content owner-content">
				<div class="member-menu">
					<div class="container">
						<ul>
							<li class="active"><a href="owner-dashboard.php">Dashboard</a></li>
							<!-- <li><a href="owner-bookings.php">Bookings</a></li> -->
							<li><a href="owner-listings.php">Listings</a></li>
							<!-- <li><a href="owner-wishlist.php">Wishlist</a></li> -->
							<li><a href="owner-profile.php">Profile</a></li>
						</ul>
					</div>
				</div>
				<div class="container">
					<div class="member-wrap">
						<div class="member-wrap-top">
							<h2>Welcome back! Kevin</h2>
							<p>You are current FREE plan. <a href="pricing-plan.html">Upgrade now</a></p>
						</div><!-- .member-wrap-top -->
						<div class="upgrade-box">
							<h1>Choose a plan to submit your place!</h1>
							<p>Pay as you go service, cancel anytime.</p>
							<a href="pricing-plan.html" class="btn" title="Upgrade now">Upgrade now</a>
							<img src="images/assets/img-people.svg" alt="Upgrade now">
							<a href="#" class="close" data-close="upgrade-box"><i class="las la-times"></i></a>
						</div><!-- .upgrade-box -->
						<div class="member-statistical">
							<div class="row">
								<div class="col-lg-3 col-6">
									<div class="item blue">
										<h3>Active Places</h3>
										<span class="number">0</span>
										<span class="line"></span>
									</div>
								</div>
								<div class="col-lg-3 col-6">
									<div class="item green">
										<h3>Bookings Made</h3>
										<span class="number">12</span>
										<span class="line"></span>
									</div>
								</div>
								<div class="col-lg-3 col-6">
									<div class="item yellow">
										<h3>Total Reviews</h3>
										<span class="number">6</span>
										<span class="line"></span>
									</div>
								</div>
								<div class="col-lg-3 col-6">
									<div class="item purple">
										<h3>Total Views</h3>
										<span class="number">145</span>
										<span class="line"></span>
									</div>
								</div>
							</div>
						</div><!-- .member-statistical -->
						<div class="owner-box">
							<div class="row">
								<div class="col-lg-4">
									<div class="ob-item">
										<div class="ob-head">
											<h3>Recent Bookings</h3>
											<a href="#" class="view-all" title="View All">View all</a>
										</div>
										<div class="ob-content">
											<ul>
												<li class="pending">
													<p class="date"><b>Date:</b>March 15, 2020</p>
													<p class="place"><b>Place:</b>Bamboo Hotel Paris</p>
													<p class="status"><b>Status:</b><span>Pending</span></p>
													<a href="#" title="More" class="more"><i class="las la-angle-right"></i></a>
												</li>
												<li class="approve">
													<p class="date"><b>Date:</b>March 15, 2020</p>
													<p class="place"><b>Place:</b>Bamboo Hotel Paris</p>
													<p class="status"><b>Status:</b><span>Approve</span></p>
													<a href="#" title="More" class="more"><i class="las la-angle-right"></i></a>
												</li>
												<li class="cancel">
													<p class="date"><b>Date:</b>March 15, 2020</p>
													<p class="place"><b>Place:</b>Bamboo Hotel Paris</p>
													<p class="status"><b>Status:</b><span>Cancel</span></p>
													<a href="#" title="More" class="more"><i class="las la-angle-right"></i></a>
												</li>
												<li class="pending">
													<p class="date"><b>Date:</b>March 15, 2020</p>
													<p class="place"><b>Place:</b>Bamboo Hotel Paris</p>
													<p class="status"><b>Status:</b><span>Pending</span></p>
													<a href="#" title="More" class="more"><i class="las la-angle-right"></i></a>
												</li>
												<li class="approve">
													<p class="date"><b>Date:</b>March 15, 2020</p>
													<p class="place"><b>Place:</b>Bamboo Hotel Paris</p>
													<p class="status"><b>Status:</b><span>Approve</span></p>
													<a href="#" title="More" class="more"><i class="las la-angle-right"></i></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="ob-item">
										<div class="ob-head">
											<h3>New Reviews</h3>
											<a href="#" class="view-all" title="View All">View all</a>
										</div>
										<div class="ob-content">
											<ul class="place__comments">
												<li>
													<div class="place__author">
														<div class="place__author__avatar">
															<a title="Sebastian" href="#"><img src="images/avatars/male-2.jpg" alt=""></a>
														</div>
														<div class="place__author__info">
																<a title="Sebastian" href="#">Sebastian</a>
																<div class="place__author__star">
																	<i class="la la-star"></i>
																	<i class="la la-star"></i>
																	<i class="la la-star"></i>
																	<i class="la la-star"></i>
																	<i class="la la-star"></i>
																	<span style="width: 72%">
																		<i class="la la-star"></i>
																		<i class="la la-star"></i>
																		<i class="la la-star"></i>
																		<i class="la la-star"></i>
																		<i class="la la-star"></i>
																	</span>
																</div>
															<span class="time">October 1, 2019</span>
														</div>
													</div>
													<div class="place__comments__content">
														<p>Went there last Saturday for the first time to watch my favorite djs (Kungs, Sam Feldet and Watermat) and really had a great experience. </p>
													</div>
													<p class="place"><b>Place:</b>Vago Restaurant</p>
												</li>
												<li>
													<div class="place__author">
														<div class="place__author__avatar">
															<a title="Sebastian" href="#"><img src="images/avatars/male-1.jpg" alt=""></a>
														</div>
														<div class="place__author__info">
																<a title="Sebastian" href="#">Sebastian</a>
																<div class="place__author__star">
																	<i class="la la-star"></i>
																	<i class="la la-star"></i>
																	<i class="la la-star"></i>
																	<i class="la la-star"></i>
																	<i class="la la-star"></i>
																	<span style="width: 72%">
																		<i class="la la-star"></i>
																		<i class="la la-star"></i>
																		<i class="la la-star"></i>
																		<i class="la la-star"></i>
																		<i class="la la-star"></i>
																	</span>
																</div>
															<span class="time">October 1, 2019</span>
														</div>
													</div>
													<div class="place__comments__content">
														<p>Went there last Saturday for the first time to watch my favorite djs (Kungs, Sam Feldet and Watermat) and really had a great experience. </p>
													</div>
													<p class="place"><b>Place:</b>Renew Body Spa</p>
												</li>
												<li>
													<div class="place__author">
														<div class="place__author__avatar">
															<a title="Sebastian" href="#"><img src="images/avatars/female-1.jpg" alt=""></a>
														</div>
														<div class="place__author__info">
																<a title="Sebastian" href="#">Sebastian</a>
																<div class="place__author__star">
																	<i class="la la-star"></i>
																	<i class="la la-star"></i>
																	<i class="la la-star"></i>
																	<i class="la la-star"></i>
																	<i class="la la-star"></i>
																	<span style="width: 72%">
																		<i class="la la-star"></i>
																		<i class="la la-star"></i>
																		<i class="la la-star"></i>
																		<i class="la la-star"></i>
																		<i class="la la-star"></i>
																	</span>
																</div>
															<span class="time">October 1, 2019</span>
														</div>
													</div>
													<div class="place__comments__content">
														<p>Went there last Saturday for the first time to watch my favorite djs (Kungs, Sam Feldet and Watermat) and really had a great experience. </p>
													</div>
													<p class="place"><b>Place:</b>Bamboo Hotel Paris</p>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="ob-item">
										<div class="ob-head">
											<h3>Notifications <span>(5)</span></h3>
											<a href="#" class="clear-all" title="Clear All">Clear all</a>
										</div>
										<div class="ob-content">
											<ul>
												<li class="noti-item unread">
													<p>You have got a new booking <br> Booking ID: #123434</p>
													<span>1d ago</span><a href="#" class="delete-noti" title="Delete">Delete</a>
												</li>
												<li class="noti-item read">
													<p>You have got a new booking <br> Booking ID: #123434</p>
													<span>1d ago</span><a href="#" class="delete-noti" title="Delete">Delete</a>
												</li>
												<li class="noti-item read">
													<p>You have got a new booking <br> Booking ID: #123434</p>
													<span>1d ago</span><a href="#" class="delete-noti" title="Delete">Delete</a>
												</li>
												<li class="noti-item read">
													<p>You have got a new booking <br> Booking ID: #123434</p>
													<span>1d ago</span><a href="#" class="delete-noti" title="Delete">Delete</a>
												</li>
												<li class="noti-item read">
													<p>You have got a new booking <br> Booking ID: #123434</p>
													<span>1d ago</span><a href="#" class="delete-noti" title="Delete">Delete</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div><!-- .owner-box -->
					</div><!-- .member-wrap -->
				</div>
			</div><!-- .site-content -->
		</main><!-- .site-main -->

		<?php include 'assest/footer.html' ?>
	</div><!-- #wrapper -->
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>

<!-- Mirrored from golohtml.uxper.co/demo/owner-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 06:30:07 GMT -->
</html>