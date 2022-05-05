<?php 


// before api header need to be attached
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');



$data=json_decode(file_get_contents("php://input"),true);

$serial_no= $data['serialn'];






//only to read data from the browser and postman 
// to check api only 

include "conapi.php";
include "connection.php";

$sql= "SELECT * FROM form WHERE sno ={$serial_no}";
$result3=mysqli_query($conn ,$sql)  or die("connection failed");



if (mysqli_num_rows($result3)>0){

	$output=mysqli_fetch_all($result3 , MYSQLI_ASSOC);
	echo "<br>";
	echo  json_encode($output);
}
else{

	echo json_encode(array('message' => 'no record found.','status'=> false ));
}

//successful fetching single data
?>