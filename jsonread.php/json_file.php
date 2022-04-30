<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>read_json_files</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
<div id="main">
	<div id="header">
		
		<h1>Read Json Data</h1>
</div>
<div id="load-data"></div>	


</div>

<script>
	$(document).ready(function(){
		$.ajax({

			url:"https://jsonplaceholder.typicode.com/posts",
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