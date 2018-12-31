<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Your Campsite</title>
		<link rel="stylesheet" href="your_campsite.css"/>
		<link rel="stylesheet" href="youtube.css"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
		<!-- Header Start -->
		<div class="wrapper" id="headerWrapper">
			<img src="./pictures/your_campsite2.png" alt="Your Campsite Logo"/>
		</div>
		<!-- Main Content Start -->
		<div class="wrapper" id="mainWrapper">
			<p class="headerText">Do you love camping? How about finding the best spot to do it! with Your Campsite, you can find the best for your needs!</p>
			<p class="headerText">Listed below are the Campsites in New Jersey, along with detailed information about each site.</p>
			<p class="headerText">Weather, maps, and even YouTube videos of all New Jersey campsites are listed below.</p>
			<p class="headerText">So what are you waiting for? Go and camp at Your Campsite!</p>
		</div>
		<div class="wrapper" id="contentWrapper">
			<?php
				// database connection information
				$servername = "localhost";
				$username = "root";
				$password = "root";
				$databaseName = "capstone";
				$index = 1;
				
				// API key
				$google_key = 'AIzaSyBaOFicrMJ4aSExYZbYqrdzoHcSoLgygZ8';
				$youtube_key = 'AIzaSyBOHTyAnCr1RUK1D8FYww77KoLS9jZposw';
				for($i=1; $i < 26; $i++)
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
						$name = $campsite['facilityName'];
						
						/*
							CAMPGROUNDS SECTION
						*/
						
						$campground_state = $campsite['state'];
						$campground_name = $campsite['facilityName'];
						$campground_latitude = $campsite['latitude'];
						$campground_longitude = $campsite['longitude'];
						$campground_amps = $campsite['sitesWithAmps'];
						$campground_pets = $campsite['sitesWithPetsAllowed'];
						$campground_sewer = $campsite['sitesWithWaterHookup'];
						$campground_water = $campsite['sitesWithSewerHookup'];
						
						/*
							GOOGLE MAPS SECTION
						*/
						
						// the URL the request is sent to (where the JSON data is recived from) for google maps
						$google_url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' . $new_lat . ',' . $new_lng .'&key=' . $google_key;;

						// takes the JSON that we got from the website and reads the whole file into a string for google maps
						$google_raw_json = file_get_contents($google_url);
						
						// takes the raw JSON string and converts it to an associatvie array so that we can index through it for google maps
						$google_json_data = json_decode($google_raw_json, TRUE);
						
						// the code below is used to index all of the data from $json_data and assigns it to new individual variables
						$street = $google_json_data['results'][0]['address_components'][0]['long_name'];
						$road = $google_json_data['results'][0]['address_components'][1]['long_name'];
						$town = $google_json_data['results'][0]['address_components'][2]['long_name'];
						$county = $google_json_data['results'][0]['address_components'][3]['long_name'];
						$state = $google_json_data['results'][0]['address_components'][4]['long_name'];
						$country = $google_json_data['results'][0]['address_components'][5]['long_name'];
						$zip = $google_json_data['results'][0]['address_components'][6]['long_name'];
						$lat = $google_json_data['results'][0]['geometry']['location']['lat'];
						$lng = $google_json_data['results'][0]['geometry']['location']['lng'];
						$full_address = $google_json_data['results'][0]['formatted_address'];
						
						/*
							WEATHER SECTION
						*/
						//URL and JSON data (using multiple)
						$weather_url = 'https://api.darksky.net/forecast/16ebde69a3c2104de737b3c38d37d8ac/' . $new_lat . ',' . $new_lng;
						$forecast = json_decode(file_get_contents($weather_url));
						$raw_json1 = file_get_contents($weather_url);
						$json_data1 = json_decode($raw_json1, TRUE);
						//Current conditions
						$temperature_current = round($forecast->currently->temperature);
						$summary_current = $forecast->currently->summary;
						//Next 7 days
						$Day1 = round($json_data1['daily']['data'][0]['temperatureHigh']);
						$Day1_sum = $json_data1['daily']['data'][0]['summary'];
						$Day2 = round($json_data1['daily']['data'][1]['temperatureHigh']);
						$Day2_sum = $json_data1['daily']['data'][1]['summary'];
						$Day3 = round($json_data1['daily']['data'][2]['temperatureHigh']);
						$Day3_sum = $json_data1['daily']['data'][2]['summary'];
						$Day4 = round($json_data1['daily']['data'][3]['temperatureHigh']);
						$Day4_sum = $json_data1['daily']['data'][3]['summary'];
						$Day5 = round($json_data1['daily']['data'][4]['temperatureHigh']);
						$Day5_sum = $json_data1['daily']['data'][4]['summary'];
						$Day6 = round($json_data1['daily']['data'][5]['temperatureHigh']);
						$Day6_sum = $json_data1['daily']['data'][5]['summary'];
						$Day7 = round($json_data1['daily']['data'][6]['temperatureHigh']);
						$Day7_sum = $json_data1['daily']['data'][6]['summary'];
						
						
						/*
							YOUTUBE SECTION
						*/
						define("MAX_RESULTS", 5);
						$name = str_replace(' ', '', $name);

						// the URL the request is sent to (where the JSON data is recived from) 
						$youtubeApiUrl = 'https://www.googleapis.com/youtube/v3/search?part=snippet&q=' . $name . '&maxResults=' . MAX_RESULTS . '&key=' . $youtube_key;
						
						// takes the JSON that we got from the website and reads the whole file into a string
						$raw_json = file_get_contents($youtubeApiUrl);
						
						// takes the raw JSON string and converts it to an associatvie array so that we can index through it
						$json_data = json_decode($raw_json, TRUE);
						
						//variables
						$videoID = $json_data['items'][0]['id']['videoId'];
						$title = $json_data['items'][0]['snippet']['title'];
						
						// close the connection after all info is retrieved
						$connection->close();
						
						
						/*
							START THE CONTENT SECTION
						*/
						
						
						?>
						</br>
						<!-- campsite section -->
						<div class="wrapper" id="campsiteWrapper">
							<!-- this is where html and php for the campsite will go -->
							<!-- Campsite information will go here -->
							<table class="table">
							  <tr>
								  <th>Campsite Name</th>
								  <th>Address</th>
								  <th>Pets Allowed</th>
								  <th>Electrical Hookup</th>
								  <th>Sewer Hookup</th>
								  <th>Water Hookup</th>
							  </tr>
							  <tr>
								  <td><?php echo $campground_name; ?> </td>
								  <td><?php echo $full_address; ?> </td>
								  <td><?php echo $campground_pets; ?> </td>
								  <td><?php echo $campground_amps; ?> </td>
								  <td><?php echo $campground_sewer; ?> </td>
								  <td><?php echo $campground_water; ?> </td>
							  </tr>
							  
							</table>
							
						</div>
						<!-- weather section -->
						<div class="wrapper" id="weatherWrapper" p-4" style="margin: 0 auto; max-width: 320px;">
							<h2>Current Forecast</h2>
							<h3 class="display2"><?php echo $temperature_current; ?>&deg;</h3>
							<p class="lead"><?php echo $summary_current; ?></p>
						</div>
						<!-- google maps section -->
						<div class="wrapper" id="iframeWrapper">
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
						</div>
						<!-- youtube section -->
						<div class="result_header">These are the first <?php echo MAX_RESULTS; ?> results from YouTube: </div>
						<div class="video_container" id="SearchResultsDiv">
							<?php
							$ch = curl_init();

							curl_setopt($ch, CURLOPT_HEADER, 0);
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
							curl_setopt($ch, CURLOPT_URL, $youtubeApiUrl);
							curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
							curl_setopt($ch, CURLOPT_VERBOSE, 0);
							curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
							$response = curl_exec($ch);

							curl_close($ch);
							$data = json_decode($response);
							$value = json_decode(json_encode($data), true);
							
							for ($i = 0; $i < MAX_RESULTS; $i++) {
							$videoId = $value['items'][$i]['id']['videoId'];
							$title = $value['items'][$i]['snippet']['title'];
							$description = $value['items'][$i]['snippet']['description'];
							?> 
								<div class="video_set">
									<div  class="video">
										<iframe id="iframe" style="width:100%;height:100%" src="//www.youtube.com/embed/<?php echo $videoId; ?>" 
											data-autoplay-src="//www.youtube.com/embed/<?php echo $videoId; ?>?autoplay=1">
										</iframe>                     
									</div>
									<div class="video_info">
										<div class="video_title"><b><?php echo $title; ?></b></div>
										<div class="video_desc"><?php echo $description; ?></div>
									</div>
								</div>
							<?php
							}
							?>
                        </div>
						</br>
						<?php
					}
				}
			?>
		</div>
	</body>
</html>