<?php  
// to convert into json format header must be written 
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');




$data1 = json_decode(file_get_contents("php://input"), true); 

$user_id = $_POST['user_id'];


include "product_api_connection.php";

$data = $conn->query(" SELECT *
   FROM  cart
   INNER JOIN attribute
   ON  cart.attribute_id= attribute.id
   INNER JOIN productapi
   ON  attribute.item_id = productapi.id
    WHERE user_id = '$user_id'");


// to convert to json formatn
while($data1 = mysqli_fetch_all($data , MYSQLI_ASSOC)) {
   
   echo json_encode($data1);
}

?>

































<?php
// print_r($user_id);
// exit();
// working table

/* $data = $conn->query(" SELECT *
FROM cart
INNER JOIN attribute
ON cart.attribute_id= attribute.id
INNER JOIN productapi
ON attribute.item_id = productapi.id
WHERE user_id = '$user_id'");
*/
?>