<?php
/*
Tom Zielinski
WEBD2201
March 2nd, 2020
*/
	$title = "Lab 04";
	$file = "lab04assign.php";
	$description = "Lab 04 TextBook examples";
	$date = "March 2nd, 2020";
	$banner = "Lab 04 - Assignment Operators";
	include("header.php");
?>

<h1><?php echo $banner ?></h1>

<P>
    In this Web page I use Assignment Operators to chagnge the value of variables
</p>

<?php
    
    $origVar = 100;
    echo "<P>Original value is $origVar</P>";

    $origVar += 25;
    echo "<P>Added a value, now it's $origVar</P>";
    
    $origVar -= 12;
    echo "<P>Subtracted a value, now it's $origVar</P>";

    $origVar .= " chickens";
    echo "<P>Final answer: $origVar</P>";

?>
                        
                    
<?php include("footer.php"); ?>