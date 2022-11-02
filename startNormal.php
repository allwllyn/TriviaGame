<?php require 'common.php' ?>
<?php includeHeader();

//this file initializes the chosen question set in the php session

$questionsFile = file_get_contents("questionsNormal.txt");
$optionsFile = file_get_contents("optionsNormal.txt");
$answersFile = file_get_contents("answersNormal.txt");
$questions = explode("\n", $questionsFile);
$options = explode("\n", $optionsFile);
$answers = explode("\n", $answersFile);
//$userName = $_SESSION['name'];
$_SESSION['options'] = array();
$_SESSION['questions'] = $questions;
$_SESSION['mode'] = 2;

for($i=0;$i<sizeof($options); $i++){

	$_SESSION['options'][$i] = explode(",",$options[$i]);
}


$_SESSION['answers']=$answers;

$_SESSION['score'] = 0;
$_SESSION['counter'] = 0;

header("location:questions.php");
?>