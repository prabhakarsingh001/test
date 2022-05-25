<?php


header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');

$output = array();

include('product_api_connection.php');

$user_id = $_POST['user_id'];

$sql = " INSERT INTO bookings(total,user_id) 
    SELECT SUM(price), user_id from attribute 
   INNER JOIN productapi
   ON  attribute.item_id = productapi.id
   INNER JOIN cart
   ON  cart.attribute_id = attribute.id
    WHERE user_id='$user_id'";



$result = mysqli_query($conn, $sql);

// $sql= "INSERT INTO  bookings( user_id ) VALUES ('$user_id')";

if ($result) {
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);

} else {

    echo ("error displaying");
}


?>






















<?php




// running code below

// $user_id = $_POST['user_id'];

// $sql = " INSERT INTO bookings(total)
//     SELECT SUM(price) from attribute 
//    INNER JOIN productapi
//    ON  attribute.item_id = productapi.id
//    INNER JOIN cart
//    ON  cart.attribute_id = attribute.id
//     WHERE user_id='$user_id'";

 
















// $sql = " SELECT  item_id ,SUM(price) as total FROM attribute 

//         INNER JOIN attribute
//         ON attribute.item_id = productapi.id
//         WHERE user_id = '1' ";

// $result = mysqli_query($conn, $sql);
 /* 
 Create connection by passing these connection parameters
$conn = new mysqli($servername, $username, $password, $dbname);
echo "<h1>"; echo "sum() aggregate with group by Demo "; echo"</h1>";
echo "<h2>";echo "
 ";echo "</h2>";
//sql query
$sql = "SELECT food_item, SUM(cost) FROM food GROUP BY food_item";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
    echo "Total ". $row['food_item']. " = ". $row['SUM(cost)'];
      echo "<br />";
}
//c
 */

// only to get sum of price column
// below


/*
$sql1=" SELECT SUM(price) from attribute WHERE item_id='1' ";

$result= mysqli_query($conn,$sql1);


if (mysqli_num_rows($result) > 0) {

    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
} else {
    echo ("error displaying");
}

*/






// insert sql 
// INSERT INTO `bookings`(`id`, `user_id`, `total`) VALUES ('[value-1]','[value-2]','[value-3]')
