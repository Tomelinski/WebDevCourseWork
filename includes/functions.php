<?php

define("MINIMUM_ID_LENGTH", 5);
define("MAXIMUM_ID_LENGTH", 20);
define("MINIMUM_PASSWORD_LENGTH", 6);
define("MAXIMUM_PASSWORD_LENGTH", 15);
define("MAX_FIRST_NAME_LENGTH", 20);
define("MAX_LAST_NAME_LENGTH", 30);
define("MAXIMUM_EMAIL_LENGTH", 255);

$error ="";
$result="";

function db_connect(){


	$conn = pg_connect("host=127.0.0.01 dbname=zielinskit_db user=zielinskit password=100559389");

    //$conn = pg_connect("host=localhost dbname=postgres user=postgres password=koperwas1963");

    return $conn;
}

function getDataEST(){

    date_default_timezone_set('America/Toronto');

    return date("Y-m-d");
}

function displayCopyrightInfo(){
    $year = date('Y');

	echo "<p>&copy; Tom Zielinski, $year </p>";
}



//This function will be used to validate the username. It takes in one formal parameter (username).
function validateUsername($username){

    $conn = db_connect();

    if($conn){
        $usernameFound = pg_query($conn, "SELECT * FROM users WHERE id = '".$username."'");

	    global $error;
	    if(!isset($username) || $username == ""){

	    	$error .= "Username cannot be empty<br>";
            
	    	 //returns false if the input  does not match the username. 
	    	return false;
	    }
	    else if(strlen($username) < MINIMUM_ID_LENGTH )
	    {
	    	$error .= "Username must be greater then " . MINIMUM_ID_LENGTH ." characters<br>";
        
	    	 //returns false if the input  does not match the username. 
	    	return false;
	    }
	    else if(strlen($username) > MAXIMUM_ID_LENGTH )
	    {
	    	$error .= "Username must be less then " . MAXIMUM_ID_LENGTH ." character<br>";
        
	    	 //returns false if the input  does not match the username. 
	    	return false;
        }
        else if (pg_num_rows($usernameFound))
        {
            $error .= "Username already exists<br>";
        
            //returns false if the input  does not match the username. 
           return false;
        }

	    //returns true if the input (in this case the username) does not comply with the regular expression.

        return true;
    } else{
        $error .= "Failed to connect to databased";
        return false;
    }
}

function validateFirstName($firstName){

	global $error;
	if(!isset($firstName) || $firstName == ""){

		$error .= "First name cannot be empty<br>";
		
		 //returns false if the input  does not match the username. 
		return false;
	}
	else if(strlen($firstame) > MAX_FIRST_NAME_LENGTH )
	{
		$error .= "First name cannot be more then " . MAX_FIRST_NAME_LENGTH ." characters<br>";
		
		 //returns false if the input  does not match the username. 
		return false;
    }
    else if(is_numeric($firstName))
	{
		$error .= "First name cannot be a number<br>";
		
		 //returns false if the input  does not match the username. 
		return false;
	}

	//returns true if the input (in this case the username) does not comply with the regular expression.

	return true;

}

function validateLastName($lastName){

	global $error;
	if(!isset($lastName) || $lastName == ""){

		$error .= "last name cannot be empty<br>";
		
		 //returns false if the input  does not match the username. 
		return false;
	}
	else if(strlen($lastName) > MAX_LAST_NAME_LENGTH )
	{
		$error .= "last name cannot be more then " . MAX_LAST_NAME_LENGTH ." characters<br>";
		
		 //returns false if the input  does not match the username. 
		return false;
	}
	else if(is_numeric($lastName))
	{
		$error .= "last name cannot be a number<br>";
		
		 //returns false if the input  does not match the username. 
		return false;
	}

	//returns true if the input (in this case the username) does not comply with the regular expression.

	return true;

}

//validateEmail function which takes in one fromal parameter ($email).
function validateEmail($email){

	global $error;

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

		 $error .= "Invalid Email <br>";

		return false;
	}

	return true;

}

//validatePassword function which takes in one formal parameter (password). 
function validatePassword($password){

	global $error;	

	if(!isset($password) || $password == ""){

		$error .= "password cannot be empty<br>";
		
		 //returns false if the input  does not match the username. 
		return false;
	}
	else if(strlen($password) < MINIMUM_PASSWORD_LENGTH )
	{
		$error .= "Password must be greater then " . MINIMUM_PASSWORD_LENGTH ." characters<br>";
		
		 //returns false if the input  does not match the username. 
		return false;
    }
	else if(strlen($password) > MAXIMUM_PASSWORD_LENGTH )
	{
		$error .= "Password must be less then " . MAXIMUM_PASSWORD_LENGTH ." character<br>";
		
		 //returns false if the input  does not match the username. 
		return false;
	}

	return true;
}


function validateConfirmPassword($confirmPassword, $password){

	if(strcmp($password, $confirmPassword) !== 0)
	{
		$error .="Confirm password is not the same";
		return false;
	}
	
	return true;
}

?>