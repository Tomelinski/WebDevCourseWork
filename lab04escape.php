<?php
/*
Tom Zielinski
WEBD2201
March 2nd, 2020
*/
	$title = "Lab 04";
	$file = "lab04escape.php";
	$description = "Lab 04 TextBook examples";
	$date = "March 2nd, 2020";
	$banner = "Lab 04 - Escaping Code";
	include("header.php");
?>

<h1><?php echo $banner ?></h1>

<P>
    In this Web page I use the special character \ to escape other special characters
</P>

<?php
    echo "<P>I think this is really \"cool\"!</P>";
?>

                        
                    
<?php include("footer.php"); ?>