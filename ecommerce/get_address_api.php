


<?php

header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');

// $data = array();


include('product_api_connection.php');


$sql =" SELECT * FROM  address ";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)>0){

$output=mysqli_fetch_all($result, MYSQLI_ASSOC);
echo json_encode($output);
}
else{
    echo("error displaying");

}


?>


<!-- try another -->