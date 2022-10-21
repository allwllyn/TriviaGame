
<?php session_start();
require 'common.php' ?>

<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="image"></div>
<h1>Game Over</h1>
<div class="menu">
  <a class="menu-item" href="startEasy.php">Play Again?</a>
  <br/>
  <a class="menu-item" href="index.php">Home</a>  
  <br/>
</div>

<?php includeFooter(); ?>