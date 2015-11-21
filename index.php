<!DOCTYPE html>
<html>
	<head>
		<title>Piggy Bank</title>		
		<link rel="stylesheet" type="text/css" href="styles.css">
		<script src="dollaz.js"></script>
	</head>
	<body>
		<h1>Piggy Bank</h1>
		<table>
			<?php
				$connection = mysqli_connect("localhost","piggybank","hitlerlovesnutella1","piggybank");
				$query = "select * from piggybank.currency";

				$results = mysqli_query($connection, $query);
				if(!$results){
					die("This is an errror message. Have a nice day ".mysqli_error() );
				}

				while($row = mysqli_fetch_array($results)){
					echo "<tr>";
					echo "<td>".$row["id"]."</td>";
					echo "<td>".$row["name"]."</td>";
					echo "<td>".$row["type"]."</td>";
					echo "<td>".$row["denomination"]."</td>";
					echo "<td>".$row["country"]."</td>";
					echo "<td>".$row["year"]."</td>";
					echo "</tr>";

				}
			?>
		</table>
	</body>
</html>