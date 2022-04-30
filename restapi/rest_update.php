<?php 

header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers ,Content-Type, Access-Control-Allow-Methods , Authorization , X-Requested-With');


$data=json_decode(file_get_contents("php://input"), true); 

$id=$data['newid'];
$name= $data['sname'];
$age=$data['sage'];
$city=$data['scity'];

include "rest_conn.php";

$sql= " UPDATE apitable SET student_name ='{$name}', age='{$age}', city='{$city}' where sid=$id";



if (mysqli_query($conn,$sql)) {

echo json_encode(array('message'=>"records UPDATED", 'status'=>true));

	 
}else{
	echo json_encode(array('message'=>"no records UPDATED", 'status'=>false));
}


?>




