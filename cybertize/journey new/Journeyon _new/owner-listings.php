<!doctype html>
<html lang="en">

<!-- Mirrored from golohtml.uxper.co/demo/owner-listings.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 06:30:18 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Owner - Listings</title>
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
							<li><a href="owner-dashboard.php">Dashboard</a></li>
							<!-- <li><a href="owner-bookings.html">Bookings</a></li> -->
							<li class="active"><a href="owner-listings.php">Listings</a></li>
							<!-- <li><a href="owner-wishlist.html">Wishlist</a></li> -->
							<li><a href="owner-profile.php">Profile</a></li>

						</ul>
					</div>
				</div>
				<div class="container">
					<div class="member-place-wrap">
						<div class="member-wrap-top">
							<h2>My Listings</h2>
							<p>You are current FREE plan. <a href="pricing-plan.php">Upgrade now</a></p>
						</div><!-- .member-wrap-top -->
						<div class="member-filter">
							<div class="mf-left">
								<form action="#" method="GET">
									<div class="field-select">
										<select name="place_cities">
											<option value="0">All cities</option>
											<option value="newyork">Paris</option>
											<option value="newyork">New York</option>
											<option value="chicago">Chicago</option>
										</select>
										<i class="la la-angle-down"></i>
									</div>
									<div class="field-select">
										<select name="place_cities">
											<option value="0">All categories</option>
											<option value="Restaurant">Restaurant</option>
											<option value="Gym">Gym</option>
											<option value="Beaty">Beaty & Spa</option>
											<option value="Shopping">Shopping</option>
										</select>
										<i class="la la-angle-down"></i>
									</div>
								</form>
							</div><!-- .mf-left -->
							<div class="mf-right">
								<form action="#" class="site__search__form" method="GET">
									<div class="site__search__field">
										<span class="site__search__icon">
											<i class="la la-search"></i>
										</span><!-- .site__search__icon -->
										<input class="site__search__input" type="text" name="s" placeholder="Search">
									</div><!-- .search__input -->
								</form><!-- .search__form -->
							</div><!-- .mf-right -->
						</div><!-- .member-filter -->
						<table class="member-place-list table-responsive">
							<thead>
								<tr>
									<th>
										<div class="field-check">
											<label for="all">
												<input id="all" type="checkbox" value="all">
												<span class="checkmark">
													<i class="la la-check"></i>
												</span>
											</label>
										</div>
									</th>
									<th>ID</th>
									<th>Thumb</th>
									<th>Name</th>
									<th>City</th>
									<th>Category</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td data-title="">
										<div class="field-check">
											<label for="place01">
												<input id="place01" type="checkbox" value="all">
												<span class="checkmark">
													<i class="la la-check"></i>
												</span>
											</label>
										</div>
									</td>
									<td data-title="ID">01</td>
									<td data-title="Thumb"><img src="images/listing/01.jpg" alt="Place Thumb"></td>
									<td data-title="Place name"><b>Vago Restaurant</b></td>
									<td data-title="City">Paris</td>
									<td data-title="Category">Restaurant</td>
									<td data-title="Status" class="approved">Approved</td>
									<td data-title="" class="place-action">
										<a href="#" class="edit" title="Edit"><i class="las la-edit"></i></a>
										<a href="#" class="view" title="View"><i class="la la-eye"></i></a>
										<a href="#" class="delete" title="Delete"><i class="la la-trash-alt"></i></a>
									</td>
								</tr>
								<tr>
									<td data-title="">
										<div class="field-check">
											<label for="place01">
												<input id="place01" type="checkbox" value="all">
												<span class="checkmark">
													<i class="la la-check"></i>
												</span>
											</label>
										</div>
									</td>
									<td data-title="ID">02</td>
									<td data-title="Thumb"><img src="images/listing/02.jpg" alt="Place Thumb"></td>
									<td data-title="Place name"><b>Retro Fitness</b></td>
									<td data-title="City">Paris</td>
									<td data-title="Category">Gym</td>
									<td data-title="Status" class="approved">Approved</td>
									<td data-title="" class="place-action">
										<a href="#" class="edit" title="Edit"><i class="las la-edit"></i></a>
										<a href="#" class="view" title="View"><i class="la la-eye"></i></a>
										<a href="#" class="delete" title="Delete"><i class="la la-trash-alt"></i></a>
									</td>
								</tr>
								<tr>
									<td data-title="">
										<div class="field-check">
											<label for="place01">
												<input id="place01" type="checkbox" value="all">
												<span class="checkmark">
													<i class="la la-check"></i>
												</span>
											</label>
										</div>
									</td>
									<td data-title="ID">03</td>
									<td data-title="Thumb"><img src="images/listing/03.jpg" alt="Place Thumb"></td>
									<td data-title="Place name"><b>Renew Body Spa</b></td>
									<td data-title="City">Paris</td>
									<td data-title="Category">Beaty & Spa</td>
									<td data-title="Status" class="cancel">Cancel</td>
									<td data-title="" class="place-action">
										<a href="#" class="edit" title="Edit"><i class="las la-edit"></i></a>
										<a href="#" class="view" title="View"><i class="la la-eye"></i></a>
										<a href="#" class="delete" title="Delete"><i class="la la-trash-alt"></i></a>
									</td>
								</tr>
								<tr>
									<td data-title="">
										<div class="field-check">
											<label for="place01">
												<input id="place01" type="checkbox" value="all">
												<span class="checkmark">
													<i class="la la-check"></i>
												</span>
											</label>
										</div>
									</td>
									<td data-title="ID">04</td>
									<td data-title="Thumb"><img src="images/listing/04.jpg" alt="Place Thumb"></td>
									<td data-title="Place name"><b>Jardin Club</b></td>
									<td data-title="City">New York</td>
									<td data-title="Category">Nightlife</td>
									<td data-title="Status" class="approved">Approved</td>
									<td data-title="" class="place-action">
										<a href="#" class="edit" title="Edit"><i class="las la-edit"></i></a>
										<a href="#" class="view" title="View"><i class="la la-eye"></i></a>
										<a href="#" class="delete" title="Delete"><i class="la la-trash-alt"></i></a>
									</td>
								</tr>
								<tr>
									<td data-title="">
										<div class="field-check">
											<label for="place01">
												<input id="place01" type="checkbox" value="all">
												<span class="checkmark">
													<i class="la la-check"></i>
												</span>
											</label>
										</div>
									</td>
									<td data-title="ID">05</td>
									<td data-title="Thumb"><img src="images/listing/05.jpg" alt="Place Thumb"></td>
									<td data-title="Place name"><b>Antoinette</b></td>
									<td data-title="City">Chicago</td>
									<td data-title="Category">Shopping</td>
									<td data-title="Status" class="pending">Pending</td>
									<td data-title="" class="place-action">
										<a href="#" class="edit" title="Edit"><i class="las la-edit"></i></a>
										<a href="#" class="view" title="View"><i class="la la-eye"></i></a>
										<a href="#" class="delete" title="Delete"><i class="la la-trash-alt"></i></a>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="pagination align-left">
							<div class="pagination__numbers">
								<span>1</span>
								<a title="2" href="#">2</a>
								<a title="3" href="#">3</a>
								<a title="Next" href="#">
									<i class="la la-angle-right"></i>
								</a>
							</div>
						</div><!-- .pagination -->
					</div><!-- .member-place-wrap -->
				</div>
			</div><!-- .site-content -->
		</main><!-- .site-main -->

        <?php include 'assest/footer.html' ?>
		<a href="#" class="purchase-button" target="_blank"> <i class="las la-shopping-cart"></i> <span>Purchase <strong>Golo</strong></span> </a>
	</div><!-- #wrapper -->
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>

<!-- Mirrored from golohtml.uxper.co/demo/owner-listings.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 06:30:18 GMT -->
</html>