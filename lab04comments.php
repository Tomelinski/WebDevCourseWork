<?php
/*
Tom Zielinski
WEBD2201
March 2nd, 2020
*/
	$title = "Lab 04";
	$file = "lab04comments.php";
	$description = "Lab 04 TextBook examples";
	$date = "March 2nd, 2020";
	$banner = "Lab 04 - Commenting Code";
	include("header.php");
?>

<!-- this is a comment in HTML -->
<h1><?php echo $banner ?></h1>

<P>
    In this Web page I demonstrate how commenting works in html and php. and also use it in C-style.
</p>

<?php
	// This is a simple PHP comment.
	echo "<p>There is a comment above this line</p>"
    /* This is a C-style, multiline comment. You can make this as
    long as you'd like. */
	# Used to shells? Use this kind of comment.
?>
                        
                    
<?php include("footer.php"); ?>