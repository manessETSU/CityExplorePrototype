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
    
      //Just the basic set up for a google map that doesn't have any of the controls visible. 
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(-33.861133,151.214038),
          zoom: 16,
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
      
      //Displays the map once the window loads
      google.maps.event.addDomListener(window, 'load', initialize);
      
    </script>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/jquery.sidr.dark.css">
    <style>
    	/* Hides the map and satellite view buttons. */
    	.gmnoprint{display:none}
    	
    	.navbar-inner{
       		-webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0;
    	}
    	
    	.navbar{
    		margin-bottom:0px;
    	}
    	
    	.navbar .brand {
		  margin-left: auto;
		  padding-left:45px;
		  margin-right: auto;
		  width: 160px;
		  float: none;
		  display: block;
		  margin-top: -35px;
		  color:white;
		}
    </style>
  </head>
  <body>
  	<div class="navbar navbar-inverse">
  		<div class="navbar-inner">
  		
			<a class="btn btn-inverse" id="simple-menu" href="#sidr" type="button">
				<i class="icon-th-list icon-white"></i>
			</a>
			
			<span class="brand">ETSU CityExplorer</span>
		
	  </div>
	</div>
    <div style="height:100%; width:100%;">
    	<!-- Div for the map -->
    	<div id="map-canvas"/>
    </div>
    
    <div id="sidr">
	  <!-- Menu items -->
	  <ul>
		<li><a href="#"><i class="icon-bookmark icon-white"></i> &nbsp;&nbsp;Bookmarks</a></li>
		<li><a href="#"><i class="icon-wrench icon-white"></i> &nbsp;&nbsp;Settings</a></li>
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
