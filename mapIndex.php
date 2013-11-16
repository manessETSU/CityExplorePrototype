<!DOCTYPE html>
<html lang="en">
	<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map-canvas { height: 100% }
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCijtc1i-7u_rcwAHIeEDKXSZP3BViE_D0&sensor=false">
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(-34.397, 150.644),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          panControl:false,
          scaleControl: false,
          streetViewControl: false,
  		  overviewMapControl: false,
  		  zoomControl: false
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <link rel="stylesheet" href="css/jquery.sidr.light.css">
    <style>
    	/* Hides the map and satellite view buttons. */
    	.gmnoprint{display:none}
    </style>
  </head>
  <body>

    <div style="height:100%; width:100%;">
    	<div style="z-index:9999; position:absolute; padding-top: 20px;">
    		<a id="simple-menu" href="#sidr"><img src="./tab.png" /></a>
    	</div>
    	<div id="map-canvas"/>
    </div>
    
    <div id="sidr">
	  <!-- Your content -->
	  <ul>
		<li><a href="#">Bookmarks</a></li>
		<li class="active"><a href="#">Settings</a></li>
	  </ul>
	</div>
	
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/jquery.sidr.min.js"></script>
	
	<script>
$(document).ready(function() {
  $('#simple-menu').sidr();
});
</script>
 
  </body>
</html>
