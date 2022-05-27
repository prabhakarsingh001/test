<?php



include 'new_conn.php';



if (isset($_POST['done'])) {

    $id =$_GET['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "UPDATE test  SET id='$id' , username='$username', password='$password' WHERE id='$id'";
    
    header('location:new_display.php');
    $result = mysqli_query($conn, $sql);

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>

<body>



    <form method="post">

        <label> Username: </label>
        <input type="text" name="username"> <br>

        <label> Password: </label>
        <input type="text" name="password"> <br>

        <button type="submit" name="done"> update </button><br>


    </form>
</body>

</html>