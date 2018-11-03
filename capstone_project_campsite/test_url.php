<?php
	// the URL the request is sent to (where the JSON data is recived from)
	$key = 'AIzaSyBaOFicrMJ4aSExYZbYqrdzoHcSoLgygZ8';
	$lat = '39.7086852';
	$lng = '-75.1177774';
	$url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' . $lat . ',' . $lng .'&key=' . $key;
	//$url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=40.7484,-73.9857&key=AIzaSyBaOFicrMJ4aSExYZbYqrdzoHcSoLgygZ8';

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
?>