<?php


$data=array();

$server="localhost";
$username="root";
$password="";
$database="slider";


$conn=mysqli_connect($server,$username,$password,$database);

if($conn){
echo("connection successful");
}else{
    echo("not connected".mysqli_connect_errno());
}

// connection ends



$name=$_POST['name'];
$image= $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];





$sql="INSERT INTO see(name ,image) VALUES ('$name','$image')";
$result=mysqli_query($conn,$sql);

move_uploaded_file($tmp_name, "images/" . $image);

print_r($result);
exit();

if ($result) {

	$data = array("response" => 1, 'msg' => 'Successfully Inserted');
} else {
	$data = array("response" => 0, 'msg' => 'Something went wrong');
}

echo json_encode($data);

 






/*
<div class="slick-item">
								<div class="cities__item hover__box">
									<div class="cities__thumb hover__box__thumb">
										<a title="Singapo" href="city-details-1.html">
											<img src="images/city/singapo.jpg" alt="Singapo">
										</a>
									</div>
									<h4 class="cities__name">Singapo</h4>
									<div class="cities__info">
										<h3 class="cities__capital">Singapo</h3>
										<p class="cities__number">80 places</p>
									</div>
								</div><!-- .cities__item -->
							</div>
 */


 ?>