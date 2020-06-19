<?php
/*
Tom Zielinski
Webd2201
3/9/2020
*/

	$title = "Lab 05";
	$file = "lab05_simple_temp_convert.php";
	$description = "lab05 for my WEBD2201 Website";
	$date = "March 9th, 2020";
	$banner = "Lab 05 - Temperature Conversion(simple)";
	include("header.php");
?>
<p>In this Web page i use a php loop to generate a table that displays celcius and calculates fahrenheit</p>

    <table class="main temp">
        <tr>
            <th>Celcius</th>
            <th>Fahrenheit</th>
        </tr>
        <?php
        for ($i = -40; $i <= 100; $i+=10) {
            $fahren = ((9.0/5.0) * $i) + 32;
            echo "<tr> <td>$i&deg;</td> <td>$fahren&deg;</td> </tr>";
        }
        ?>
    </table>
                        
                    
<?php include("footer.php"); ?>