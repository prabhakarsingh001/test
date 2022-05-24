<?php 

header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers ,Content-Type, Access-Control-Allow-Methods , Authorization , X-Requested-With');


$data=json_decode(file_get_contents("php://input"), true); 

$studentid = $data['newid'];


include "rest_conn.php";

// $sql="DELETE * FROM apitable  WHERE sid={$studentid}";
$sql="DELETE FROM apitable WHERE sid={$studentid}";

if(mysqli_query($conn,$sql)) {

	echo json_encode(array('message'=>"record DELETED", 'status'=> true));

}else{
	echo json_encode(array('message'=>"no record DELETED", 'status'=> false));
}


?>





