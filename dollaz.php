<?php 
$query="insert into piggybank.currency (name, type, denomination, country, year) values('".$_POST['name']."','".$_POST['type']."',".$_POST['denomination'].",'".$_POST['country']."',".$_POST['year'].")";
$connection = mysqli_connect("localhost","piggybank","hitlerlovesnutella1","piggybank");

$result=mysqli_query($connection, $query);
if(!$result){
	echo $query;
	die(mysqli_error($connection));
}

header("Location: index.php");
 ?>