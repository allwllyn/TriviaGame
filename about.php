
<?php session_start();

if(!isset($_SESSION['name'])){
  header("location:login.php");
  exit;
}
?>

<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h2>Panther Trivia</h2>
<h2>About</h2>
<div class="about">

 <p> This is a trivia game made entirely with PHP, HTML, and CSS. </p>
 <p> First you must create a login, then select the difficulty setting.</p>
 <p> After this, simply answer the questions and try to get the high score!</p>
</div>
</body>
</html>