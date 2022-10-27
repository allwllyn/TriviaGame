<?php require 'common.php' ?>


<!-- Andrew Llewellyn -->
<!-- Page that allows allows a returning user to check their matches -->
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/loginStyle.css">
</head>
<body>
	<div class="center">
		<h1>Panther Trivia</h1>
<form action="login.php" method="post">
<fieldset>
<legend>Returning User:</legend>

<ul>
<li>
<b>Name:</b>
<input type="text" name="name" size="16" />
</li>

<li>
<b>Password:</b>
<input type="Password" name="password" size="16" />
</li>

</ul>
                        
<input style="margin-left: 45%;" name="Submit" type="submit" value="Submit">
</fieldset>
</form>
<div class="button-wrap">
<a class="button" href="signup.php"> Sign Up </a>
</div>
</div>

</body>
</html>
