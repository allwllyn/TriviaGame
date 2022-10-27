<?php require 'common.php' ?>
<?php includeHeader();


/* Check Login form submitted */	
	if(isset($_POST['submission'])){
		
	
		/* Check and assign submitted answer to new variable */
		$answer = isset($_POST['answer']) ? $_POST['answer'] : '';
		
		/* Check answer */		
		if ($answer == $_SESSION['answers'][$_SESSION['counter']]){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['score'] = $_SESSION['score'] + 5;
			$_SESSION['counter'] = $_SESSION['counter'] +1;


			if($_SESSION['counter'] >= (sizeof($_SESSION['questions'])) )
			{
				unset($_POST['submission']);
				header("location:gameover.php");
				exit;
			}
			else
			{
				unset($_POST['submission']);
				header("location:questions.php");
				exit;
			}	
			
		} 
		else {
			$_SESSION['counter'] = $_SESSION['counter'] +1;
			if($_SESSION['counter'] >= (sizeof($_SESSION['questions'])) )
			{
				unset($_POST['submission']);
				header("location:gameover.php");
				exit;
			}
			else
			{
				unset($_POST['submission']);
				header("location:questions.php");
				exit;
			}	
		}
	}
?>


	<div class="spinner"><img class="pantherhead" src="css/panther.png" alt="Panther"></div>
	<div class="trivia-question">
		<h2><?= $_SESSION['questions'][$_SESSION['counter']]?></h2>
	<form action="" method="post" name="question_form">
		<input type="radio" name="answer" value="<?= $_SESSION['options'][$_SESSION['counter']][0]?>" />
		<label for="optionOne"><?= $_SESSION['options'][$_SESSION['counter']][0]?></label>
		<br/>
		<input type="radio" name="answer" value="<?= $_SESSION['options'][$_SESSION['counter']][1]?>" />
		<label for="optionTwo"><?= $_SESSION['options'][$_SESSION['counter']][1]?></label>
		<br/>
		<input type="radio" name="answer" value="<?= $_SESSION['options'][$_SESSION['counter']][2]?>" />
		<label for="optionThree"><?= $_SESSION['options'][$_SESSION['counter']][2]?></label>
		<br/>
		<input type="radio" name="answer" value=<?= $_SESSION['options'][$_SESSION['counter']][3]?> />
		<label for="optionFour"><?= $_SESSION['options'][$_SESSION['counter']][3]?></label>
		<br/>
		<br/>
		<input name="submission" type="submit" value="Submit">
	</form>
	</div>
	<?php includeFooter();?>
