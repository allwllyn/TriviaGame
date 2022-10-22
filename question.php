<?php session_start(); ?>
<HTML>
<Head>
    <link rel="stylesheet" type ="text/css" href="easy.css"/>

</head>
<form action="question.php" method="post">
  

<body>

<?php
      $myArrayQuestions = array("How many planets are in our solar system?","Who is the first female pilot?","Where was the first olympic held?","Who was the first player to hit a home run in the All-Star game of 1933?","Name the only planet to spin clockwise?");
      $choice1 = array("8","12","6","4");
      $choice2 = array("Bessie Coleman", "Harriet Quimby", "Amelia Earhart", "Raymonde de Laroche");
      $choice3 = array("china","Germany","Poland","Greece");
      $choice4 = array("Willie Mays","Babe Ruth","Hank Aaron","Barry Bond");
      $choice5 = array("mars","Jupiter","Earth","Venus");

      ?>

<div class="row" style="...">
    <div class ="col-lg-6 col-lg-push-3" style="...">
        <p> <?php echo $myArrayQuestions[0]?></p>
        <ol type="A"  >
            <li> <input name="choice" type="radio" value="1"/> <?php echo $choice1[0] ?> </li>
            <li> <input name="choice" type="radio" value="2"/><?php echo $choice1[1] ?></li>
            <li> <input name="choice" type="radio" value="3" /><?php echo $choice1[2] ?> </li>
            <li> <input name="choice" type="radio" value="4"/><?php echo $choice1[3] ?> </li>


        </ol>
        <br>
        <div class="row">
            <p> <?php echo $myArrayQuestions[1]?></p>
            <ol type="A"  >
            <li> <input name="choice2" type="radio" value="A"/><?php echo $choice2[0] ?></li>
            <li> <input name="choice2" type="radio" value="B"/><?php echo $choice2[1] ?></li>
            <li> <input name="choice2" type="radio" value="C" /><?php echo $choice2[2] ?></li>
            <li> <input name="choice2" type="radio" value="D"/><?php echo $choice2[3] ?> </li>
            </ol>
            <br>
            <div class="col-lg-2 col-lg-push-10">
                <p><?php echo $myArrayQuestions[2]?> </p>
                <ol type="A"  >
                <li> <input name="choice3" type="radio" value="E"><?php echo $choice3[0] ?> </li>
                <li> <input name="choice3" type="radio" value="F"/><?php echo $choice3[1] ?> </li>
                <li> <input name="choice3" type="radio" value="G" /><?php echo $choice3[2] ?></li>
                <li> <input name="choice3" type="radio" value="H"/><?php echo $choice3[3] ?></li>
                </ol>
            </div>

            <div class="row" style="margin-top: 30px">

                <div class="row">
                    <br>
                    <p><?php echo $myArrayQuestions[3]?></p>
                    <ol type="A"  >
                    <li> <input name="choice4" type="radio" value="I"/><?php echo $choice4[0] ?></li>
                    <li> <input name="choice4" type="radio" value="J"/><?php echo $choice4[1] ?> </li>
                    <li> <input name="choice4" type="radio" value="K" /><?php echo $choice4[2] ?> </li>
                    <li> <input name="choice4" type="radio" value="L"/><?php echo $choice4[3] ?></li>
                    </ol>
                    <div class="col-lg-10 col-lg-push-1" style="min-height: 300px" id="load_questions">
                        <br>
                        <p><?php echo $myArrayQuestions[4]?></p>
                        <ol type="A"  >
                        <li> <input name="choice5" type="radio" value="M"/><?php echo $choice5[0] ?> </li>
                        <li> <input name="choice5" type="radio" value="N"/><?php echo $choice5[1] ?> </li>
                        <li> <input name="choice5" type="radio" value="O" /><?php echo $choice5[2] ?></li>
                        <li> <input name="choice5" type="radio" value="P"/><?php echo $choice5[3] ?></li>
                        </ol>
                    </div>
                </div>

            </div>
        <?php
        $Value = 0;
  if ($_POST) {
      $ans1 = $_POST['choice'];
      $ans2 = $_POST['choice2'];
      $ans3 = $_POST['choice3'];
      $ans4 = $_POST['choice4'];
      $ans5 = $_POST['choice5'];
      $score = 0;

      // if (!empty($_POST)){
      if ($ans1 == '1') {
          $score++;
      }
      if ($ans2 == 'C') {
          $score++;
      }
      if ($ans3 == 'H') {
          $score++;
      }
      if ($ans4 == 'J') {
          $score++;
      }
      if ($ans5 == 'P') {
          $score++;
      }
      $Value = $score;
      //  }
  }
        ?>

                    <div id="current_que" style="float: left"><?php echo $Value ?></div>
                    <div style="float: left">/</div>
                    <div id="total_que" style="float: left">5</div>


</BODY>
    <br><br>
 <input type="submit">

    <form action="question.php" method="post">
        <br><br>
    <?php  if($Value >=3  && $Value<5) {
        echo "<input type=button class=btn btn-warning value=PLAY-AGAIN load_previous();>";
        echo "<input type=button class=btn btn-success value=Next-Level load_next(); >";
    }

    ?>

    </form>





</form>
</HTML>