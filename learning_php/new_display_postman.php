<?php

include 'new_conn.php';

$output=array();

$sql= "SELECT * FROM test";

$result= mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {

    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo "<br>";
    echo json_encode($output);
} else {
    echo json_encode(array('message' => "no records found", 'status' => false));
}


//  to view in postman datatable of inserted 


?>