<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hallo! </title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-default">
      <div class="container-fluid">
	<div class="navbar-header">
		<a class="navbar-brand" href="">WHO!!!</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="<?php echo base_url(); ?>">Home</a></li>
		<li><a href="<?php echo base_url('index.php\Welcome\about'); ?>">About</a></li>
		<li><a href="<?php echo base_url('index.php\blog'); ?>">Blog</a></li> 
	</ul>
   </div>
</nav>
	<br></br>
	<div class="jumbotron">
		<h2>Selamat Datang Di WEB Saya !!!</h2>
	</div>

</body>
</html>