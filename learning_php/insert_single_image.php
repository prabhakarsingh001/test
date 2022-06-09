<?php

$server="localhost";
$username="root";
$password="";
$database="newtest";




$conn= mysqli_connect($server,$username,$password,$database);
if($conn){
    echo "success";
}else{
    echo "connection failed";
}



if(isset($_POST['done'])){


    $username=$_POST['username'];
    $password= $_POST['password'];



    $sql= "INSERT INTO test(username, password) VALUES('$username', '$password')";
    $result = mysqli_query($conn,$sql);

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newtest</title>
</head>
<body>
    <div class="container">
        <form  method="post">

        <lable> username:</lebel>
        <input type="text", name="username", class="form-control">
        <label>password:</label>
        <input type="text" name="password" class="form-control">
        <button type="submit" name="done" > submit </button>
</form>

    </div>
</body>
</html>