
<!-- Andrew Llewellyn -->
<?php require 'common.php' ?>
<?php 

session_start();

/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
	?> <p> Error Invalid Login </p> <?php 
		/* Define username and associated password array */
		/* You can change username and associated password array to your pref*/
		$loginsFile = file_get_contents("logins.txt");
		$loginString = explode("\n", $loginsFile);
		$logins = array();
		for ($i=0; $i < sizeof($loginString); $i++) {
			$credentials = explode(",", $loginString[$i]);
			$logins[$credentials[0]] = $credentials[1];
		};
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['name']) ? $_POST['name'] : '';
		$Password = isset($_POST['password']) ? $_POST['password'] : '';		

		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			?> <p> if logins passed </p> <?php 
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['name']= $Username;
			header("location:index.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Invalid Login Details</span>";
			header("location:invalid.php");
		}
	}

?>