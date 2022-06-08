<?php

$result = array();

$server = "localhost";
$username = "root";
$password = "";
$database = "portfolio";


$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("connection not successful" . mysqli_connect_error());
} else {
    // echo ("connection successful");
}



// connection ends

	$name= $_POST['name'];
	$description =$_POST['description'];
	$file=$_FILES['image'];
	
	
	

	$image=$_FILES['image']['name'];
	$tmp_name=$_FILES['image']['tmp_name'];





    $result= $conn -> query("INSERT INTO port(name ,description , image) VALUES ('$name','$description','$image')");
     	
	move_uploaded_file($tmp_name, "./images/".$image);

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