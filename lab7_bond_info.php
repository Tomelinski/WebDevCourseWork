<?php
/*
Tom Zielinski
WEBD2201
March 31st, 2020
*/

	$title = "Lab 07";
	$file = "lab07.php";
	$description = "Lab 07 page for my WEBD2201 Website";
	$date = "March 31st, 2020";
	$banner = "Lab 07 - Bond Info";
	include("header.php");
?>

	<p>
	This page utilizes several postgreSQL method calls.  Such as pg_connect(),
	pg_query(), and pg_fetch_result().
	</p>
	<!-- setup the table -->
	<table border="1" width="75%">
		<tr><th width="50%">Movie</th><th width="15%">Year</th><th width="35%">Actor</th></tr>
	
	<?php
	$output = ""; //Set up a variable to store the output of the loop 
	//connect
	$conn = pg_connect("host=127.0.0.01 dbname=zielinskit_db user=zielinskit password=100559389");  
	//N.B. replace the YOUR variables with your specific information
	//NOTE: "host=localhost..." SHOULD work, but there is a problem with the config on opentech, use 127.0.0.1 instead
	
	//issue the query
	$sql = "SELECT movies.title, movies.year, actors.name
				FROM movies, actors
				WHERE movies.actor=actors.id
				ORDER BY movies.year ASC";
		$result = pg_query($conn, $sql);
		$records = pg_num_rows($result);
	
	//generate the table
		for($i = 0; $i < $records; $i++){  //loop through all of the retrieved records and add to the output variable
			$output .= "\n\t<tr>\n\t\t<td>".pg_fetch_result($result, $i, "title")."</td>"; 
			$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "year")."</td>"; 
			$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "name")."</td>\n\t</tr>"; 
		}
	
		echo $output; //display the output
	?>
	</table>
	<!-- end the table -->
	
<?php include("footer.php"); ?>
