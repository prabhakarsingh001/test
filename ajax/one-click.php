<!-- done -->
<!-- showing full details in one click from browser -->


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>one-click</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
<div>
	
<table id="main" border="0" cellspacing="0" >
 <tr>
 	<td id="header">
 		<h2>php with ajax</h2>
 	</td>
 </tr>

 <tr>
 	<td id="table-load">
 		<input type="button" name="" id="load-button" value="load-data">
 	</td>
 </tr>
 <tr>
 	<td id="table-data">
 		<table border="1" width="100% cellspacing="0 cellpadding="10px">
 			<tr>
 				<th>id</th>
 				<th>name</th>
 			</tr>
 			<tr>
 				<td align="center"></td>
 				<td>ajax test</td>
 			</tr>
 		 </table>
 	</td>
 </tr>
</table>
</div>


<script type="text/javascript"></script>

<script>
	$(document).ready(function(){
		$('#load-button').on("click",function(e){
			$.ajax({
				url:"ajax-conn.php",
				type:"POST",
				success:function(data){
					$("#table-data").html(data);
				}
			});
		}); 
	});
</script>








</body>
</html>