<?php require 'common.php' ?>


<!-- Andrew Llewellyn -->
<!-- Page that allows allows a returning user to check their matches -->
<html>
<body>
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
<input type="text" name="password" size="16" />
</li>

</ul>
                        
<input name= "Submit" type="submit" value="Submit">
</fieldset>
</form>
<a href="signup.php"> Sign Up </a>
</body>
</html>
