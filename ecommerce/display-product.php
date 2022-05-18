<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>displayimage</title>
</head>

<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <?php

    include 'connection.php';

    // echo " <br> display product ";

    $selectquery = "SELECT * FROM  productapi ";

    $q = mysqli_query($conn, $selectquery);

    $num = mysqli_num_rows($q);
    echo "<br>";
    // echo $num;


    // echo $res[1];
    ?>

    <div class="container">
        <div class="row">
            <?php
            while ($res = mysqli_fetch_array($q)) {

            ?>

                <div class="card col-4 width: 18rem;">
                    <img src="../img/<?php echo $res['image'];  ?>" class="card-img-top" alt="product">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title"><?php echo $res['name'];  ?></h5>
                            <span><?php echo "description:" . $res['description'];  ?></span>
                            <span> <?php echo " <br>category:" . $res['category'];  ?></span>
                            <span><?php echo " <br>price:" . $res['price'];  ?></span>
                        </div>
                        <!-- <span></span> -->
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>

            <?php

            }

            ?>
        </div>
    </div>

</body>

</html>