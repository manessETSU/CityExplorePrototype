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
       		z-index:2000000000;
    	}
    	
    	.navbar{
    		margin-bottom:0px;
    		z-index:2000000000;
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
		  z-index:2000000000;
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
    <div style="padding-left:15px;">
    	<table class="table">
    		<tr><td><h3 style="display: inline-block;">Explore Sydney Badge</h3><img width="85" height="85" src="./img/badge-icon-small.jpg"/></td></tr>
    	</table>
    </div>
    
    <div id="sidr">
	  <!-- Menu items -->
	  <ul>
	  	<li><a href="./mapIndex.php"><i class="icon-map-marker icon-white"></i> &nbsp;&nbsp;Map</a></li>
		<li><a href="./badgeList.php"><i class="icon-th-large icon-white"></i> &nbsp;&nbsp;Badges</a></li>
		<li><a href="./settings.php"><i class="icon-wrench icon-white"></i> &nbsp;&nbsp;Settings</a></li>
	  </ul>
	  
	  <hr />
	  
	  <ul id="locationList">
	  	<li><a href="poiDetail.php">Sydney Opera House <span class="rating"><i class="icon-star icon-white"></i><i class="icon-star icon-white"></i><i class="icon-star icon-white"></i><i class="icon-star icon-white"></i><i class="icon-star icon-white"></i></span><h5 class="distance">0.14 km</h5></a></li>
	  	<li><a href="poiDetail.php">Government House <span class="rating"><i class="icon-star icon-white"></i><i class="icon-star icon-white"></i><i class="icon-star icon-white"></i><i class="icon-star icon-white"></i><i class="icon-star icon-white"></i></span><h5 class="distance">0.14 km</h5></a></li>
	  </ul>
	</div>
	
	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		<h3 id="myModalLabel">You've earned a badge</h3>
	  </div>
	  <div class="modal-body">
		<p>You've earned a badge for exploring Sydney</p>
	  </div>
	  <div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	  </div>
	</div>
	
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/jquery.sidr.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<script>
		$(document).ready(function() {
		  $('#simple-menu').sidr();
		});
	</script>
 
  </body>
</html>
