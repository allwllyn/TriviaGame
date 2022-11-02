<?php require 'common.php' ?>
<?php includeHeader();

//this file initializes the chosen question set in the php session

$questionsFile = file_get_contents("questionsHard.txt");
$optionsFile = file_get_contents("optionsHard.txt");
$answersFile = file_get_contents("answersHard.txt");
$questions = explode("\n", $questionsFile);
$options = explode("\n", $optionsFile);
$answers = explode("\n", $answersFile);
//$userName = $_SESSION['name'];
$_SESSION['options'] = array();
$_SESSION['questions'] = $questions;
$_SESSION['mode'] = 3;

for($i=0;$i<sizeof($options); $i++){

	$_SESSION['options'][$i] = explode(",",$options[$i]);
}


$_SESSION['answers']=$answers;

$_SESSION['score'] = 0;
$_SESSION['counter'] = 0;

header("location:questions.php");
?>