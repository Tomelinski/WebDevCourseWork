<?php
/*
Tom Zielinski
Webd2201
3/4/2020
*/
if (($_POST['val1'] == "") || ($_POST['val2'] == "") || ($_POST['calc'] =="")) {
    header("Location: lab05calculate_form.php");
    exit;
}

if ($_POST['calc'] == "add") {
    $result = $_POST['val1'] + $_POST['val2'];
} else if ($_POST['calc'] == "subtract") {
    $result = $_POST['val1'] - $_POST['val2'];
} else if ($_POST['calc'] == "multiply") {
    $result = $_POST['val1'] * $_POST['val2'];
} else if ($_POST['calc'] == "divide") {
    $result = $_POST['val1'] / $_POST['val2'];
}

/*
Tom Zielinski
Webd2201
3/9/2020
*/
	$title = "Lab 05";
	$file = "lab05calculate.php";
	$description = "lab05 for my WEBD2201 Website";
	$date = "March 2nd, 2020";
	$banner = "Lab 05 - Calculation";
	include("header.php");
?>

<p>This Page is the result page from the Calculate form to show the use of the post method</p>

<p>The result of the calculation is: <?php echo $result; ?></p>               
                    
<?php include("footer.php"); ?>