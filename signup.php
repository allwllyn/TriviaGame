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
	<input type="text" name="password" size="16" />
</li>
  </ul>                      
<input style="margin-left: 45%;" type="submit" value="Sign Up">
</fieldset>
</form>
</div>
</body>
</html>