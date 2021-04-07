<?php 
              require 'write.php';
              require 'login_class.php';
              require 'functionality.php';
?>
<HTML>
    <HEAD>
        <TITLE>Software</TITLE>
        <link rel="stylesheet" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="read.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
        <style>@import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');</style>
       
        
    </HEAD>
    
    <BODY>
      <a class="navbar-brand" href="#">
        <img alt="Brand" src="./content/logo.png">
      </a>
       <a href="main.php"> <div style="font-family: 'Righteous', cursive; font-size: 300%; text-align: center;text-decoration-color: black;"> Tech4Dummies </div></a>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
             
            <ul class="nav navbar-nav">
                <li class="active"><a href="main.php">Home</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Software<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="sw1.php">Software Part 1</a></li>
                    <li><a href="main_quiz.php?quiz=qt_software1&subject=software&quiznum=1">Software Quiz 1</a></li>
                    <li><a href="sw2.php">Software Part 2</a></li>
                    <li><a href="main_quiz.php?quiz=qt_software2&subject=software&quiznum=2">Software Quiz 2</a></li>
                    <li><a href="sw3.php">Software Part 3</a></li>
                    <li><a href="main_quiz.php?quiz=qt_software3&subject=software&quiznum=3">Software Quiz 3</a></li>
                  </ul>
                </li>
                
              </ul>
              <?php if(isset($_SESSION['user'])){
                  echo '<ul class="nav navbar-nav navbar-right"><li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li><li><a href=""><span class="glyphicon glyphicon-user"></span> '.$_SESSION['user']->getName().' </a></li></ul>';

              }else{
              echo'
              <ul class="nav navbar-nav navbar-right">
                <li><a href="logup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>';
              }
              ?>
            </div>
          </nav>
          <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">
                <a class="jumbotron-fluid" href="#">
                  <img alt="Brand" src="./content/s1.png">
                </a>Software</h1>
              <p style="text-align: center;" class="lead">Here we learn about the software and tools with it</p>
            </div>
          </div>
          <hr>
          <div class="container">
          <div style="text-align: left;">
<p><br />Welcome to the lesson on another fundamental, software; if the hardware can be thought of as what you have in your body and how it operates, the software can be thought of as what you learn at home and school. It is instructions that let you know what or how to do something. Software is a broad term referring to a set of different procedures and programs that help your computer perform its tasks. You can see a program as a teacher that teaches the computer&rsquo;s hardware (different body parts) what to do. There are 2 types of software: system software and application software, let&rsquo;s look at both of them.</p>
<p><br />System software (operating system software) controls the internal function of a computer (think of internal human processes like breathing and blood flow). System software will often be created by the manufacturers of your computer. They are written in a language basic enough for the hardware to easily interact with.<br /><br />Application software tells the computer to perform certain actions that are instructed by you. They are often created for specific uses or environments (think of it as the different kinds of clothes you wear for different occasions and weathers).<br /><br />Software is on a memory device which the computer will read from (like when you remember something) and will also place information in RAM; to run a program refers to information being saved and then accessed for use. The software uses algorithms (solutions created for a problem) to perform complex or difficult tasks (think of using a textbook on your exam). This algorithm will be &ldquo;written&rdquo; by developers in a language that your computer&rsquo;s processing system will understand (think of you only understanding the languages you&rsquo;ve learned). Software is written using a higher level of programming language that will be translated into instructions in a language your computer understands., this language is known as binary code.<br /><br />That is all for the fundamentals of the software. As usual, here is a quiz for you to complete to test your knowledge and understanding. Good luck! <br /><br /></p>
</div>
          </div>
          <hr>
          <footer class="footer" >
            <div class="container">
        <p style="text-align:right;"> <a  href="main_quiz.php?quiz=qt_software1&subject=software&quiznum=1">Next-></a></p>
            
          </div>           

           </footer>
           <br>
           <hr>
  </BODY>


</div>
</HTML>
