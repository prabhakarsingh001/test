
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



    // echo " <br> display product ";

    $selectquery = "SELECT * FROM  port ";

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
                    <img width="30%" src="../img/<?php echo $res['image']; ?>" class="card-img-top" alt="image">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title"><?php echo $res['name'];  ?></h5>
                            <span><?php echo  $res['description'];  ?></span>
                        
                        </div>

                    </div>
                </div>

            <?php

            }

            ?>
        </div>
    </div>
