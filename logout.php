<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xml:lang="en" lang="en" xmlns=" http://www.w3.org/1999/xhtml">
<head>
	<title>Login</title>
</head>
<body>
	<?php
		session_start(); 
		session_destroy();

		header("location: http://webprojects.eecs.qmul.ac.uk/js317/Blog/viewBlog.php");
	?>
</body>
</html>