<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xml:lang="en" lang="en" xmlns=" http://www.w3.org/1999/xhtml">
<head>
	<title>Login</title>
</head>
<body>

	<?php
	$userid   = $_POST['username'];
	$password = $_POST['password'];

	$testuserid = 'js317';
	$testpassword = 'test123';

	if(($userid === $testuserid) && ($password === $testpassword)){
		session_start();
		$_SESSION['user'] = $userid;
		header("location: http://webprojects.eecs.qmul.ac.uk/js317/Blog/addentry.html");
	}
	else {
		header("location: http://webprojects.eecs.qmul.ac.uk/js317/Blog/login.html");
	}
	
	?>


</body>
</html>