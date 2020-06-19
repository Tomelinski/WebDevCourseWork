<?php
	/*
	Tom Zielinski
	Webd2201
	3/12/2020
	*/

	function makeTable($start, $stop, $incr){
		$table = "";
        for ($i = $start; $i <= $stop; $i += $incr) {
            $fahren = ((9.0/5.0) * $i) + 32;
            $table .= "<tr> <td>$i&deg;</td> <td>$fahren&deg;</td> </tr>";
		}
		return $table;
	}

	$title = "Lab 06";
	$file = "lab06.php";
	$description = "lab06 for my WEBD2201 Website";
	$date = "March 12th, 2020";
	$banner = "Lab 06 - Self-referring Form w/ Data Validation";
	$validimg = "./Pictures/lab06valid.PNG";
	include("header.php");

	//variables
	$MAX_ITERATIONS = 35;
	$error = "";
	$output = "";

	
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		$start = "";
		$stop = "";
		$incr = "";
	}else if($_SERVER["REQUEST_METHOD"] == "POST"){
		$start = trim($_POST['start']);
		$stop = trim($_POST['stop']);
		$incr = trim($_POST['incr']);

		//validate start variable
		if(!isset($start) || $start == ""){
			$error .= "You must enter a value in the Start Temperature text box.<br/>";
		}else if(!is_numeric($start)){
			$error .= "The value entered <u>MUST</u> be a number, you entered: " . $num . "<br/>";
			$start = "";
		}

		//validate stop variable
		if(!isset($stop) || $stop == ""){
			$error .= "You must enter a value in the Stop Temperature text box.<br/>";
		}else if(!is_numeric($stop)){
			$error .= "The value entered <u>MUST</u> be a number, you entered: " . $num . "<br/>";
			$stop = "";
		}else if($start >= $stop){
			$error .= "Start value must be lower then stop value<br/>";
			$start = "";
			$stop = "";
		}

		//validate increment variable
		if(!isset($incr) || $incr == ""){
			$error .= "You must enter a value in the Increment Temperature text box.<br/>";
		}else if(!is_numeric($incr)){
			$error .= "The value entered <u>MUST</u> be a number, you entered: " . $num . "<br/>";
			$incr = "";
		}else if($incr <= 0){
			$error .= "You must enter a value greater then zero for increment<br/>";
			$incr = "";
		}

		//make sure table doesnt surpass max iterations
		if(($stop - $start)/$incr > $MAX_ITERATIONS){
			$error .= "There are too many iterations in this table<br/>";
		}

		//if no errors, generate and display table
		if($error == ""){
			$output .= "<table class=\"main temp\">
        	<tr>
        	    <th>Celcius</th>
        	    <th>Fahrenheit</th>
        	</tr>";
			$output .= makeTable($start, $stop, $incr);
			
			
			$output .= "</table>";
			
		}else{
			$error .= "<br/>Please Try Again";

		}

	}
	
?>

<p>
In this web page, I demonstrate the basics of a self-referring form. This includes validation for input and 
numeric values, as well as the use of comparison operators to make sure the values are correct. Once the values 
are correct, a table will be generated that uses the user input.
</p>

<h3><?php echo $error; ?></h3>

<form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post" >
	<table class="main temp">
		<tr class="main">
			<td class="main">
				Starting Temperature: 
			</td>
			<td class="main">
				<input type="text" name="start" value="<?php echo $start; ?>" size="10" />
			</td>
		</tr>
		<tr class="main">
			<td class="main">
				Stop Temperature: 
			</td>
			<td class="main">
				<input type="text" name="stop" value="<?php echo $stop; ?>" size="10" />
			</td>
		</tr>
		<tr class="main">
			<td class="main">
				Temperature Increment: 
			</td>
			<td class="main">
				<input type="text" name="incr" value="<?php echo $incr; ?>" size="10" />
			</td>
		</tr>
		<tr class="main" >
			<td class="main">
				<input type="submit" value="Submit" />
			</td>
		</tr>
	</table>
	<?php echo $output; ?>
</form>
<?php
	include("footer.php");
?>
