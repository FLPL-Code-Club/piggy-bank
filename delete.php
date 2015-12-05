<?php 
$query="DELETE FROM piggybank.currency WERE id=".$_POST["id"];
$connection = mysqli_connect("localhost","piggybank","hitlerlovesnutella1","piggybank");

$result=mysqli_query($connection, $query);
if(!$result){
	echo $query;
	die(mysqli_error($connection));
}

header("Location: index.php");
 ?>