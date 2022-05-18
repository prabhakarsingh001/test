< <?php

    include 'connection.php';

    $selectquery = "SELECT * FROM  productapi ";

    $q = mysqli_query($conn, $selectquery);

    $result = array();
  
    while ($res = mysqli_fetch_array($q)) {
        // $product = mysqli_fetch
        $name = $res['name'];
        $description = $res['description'];
        $image = $res['image'];


        array_push($result, array('name' => $name, 'desc' => $description,'img' => $image));

        
    }

    echo json_encode($result);
    ?>