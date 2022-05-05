<!-- journey api testing code in html page -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>read_json_files</title>
	<!-- adding CDN Jquery url instead of downloading a compresed file -->
	<!-- jquer format to be added before script -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
<div id="main">
	<div id="header">
		
		<!-- <h1>project-api-conn</h1> -->
		<!-- <h3>dream place!!!!</h3> -->
</div>
<div id="load-data">

</div>






</div>
<!-- <img id="my_image" src=""/> -->
<!-- jquery script begins -->
<img class="img1" src="" />
<script>
	$(document).ready(function(){
		// ajax starts from here
		$.ajax({
// json placeholder api url to be converted to html files
			url:"https://journeyonapi.herokuapp.com/api/category/getcategory",
			type:"GET",
			success: function(data){
			// console.log(data);
			$.each(data.categories,function(key,value){
            //    "<tr> </td>"+value.name +"</td></tr>"
				
			
			 $("#load-data").append('<tr>'+'<td>'+value.name+'</td>'+'<td>'+value.slug+'</td></tr>');
			 
			 $("#load-data").append($("<img>",{src: value.categoryImage}));
			
			//  $('.img1').attr('src',value.categoryImage);
			// //  "<tr> </td>"+value.name +"</td></tr>"
			 
			
			});
		}
			});
		});

</script>


</body>
</html>