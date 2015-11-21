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
				$query = "select column_name from information_SCHEMA.columns where table_name='currency' and table_schema='piggybank' ";
				$query = "select * from piggybank.currency";

				$results = mysqli_query($connection, $query);
				$headers = mysqli_query($connection, $query);

				if(!$results || !$headers){
					die("This is an errror message. Have a nice day ".mysqli_error() );
				}

				echo "<tr>";
				while($header = mysql_fetch_array($headers, MYSQLI_NUM)){
					echo "<th>".$header[0]."</th>";
				}
				echo "</tr>";


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


				mysqli_close($connection);


			?>
		</table>
		<form action="dollaz.php" method="post">
			<label for="name">Name:</label>
				<input type="text" name="name">
			<label for="type">Type:</label>
				<input type="text" name="type">
			<label for="denomination">Denomination:</label>
				<input type="number" name="denomination">
			<label for="country">Country:</label>
				<input type="text" name="country">
			<label for="year">Year:</label>	
				<input type="number" name="year">
				<input type="submit">
		</form>
	</body>
</html>