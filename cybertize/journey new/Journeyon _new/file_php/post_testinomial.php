<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

// $data = json_decode(file_get_contents("php://input"), true);


$conn= mysqli_connect("localhost","root","","journeyon") or die( "connection is Failled");







 
    //  $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', trim(strtolower($_POST['slug']))); // working
    //  $slg=$slug."-".rand();
    //  echo($slg);
    //  exit();

    $string_text = $_POST['slug'];
    function slugify($string){
        $string = strtolower($string);
        $slg=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
        return $slg."-".rand();
    }
    $slug=slugify($string_text);

 $testi_name  =$_POST['name'];  
 $descrip =$_POST['description'];
 $design= $_POST['designation'];
 $image= $_FILES['image'];
 $create_date=$_POST['create_on'];
 
 $file_name = $_FILES['image']['name']; 
 $file_size = $_FILES['image']['size'];
 $file_tmp = $_FILES['image']['tmp_name'];
 $file_type = $_FILES['image']['type'];

$sql ="INSERT INTO testimonials(name, slug, description, designation, image, created_on) VALUES ('$testi_name','$slug','$descrip','$design',' $file_name','$create_date')";

if($result=mysqli_query($conn, $sql))
{


     echo json_encode(array('message' => ' add succesfully .', 'status' => true));
}
else{
echo json_encode(array('message' => 'Somthing Error!!!! .', 'status' => false));

}
?>