<?php

	include("header.php");
	$title = "Lab 10";
	$file = "lab10.php";
	$description = "Lab 10 page for my WEBD2201 Website";
	$date = "April 14th, 2020";
	$banner = "Lab 10 - User Registration Page";



	if($_SERVER['REQUEST_METHOD'] == "POST"){

		
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$confirmPassword = trim($_POST['confirmPassword']);
		
		$firstName = trim($_POST['firstName']);
		$lastName = trim($_POST['lastName']);
		$email = trim($_POST['email']);


		$valid_u = validateUsername($username);
		$valid_p = validatePassword($password);
		$valid_cp = validateConfirmPassword($confirmPassword, $password);

		$valid_f = validateFirstName($firstName);
		$valid_l = validateLastName($lastName);
		$valid_e = validateEmail($email);

		if($valid_u && $valid_p && $valid_cp && $valid_f && $valid_l && $valid_e){

			$conn = db_connect();

			if(!$conn){

				$error .= "Failed to connect to databased";

			}

			$account_created = getDataEST();

			$results = pg_query($conn, "INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) 
				Values('$username', '$password', '$firstName', '$lastName', '$email', '$account_created', '$account_created')");

			if(!results){
				$error .= "Failed to insert to database";
			}
			else
			{
				$result .= "Data has been successfully submitted <br/>";
				pg_close($conn);

				ob_flush();

				header("Location: lab09.php");
			}

		}
		
	}


?>


	<p class="center">
		This is the lab10 Webpage where I created a user registration page, that works with the user login page of lab09.
		This webpage utalizes functions that are in a separate php file, as well as predifined functions such 
		like pg_connect(), pg_close(), pg_num_rows(), pg_query, strlen(), ob_start(), ob_flush() isset(), filter_var() and strcmp().

	</p>


		<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST" class="centerform">

			<h1 class="center"> User Registration Form</h1>

			<h2> <?php echo $error; ?> </h2>
			<h2> <?php echo $result; ?> </h2>


			<table class="main temp">
				<tr class="main">
					<td class="main">
						Login ID: 
					</td>
					<td class="main">
						<input type="text" name = "username" value= "<?php echo @$username; ?>" size="10">
					</td>
				</tr>
				<tr class="main">
					<td class="main">
						Password:
					</td>
					<td class="main">
						<input type="password" name ="password" value = "<?php echo @$password; ?>" size = "10" >
					</td>
				</tr>
				<tr class="main">
					<td class="main">
						Confirm Password:
					</td>
					<td class="main">
						<input type="password" name ="confirmPassword" value = "<?php echo @$confirmPassword; ?>" size = "10" >
					</td>
				</tr>
				<tr class="main">
					<td class="main">
						First Name: 
					</td>
					<td class="main">
						<input type="text" name = "firstName" value= "<?php echo @$firstName; ?>" size="10">
					</td>
				</tr>
				<tr class="main">
					<td class="main">
						Last Name: 
					</td>
					<td class="main">
						<input type="text" name = "lastName" value= "<?php echo @$lastName; ?>" size="10">
					</td>
				</tr>
				<tr class="main">
					<td class="main">
						Email Address: 
					</td>
					<td class="main">
						<input type="text" name = "email" value= "<?php echo @$email; ?>" size="10">
					</td>
				</tr>
				<tr class="main">
					<td class="main">
						<input type="submit" value="Register">
					</td>
					<td class="main">
						<input type="reset" value = "Reset" />
					</td>

				</tr>
			</table>

		</form>
		
<?php include("footer.php"); ?>