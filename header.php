<?php 
	require("./includes/functions.php");
	ob_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="webd2201.css" /> 
	<!-- CHANGE THE HREF ABOVE TO webd2201.css AFTER YOU HAVE COPY AND PASTED THE CONTENTS OF style.css INTO IT -->
	<!--
	Author: Tom Zielinski
	Filename: <?php echo $file ?>
	Date: <?php echo $date ?>
	Description: <?php echo $description ?>
	-->
	<title>WEBD2201 - <?php echo $title ?></title><!-- THE <title> WILL COME FROM A PHP VARIABLE TOO -->
</head>
<body>
<div id="container">
	<div id="header">
		<img src="./Pictures/webdevbasics.PNG" alt="Webdev basics logo" />
		<h1>
			<?php echo $banner ?>
		</h1>
	</div>
	<div id="sites">
		<ul>
			<li><a href="http://opentech.durhamcollege.org/pufferd/webd2201/">WEBD2201</a></li>
			<li><a href="http://www.w3schools.com">W3Schools</a></li>
			<li><a href="http://validator.w3.org">XHTML Validator</a></li>
			<li><a href="http://jigsaw.w3.org/css-validator/">CSS Validator</a></li>			
			<li><a href="http://php.net/manual/en/index.php">PHP Manual</a></li>
			<li><a href="http://www.durhamcollege.ca">Durham College</a></li>
			
		</ul>
	</div>
	<div id="content-container">
		<div id="navigation">
			<h3>
				Local Navigation Bar
			</h3>
			<ul>
				<li><a href="./index.php">WEBD2201 Home Page</a></li>
				<li><a href="./lab01.php">Lab 1: Basic XHTML pages</a></li>
				<li><a href="./lab02.php">Lab 2: Working with HTML Tables</a></li>
				<li><a href="./lab03.php">Lab 3: Formatting and Layout with Styles</a></li>
				<li><a href="./lab04.php">Lab 4: PHP Chapter Files from textbook</a></li>
				<li><a href="./lab05.php">Lab 5: PHP Basic PHP Scipting</a></li>
				<li><a href="./lab06.php">Lab 6: Self-referring Form W/ data Validation</a></li>
				<li><a href="./lab07.php">Lab 7: Database intro</a></li>
				<li><a href="./lab09.php">Lab 9: User Login</a></li>
				<li><a href="./lab10.php">Lab 10: User Registration</a></li>
			</ul>
		</div>
		<div id="content">
		<!-- start of main page content. --> 