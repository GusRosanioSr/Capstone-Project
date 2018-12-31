<?php
    define("MAX_RESULTS", 4);
    
     if (isset($_POST['submit']) )
     {
        $keyword = $_POST['keyword'];
        // Replaces any white spaces so you can search anything.
        $keyword = str_replace(' ', '', $keyword);
               
        // IF keyword is empty an error message will pop up.
        if (empty($keyword))
        {
            $response = array(
                  "type" => "error",
                  "message" => "Please enter a keyword to search."
                );
        } 
    }
         
?>
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="youtube.css">
    </head>
    
    <body>
        <div class="search_container">
            <form id="keywordForm" method="post" action="">
                <div class="search_bar">
                    Search YouTube : <input class="search_field" type="search" id="keyword" name="keyword"  placeholder="Search">
                </div>

                <input class="submit_button"  type="submit" name="submit" value="Submit">
            </form>
        </div>
        
        <?php 
            // Checks to see if response is empty.
            if(!empty($response)) { ?>
                <div class="response <?php echo $response["type"]; ?>"> <?php echo $response["message"]; ?> </div>
        <?php } ?>
        
            <?php
				// Submits response.
                $apikey = 'AIzaSyBOHTyAnCr1RUK1D8FYww77KoLS9jZposw'; 
                $youtubeApiUrl = 'https://www.googleapis.com/youtube/v3/search?part=snippet&q=' . $keyword . '&maxResults=' . MAX_RESULTS . '&key=' . $apikey;

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
            ?>

            <div class="result_header">These are the first <?php echo MAX_RESULTS; ?> results from YouTube: </div>
            <div class="video_container" id="SearchResultsDiv">

            <?php
                // Goes through the array of youtube videos and puts them on the screen.
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
                } 
            }
            ?> 
        </div>
    </body>
</html>