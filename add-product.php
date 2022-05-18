<?php

include('product_api_connection.php');
$result = array();
// if(isset($_POST['submit']))
// {
	$name= $_POST['name'];
	// $item_id=$_POST['item_id'];
	$description =$_POST['description'];
    $price =$_POST['price'];
	$category =$_POST['category'];
	$file=$_FILES['image_single'];
	
	
	

	$image_single=$_FILES['image_single']['name'];
	$tmp_name=$_FILES['image_single']['tmp_name'];





    $result= $conn -> query("INSERT INTO productapi(name ,description , price, category, image) VALUES ('$name','$description','$price','$category','$image_single')");
     	
	move_uploaded_file($tmp_name, "img/".$image_single);

	include('multiple_image_upload.php');
// }
     if($result)
	{
		

       $result = array("response" => 1, 'msg' => 'Successfully Inserted');
    }
	else
	{
       $result = array("response" => 0, 'msg' => 'Something went wrong');
    }

	echo json_encode($result);

 

?>