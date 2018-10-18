<?php
	include 'geo_without_sql.php';
?>

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