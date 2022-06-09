<?php
header('Content-Type:application/json');
header('Acess-Control_Allow-Origin:*');

$data=json_decode(file_get_contents("php://input"),true);
// $user_id= $data['user_id'];


 

$conn=mysqli_connect("localhost","root","","journeyon") or die("connection is failed");

// $sql=" SELECT * FROM  stud WHERE id='".$student_id."'";
$sql="SELECT * FROM users";

// print_r($sql);

$result = mysqli_query($conn, $sql) or die("Query unsuccessful.");
// echo mysqli_num_rows($result);die();
 if(mysqli_num_rows($result) > 0){
     $output=mysqli_fetch_all($result,MYSQLI_ASSOC);
     echo json_encode($output);

 }else{ 
     echo json_encode(array('message'=>'No record found.','status'=>false));
 }