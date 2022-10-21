
<?php session_start();

if(!isset($_SESSION['name'])){
  header("location:returnUser.php");
  exit;
}
?>

<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="menuStyle.css">
</head>
<body>
<div class="image"></div>
<h1>Panther Trivia Adventure</h1>
<div class="menu">
  <a class="menu-item" href="startEasy.php">Easy</a> 
  <br/>
  <a class="menu-item" href="startEasy.php">Normal</a>
  <br/>
  <a class="menu-item" href="startEasy.php">Hard</a>
</div>
</body>
</html>