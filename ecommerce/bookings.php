<?php


header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');

$result1= array();

include('product_api_connection.php');

$user_id=$_POST['user_id'];

$sql = " SELECT SUM(price) from attribute 
   INNER JOIN productapi
   ON  attribute.item_id = productapi.id
   INNER JOIN cart
   ON  cart.attribute_id = attribute.id
    WHERE user_id='$user_id'";

$result = mysqli_query($conn, $sql);
 $rows=mysqli_fetch_assoc($result);
  $data= $rows['SUM(price)'];


// print_r($output);
// exit();

$sql1 = "INSERT INTO bookings(user_id, total) VALUES ('$user_id','$data')";

$result1 = mysqli_query($conn , $sql1);

if ($result1){

    echo json_encode($result1);
}else{

    echo "something went wromg";
}






//     $res = mysqli_fetch_array($result1 , MYSQLI_ASSOC);
//     echo json_encode($res);
//     print_r($res);
// }
// else{
//     echo "wrong";
// }




?>