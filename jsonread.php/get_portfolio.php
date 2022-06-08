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

$selectquery = "SELECT * FROM  port";

$q = mysqli_query($conn, $selectquery);

$num = mysqli_num_rows($q);
echo "<br>";
// echo $num;


// echo $res[1];
?>
<div class="t-pt-120 t-pb-90">
    <div class="container">
        <div class="row">
            <?php
            while ($res = mysqli_fetch_array($q)) {

            ?>
                <div class="col-md-6 col-lg-4 t-mb-30">
                    <div class="project-card">
                        <div class="project-card__img">
                            <a href="#" class="t-link w-100">
                                <img width="20%" src="../img/<?php echo $res['image']; ?>" alt="cyber" class="img-fluid w-100" />
                            </a>
                        </div>
                        <div class="project-card__body">
                            <a href="#" class="t-link t-link--alpha project-card__link">
                                <i class="las la-plus"></i>
                            </a>
                            <a href="#" class="t-link text-uppercase font-weight-bold xsm-text t-link-alpha">
                                <?php echo $res['name']; ?>
                            </a>
                            <h4 class="text-capitalize t-mt-10 mb-0">
                                <a href="#" class="t-link t-link--alpha">
                                    <?php echo $res['description']; ?>

                                </a>
                            </h4>
                        </div>
                    </div>
                </div>

            <?php

            }

            ?>
        </div>
    </div>
</div>