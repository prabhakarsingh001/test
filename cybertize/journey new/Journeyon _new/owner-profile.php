<!doctype html>

<!-- Mirrored from golohtml.uxper.co/demo/owner-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 06:30:19 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Owner - Profile Setting</title>
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
							<li><a href="owner-listings.php">Listings</a></li>
							<!-- <li><a href="owner-wishlist.php">Wishlist</a></li> -->
							<li class="active"><a href="owner-profile.php">Profile</a></li>
						</ul>
					</div>
				</div>
				<div class="container">
					<div class="member-wrap">
						<div class="member-wrap-top">
							<h2>Profile Setting</h2>
							<p>You are current FREE plan. <a href="#">Upgrade now</a></p>
						</div><!-- .member-wrap-top -->
						<form action="#" class="member-profile form-underline">
							<h3>Avatar</h3>
							<div class="member-avatar">
								<img id="member_avatar" src="images/member-avatar.png" alt="Member Avatar">
								<label for="upload_new">
									<input id="upload_new" type="file" name="member_avatar" placeholder="Upload new" value="">
									Upload new
								</label>
							</div>
							<h3>Basic Info</h3>
							<div class="field-input">
								<label for="first_name">First name</label>
								<input type="text" name="first_name" placeholder="Invan" id="first_name">
							</div>
							<div class="field-input">
								<label for="last_name">Last name</label>
								<input type="text" name="last_name" placeholder="Robent" id="last_name">
							</div>
							<div class="field-input">
								<label for="email">Email</label>
								<input type="email" name="email" placeholder="invan@gmail.com" id="email">
							</div>
							<div class="field-input">
								<label for="phone">Phone</label>
								<input type="tel" name="phone" placeholder="00 2323 323" id="phone">
							</div>
							<div class="field-input">
								<label for="facebook">Facebook</label>
								<input type="text" name="facebook" placeholder="invantaa" id="facebook">
							</div>
							<div class="field-input">
								<label for="instagram">Instagram</label>
								<input type="text" name="instagram" placeholder="invantaa" id="instagram">
							</div>
							<div class="field-submit">
								<input type="submit" value="Update">
							</div>
						</form><!-- .member-profile -->
						<form action="#" class="member-password form-underline">
							<h3>Change Password</h3>
							<div class="field-input">
								<label for="old_password">Old password</label>
								<input type="password" name="old_password" placeholder="Enter old password" id="old_password">
							</div>
							<div class="field-input">
								<label for="new_password">New password</label>
								<input type="password" name="new_password" placeholder="Enter new password" id="new_password">
							</div>
							<div class="field-input">
								<label for="re_new">Re-new password</label>
								<input type="password" name="re_new" placeholder="Enter new password" id="re_new">
							</div>
							<div class="field-submit">
								<input type="submit" value="Save">
							</div>
						</form><!-- .member-password -->
					</div><!-- .member-wrap -->
				</div>
			</div><!-- .site-content -->
		</main><!-- .site-main -->

        <?php include 'assest/footer.html' ?>
	</div><!-- #wrapper -->
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>

<!-- Mirrored from golohtml.uxper.co/demo/owner-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 06:30:19 GMT -->
</html>