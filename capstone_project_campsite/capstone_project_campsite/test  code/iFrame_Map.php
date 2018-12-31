<?php
	// database connection information
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$databaseName = "capstone";
	$index = 1;
	
	// API key
	$key = 'AIzaSyBaOFicrMJ4aSExYZbYqrdzoHcSoLgygZ8';
	for($i=1; $i < 27; $i++)
	{	
		// establish database connection
		$connection = new mysqli($servername, $username, $password, $databaseName);
		if($connection->connect_error)
		{
			die("Connection failed: " . $connection->connect_error);
		}
		else
		{
			// sql query
			$sql = "SELECT * FROM `campground` WHERE counter = '$index'";
			$campsite = mysqli_query($connection, $sql);
			$campsite = mysqli_fetch_assoc($campsite);
			$index++;
			
			// get the latitude and longitude into new variables
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
			
			// close the connection after all info is retrieved
			$connection->close();
			?>
			</br>
			<iframe 
			  width="500" 
			  height="250" 
			  frameborder="0" 
			  scrolling="no" 
			  marginheight="0" 
			  marginwidth="0" 
			  src="https://maps.google.com/maps?q=+<?php echo $lat ?>+,+<?php echo $lng ?>+&hl=es;z=14&amp;output=embed"
			  >
			</iframe>
			</br>
			<?php
		}
	}
?>