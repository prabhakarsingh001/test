<!-- not done yet -->

<?php 
// INSERT INTO `notes` (`sno`, `title`, `description`, `date`) VALUES ('1', 'food', 'cheese,burger,mutton', current_timestamp());

$server="localhost";
$username="root";
$password="";
$database="crudform";


$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
	die("connection not successful" . mysqli_connect_error());
}
else{
	echo("connection successful");
}


if ($_SERVER['REQUEST_METHOD']=="POST"){

$title=$_POST['title'];
$description=$_POST['description'];

 $result = $conn -> query("INSERT INTO notes( title , description, `date`) VALUES ('$title', '$description', current_timestamp())");

}











?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>crud_page</title>
</head>
<body>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
     
      <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  -->
     

 

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">contact us</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- form container begins -->
 <div class="container">


<form action="crud_page.php" method ="post">
  <div class="mb-3">
    <label for="title" class="form-label">notes</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="title" aria-describedby="emailHelp">
    <div id="title" class="form-text"></div>
  </div>
 
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">description</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>





 </div> 



 <div class="container">


 </div>
 <!-- same as below but in simple form ,below is table created with jquery -->

<!-- 
 <?php 

$sql="SELECT * FROM notes";
$result=mysqli_query($conn , $sql);
 while($row = mysqli_fetch_assoc($result)){
  echo $row['sno'] . "title " .$row['title'] . "description " . $row['description'];
  echo"<br>";
 }


 ?> -->
 <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">sno</th>
      <th scope="col">title</th>
      <th scope="col">description</th>
      <th scope="col">actions</th>




    
    </tr>

  </thead>
  <tbody>
     <?php 

$sql="SELECT * FROM notes";
$result=mysqli_query($conn , $sql);
 while($row = mysqli_fetch_assoc($result)){

   echo "<tr>
      <th scope='row'>" .$row['sno']  ."</th>
      <td> ".$row['title']  ."</td>
      <td>".$row['description']  ."</td>
      <td><a href='/del'>delete </a><a href='/edit'>edit </a></td>
    </tr>";
    
  // echo $row['sno'] . "title " .$row['title'] . "description " . $row['description'];
  // echo"<br>";
 }


 ?>
   
    
  </tbody>
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script scr="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"></script>
     <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
  </script>

  </body>
</html>
</body>
</html>



