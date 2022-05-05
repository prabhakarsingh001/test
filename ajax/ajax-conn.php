<?php 

$conn=mysqli_connect("localhost","root","","ajax") or die("connection to database failed");

$sql=" SELECT * FROM ajaxtable ";
$result=mysqli_query($conn,$sql) or die("my sqli query failed");

$output="";
if(mysqli_num_rows($result)>0){
	$output=' <table border="1" width="100%" cellspacing="0" cellpadding="10px">
	<tr>
	<th>id</th>
	<th>name</th>
	</tr>';
 


	while($row=mysqli_fetch_assoc($result)){
		$output .= "<tr><td>{$row["id"]}</td><td>{$row["firstname"]} {$row["lastname"]}</td></tr>";

            
	}

	$output.="</table>";

	mysqli_close($conn);
	echo $output;
}else{
	echo "no records found";
}

?>