<?php
/*
Tom Zielinski
Webd2201
3/9/2020
*/

    function tempChart($celcius){
        return ((9.0/5.0) * $celcius) + 32;
    }

	$title = "Lab 05";
	$file = "lab05_function_temp_convert.php";
	$description = "lab05 for my WEBD2201 Website";
	$date = "March 9th, 2020";
	$banner = "Lab 05 - Temperature Conversion(Function)";
	include("header.php");
?>

<p>In this Web page I use a php loop to generate a table that displays celcius and a function that calculates fahrenheit</p>
    <table class="main temp">
        <tr>
            <th>Celcius</th>
            <th>Fahrenheit</th>
        </tr>
        <?php
        for ($i = -40; $i <= 100; $i+=10) {
            $fahren = tempChart($i);
            echo "<tr> <td>$i&deg;</td> <td>$fahren&deg;</td> </tr>";
        }
        
        ?>
    </table>
                        
                    
<?php include("footer.php"); ?>