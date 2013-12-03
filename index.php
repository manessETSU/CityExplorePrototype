<!DOCTYPE html>
<html lang="en">
	<head>
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<body>
	
		<div class="row-fluid" style="margin-top:100px;">
		
			<div style="padding-left: 30px; padding-right: 30px;">
			
				<h1 style="padding-bottom:15px;">ETSU CityExplorer</h1>

				<form class="form-horizontal">
				  <fieldset>
				
					<div class="control-group">
						<input type="text" class="input-block-level" id="username" placeholder="Username">
					</div>
					<div class="control-group">
						<input type="password" class="input-block-level" id="password" placeholder="Password">
					</div>
				
					<div class="control-group">
						<a href="mapIndex.php" class="btn btn-primary btn-block">Login</a>
						<a href="register.php" class="btn btn-block">Don't have an account? Register Now.</a>
						<a href="#myModal" role="button" data-toggle="modal" class="btn btn-block">Forgot your password</a>
					</div>
				  </fieldset>
				</form>
			</div>
		
		</div>
		
		<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
			<h3 id="myModalLabel">Email Sent</h3>
		  </div>
		  <div class="modal-body">
			<p>Your password reset instructions have been sent</p>
		  </div>
		  <div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		  </div>
		</div>
		
		<script src="http://code.jquery.com/jquery.js"></script>
    	<script src="js/bootstrap.min.js"></script>
	<body>
</html>
