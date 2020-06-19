<?php
/*
Tom Zielinski
WEBD2201
April 9th, 2020
*/

//NOTE: we have to include header.php first in order to be able to access functions.php before, you were including it below AFTER you call estCon or db_connect.
include("header.php");

$login="";
$error="";




if($_SERVER['REQUEST_METHOD'] == "POST"){

    //The following three statements get the user input from the HTML form and puts them into the PHP variables as well as uses the trim method to get rid of any whitespace.
    //We can add more validation at this point (e.g., we can use the isset pre-defined function to check if the username has been set or not).

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

	$conn = db_connect();
	//$conn = pg_connect("host=127.0.0.01 dbname=zielinskit_db user=zielinskit password=100559389");

    if($conn){
        $result = pg_query($conn, "SELECT * FROM users WHERE id = '$username' AND password = '$password'");
		$usernameFound = pg_query($conn, "SELECT * FROM users WHERE id = '".$username."'");


    	if(pg_num_rows($result)){
    	    $lastLogin = pg_query($conn, "UPDATE users SET last_access = current_timestamp WHERE id ='".$username."'");
			// I am echoing things below for testing, you can delete it later.
    	    $user_details = pg_fetch_assoc($result);
			
			$firstName=$user_details['first_name'];
			$lastName=$user_details['last_name'];

			$email=$user_details['email_address'];
			
			$lastLog=$user_details['last_access'];
			//I fixed the format of login below.
			$login.="Welcome back " . $firstName . " " . $lastName . "<br/> Our records show that your<br/>email address is: " .  $email . "<br/>and you last accessed our system: " . $lastLog . "<br/>";
			//NOTE: when you use pg_close, you need to pass the connection as a parameter.
			$username = "";
			$password = "";
			pg_close($conn);
		}
		else if(pg_num_rows($usernameFound))
		{
			$error .= "Login/Password not found in the database. Please try again. <br><br> ";
			$password = "";
		}
    	else
    	{
			$error.="Incorrect username or password<br/>";
			$username = "";
			$password = "";
    	}
	}
	else
	{
		$error.="Unable to connect to database";
	}


}


	$title = "Lab 09";
	$file = "lab09.php";
	$description = "Lab 09 page for my WEBD2201 Website";
	$date = "April 9th, 2020";
	$banner = "Lab 09 - User Login Page";
	//Previosuly you were including header.php which requires functions.php AFTER you were calling the connection.
	
?>

	<p class="center">
		This is the lab09 Webpage where I created a user login page. This webpage utalizes functions
		that are in a separate php file, as well as predifined functions such like pg_connect(), pg_close(), pg_num_rows() and pg_query.
		<br/><br/>
		my users SQL file: <a href="./sql/lab9_users.sql">lab9_users.sql</a>
	</p>

    <h1 class="center"> User Login Form </h1>

		<form action="<?PHP $_SERVER['PHP_SELF']; ?>" method = "POST" class="center">

			<h2> <?php echo $error; ?> </h2>
			<h2> <?php echo $login; ?> </h2>

			<table class="main temp">
				<tr class="main">
					<td class="main">
						Username: 
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
						<input type="submit" value="Login">
					</td>
					<td class="main">
						<input type="reset" value = "Reset" />
					</td>

				</tr>
			</table>
		</form>

<?php include("footer.php"); ?>