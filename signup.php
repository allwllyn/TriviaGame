<?php require 'common.php' ?>
<!-- Andrew Llewellyn -->
<!-- This is the form for new users -->

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/loginStyle.css">
</head>
<body>
<div class="center">
		<h1>Panther Trivia</h1>
<form action="signup-submit.php" method="post">
<fieldset>
<legend>New User Signup:</legend>
<ul>
<li>
	<b>Name:</b>
	<input type="text" name="name" size="16" />
</li>
<li>

	<b>Password:</b>
	<input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"size="16" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required/>
</li>
  </ul>                      
<input style="margin-left: 45%;" type="submit" value="Sign Up">

</fieldset>
<p>Note: Must contain at least one number and one uppercase </p>
<p>letter, and at least 6 or more characters</p>

</form>
</div>
</body>
</html>