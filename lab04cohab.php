<?php
/*
Tom Zielinski
WEBD2201
March 2nd, 2020
*/
	$title = "Lab 04";
	$file = "lab04cohab.php";
	$description = "Lab 04 TextBook examples";
	$date = "March 2nd, 2020";
	$banner = "Lab 04 - Code Cohabitation";
	include("header.php");
?>

<h1><?php echo $banner ?></h1>

<P>
    In this Web page I show that php and html can can exist within eachother. using specific syntax
</p>

<?php
    echo "<P>I am trying to produce an error</P>";
    echo "<P>Was I successful?</P>";
?>
    
                        
                    
<?php include("footer.php"); ?>