<?php require 'common.php' ?>
<!-- Andrew Llewellyn -->
<!-- This is the form for new users -->

<?php

function_alert("That user name is taken.")
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="vertical-center">
	<h2>Username Taken</h2>
	<p>
	Try Another <a style= "color: whitesmoke; font-weight: bold; border-width: 2px; border-style: solid; border-color: red;" href="signup.php"> Signup</a>
	</p>
</div>
</body>
</html>