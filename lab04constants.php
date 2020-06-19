<?php
/*
Tom Zielinski
WEBD2201
March 2nd, 2020
*/
	$title = "Lab 04";
	$file = "lab04constants.php";
	$description = "Lab 04 TextBook examples";
	$date = "March 2nd, 2020";
	$banner = "Lab 04 - Use Constants";
	include("header.php");
?>

<h1><?php echo $banner ?></h1>

<P>
    In this Web page I create a constant and use constants that were predefined.
</p>

<?php
    
    define("MYCONSTANT", "This is a test of defining constants.");

    echo MYCONSTANT;

    echo "<br>This file is ".__FILE__;

    echo "<br>This is line number ".__LINE__;
    
    echo "<br>I am using ".PHP_VERSION;

?>
                        
                    
<?php include("footer.php"); ?>