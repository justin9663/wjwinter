<?php
	//Begin the session
	
	//Include a link to the database connection file
	
	//Set code to sign up user if the sign up submit button is clicked
		//Set up variables for the password and email
		
		//Validate the form email first making sure it's not blank, second using php's built in validator set up errors if not
				
		//Validate the form's password first making sure it isn't blank, set up errors if not
		
			//Then to make sure it is at least 8 char long and has 1 uppercase letter set up errors if not
			
		//If there are errors, display them
		
		//If everything validates, check the user's email to make sure it isn't already registered
		
			//Set up a query to check the user's email address
		
			//Get the result of the query			
		
			//Store result in an array
		
			//Check the result of the query to see if email address is already in use, if so, ask user to log in
		
			//If the email is not found, enter user's info into the database
		
				//Set up insert query and hash the password in the process using md5 --Need to update to password_hash() at some point--
				
				//Run query on the database				
				
				//Message to user about being signed up
				
				//assign the user's ID to the session and display, will probably change to name at some point
				
				
				//Redirect user to logged in page.
			
	
	//If the user clicks the log in submit button, run code to check if they have an account

		//Set up variables for the password and email
		
		//Set up the query for the database

		//Set up a results variable for what is returned from the query
		
		//set up error if nothing is returned or if there is something display the user id number

			//Redirect user to logged in page
?>