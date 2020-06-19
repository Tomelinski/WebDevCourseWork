<?php
/*
Tom Zielinski
Webd2201
3/9/2020
*/
    $address = getenv("REMOTE_ADDR");


	$title = "Lab 05";
	$file = "lab05remoteaddress.php";
	$description = "lab05 for my WEBD2201 Website";
	$date = "March 9th, 2020";
	$banner = "Lab 05 - Remote Address";
	include("header.php");
?>

	<p>This web page shows that there are environment variables in php scripts, this page shows the ip address</p>

<?php
    echo "Your IP address is $address.";

    include("footer.php"); 
?>