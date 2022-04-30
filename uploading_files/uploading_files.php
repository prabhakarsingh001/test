<?php 

if(isset($_FILES['image'])){
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";

 

   $file_name=$_FILES['image']['name'];
   $file_size=$_FILES['image']['size'];
   $file_tmp=$_FILES['image']['tmp_name'];
   $file_type=$_FILES['image']['type'];

 	move_uploaded_file($file_tmp, "photo" .$file_name);
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>files_upload</title>
</head>
<body>


<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="image"/>
<input type="submit" name="submit"/>

</form>

</body>
</html>