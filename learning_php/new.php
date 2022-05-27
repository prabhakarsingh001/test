<?php

include 'new_conn.php';



if (isset($_POST['done'])) {


    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "INSERT INTO test(username, password) VALUES ('$username','$password')";
    $result = mysqli_query($conn, $sql);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new insert</title>
</head>

<body>


    <form method="post" action="new.php">

        <label> Username: </label>
        <input type="text" name="username"> <br>

        <label> Password: </label>
        <input type="text" name="password"> <br>

        <button  type="submit" name="done"> Submit </button><br>


    </form>
</body>

</html>