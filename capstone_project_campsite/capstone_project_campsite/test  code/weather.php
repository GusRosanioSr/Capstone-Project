<?php

	$api_url = 'https://api.darksky.net/forecast/16ebde69a3c2104de737b3c38d37d8ac/39.7099,-75.1189';
	
	$forecast = json_decode(file_get_contents($api_url));

	$coordinates = '$longtitude,$latitude';
	$longtitude = '39.7099';
	$latitude = '-75.1189';
	$ID = '1';
	
	
		// Current conditions
	$temperature_current = round($forecast->currently->temperature);
	$summary_current = $forecast->currently->summary;
	
	//$time_current = $forecast->currently->time;
	//$date = $time_current / 1000;
	//$date1 = date("d-m-Y H:i:s", $date);
	

	//echo '<pre>';
	//print_r($forecast);
	//echo '</pre>';
	
	
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$databaseName = "capstone";

	$connection = new mysqli($servername, $username, $password, $databaseName);

	if($connection->connect_error) 
	{
		die("Connection failed: " . $connection->connect_error);
	}

	$insertSQL = "INSERT INTO `weather` (`ID`, `Temperature`, `Summary`, `Longitude`, `Latitude`)
				VALUES ('$ID', '$temperature_current', '$summary_current','$longtitude','$latitude')";

	if ($connection->query($insertSQL) === TRUE) 
	{
		echo "Success: We will submit the following information<br>";
		echo "<br>";
		echo "ID: " . $ID;
		echo "<br>";
		echo "Temperature: " . $temperature_current;
		echo "<br>";
		echo "Summary: " . $summary_current;
		echo "<br>";
		echo "Longitude: " . $longtitude;
		echo "<br>";
		echo "Latitude: " . $latitude;
		echo "<br>";
	} else {
		echo "Error: " . $insertSQL . "<br>" . $connection->error;
	}

	$connection->close();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Forecast</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
		crossorigin="anonymous">
	</head>
	<body>
		<main class="container text-center">
			<h1 class="display1"Forecast</h1>
			<div>
				<h2>Current Forecast</h2>
				<h3 class="display2"><?php echo $temperature_current; ?>&deg;</h3>
				<p class="lead"><?php echo $summary_current; ?></p>
			</div>
		</main>
	</body>
</html>