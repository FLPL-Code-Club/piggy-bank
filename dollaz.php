<?php 
$query="insert into piggybank (name, type, denomination, country, year) '".$_POST['name']."','".$_POST['type']."',".$_POST['denomination'].",'".$_POST['country']."',".$_POST['year'];
echo $query
 ?>