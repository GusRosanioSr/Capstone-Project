<?php

	// database connection information
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$databaseName = "capstone";
	$index = 1;
	for($i=1; $i < 26; $i++)
	{	
		$connection = new mysqli($servername, $username, $password, $databaseName);
		if($connection->connect_error)
		{
			die("Connection failed: " . $connection->connect_error);
		}
		else
		{
			$sql = "SELECT * FROM `campground` WHERE counter = '$index'";
			$campsite = mysqli_query($connection, $sql);
			$campsite = mysqli_fetch_assoc($campsite);
			$index++;
			
			$new_lat = $campsite['latitude'];
			$new_lng = $campsite['longitude'];
			$ID = $campsite['facilityName'];
			// the URL the request is sent to (where the JSON data is recived from)

			$weather_url = 'https://api.darksky.net/forecast/16ebde69a3c2104de737b3c38d37d8ac/' . $new_lat . ',' . $new_lng;
			
			$forecast = json_decode(file_get_contents($weather_url));
	
	
			// Current conditions
			$temperature_current = round($forecast->currently->temperature);
			$summary_current = $forecast->currently->summary;

			$insertSQL = "INSERT INTO `weather` (`ID`, `Temperature`, `Summary`, `longitude`, `latitude`)
						VALUES ('$ID', '$temperature_current', '$summary_current','$new_lng','$new_lat')";

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
				echo "Longitude: " . $new_lng;
				echo "<br>";
				echo "Latitude: " . $new_lat;
				echo "<br>";
			} 
			else {
				echo "Error: " . $insertSQL . "<br>" . $connection->error;
			}

			$connection->close();
		}
	}
	
?>