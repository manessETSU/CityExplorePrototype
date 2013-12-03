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
    
    <link href="../../css/bootstrap.min.css" rel="stylesheet" media="screen">
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
		
		.distance{
			background-image:none !important;
			box-shadow:none !important;
		}
    </style>
  </head>
  <body>
  	<div class="navbar navbar-inverse">
  		<div class="navbar-inner">
			
			<span class="brand">ETSU CityExplorer Admin</span>
		
	  </div>
	</div>

	<div class="wrapper" style="margin:15px">
	
		<div class="row-fluid">
			<h1>Welcome!</h1>
		</div>
		<div class="row-fluid">
			<a href="./pois" class="btn btn-primary">Manage POIs</a>
		</div>
		<div class="row-fluid">
			<br /><a href="./badges" class="btn btn-primary">Manage Badges</a>
		</div>
	
	</div>
 
  </body>
</html>
