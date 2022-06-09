<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

// $data = json_decode(file_get_contents("php://input"), true);


$conn= mysqli_connect("localhost","root","","journeyon") or die( "connection is Failled");

 $string_text = $_POST['slug'];

 function slugify($string){
     $string = strtolower($string);
     $slg=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
     return $slg."-".rand();
 }
 $slug=slugify($string_text);

 $slider_name  =$_POST['name'];
 $file_name = $_FILES['image']['name']; 
 $file_size = $_FILES['image']['size'];
 $file_tmp = $_FILES['image']['tmp_name'];
 $file_type = $_FILES['image']['type'];
 


$sql ="INSERT INTO cities_slider(name, slug, image) VALUES ('$slider_name','$slug',' $file_name')";

if($result=mysqli_query($conn, $sql))
{
    move_uploaded_file($file_tmp, "../image/slider/".$file_name );

     echo json_encode(array('message' => '  succesfully register.', 'status' => true));
}
else{
echo json_encode(array('message' => 'Somthing Error!!!! .', 'status' => false));

}
?>