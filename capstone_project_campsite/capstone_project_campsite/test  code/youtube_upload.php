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
			
			$keyword = $campsite['facilityName'];
			$keyword = preg_replace('/\s+/', '', $keyword);
			
			$MAX_RESULTS = 1;
			$apikey = 'AIzaSyBOHTyAnCr1RUK1D8FYww77KoLS9jZposw'; 
			$youtubeApiUrl = 'https://www.googleapis.com/youtube/v3/search?part=snippet&q=' . $keyword . '&maxResults=' . $MAX_RESULTS . '&key=' . $apikey;
			
			// takes the JSON that we got from the website and reads the whole file into a string
			$raw_json = file_get_contents($youtubeApiUrl);
			
			// takes the raw JSON string and converts it to an associatvie array so that we can index through it
			$json_data = json_decode($raw_json, TRUE);
			

			// this goes through the data in from json_data and puts it into a variable.

			$videoID = $json_data['items'][0]['id']['videoId'];
			$title = $json_data['items'][0]['snippet']['title'];
			$description = $json_data['items'][0]['snippet']['description'];
			
			$insertSQL = "INSERT INTO `youtube`(`video ID`, `description`, `title`) VALUES ('$videoID', '$description' ,'$title')";

			if ($connection->query($insertSQL) === TRUE) 
			{
				echo "Success: We will submit the following information<br>";
				echo "Video ID: " . $videoID . "<br>";
				echo "Title: " . $title . "<br>";
			} 
			else 
			{
				echo "Error: " . $insertSQL . "<br>" . $connection->error;
			}
			
			$connection->close();
		}
	}
?>