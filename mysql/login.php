<?php
	//Begin the session
	session_start();
	
	//Include a link to the database connection file
	include("connection.php");
	
	//Set code to sign up user if the sign up submit button is clicked
	if($_POST['submit'] == "Sign Up"){
		//Set up variables for the password and email
		$signUpEmail = $_POST['signUpEmail'];
		$signUpPassword = $_POST['signUpPassword'];
		
		//Validate the form email first making sure it's not blank, second using php's built in validator set up errors if not
		if($signUpEmail == "") $error.= "Please enter an email address to get signed up!<br>";
			else if(!filter_var($signUpEmail, FILTER_VALIDATE_EMAIL)) $error.= "Please enter a valid email address<br>"; 
				
		//Validate the form's password first making sure it isn't blank, set up errors if not
		
		if($signUpPassword == "") $error.= "Please enter a password!";
			//Then to make sure it is at least 8 char long and has 1 uppercase letter set up errors if not
			
		else {
				
				if (strlen($signUpPassword) < 8) $error.= "Please enter a password that is at least 8 characters long!<br>";
				if (preg_match("/[A-Z]/", $signUpPassword) == 0) $error.= "Please use at least 1 uppercase character!<br>";
		}
		//If there are errors, display them
		if($error) print_r($error);
		
		//If everything validates, enter the user into the database 
		if(!$error){
			//Set up a query to check the user's email address
			$query = "SELECT * from `users` WHERE `email` = '".mysqli_real_escape_string($link, $signUpEmail)."' LIMIT 1";
		
			//Get the result of the query			
			$result = mysqli_query($link, $query);
		
			//Store result in an array
			$arrayResults = mysqli_fetch_array($result);
			//Check the result of the query to see if email address is already in use, if so, ask user to log in
			if($arrayResults != ""){
				
				 $error = "That email address is already signed up. Are you trying to sign in? Use the other form!";
				 print_r($error);
				 
			//If the email is not found, enter user's info into the database
			}else{
				//Set up insert query and hash the password in the process using md5 --Need to update to password_hash() at some point--
				$query = "INSERT INTO `users` (`email`, `password`) VALUES('".mysqli_real_escape_string($link, $signUpEmail)."', 
						 '".md5(md5($signUpEmail).$signUpPassword)."')";
				//Run query on the database				
				mysqli_query($link, $query);
				//Message to user about being signed up
				echo "You have been signed up!<br>";
				//assign the user's ID to the session and display, will probably change to name at some point
				$_SESSION['id'] = mysqli_insert_id($link);
				
				echo "Your id is ".$_SESSION['id'];
				
				
				//Redirect user to logged in page.
			
			}
				
		}
				
	}
	
	//If the user clicks the log in submit button, run code to check if they have an account
	if($_POST['submit'] == "Log In"){
		//Set up variables for the password and email
		$loginEmail = $_POST['loginEmail'];
		$loginPassword = $_POST['loginPassword'];
		
		//Set up the query for the database
		$query = "SELECT * FROM `users` WHERE `email` = '".mysqli_real_escape_string($link, $loginEmail)."' AND
					`password` = '".md5(md5($loginEmail).$loginPassword)."' LIMIT 1";
		//Set up a results variable for what is returned from the query
		$result = mysqli_query($link, $query);
		
		//set up error if nothing is returned or if there is something display the user id number
		$row = mysqli_fetch_array($result);
		if($row == "") {	
			$loginError = "Sorry the username and password din't match up, please try again!";
			print_r($loginEmail);
		}
		else{
			$_SESSION['id'] = $row['id'];
			print_r($_SESSION['id']);
		}
			//Redirect user to logged in page
			
	}
?>