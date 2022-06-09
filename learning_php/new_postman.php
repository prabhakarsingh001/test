<?php

include 'new_conn.php';

$result = array();

// if (isset($_POST['done'])) {


    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "INSERT INTO test(username, password) VALUES ('fffff',67)";
    $data= mysqli_query($conn, $sql);

    // print_r($data);
    // exit();
// }

    if ($data) {
        $result = array("response" => 1, 'msg' => 'Successfully Inserted');
    } else {
        $result = array("response" => 0, 'msg' => 'Something went wrong');
    }

    echo json_encode($result);




?>
