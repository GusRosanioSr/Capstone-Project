<?php
	// the URL the request is sent to (where the JSON data is recived from)
	$url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=39.7086852,-75.1177774&key=AIzaSyBaOFicrMJ4aSExYZbYqrdzoHcSoLgygZ8';
	

	// takes the JSON that we got from the website and reads the whole file into a string
	$raw_json = file_get_contents($url);
	
	// takes the raw JSON string and converts it to an associatvie array so that we can index through it
	$json_data = json_decode($raw_json, TRUE);
	
	// prints our the whole JSON array to a webpage so we can view how the array looks
	//print_r($json_data);
	//echo var_dump($json_data);
	
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
	
	// this is used to test how the information in json_data is organized
	/*
	$street = $json_data['results'][0]['address_components'][0]['long_name'];
	echo $street;
	echo "<br>";
	$road = $json_data['results'][0]['address_components'][1]['long_name'];
	echo $road;
	echo "<br>";
	$town = $json_data['results'][0]['address_components'][2]['long_name'];
	echo $town;
	echo "<br>";
	$county = $json_data['results'][0]['address_components'][3]['long_name'];
	echo $county;
	echo "<br>";
	$state = $json_data['results'][0]['address_components'][4]['long_name'];
	echo $state;
	echo "<br>";
	$country = $json_data['results'][0]['address_components'][5]['long_name'];
	echo $country;
	echo "<br>";
	$zip = $json_data['results'][0]['address_components'][6]['long_name'];
	echo $zip;
	echo "<br>";
	$lat = $json_data['results'][0]['geometry']['location']['lat'];
	echo $lat;
	echo "<br>";
	$lng = $json_data['results'][0]['geometry']['location']['lng'];
	echo $lng;
	echo "<br>";
	$full_address = $json_data['results'][0]['formatted_address'];
	echo $full_address;
	echo "<br>";
	*/
	
	// this section inserts information into the SQL database
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
?>