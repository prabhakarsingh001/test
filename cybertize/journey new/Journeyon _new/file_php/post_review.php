<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

// $data = json_decode(file_get_contents("php://input"), true);


$conn= mysqli_connect("localhost","root","","journeyon") or die( "connection is Failled");





//  $id=  $data['id'];
 $user_name  =$_POST['place_id'];
 $place_id = $_POST['reviews'];
 $ratings =$_POST['ratings'];
 


$sql ="INSERT INTO reviews( place_id, reviews, ratings) VALUES ('$user_name','$place_id','$ratings')";

if($result=mysqli_query($conn, $sql))
{


     echo json_encode(array('message' => '  succesfully register.', 'status' => true));
}
else{
echo json_encode(array('message' => 'Somthing Error!!!! .', 'status' => false));

}
?>