<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xml:lang="en" lang="en" xmlns=" http://www.w3.org/1999/xhtml">
<head>
	<title>Add Entry</title>
</head>
<body>

	<?php
	session_start();
	if(isset($_SESSION['user'])) {
		$host   =   "dbprojects.eecs.qmul.ac.uk"  ;
		$user   =   "js317";
		$pass   =   "Fepzgmz0GEwkv";
		$db     =   "js317";
	
		$title = $_GET['title'];
		$post  = $_GET['body'];

		$link = mysql_connect ( $host , $user , $pass ); 
		@mysql_select_db($db) or die( "Unable to select database");

		//add an entry
		$query = "INSERT INTO posts(title, post) VALUES ('$title', '$post')";
		mysql_query($query);

		mysql_close ( $link );

		header("location: http://webprojects.eecs.qmul.ac.uk/js317/Blog/viewBlog.php");
	}
	else {
		header("location: http://webprojects.eecs.qmul.ac.uk/js317/Blog/login.html");
	}
	?>


</body>
</html>