<?php
/*
Tom Zielinski
WEBD2201
March 2nd, 2020
*/
	$title = "Lab 04";
	$file = "lab04arithme.php";
	$description = "Lab 04 TextBook examples";
	$date = "March 2nd, 2020";
	$banner = "Lab 04 - Arithmetic Operators";
	include("header.php");
?>

<h1><?php echo $banner ?></h1>

<P>
    In this Web page I demonstrate basic use of Arithmetic Operators, 
    showing that in php the user can use variables to conduct mathematical equations
</P>

<?php
    
    $a = 85;
    $b = 24;
    echo "<P>Original value of \$a is $a and \$b is$b</P>";
    $c = $a + $b;
    echo "<P>Added \$a and \$b and got $c</P>";
    $c = $a - $b;
    echo "<P>Subtracted \$b from \$a and got $c</P>";
    $c = $a * $b;
    echo "<P>Multiplied \$a and \$b and got $c</P>";
    $c = $a / $b;
    echo "<P>Divided \$a by \$b and got $c</P>";
    $c = $a % $b;
    echo "<P>The modulus of \$a and \$b is $c</P>";

?>
                        
                    
<?php include("footer.php"); ?>