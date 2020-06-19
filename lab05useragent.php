<?php
/*
Tom Zielinski
Webd2201
3/9/2020
*/
    $agent = getenv("HTTP_USER_AGENT");

	$title = "Lab 05";
	$file = "lab05useragent.php";
	$description = "lab05 for my WEBD2201 Website";
	$date = "March 9th, 2020";
	$banner = "Lab 05 - Agents";
	include("header.php");
?>

<p>
	This web page shows that there are environment variables in php scripts, this page shows the 
	Browser type, version, language, encoding and platform
</p>

<?php

    echo "You are using $agent.";               
                    
    include("footer.php"); 
?>