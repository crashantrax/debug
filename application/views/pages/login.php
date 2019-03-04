<!DOCTYPE html>
<html>
<head>
	<title><?= $pagename;?> : Student Information System</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color: black;">

<div class="jumbotron text-center">
  <h1>Student Information System</h1>
  <p>University of Science and Technology of Southern Philippines</p> 
</div>

	<div class="container" style="padding-left: 20%;padding-top: 30px;">
		<div class="col-md-8">
			<form action="<?= base_url('system/dashboard'); ?>" method="POST">
				<div>
					<!-- <img src="">
					<div class="panel-heading">	
						<h3>Login</h3>
					</div> -->
					<div class="well">
						<h3>Login</h3>
						<div class="form-group">
							<i class="glyphicon glyphicon-user"></i>
							<input class="form-control" type="text" name="username" placeholder="Username">
						</div>
						<div class="form-group">
							<i class="glyphicon glyphicon-lock"></i>
							<input class="form-control" type="password" name="password" placeholder="Password">
						</div>
						<a href="">Forgot Password</a>
						<button type="submit" class="btn btn-primary" style="margin-left: 50%;width: 100px;">Login</button>
					</div>
				</div>
			</form>
		</div>		
	</div>
</body>
<div style="text-align: center;">
  <h5>Copyright 2019 Server</h5>
</div>
</html>