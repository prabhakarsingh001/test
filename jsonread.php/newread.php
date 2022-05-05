<!-- done -->
<!-- code running -->
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
		
		<h1>Read Json Data</h1>
</div>
<div id="load-data"></div>	


</div>
<!-- jquery script begins -->
<script>
	$(document).ready(function(){
		// ajax starts from here
		$.ajax({
// json placeholder api url to be converted to html files
			url:"https://journeyonapi.herokuapp.com/api/city/get",
			type:"GET",
			success:function(data){
			// console.log(data);
			$.each(data, function(key ,value){
			$("#load-data").append(value.id + " " + value.title + "<br>")

			})
			}
		})
	});
</script>


</body>
</html>