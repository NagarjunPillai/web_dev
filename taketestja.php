<?php
 
session_start(); //Setting the required sessions if not set already
 require 'dbconnect.php';
 require 'setsessionfortest.php';
 $NUMBER_OF_QUESTIONS_TO_BE_ASKED=10;
 
 // if session is not set this will redirect to login page
 if ( !isset($_SESSION['Users'])!="" ) 
{
	$user1=$_SESSION['Users'];
	exit;
}
if($NUMBER_OF_QUESTIONS_TO_BE_ASKED == $_SESSION['count']) {
  header("Location: myscore.php");
  exit;
 }
class FetchQuestion
   {
        function FetchQuestion($receivedQuesNumber, mysqli $scon)
        {
            $result = mysqli_query($scon,"SELECT * FROM questions WHERE qno=".$receivedQuesNumber);
            $quesRow = mysqli_fetch_array($result);
            $this->question = $quesRow['question'];
            $this->op1 = $quesRow['ans1'];
            $this->op2 = $quesRow['ans2'];
            $this->op3 = $quesRow['ans3'];
            $this->op4 = $quesRow['ans4'];
            $this->rightChoice = $quesRow['rightans'];
        }
   }
 
   $qnoCopy=0;  //Do get the question number out of scope
 //if alrdy set, increment the qestion number count
 if( isset($_SESSION['count']) ) 
   {
     if($_SESSION['count'] < $NUMBER_OF_QUESTIONS_TO_BE_ASKED && isset($_POST['submit']))
     {//echo $_SESSION['score'].'-'.$_POST['selectedOpt'].'-'.$_SESSION['questionObject']->rightChoice;
         if($_POST['selectedOpt']==$_SESSION['questionObject']->rightChoice)
         {
             $_SESSION['score']++;//right answer
         }
        $_SESSION['count']++; 
        //randomly generate a ques number
        while (TRUE)
        {
            $flag = 0;
            $qno = rand(51,$_SESSION['totalNoOfQuestionsAvailableInDatabase']);
            //check if qno is asked earlier.. if not, then ask it.. 
            //else generate another qno whichs is not yet asked
            for($i=0 ; $i < count($_SESSION['questionNumbersAskedSoFar']) ; $i++)
            {
                if($qno == $_SESSION['questionNumbersAskedSoFar'][$i])
                {
                    $flag = 1;
                    break;
                }
            }
            if($flag==0)
            {
                $qnoCopy = $qno;
                array_push($_SESSION['questionNumbersAskedSoFar'], $qno);
                $_SESSION['questionObject'] = new FetchQuestion($qno,$scon);
                break;
            }
        }
      }
      else if(!isset($_POST['submit']))
      {
          if($_SESSION['count'] == 1)
          $qnoCopy = rand(51,$_SESSION['totalNoOfQuestionsAvailableInDatabase']);
          $_SESSION['questionObject'] = new FetchQuestion($qnoCopy,$scon);
      }
   }  
 ?>

<html>
    <head>
		<link rel="stylesheet" type="text/css" href="css/style2.css" />


<link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>

		<style>
img {
    opacity: 0.5;
    filter: alpha(opacity=50); /* For IE8 and earlier */
}
</style>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <title>Sjce</title>
        <style>
        body{
            background: url("images/newbg.jpg");  /*Library background*/
            background-size:auto;
            overflow-x: hidden;
        }
        .jumbotron{
            background: rgb(0, 0, 0); /* This is for ie8 and below */
            background: rgba(0, 0, 0, 0.5); 
        }
       </style>
    </head>
	<div class="container" align="right">
	<span id="countdown" class="timer"></span>

	<script>
        var sec=60;
        function secondPassed(){
            var mins= Math.round((sec-30)/60);
            var rem=sec%60;
            if(rem<10){
                rem="0" + rem;    
            }
            document.getElementById('countdown').innerHTML ="00 : " +mins + " : " + rem;
            if(sec==0){
                clearInterval(countdownTimer);
     //document.getElementById('countdown').innerHTML = "Session Expired";
				window.location="myscore.php";
       window.location="index1.php";         
                
            }
            else{
                sec--;
            }
            
        }
        var countdownTimer= setInterval('secondPassed()',1000);
        </script>
	</div>
    <body style="color: white" class="container">
        <h1>Choose the best option </h1>
        <h3>
            <?php echo $_SESSION['count'].'.  ';?> 
            <?php echo $_SESSION['questionObject']->question ;?>
        </h3>
        <h3 class="jumbotron">
            <form action="taketest.php" method="POST">
                <input type="radio" name="selectedOpt" value="<?php echo $_SESSION['questionObject']->op1 ?>" required> <label><?php echo $_SESSION['questionObject']->op1 ?></label><br><br>
                <input type="radio" name="selectedOpt" value="<?php echo $_SESSION['questionObject']->op2 ?>" > <label><?php echo $_SESSION['questionObject']->op2 ?></label><br><br>
                <input type="radio" name="selectedOpt" value="<?php echo $_SESSION['questionObject']->op3 ?>"> <label><?php echo $_SESSION['questionObject']->op3 ?></label><br><br>
                <input type="radio" name="selectedOpt" value="<?php echo $_SESSION['questionObject']->op4 ?>">  <label><?php echo $_SESSION['questionObject']->op4 ?></label><br><br>
                <input type="submit" name="submit" value="Next">
            </form>
        </h3>
    </body>
</html>