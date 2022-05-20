<?php
$result= array();

// connection 
include('product_api_connection.php');

$userid= $_POST['user_id'];
$attributeid= $_POST['attribute_id'];

$data= $conn-> query("INSERT INTO cart (user_id , attribute_id) VALUES ('$userid','$attributeid')");


if ($data) {
    $result = array("response" => 1, 'msg' => 'Successfully Inserted');
} else {
    $result = array("response" => 0, 'msg' => 'Something went wrong');
}

echo json_encode($result);

?>
