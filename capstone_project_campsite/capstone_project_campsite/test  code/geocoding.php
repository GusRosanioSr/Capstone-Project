<?php
	// the URL the request is sent to (where the JSON data is recived from)
	$url = 'https://maps.googleapis.com/maps/api/geocode/json?address=201+Mullica+Hill+Road,+Glassboro,+NJ&key=AIzaSyBaOFicrMJ4aSExYZbYqrdzoHcSoLgygZ8';
	
	// takes the JSON that we got from the website and reads the whole file into a string
	$raw_json = file_get_contents($url);
	
	// takes the raw JSON string and converts it to an associatvie array so that we can index through it
	$json_data = json_decode($raw_json, TRUE);
	
	// prints our the whole JSON array to a webpage so we can view how the array looks
	print_r($json_data);
	echo var_dump($json_data);
?>