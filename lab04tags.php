<?php
/*
Tom Zielinski
WEBD2201
March 2nd, 2020
*/
	$title = "Lab 04";
	$file = "lab04tags.php";
	$description = "Lab 04 page for my WEBD2201 Website";
	$date = "March 2nd, 2020";
	$banner = "Lab 04 - Start and End tags";
	include("header.php");
?>

<h1><?php echo $banner ?></h1>

<P>
    In this Web page I demonstrate what tags can be used in html to include php scripts
</p>

    <table id="descriptiontable">
        <caption>PHP start and end tags</caption>
            <tr>
                <th class="right">Opening Tag</th>
                <th class="left">Closing tag</th>
            </tr>
            <tr>
                <td>&lt;?php</td>
                <td>?&gt;</td>
            </tr>
            <tr>
                <td>&lt;?</td>
                <td>?&gt;</td>
            </tr>
            <tr>
                <td>&lt;script language="php"</td>
                <td>&lt;/script&gt;</td>
            </tr>
    </table>     
                    
<?php include("footer.php"); ?>