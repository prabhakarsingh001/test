<?php
$data=array();

include('product_api_connection.php');

$user_id = $_POST['user_id'];


$sql = "DELETE FROM `address` WHERE user_id ='$user_id'";

$result = mysqli_query($conn, $sql);

if ($result) {
    $data = array("response" => 1, 'msg' => ' Deleted Successfully ');
} else {
    $data = array("response" => 0, 'msg' => 'Something went wrong');
}

echo json_encode($data);

?>




