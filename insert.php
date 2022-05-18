<?php



<?php 


// before api header need to be attached
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Header :Access-Control-Allow-Header, Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With  ')



$data=json_decode(file_get_contents("php://input"),true);

$EMAILID= $data['emailid'];
$PASSWORD= $data['password'];




//only to read data from the browser and poatman 
// to check api only 

include "conapi.php";
include "connection.php";

$sql= "INSERT INTO forms(emailid,password ) VALUES('{$EMAILID}','{$PASSWORD}')";
 

if (mysqli_query($conn ,$sql)){

	 echo json_encode(array('message' => 'student record inserted.','status'=> true ));
}
else{

	echo json_encode(array('message' => 'no record insertd.','status'=> false ));
}

//successful fetching single data
?>

?>

