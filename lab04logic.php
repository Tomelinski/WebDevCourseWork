<?php
/*
Tom Zielinski
WEBD2201
March 2nd, 2020
*/
	$title = "Lab 04";
	$file = "lab04logic.php";
	$description = "Lab 04 TextBook examples";
	$date = "March 2nd, 2020";
	$banner = "Lab 04 - Logic Operators";
	include("header.php");
?>

<h1><?php echo $banner ?></h1>

<P>
    In this Web page I use the logic Operators &amp;&amp; (and) and || (or) to execute code based on certain conditions
</P>

<?php
    
    $degrees = "95";
    $hot = "yes";
    if (($degrees > 100) || ($hot == "yes")) {
        echo "<P>TEST 1: It's <strong>really</strong> hot!</P>";
    } else {
        echo "<P>TEST 1: It's bearable.</P>";
    }
    if (($degrees > 100) && ($hot == "yes")) {
        echo "<P>TEST 2: It's <strong>really</strong> hot!</P>";
    } else {
        echo "<P> TEST 2: It's bearable.</P>";
    }

?>
                        
                    
<?php include("footer.php"); ?>