
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
<nav class="navbar navbar-inverse" style="margin-top:-30px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> USTSP </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">About</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?= base_url('system/register') ?>"><span class="glyphicon glyphicon-user"></span> Register</a></li>
      <li><a href=""><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<?php 
  if(isset($content)){
    $this->load->view($content);
  }else{
    echo "No Page to Display!";
  }
?>

</body>
<div style="text-align: center;">
  <h5>Copyright by JPTiu</h5>
</div>
</html>