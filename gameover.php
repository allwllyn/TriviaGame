
<?php require 'common.php';
includeHeader();
file_put_contents("scores.txt", "\n".$_SESSION['name'].",".$_SESSION['score'], FILE_APPEND);?>

<div class="center">
  <div class="title">
  <h1>Game Over</h1>
  </div>
</div>
<div class="button-wrap">
  <a class="button" href="index.php">Home</a>  
</div>


<?php includeFooter(); ?>