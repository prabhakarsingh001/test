<!doctype html>
<html lang="en">

<!-- Mirrored from golohtml.uxper.co/demo/pricing-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 06:29:47 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Pricing Checkout</title>
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
			<div class="page-title page-title--small align-left" style="background-image: url(images/bg/bg-checkout.png);">
				<div class="container">
					<div class="page-title__content">
						<h1 class="page-title__name">Payment</h1>
					</div>
				</div>	
			</div><!-- .page-title -->
			<div class="site-content">
				<div class="checkout-area">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<div class="billing-form">
									<h2>Billing Detail</h2>
									<form action="#" class="billingForm">
										<div class="field-group">
											<h3>Your info</h3>
											<div class="row">
												<div class="col-md-6">
													<div class="field-input">
														<label for="first_name">First name <span class="required">*</span></label>
														<input type="text" placeholder="Enter your first name" value="" name="first_name" id="first_name">
													</div>
												</div>
												<div class="col-md-6">
													<div class="field-input">
														<label for="last_name">Last name <span class="required">*</span></label>
														<input type="text" placeholder="Enter your last name" value="" name="last_name" id="last_name">
													</div>
												</div>
												<div class="col-md-6">
													<div class="field-input">
														<label for="email">Email <span class="required">*</span></label>
														<input type="email" placeholder="Enter your email" value="" name="email" id="email">
													</div>
												</div>
												<div class="col-md-6">
													<div class="field-input">
														<label for="phone">Phone <span class="required">*</span></label>
														<input type="text" placeholder="Enter your phone number" value="" name="phone" id="phone">
													</div>
												</div>
											</div>
										</div><!-- .field-group -->
										<div class="field-group">
											<h3>Pay with</h3>
											<div class="field-select">
												<div id="select-box">
								                    <input type="checkbox" id="options-view-button" value="">
								                    <div id="select-button" class="brd">
								                            <div id="selected-value">
								                                <img src="#" alt=""><span>Select method</span>
								                            </div>
								                            <div id="chevrons">
								                                <i class="las la-angle-down"></i>
								                            </div>
								                    </div>
								                    <div id="options">
							                            <div class="option o-paypal">
						                                    <input class="s-c" type="radio" name="method" value="paypal">
						                                    <img src="images/assets/paypal.png" alt="">
						                                    <span class="label"><span>Paypal</span></span>
						                                    <span class="opt-val"><img src="images/assets/paypal.png" alt=""><span>Paypal</span></span>
							                            </div>
							                            <div class="option o-stripe">
						                                    <input class="s-c" type="radio" name="method" value="stripe">
						                                    <img src="images/assets/stripe.png" alt="">
						                                    <span class="label"><span>Stripe</span></span>
						                                    <span class="opt-val"><img src="images/assets/stripe.png" alt=""><span>Stripe</span></span>
							                            </div>
							                            <div class="option o-skrill">
						                                    <input class="s-c" type="radio" name="method" value="skrill">
						                                    <img src="images/assets/skrill.png" alt="">
						                                    <span class="label"><span>Skrill</span></span>
						                                    <span class="opt-val"><img src="images/assets/skrill.png" alt=""><span>Skrill</span></span>
							                            </div>
							                            <div class="option o-master">
						                                    <input class="s-c" type="radio" name="method" value="master-card">
						                                    <img src="images/assets/master-card.png" alt="">
						                                    <span class="label"><span>Master Card</span></span>
						                                    <span class="opt-val"><img src="images/assets/master-card.png" alt=""><span>Master Card</span></span>
							                            </div>
							                            <div id="option-bg"></div>
								                    </div>
								            	</div>
											</div>
										</div><!-- .field-group -->
										<div class="field-group">
											<h3>Paypal detail</h3>
											<div class="field-input">
												<label for="paypal_email">PayPal Email <span class="required">*</span></label>
												<input type="text" placeholder="Enter your PayPal Email" value="" name="paypal_email" id="paypal_email">
											</div>
										</div><!-- .field-group -->
										<div class="field-group">
											<div class="field-check">
												<label for="pp">
													<input type="checkbox" id="pp" value="">
													I have read and accept the <a title="Privacy Policy" href="#">Privacy Policy</a>
													<span class="checkmark">												
														<i class="la la-check"></i>
													</span>
												</label>
											</div>
										</div>
										<div class="field-submit">
											<input type="submit" name="submit" value="Pay Now" class="btn">
										</div>
									</form><!-- .billingForm -->
								</div><!-- .checkout-form -->
							</div>
							<div class="col-lg-4">
								<div class="package-review">
									<h2>Selected Package</h2>
									<div class="pricing-item">
										<img src="images/illustrations/plan-2.png" alt="Basic">
										<h3>Standard</h3>
										<ul>
											<li>100 Places Post</li>
											<li>Featured Places</li>
											<li>Edit Your Place</li>
											<li>Add Booking</li>
										</ul>
										<div class="total">
											<h4>Total</h4>
											<span>$5.99</span>
										</div>
										<a href="#" class="btn btn-change" title="Change Package">Change Package</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- .checkout-area -->
			</div><!-- .site-content -->
		</main><!-- .site-main -->

        <?php include 'assest/footer.html' ?>
	</div><!-- #wrapper -->
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>

<!-- Mirrored from golohtml.uxper.co/demo/pricing-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 06:29:47 GMT -->
</html>