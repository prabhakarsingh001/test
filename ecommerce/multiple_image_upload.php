<?php

//  include('product_api_connection.php');

$result = array();

$sql1 ="SELECT id FROM productapi  ORDER BY id DESC LIMIT 1 ";
// print_r($sql1);
// exit();
  $result1= mysqli_query($conn,$sql1);
  if(mysqli_num_rows($result1)>0){
      $row=mysqli_fetch_assoc($result1);
      $category_id =$row['id'];

     $image=$_FILES['image'];

    foreach($_FILES['image']['tmp_name'] as $key => $value)
    {

	$image=$_FILES['image']['name'][$key];
	$tmp_name=$_FILES['image']['tmp_name'][$key];
 
  move_uploaded_file($tmp_name,"img/".$image); 

    $data= $conn -> query("INSERT INTO product_images(item_id, image) VALUES (' $category_id','$image')");
 }
 }
      
 
    if($data)
	{
       $result = array("response" => 1, 'msg' => 'Successfully Inserted');
    }
	else
	{
       $result = array("response" => 0, 'msg' => 'Something went wrong');
    }

	echo json_encode($result);

    
// }
?>