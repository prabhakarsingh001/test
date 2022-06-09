<!doctype html>
<html lang="en">

<!-- Mirrored from golohtml.uxper.co/demo/add-place.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 06:29:40 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Add New Listing</title>
	<meta name="robots" content="index, follow" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
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

		<main id="main" class="site-main listing-main">
			<div class="listing-nav">
				<div class="listing-menu nav-scroll">
					<ul>
						<li class="active"><a href="#genaral" title="Genaral"><span class="icon"><i
										class="la la-cog"></i></span><span>Genaral</span></a></li>
						<li><a href="#hightlight" title="Hightlight"><span class="icon"><i
										class="la la-wifi"></i></span><span>Hightlight</span></a></li>
						<li><a href="#location" title="Location"><span class="icon"><i
										class="la la-map-marker"></i></span><span>Location</span></a></li>
						<li><a href="#contact" title="Contact info"><span class="icon"><i
										class="la la-phone"></i></span><span>Contact info</span></a></li>
						<li><a href="#social" title="Social network"><span class="icon"><i
										class="la la-link"></i></span><span>Social network</span></a></li>
						<li><a href="#open" title="Open hourses"><span class="icon"><i
										class="la la-business-time"></i></span><span>Open hourses</span></a></li>
						<li><a href="#media" title="Media"><span class="icon"><i
										class="la la-image"></i></span><span>Media</span></a></li>
					</ul>
				</div>
			</div><!-- .listing-nav -->
			<div class="listing-content">
				<h2>Add new place</h2>
				<form id="upload_form" method="post" enctype="multipart/form-data">
					<div class="listing-box" id="genaral">
						<h3>Genaral</h3>
						<div class="field-inline">
							<div class="field-group field-input">
								<input type="hidden" id="createdBy" name="createdBy" value="623552126344a5040a4d716d">
								<!-- <input type="hidden" id="category" name="category" value="623552aa6344a5040a4d7170">
								<input type="hidden" id="placetype" name="placetype" value="62355b126344a5040a4d719c"> -->

								<label for="place_name">Place Name</label>
								<input type="text" id="place_name" placeholder="What the name of place" name="name">
							</div>
							<div class="field-group field-select">
								<label for="price_range">Price Range</label>
								<select name="price" id="price_range">
									<option value="0">None</option>
									<option value="1000">1000</option>
									<option value="2000">2000</option>
									<option value="5000">5000</option>
									<option value="10000">10000</option>
								</select>
								<i class="la la-angle-down"></i>
							</div>
						</div>
						<div class="field-group">
							<h4 class="label">Description</h4>
							<!-- <div id="editor"></div> -->
							<textarea id="description" name="description" placeholder="Write something.."
								style="height:200px"></textarea>
						</div>
						<div class="field-group field-select">
							<label for="lis_category">Category</label>
							<select data-placeholder="Select Category" name="category" id="lis_category">

							</select>
							<i class="la la-angle-down"></i>
						</div>
						<div class="field-group field-select">
							<label for="lis_place_type">Place Type</label>
							<select data-placeholder="Select Place Type" name="placetype" id="lis_place_type">

							</select>
							<i class="la la-angle-down"></i>
						</div>
					</div><!-- .listing-box -->
					<div class="listing-box" id="hightlight">
						<h3>HighLights</h3>
						<div class="field-group field-check" id="list_highlight">

						</div>
						<button class="btn btn-primary" id="show_high">Show high</button>
					</div><!-- .listing-box -->
					<div class="listing-box" id="location">
						<h3>Location</h3>
						<div class="field-group">
							<label for="place_address">Place Address</label>
							<input type="text" id="place_address" placeholder="Full Address" name="address">
						</div>
						<div class="field-group field-maps">
							<div class="field-inline">
								<label for="pac-input">Place Location at Google Map</label>
								<div class="field-button field-pin">
									<a href="#" id="drop" onclick="drop()">
										<i class="la la-lock"></i>
										Unlock Pin Location
									</a>
									<a href="#" id="clear" onclick="clearMarkers()">
										<?xml version="1.0" encoding="UTF-8"?>
										<i class="la la-lock-open"></i>
										Lock Pin Location
									</a>
								</div>
							</div>
							<div class="field-map">
								<input id="pac-input" class="address-input" type="text" placeholder="Search Box">
								<div id="location-map"></div>
							</div>
						</div>
					</div><!-- .listing-box -->
					<div class="listing-box" id="contact">
						<h3>Contact Info</h3>
						<!-- <div class="field-group">
							<label for="place_email">Email</label>
							<input type="email" id="place_email" placeholder="Your email address" name="place_email">
						</div> -->
						<div class="field-group">
							<label for="place_number">Phone number</label>
							<input type="tel" id="place_number" placeholder="Your phone number" name="phone">
						</div>
						<div class="field-group">
							<label for="place_website">Website</label>
							<input type="url" id="place_website" placeholder="Your website url" name="website">
						</div>
					</div><!-- .listing-box -->
					<div class="listing-box" id="">
						<h3>Social Networks</h3>
						<div class="field-group">
							<label for="place_socials">Social Networks (optional)</label>
							<div class="field-clone">
								<div class="field-inline field-3col">
									<div class="field-group field-select">
										<select class="socialnetwork">
											<option value="0">Select network</option>
											<option value="facebook">Facebook</option>
											<option value="instagram">Instagram</option>
											<option value="youtube">Youtube</option>
											<option value="twitter">Twitter</option>
											<option value="google">Google +</option>
											<option value="pinterest">Pinterest</option>
											<option value="snapchat">Snapchat</option>
										</select>
										<i class="la la-angle-down"></i>
									</div>
									<div class="field-group field-input">
										<input type="url" placeholder="Enter Url" class="texturl">
									</div>
					
									<a href="#" class="remove-social">
										<i class="la la-trash-alt"></i>
									</a>
					
								</div>
							</div>
							<div class="socials-list"></div>
							<a href="#social" class="add-social btn">
								<i class="la la-plus"></i>
								<span id="add">Add more</span>
							</a>
						</div>
					</div>
					<!-- .listing-box -->

					<!-- .listing-box -->
					<div class="listing-box" id="media">
						<h3>Media</h3>
						<div class="field-group field-file">
							<label for="cover_img">Gallery Images</label>
							<label for="cover_img" class="preview">
								<input type="file" id="cover_img" name="placePictures" class="upload-file" multiple>
								<img class="img_preview" src="images/no-image.png" alt="" />
								<i class="la la-cloud-upload-alt"></i>
							</label>
							<div class="field-note">Multiple Images Upload</div>
						</div>

						<div class="field-group field-submit">
							<button class="btn">Submit</button>
							<!-- <input type="submit" name="submit" value="Submit" class="btn" id="create_place_btn"> -->
						</div>
				</form>
			</div><!-- .listing-content -->
		</main><!-- .site-main -->
		<script>
			$(document).ready(function () {
				// *************************Add Category***********************************
				$.ajax({
					url: 'https://journeyonapi.herokuapp.com/api/category/getcategory',
					type: 'GET',
					success: function (data) {
						//  console.log(data);
						$.each(data.categories, function (key, value) {
							$('#lis_category').append(`<option value='${value._id}'> ${value.name} </option>`);

						});

					}

				});
				// *********************************************
				// ***************************** Add Place****************************
				$.ajax({
					url: 'https://journeyonapi.herokuapp.com/api/placetype/get',
					type: 'GET',
					success: function (data) {
						//  console.log(data);
						$.each(data.placetypes, function (key, value) {
							$('#lis_place_type').append(`<option value='${value._id}' > ${value.name} </option>`);
						});
					}
				});
				// *****************************************************************
				// ***************************** list_highlight ****************************
				$.ajax({
					url: 'https://journeyonapi.herokuapp.com/api/highlight/get',
					type: 'GET',
					success: function (data) {
						//  console.log(data);
						$.each(data.highlights, function (key, value) {
							// $('#list_highlight').append(`<option value=" ${value._id}" > ${value.name} </option>`);
							$('#list_highlight').append(`
								<label>
								<input type="checkbox" id="${value._id}" class="checkboxes" value="${value._id}"> ${value.name}
								<span class="checkmark">																
									<i class="la la-check"> </i>
								</span>
							</label>`);
						});
					}
				});
				// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++<head>

				function getSelects() {
					var selected = [];
					$('.socialnetwork').children('option:selected').each(function () {
						var $this = $(this);
						var url = $(".texturl").val();
						selected.push({ "socialplatform": $this.text(), "socialurl": url });
					});
					return selected;

					// console.log(selected);

				}
// 				if($("#add").click(function(){   
//                getSelects();
//     // $('.texturl').val('');
    
    
// }))
				// if($("#add").click(function(){   
				//     getSelects();
				//     // $('.texturl').val('');                                                   
				// }))
				// ___________________________________________________________
				// let highlight = [];
				// $("input:checkbox[name=type]:checked").each(function(){
				// 	highlight.push($(this).val());
				// });
				// $("#show_high").click(function(){
				// 	console.log(highlight);
				// });

				// ***********************************************************************************				

				$("form#upload_form").submit(function (e) {
					e.preventDefault();
					var checked = [];
					$(".checkboxes").each(function () {
						if ($(this).is(":checked")) {
							checked.push({ "highId": $(this).val() });

						}
					});
					// getSelects();
					var select= new getSelects();
					console.log(select);



					var formData = new FormData(this);
					// formData.append(` highlight: ${highlight} socialnetwork:${selected}`);
					formData.append("highlights", JSON.stringify(checked));
					formData.append("socialnetwork", JSON.stringify(select));
					$.ajax({
						url: 'https://journeyonapi.herokuapp.com/api/addplace/create',
						type: 'POST',
						headers: {
							'Authorization': 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI2MjcyMjQyMzUxZTc3YzBjNDE3MzEzYjUiLCJyb2xlIjoiYWRtaW4iLCJpYXQiOjE2NTMzOTA3MzgsImV4cCI6MTY1MzQ3NzEzOH0.A4i9UDJWld1kflW2wnUlEX6Ac18mR3nCswUFOHLNtZU'
						},
						data: formData,
						success: function (data) {
							alert("Add Place Created Successfully.");
						},
						cache: false,
						contentType: false,
						processData: false
					});
					// });
				});
				// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


				// // ********************************crate place***************************
				// $("#create_place_btn").on("click",function(e){
				// 		// console.log("click");
				// 		e.preventDefault();
				//         var fname = $('#fname').val();
				// 		var lname = $('#lname').val();
				//         var email = $('#email').val();
				//         var phone = $('#phone').val();
				// 		var password = $('#password').val();
				//         var privacy = $('#accept').val();
				// 		var data = {
				// 			 "firstName": fname,
				//              "lastName": lname,
				// 			 "phone": phone,
				//              "email" : email,
				//              "password": password                                                                  
				//              }
				// 		//    if(fname!="" && lname!="" && email!="" && password!="" && phone!="" && privacy!=""){
				// 		   $.ajax({ 
				// 			   url : 'https://journeyonapi.herokuapp.com/api/admin/signup',
				// 			   type : "POST",
				// 			   dataType: "json",
				// 			   data : JSON.stringify(data),
				//                                  contentType: "application/json",
				//                                  success: function (data) {
				// 					// console.log(data);
				// 					alert(data.message);
				// 			   }
				// 			});
				//        // }else{
				// 		// 	alert('Please fill all the fields');
				// 		// }

				// 	});
				// **********************************************************************
				// $("#create_place_btn").on("click",function(e){
				// 	e.preventDefault();
				// 	console.log("submit button click");
				// 	var form = $("#upload_form");
				//      var url = form.attr('action');
				// 	// var formData = $(this).serialize();
				// 	// var formData = new FormData(this);

				// 	console.log(form);
				// 	$.ajax({
				// 		url: 'https://journeyonapi.herokuapp.com/api/addplace/create',
				// 		headers: {
				// 		   'Authorization':'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI2MjcyMjQyMzUxZTc3YzBjNDE3MzEzYjUiLCJyb2xlIjoiYWRtaW4iLCJpYXQiOjE2NTI5NTQwNzgsImV4cCI6MTY1MzA0MDQ3OH0.svndfqYCD7RZRQyfox7cz2S6lZo_FXnZ3xtNkyy2ZrA'
				// 		 },    
				// 		type: 'POST',
				// 		data: form.serialize(),
				// 		// data: formData,
				// 		// async: false,
				// 		success: function (data) {
				// 			alert(data.message);
				// 			console.log(data);
				// 		},
				// 		// cache: false,
				// 		// contentType: false,
				// 		// processData: false
				// 	});

				// 	return false;
				// });


				// **************************image upload******************************

				// $('#upload_form').on("submit", function (e) {
				// 	e.preventDefault();
				// 	// var arr = new FormData(this);
				// 	var formData = new FormData(this);
				// 	console.log(formData);
				// 	$.ajax({
				// 		type: "POST",
				// 		url: 'https://journeyonapi.herokuapp.com/api/addplace/create',
				// 		headers: {
				// 		   'Authorization':'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI2MjcyMjQyMzUxZTc3YzBjNDE3MzEzYjUiLCJyb2xlIjoiYWRtaW4iLCJpYXQiOjE2NTI5NTQwNzgsImV4cCI6MTY1MzA0MDQ3OH0.svndfqYCD7RZRQyfox7cz2S6lZo_FXnZ3xtNkyy2ZrA'
				// 		 },
				// 		data: formData,
				// 		contentType:false,
				// 		processData:false,
				// 		success: function (data) {
				// 			alert("data updated");
				// 			console.log(result);
				// 		}
				// 	});
				// });



				// ************************************************
			});

		</script>
		<style>
			#description {
				width: 100%;
				padding: 12px;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
				margin-top: 6px;
				margin-bottom: 16px;
				resize: vertical;
			}
		</style>
     <?php include "assest/footer.html" ?>
		
		<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
		<script>

			var neighborhoods = [
				{ lat: 52.511, lng: 13.447 },
			];

			var markers = [];
			var map;

			function initMap() {
				map = new google.maps.Map(document.getElementById('location-map'), {
					zoom: 13,
					center: { lat: 52.511, lng: 13.447 },
					disableDefaultUI: true,
					styles: [
						{
							"featureType": "landscape",
							"elementType": "labels",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						},
						{
							"featureType": "transit",
							"elementType": "labels",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						},
						{
							"featureType": "poi",
							"elementType": "labels",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						},
						{
							"featureType": "water",
							"elementType": "labels",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						},
						{
							"featureType": "road",
							"elementType": "labels.icon",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						},
						{
							"stylers": [
								{
									"hue": "#00aaff"
								},
								{
									"saturation": -100
								},
								{
									"gamma": 2.15
								},
								{
									"lightness": 12
								}
							]
						},
						{
							"featureType": "road",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"visibility": "on"
								},
								{
									"lightness": 24
								}
							]
						},
						{
							"featureType": "road",
							"elementType": "geometry",
							"stylers": [
								{
									"lightness": 57
								}
							]
						}
					]
				});
				var defaultBounds = new google.maps.LatLngBounds(
					new google.maps.LatLng(-33.8902, 151.1759),
					new google.maps.LatLng(-33.8474, 151.2631));

				var input = document.getElementById('pac-input');

				var searchBox = new google.maps.places.SearchBox(input, {
					bounds: defaultBounds
				});

				searchBox.addListener('places_changed', function () {
					var places = searchBox.getPlaces();

					if (places.length == 0) {
						return;
					}

					// Clear out the old markers.
					markers.forEach(function (marker) {
						marker.setMap(null);
					});
					markers = [];

					// For each place, get the icon, name and location.
					var bounds = new google.maps.LatLngBounds();
					places.forEach(function (place) {
						if (!place.geometry) {
							console.log("Returned place contains no geometry");
							return;
						}
						var icon = {
							url: place.icon,
							size: new google.maps.Size(71, 71),
							origin: new google.maps.Point(0, 0),
							anchor: new google.maps.Point(17, 34),
							scaledSize: new google.maps.Size(25, 25)
						};

						// Create a marker for each place.
						markers.push(new google.maps.Marker({
							map: map,
							icon: icon,
							title: place.name,
							position: place.geometry.location
						}));

						if (place.geometry.viewport) {
							// Only geocodes have viewport.
							bounds.union(place.geometry.viewport);
						} else {
							bounds.extend(place.geometry.location);
						}
					});
					map.fitBounds(bounds);
				});
			}

			function drop() {
				clearMarkers();
				for (var i = 0; i < neighborhoods.length; i++) {
					addMarkerWithTimeout(neighborhoods[i], i * 200);
				}
			}

			function addMarkerWithTimeout(position, timeout) {
				window.setTimeout(function () {
					markers.push(new google.maps.Marker({
						position: position,
						map: map,
						draggable: true,
						animation: google.maps.Animation.DROP
					}));
				}, timeout);
			}

			function clearMarkers() {
				for (var i = 0; i < markers.length; i++) {
					markers[i].setMap(null);
				}
				markers = [];
			}
		</script>
		<script
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-2mhVoLX7oIOgRQ-6bxlJt4TF5k0xhWc&amp;libraries=places&amp;callback=initMap"
			async defer></script>
	</div><!-- #wrapper -->
</body>

<!-- Mirrored from golohtml.uxper.co/demo/add-place.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 06:29:41 GMT -->

</html>