<?php
/*
Tom Zielinski
WEBD2201
March 2nd, 2020
*/
	$title = "Lab 04";
	$file = "lab04variables.php";
	$description = "Lab 04 TextBook examples";
	$date = "March 2nd, 2020";
	$banner = "Lab 04 - Textbook Examples";
	include("header.php");
?>

<h1><?php echo $banner ?></h1>

<P>
    In this Web page I demonstrate using variables in php
</p>

<?php
    $intVar = "9554215464";
    $floatVar = "1542.2232235";
    $stringVar = "This is a string.";

    echo "<P>integer: $intVar</P>";
    echo "<P>float: $floatVar</P>";
    echo "<P>string: $stringVar</P>";
?>

                        
                    
<?php include("footer.php"); ?>