
<?php session_start();
require 'common.php';

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
  <a class="menu-item" href="startOptions.php"> Start Game </a> 
  <br/>
  <a class="menu-item" href="leaderBoard.php"> Top Scores </a>
  <br/>
  <a class="menu-item" href="about.php"> About </a>
</div>

<?php includeFooter(); ?>