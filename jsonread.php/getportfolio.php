 <?php


    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "portfolio";


    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn) {
        die("connection not successful" . mysqli_connect_error());
    } else {
        echo ("connection successful");
    }
    

    $selectquery = "SELECT * FROM  port ";

    $q = mysqli_query($conn, $selectquery);

    $result = array();

    while ($res = mysqli_fetch_array($q)) {
        // $product = mysqli_fetch
        $name = $res['name'];
        $description = $res['description'];
        $image = $res['image'];


        array_push($result, array('name' => $name, 'desc' => $description, 'img' => $image));
    }

    echo json_encode($result);
    ?>