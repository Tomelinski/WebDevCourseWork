<?php
/*
Tom Zielinski
WEBD2201
March 2nd, 2020
*/
	$title = "Lab 04";
	$file = "lab04compar.php";
	$description = "Lab 04 TextBook examples";
	$date = "March 2nd, 2020";
	$banner = "Lab 04 - Comparison Operators";
	include("header.php");
?>

<h1><?php echo $banner ?></h1>

<P>
    In this Web page I use Comparison Operators to using php and variables to compare two variables to eachother.
</p>

<?php
    
    $a = 21;
    $b = 15;
    echo "<P>Original value of \$a is $a and \$b is $b</P>";
    if ($a == $b) {
        echo "<P>TEST 1: \$a equals \$b</P>";
    } else {
        echo "<P>TEST 1: \$a is not equal to \$b</P>";
    }
    if ($a != $b) {
        echo "<P>TEST 2: \$a is not equal to \$b</P>";
    } else {
        echo "<P>TEST 2: \$a is equal to \$b</P>";
    }
    if ($a > $b) {
        echo "<P>TEST 3: \$a is greater than \$b</P>";
    } else {
        echo "<P>TEST 3: \$a is not greater than \$b</P>";
    }
    if ($a < $b) {
        echo "<P>TEST 4: \$a is less than \$b</P>";
    } else {
        echo "<P>TEST 4: \$a is not less than \$b</P>";
    }
    if ($a >= $b) {
        echo "<P>TEST 5: \$a is greater than or equal to \$b</P>";
    } else {
        echo "<P>TEST 5: \$a is not greater than or equal to \$b</P>";
    }
    if ($a <= $b) {
        echo "<P>TEST 6: \$a is less than or equal to \$b</P>";
    } else {
        echo "<P>TEST 6: \$a is not less than or equal to \$b</P>";
    }

?>
                        
                    
<?php include("footer.php"); ?>