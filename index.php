<!DOCTYPE html>
<html>
<head>
	<title>Hello, world!</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<style type="text/css">
	body {
		background-color: white;
		text-align: center;
		padding: 50px;
		font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
	}
	</style>
</head>
<body>
	<img id="logo" src="logo_blue.png" alt="logo.png"/>
	<h1>
		<?php
		print "Hello, ";
		// Print what was submitted in the form parameter called 'user'
		print $_POST['user'];
		print "!";
		?>
	</h1>
</body>
</html>
