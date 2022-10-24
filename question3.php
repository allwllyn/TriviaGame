<HTML>
<Head>
    <link rel="stylesheet" type ="text/css" href="easy.css"/>
</head>
<body>
<form action="question3.php" method="post">
<?php
      $myArrayQuestions = array("In which museum can you find Leonardo Da Vinci’s Mona Lisa?","Who was George W. Bush’ vice president?","Which famous inventor invented the telephone?","How many wives had Henry VIII?","What does the Richter scale measure?");
      $choice1 = array("Uffizi Museum",  "British Museum",    "Metropolitan Museum of Art","Le Louvre");
      $choice2 = array("Kamala Harris", "Joe Biden", "Dick Cheney", "Al Gore");
      $choice3 = array("Thomas Edison", "Benjamin Franklin", "Alexander Graham Bell" , "Nikola Tesla");
      $choice4 = array("1", "3", "4" , "6");
      $choice5 = array("Wind Speed", "Temperature" , "Tornado Strength",  "Earthquake intensity");

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

     $_SESSION['Number'] = 0 ;

      // if (!empty($_POST)){
      if ($ans1 == '4') {

         $_SESSION['Number']= $_SESSION['Number']+1;
          $score++;
      }
      if ($ans2 == 'C') {

          $_SESSION['Number']= $_SESSION['Number']+1;
          $score++;
      }
      if ($ans3 == 'G') {

          $_SESSION['Number']= $_SESSION['Number']+1;
          $score++;
      }
      if ($ans4 == 'L') {

          $_SESSION['Number']= $_SESSION['Number']+1;
          $score++;
      }
      if ($ans5 == 'P') {

          $_SESSION['Number']= $_SESSION['Number']+1;
          $score++;
      }
      $Value = $score;

      //  }


      $_SESSION['Number']= $_SESSION['Number']+1;
  }



        ?>

                    <div id="current_que" style="float: left"><?php echo $Value ?></div>
                    <div style="float: left">/</div>
                    <div id="total_que" style="float: left">5</div>



         

</BODY>
    <br><br>
 <input type="submit">


        <br><br>
    <?php

    if($Value >=3  && $Value<5) {
        if (isset($_POST['submit'])) {
            $Score = $_POST["Value"];
        }

        {

            echo "<input type=button class=btn btn-warning value=PLAY-AGAIN load_previous();>";
            echo "<input type=button class=btn btn-success value=Next-Level load_next(); >";
        }
    }

    if($Value=5){
        if (isset($_POST['submit'])) {
            $Score = $_POST["Value"];
        }
        echo "<input type=button class=btn btn-success value=Next-Level load_next(); >";
    }

    ?>







</form>
</HTML>