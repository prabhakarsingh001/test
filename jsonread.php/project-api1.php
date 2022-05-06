<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>card-test!</title>
  </head>
  <body>
    <!-- <h1>card test</h1> -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

  <div class="container">
    <div class="row">
      <div class="col-3">
        test1
        
<div class="card" style="width: 18rem;">
  <img src="https://res.cloudinary.com/nik-cloud-cybertize/image/upload/v1649842460/journeyon/city/uma1nnslyw5k4n1gda1j.jpg" class="card-img-top" alt="internet too slow">
  <div class="card-body">
    <h5 class="card-title">See&Do</h5>
    <p class="card-text"></p>
    <a href="project-api.php" class="btn btn-primary" id="btn1">check details</a>
  </div>
</div>
      </div>
      <div class="col-3">
        test
      </div>
      <div class="col-3">
        test
      </div>
      <div class="col-3">
        test
      </div>
    </div>

  </div>


<div class="card" style="width: 18rem;">
  <img src="https://res.cloudinary.com/nik-cloud-cybertize/image/upload/v1649842460/journeyon/city/uma1nnslyw5k4n1gda1j.jpg" class="card-img-top" alt="internet too slow">
  <div class="card-body">
    <h5 class="card-title">See&Do</h5>
    <p class="card-text"></p>
    <a href="project-api.php" class="btn btn-primary" id="btn1">check details</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="https://res.cloudinary.com/nik-cloud-cybertize/image/upload/v1649842050/journeyon/supercat/kzicvoyhliwkpgnttkrx.jpg" class="card-img-top" alt="internet too slow">
  <div class="card-body">
    <h5 class="card-title">Eat & Drink</h5>
    <p class="card-text">text to be edited</p>
    <a href="project-api.php" class="btn btn-primary" id="btn1">check details</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="https://res.cloudinary.com/nik-cloud-cybertize/image/upload/v1649842133/journeyon/supercat/fl0rhugpngts3pwo38b9.jpg" class="card-img-top" alt="internet too slow">
  <div class="card-body">
    <h5 class="card-title">Places to stay</h5>
    <p class="card-text"></p>
    <a href="project-api.php" class="btn btn-primary" id="btn1">check details</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="https://res.cloudinary.com/nik-cloud-cybertize/image/upload/v1649842145/journeyon/supercat/hbtq7t81jdj3xkt90gjb.jpg" class="card-img-top" alt="internet too slow">
  <div class="card-body">
    <h5 class="card-title">shopping</h5>
    <p class="card-text"></p>
    <a href="project-api.php" class="btn btn-primary" id="btn1">check details</a>
  </div>
</div>


<script>

$(document).ready(function(){
$('#btn1').click(function(){
$('#load-data').load('project-api.php');
});
});



</script>








  </body>
</html