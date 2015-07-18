<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xml:lang="en" lang="en" xmlns=" http://www.w3.org/1999/xhtml">
<head>
	<title>Create Table</title>
</head>
<body>

	<?php
	$host   =   "dbprojects.eecs.qmul.ac.uk"  ;
	$user   =   "js317";
	$pass   =   "Fepzgmz0GEwkv";
	$db   =   "js317";

	$link = mysql_connect ( $host , $user , $pass ); 
	@mysql_select_db($db) or die( "Unable to select database");

// create a table:
	$query="DROP TABLE IF EXISTS posts";
	mysql_query($query);

	$query="CREATE TABLE posts	( post_id INT AUTO_INCREMENT PRIMARY KEY, post_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP, title TINYTEXT,  post MEDIUMTEXT)";
	mysql_query($query);

	$query = "SET time_zone='+00:00'";
	mysql_query($query);

	mysql_close ( $link );
	?>
</body>
</html>