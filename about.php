<?php session_start();

if(!isset($_SESSION['name'])){
  header("location:login.php");
  exit;
}
?>

<!DOCTYPE HTML>
<html>
<head>
 <link rel="stylesheet" type ="text/css" href="css/about.css"/></head>
<body>

<h2>About</h2>

 <h1> Project Name: Panther Trivia </h1>
 <h2> Description: This is a question and answer trivia game with three levels of difficulty.</h2>
 <h2> Team Members: </h2>
 <h3> Andrew Llewellyn: </h3>
  <p> PHP Session variables (score, name, questions, answers), question initializing, question display, question styling, menu</p>
 <h3> Natnael Dejene: </h3>
  <p>Login, question content, answer content, question display, About page styling, logout</p>
 <h3> Nasor Clough: </h3>
  <p> UML diagram, leaderboard styling, Powerpoint Slides</p>
<img src="css/about.jpg" alt="Trivia">

</body>
</html>