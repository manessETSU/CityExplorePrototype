<!DOCTYPE html>
<html lang="en">
	<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0; }
    </style>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/jquery.sidr.dark.css">
    <style>    	
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
    </style>
  </head>
  <body>
  	<div class="navbar navbar-inverse">
  		<div class="navbar-inner">
  		
			<a class="btn btn-inverse" id="simple-menu" href="#sidr" type="button">
				<i class="icon-th-list icon-white"></i>
			</a>
			
			<span class="brand">ETSU CityExplorer</span>
			
			<!-- AddThis Button BEGIN -->
			<div class="addthis_toolbox addthis_default_style addthis_32x32_style" style="position:absolute; top:5px; right:47px;">
			<a class="addthis_button_compact"></a>
			</div>
			<script type="text/javascript">var addthis_config = {"data_track_addressbar":true, "ui_click":true, "ui_508_compliant":true};</script>
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-528d053761d0f19f"></script>
			<!-- AddThis Button END -->
			
			<span style="width: 32px; height: 32px; position: absolute; top: 5px; right: 15px;" class=".glyphicon .glyphicon-star-empty"></span>
		
	  </div>
	</div>
    <div style="height:100%; width:100%;">
		<h1 style="text-align:center;">Government House</h1>
		<img src="img/governmentHouse.jpg" alt=""></img>
		<div style="padding: 15px;">
			<div style="margin-top:10px;" class="clearfix">
				<div style="float:left;"><img src="img/googleNavigation.png" alt="" style="height:40px; vertical-align:middle;" />
				Navigate Here</div>
				<span class="rating" style="float: right;">
					<i class="icon-star icon-black"></i>
					<i class="icon-star icon-black"></i>
					<i class="icon-star icon-black"></i>
					<i class="icon-star icon-black"></i>
					<i class="icon-star icon-black"></i><br />
					<a style="color: #000;">Rate this POI</a>
				</span>
			</div>
			<p style="margin-top:10px;">This is the government building located somewhere in the middle eastern part of sydney australia. This fine looking building is just another example of some fancy architect looking fancy, provided to you by some long amount of text.</p>
		</div>
	</div>
    
    <div id="sidr">
	  <!-- Menu items -->
	  <ul>
		<li><a href="#"><i class="icon-bookmark icon-white"></i> &nbsp;&nbsp;Bookmarks</a></li>
		<li><a href="#"><i class="icon-wrench icon-white"></i> &nbsp;&nbsp;Settings</a></li>
	  </ul>
	  
	  <hr />
	  
	  <ul>
	  	<li><a href="#">Government House 
	  		<span class="rating">
	  			<i class="icon-star icon-white"></i>
				<i class="icon-star icon-white"></i>
				<i class="icon-star icon-white"></i>
				<i class="icon-star icon-white"></i>
				<i class="icon-star icon-white"></i>
	  		</span>
	  		<h5 class="distance">
	  			0.14 km
	  		</h5>
	  	</a></li>
		
		<li><a href="#">Sydney Opera House
		
			<span class="rating">
	  			<i class="icon-star icon-white"></i>
				<i class="icon-star icon-white"></i>
				<i class="icon-star icon-white"></i>
	  		</span>
	  		<h5 class="distance">
	  			0.14 km
	  		</h5>
		
		</a></li>
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
