<?php
	// database connection information
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$databaseName = "capstone";
	$index = 1;
	// API key
	$key = 'AIzaSyBaOFicrMJ4aSExYZbYqrdzoHcSoLgygZ8';
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
			// the URL the request is sent to (where the JSON data is recived from)
			$url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' . $new_lat . ',' . $new_lng .'&key=' . $key;;

			// takes the JSON that we got from the website and reads the whole file into a string
			$raw_json = file_get_contents($url);
			
			// takes the raw JSON string and converts it to an associatvie array so that we can index through it
			$json_data = json_decode($raw_json, TRUE);
			
			// the code below is used to index all of the data from $json_data and assigns it to new individual variables
			
			$street = $json_data['results'][0]['address_components'][0]['long_name'];
			$road = $json_data['results'][0]['address_components'][1]['long_name'];
			$town = $json_data['results'][0]['address_components'][2]['long_name'];
			$county = $json_data['results'][0]['address_components'][3]['long_name'];
			$state = $json_data['results'][0]['address_components'][4]['long_name'];
			$country = $json_data['results'][0]['address_components'][5]['long_name'];
			$zip = $json_data['results'][0]['address_components'][6]['long_name'];
			$lat = $json_data['results'][0]['geometry']['location']['lat'];
			$lng = $json_data['results'][0]['geometry']['location']['lng'];
			$full_address = $json_data['results'][0]['formatted_address'];
			
			$servername = "localhost";
			$username = "root";
			$password = "root";
			$databaseName = "capstone";
					
			$connection = new mysqli($servername, $username, $password, $databaseName);
			if($connection->connect_error)
			{
				die("Connection failed: " . $connection->connect_error);
			}
					
			$insertSQL = "INSERT INTO `google maps` (`street`, `road`, `town`, `county`, `state`, `country`, `zip`, `latitude`, `longitude`) 
						  VALUES('$street', '$road', '$town', '$county', '$state', '$country', '$zip', '$lat', '$lng')";
			if ($connection->query($insertSQL) === TRUE)
			{
				
				echo "Street: " . $street;
				echo "<br>";
				echo "Road: " . $road;
				echo "<br>";
				echo "Town: " . $town;
				echo "<br>";
				echo "County: " . $county;
				echo "<br>";
				echo "State: " . $state;
				echo "<br>";
				echo "Country: " . $country;
				echo "<br>";
				echo "Zip Code: " . $zip;
				echo "<br>";
				echo "Latitude: " .$lat;
				echo "<br>";
				echo "Longitude: " . $lng;
				echo "<br>";
				echo "Full Address: " .$full_address;
				echo "<br>";
				
			}
			else
			{
				echo "Error: " . $insertSQL . "<br>" . $connection->error;
			}
			$connection->close();
		}
	}
?>