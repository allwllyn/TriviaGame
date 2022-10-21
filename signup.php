<?php require 'common.php' ?>
<html>
<head>
	
</head>
<body>

<!-- Andrew Llewellyn -->
<!-- This is the form for new users -->

<form action="signup-submit.php" method="post">
<fieldset>
<legend>New User Signup:</legend>

<ul>
<li>
<b>Name:</b>
<input type="text" name="name" size="16" />
</li>

</ul>

<li>
<b>Password:</b>
<input type="text" name="password" size="16" />
</li>
                        
<input type="submit" value="Sign Up">
</fieldset>
</form>

</body>
</html>