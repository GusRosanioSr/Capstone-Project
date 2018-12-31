<?php
	echo "<!DOCTYPE html>";


	include 'geo_without_sql.php';
	echo "<html>";
	echo "<body>";
	
	echo "<div id='googleMap' style='width:100%;height:400px;'></div>";
?>
	<script>
	function myMap() {
	var mapProp= {
		center:new google.maps.LatLng(<?php echo $lat ?>,<?php echo $lng ?>),
		zoom:15,
	};
	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	}

	</script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBaOFicrMJ4aSExYZbYqrdzoHcSoLgygZ8&callback=myMap"></script>
<?php
	echo "</body>";
	echo "</html>";
?>