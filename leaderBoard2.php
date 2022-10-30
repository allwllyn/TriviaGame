<html>
<div class="title">
		<h1>Panther Trivia Leaderboards</h1>
		</div>
<img src="Panther.gif" alt="Computer man" style="width:100px;height:100px;">		
<body>

	
<?php require 'common.php'; ?>

<link rel="stylesheet" type="text/css" href="css/style.css">

<?php


$txtFile = file_get_contents("scores.txt");

$scores = explode("\n", $txtFile);



function createScoresList(){
	global $scores;

	for ($i=0; $i<sizeof($scores); $i++) {
		$scoreData = explode(",", $scores[$i]);
		$score = intval($scoreData[1]);
		$name = $scoreData[0];//why is this undefined -- make sure no blank lines it .txt file
		$scores[$i] = array('score' => $score, 'name' => $name);
	}

	//sort the scores in descending order then take the top 10
	$top = array_column($scores, 'score');
	array_multisort($top, SORT_DESC, $scores);
	$topScores = array_slice($scores, 0);

	return $topScores;

}

function displayLeaderBoard(){
	$topScores = createScoresList();
	for ($i=0; $i < 10; $i++) {
		printMatches($topScores[$i]);
	}

}


function printMatches($scoreData){
	
	?> <div class='leader-board'>
		
		<ul>
			<li><b> <?= $scoreData['name'] ?>  - </b> <?= $scoreData['score'] ?> </li>                      
		</ul>
		</div>

		<?php	
}

?>

<?php displayLeaderBoard(); ?>

