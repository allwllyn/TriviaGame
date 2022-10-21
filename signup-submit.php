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
<body>
<div>
<h1>Thank you!</h1>
<p>
Welcome to Panther Trivia, <?= $userName ?>!<br /><br />
Now <a href="returnUser.php">log in to play!>
</p>
</div>
</body>
</html>