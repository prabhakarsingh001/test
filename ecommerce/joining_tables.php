<?php

$user_id = $_POST['user_id'];


include "product_api_connection.php";

$data = $conn->query(" SELECT *
   FROM  cart
   INNER JOIN attribute
   ON  cart.attribute_id= attribute.id
   INNER JOIN productapi
   ON  attribute.item_id = productapi.id
    WHERE user_id = '$user_id'");

if (mysqli_num_rows($data) > 0) {

   $data1 = mysqli_fetch_assoc($data);
   print_r($data1);
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