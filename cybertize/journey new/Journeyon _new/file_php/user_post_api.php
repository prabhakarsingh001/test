<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

// $data = json_decode(file_get_contents("php://input"), true);


$conn= mysqli_connect("localhost","root","","journeyon") or die( "connection is Failled");





//  $id=  $data['id'];
 $user_name  =$_POST['name'];
 $mobile = $_POST['mobile'];
 $email =$_POST['email'];
 $password= $_POST['password'];
 $role= $_POST['role'];
 $create_date=$_POST['create_on'];
 


$sql ="INSERT INTO users( name, phone,email,password, role, created_on) VALUES ('$user_name ','$mobile',' $email',' $password','$role','$create_date')";

if($result=mysqli_query($conn, $sql))
{


     echo json_encode(array('message' => '  succesfully register.', 'status' => true));
}
else{
echo json_encode(array('message' => 'Somthing Error!!!! .', 'status' => false));

}
?>