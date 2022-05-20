<?php
$result2=array();

// connection
include('product_api_connection.php');

    $item_id=$_POST['item_id'];

    $price = $_POST['price'];
    $mrp = $_POST['mrp'];
    $attribute = $_POST['attr_name'];

    $data2 = $conn-> query("INSERT INTO attribute (item_id, price, mrp, attr_name) VALUES ('$item_id','$price','$mrp','$attribute')");

if ($data2) {
    $result2 = array("response" => 1, 'msg' => 'Successfully Inserted');
} else {
    $result2 = array("response" => 0, 'msg' => 'Something went wrong');
}

echo json_encode($result2);

?>