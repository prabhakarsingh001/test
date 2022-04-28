<?php 

header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');


$data=json_decode(file_get_contents("php://input"), true); 

$studentid = $data['newid'];



include "rest_conn.php";

$sql= " SELECT * FROM apitable  WHERE sid = {$studentid}";

$result=mysqli_query($conn,$sql) or die("connection failed");

if (mysqli_num_rows($result) > 0) {

	 $output=mysqli_fetch_all($result , MYSQLI_ASSOC);
	 echo "<br>";
	 echo json_encode($output );
}else{
	echo json_encode(array('message'=>"no records found", 'status'=> false));
}


?>




