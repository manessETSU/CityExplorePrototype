<!DOCTYPE html>
<html lang="en">
	<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0; }
      #map-canvas { height: 100% }
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCijtc1i-7u_rcwAHIeEDKXSZP3BViE_D0&sensor=false">
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
		  width: 180px;
		  float: none;
		  display: block;
		  margin-top: -35px;
		  color:white;
		}
		
		.distance{
			background-image:none !important;
			box-shadow:none !important;
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
    <div class="row-fluid" style="margin-top:10px; margin-left:10px;">
    	<div class="row-fluid"><a class="btn btn-danger">Logout</a></div>
    	<div class="row-fluid"><br/><a class="btn btn-danger">Unregister</a></div>
    </div>
    
    <div id="sidr">
	  <!-- Menu items -->
	  <ul>
	  	<li><a href="./mapIndex.php"><i class="icon-map-marker icon-white"></i> &nbsp;&nbsp;Map</a></li>
		<li><a href="#"><i class="icon-bookmark icon-white"></i> &nbsp;&nbsp;Bookmarks</a></li>
		<li><a href="#"><i class="icon-th-large icon-white"></i> &nbsp;&nbsp;Badges</a></li>
		<li><a href="./settings.php"><i class="icon-wrench icon-white"></i> &nbsp;&nbsp;Settings</a></li>
	  </ul>
	  
	  <hr />
	  
	  <ul id="locationList">
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
