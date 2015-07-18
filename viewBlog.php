<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xml:lang="en" lang="en" xmlns=" http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
	<link href='http://fonts.googleapis.com/css?family=Scheherazade' rel='stylesheet' type='text/css'>
	<style>
		#date {
			font-color: #585046;
			font-size: 90%;
		}
		#title {
			text-shadow: 4px 4px 4px #aaa;
			font-family: 'Tangerine';
			font-style: oblique;
			font-weight: bold;
			font-size: 200%;
		}
		#body {
			font-family: 'Scheherazade', serif;
			font-size: 125%;
		}
		hr {
			border: 0;
			height: 1px;
			background-image: -webkit-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));
			background-image:    -moz-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));
			background-image:     -ms-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));
			background-image:      -o-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));
		}
	</style>
	<title>View Blog</title>
</head>
<body>
	<div id="wrap">
		<div id="header">Mein Blog</div>
		<div id="sidebar">
		<ul>
			<li><a href="http://webprojects.eecs.qmul.ac.uk/js317/Blog/viewBlog.php">Home</a></li>
			<?php
			session_start();
			if(isset($_SESSION['user'])) { 
				echo "<li><a href=\"http://webprojects.eecs.qmul.ac.uk/js317/Blog/addentry.html\">Add entry</a></li>";
				echo "<li><a href=\"http://webprojects.eecs.qmul.ac.uk/js317/Blog/logout.php\">Logout</a></li>";
			}
			else {
				echo "<li><a href=\"http://webprojects.eecs.qmul.ac.uk/js317/Blog/login.html\">Add entry</a></li>";
			}
			?>
		</ul>
	</div>	
		<div id="main">
			<?php

			$host   =   "dbprojects.eecs.qmul.ac.uk"  ;
			$user   =   "js317";
			$pass   =   "Fepzgmz0GEwkv";
			$db   =   "js317";

			$link = mysql_connect ( $host , $user , $pass ); 
			@mysql_select_db($db) or die( "Unable to select database");

			$query="SELECT * FROM posts"; 
			$result=mysql_query($query);

			$num=mysql_numrows($result); 

			if ($num==0) 
			{ 
				header("location: http://webprojects.eecs.qmul.ac.uk/js317/Blog/login.html"); 
			} 
			else 
			{ 
		$i=$num-1; // Display rows in reverse order
		while ($i >= 0) 
		{ 
			$title = mysql_result($result, $i, "title");
			$post  = mysql_result($result, $i, "post");
			$date  = mysql_result($result, $i, "post_date");

			echo "<div id=\"date\"><p>".date('D, M jS, Y, h:i a',strtotime($date))."</p></div>
			<div id=\"title\"><p>$title</p></div>
			<div id=\"body\"><p>$post</p> </div>
				<hr/>
				<br />"; 
				$i--; 
			} 
		}

		mysql_close ( $link );
		?>
	</div>
	
	<div id="footer">
	</div>
</body>
</html>