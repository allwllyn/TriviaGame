
<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Panther Trivia</title>
</head>
<body>
	<div class="gsu-image"></div>
	<div class="left">
	
	<div class="title">
		<h1>Panther Trivia</h1>
	</div>
	<div class="score">
		<h3>Current Score: <?= $_SESSION['score'] ?></h3>
	</div>
</div>
	<br/>
	<br/>
	<br/>


