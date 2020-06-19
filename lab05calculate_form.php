<?php
/*
Tom Zielinski
Webd2201
3/9/2020
*/
	$title = "Lab 05";
	$file = "lab05calculate_form.php";
	$description = "lab05 for my WEBD2201 Website";
	$date = "March 9th, 2020";
	$banner = "Lab 05 - Calculate Form";
	include("header.php");
?>
<p>
	This is Page uses text inputs and radio button to show that calculations can be made in 
	php as well as action that will load a new page once the form has been completed
</p>

<form method="post" action="lab05calculate.php">

<p>Value 1: <input type="text" name="val1" size="10" /></p>
<p>Value 2: <input type="text" name="val2" size="10" /></p>

<p>
Calculation:
<br/>
<input type="radio" name="calc" value="add"/> add
<br/>
<input type="radio" name="calc" value="subtract"/> subtract
<br/>
<input type="radio" name="calc" value="multiply"/> multiply
<br/>
<input type="radio" name="calc" value="divide"/> divide
</p>

<p><input type="submit" name="submit" value="Calculate"/></p>
</form>
                    
<?php include("footer.php"); ?>