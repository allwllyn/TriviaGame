<?php require 'common.php' ?>

<!-- Andrew Llewellyn -->
<!-- Submits a new signup -->

<?php
$userName = $_POST["name"];
$userData = $userName;
file_put_contents("logins.txt", "\n".$userData.",".$_POST["password"], FILE_APPEND);
foreach ($_POST as $key => $value) {
	if ($key != "name" && $key != "password"){
		$userData = $userData.",".$value;
	}
}

?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="vertical-center">
	<h1>Thank you!</h1>
	<p>
	Welcome to Panther Trivia, <?= $userName ?>!<br /><br />
	Now <a style= "color: whitesmoke; font-weight: bold; border-width: 2px; border-style: solid; border-color: red;" href="returnUser.php">log in to play!</a>
	</p>
</div>
</body>
</html>