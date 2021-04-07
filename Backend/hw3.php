<?php 
              require 'write.php';
              require 'login_class.php';
              require 'functionality.php';
?>
<HTML>
    <HEAD>
        <TITLE>Internet</TITLE>
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
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Coding<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="cd1.php">Coding Part 1</a></li>
                      <li><a href="main_quiz.php?quiz=qt_coding1&subject=coding&quiznum=1">Coding Quiz 1</a></li>
                      <li><a href="cd2.php">Coding Part 2</a></li>
                      <li><a href="main_quiz.php?quiz=qt_coding2&subject=coding&quiznum=2">Coding Quiz 2</a></li>
                      <li><a href="cd3.php">Coding Part 3 </a></li>
                      <li><a href="main_quiz.php?quiz=qt_coding3&subject=coding&quiznum=3">Coding Quiz 3</a></li>
                    </ul>
                  </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Hardware<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="hw1.php">Hardware Part 1</a></li>
                      <li><a href="main_quiz.php?quiz=qt_hardware1&subject=hardware&quiznum=1">Hardware Quiz 1</a></li>
                      <li><a href="hw2.php">Hardware Part 2</a></li>
                      <li><a href="main_quiz.php?quiz=qt_hardware2&subject=hardware&quiznum=2">Hardware Quiz 2</a></li>
                      <li><a href="hw3.php">Hardware Part 3</a></li>
                      <li><a href="main_quiz.php?quiz=qt_hardware3&subject=hardware&quiznum=3">Hardware Quiz 3</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Internet<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="it1.php">Internet Part 1</a></li>
                      <li><a href="main_quiz.php?quiz=qt_internet1&subject=internet&quiznum=1">Internet Quiz 1</a></li>
                      <li><a href="it2.php">Internet Part 2</a></li>
                      <li><a href="main_quiz.php?quiz=qt_internet2&subject=internet&quiznum=2">Internet Quiz 2</a></li>
                      <li><a href="it3.php">Internet Part 3</a></li>
                      <li><a href="main_quiz.php?quiz=qt_internet3&subject=internet&quiznum=3">Internet Quiz 3</a></li>
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
                  <img alt="Brand" src="./content/h.png">
                </a>Hardware</h1>
              <p style="text-align: center;" class="lead">We learn about the physical components of Computer</p>
            </div>
          </div>
          <hr>
          <div class="container">
          <p><span style="font-weight: 400;">&nbsp;Welcome back to the third lesson on Hardware. This is where things get a little bit difficult so take your time with this lesson and read over it once again when you are done. Without delay, let&rsquo;s begin.&nbsp;</span></p>
<p><span style="font-weight: 400;">From our previous lesson, we learned that your computer is hardwired to perform a few basic operations, remember what a few of them were? They include reading a memory located in a register, sense signals from input/output devices, write a register value to a memory location, and many more. For this next part, if you forgot what the register is, the register is the locations of specialized memory used during execution. For your computer to process instructions it follows the below cycle of operations:&nbsp;</span></p>
<ul>
<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Instruction Fetch (IF) is your computer accessing its memories to retrieve instructions&nbsp;</span></li>
<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Instruction Decode (ID) is when your computer searches for the meaning of the instruction</span></li>
<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Data Fetch (DF) is the computer collecting (fetching) data for instruction</span></li>
<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Instruction Execution (IE) is executing the instruction&nbsp;</span></li>
<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Result Return (RR) is when the computer returns the result to the register&nbsp;</span></li>
</ul>
<p><span style="font-weight: 400;">The program counter (PC) is a special type of register that stores the address of the instruction that is to be</span></p>
<p><span style="font-weight: 400;">executed next. This entire process is known as the Fetch/Execute Cycle. You should also know that the</span></p>
<p><span style="font-weight: 400;">instructions in the memory are encoded in what we call bits.&nbsp;</span></p>
<p><span style="font-weight: 400;">Before we finish this lesson, here are a few important things to know. The speed of a computer in terms of executing a program is dependent on several factors such as:&nbsp;</span></p>
<ul>
<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">CPU speed</span></li>
<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Memory, system bus, and other devices&rsquo; speed</span></li>
<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Characteristics of a certain program&nbsp;</span></li>
<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">And many more</span></li>
</ul>
<p><span style="font-weight: 400;">The speed of your CPU clock is measured using GHz, this refers to the number of instructions that your computer can execute per second. Furthermore, the components of a computer consist of what we call gates and circuits. Gates and circuits control electricity to flow into your computer. The gate is a device performing basic operations on electrical signals. The circuit is essentially a combination of gates that perform complex tasks.&nbsp;</span></p>
<p>&nbsp;</p>
<p><span style="font-weight: 400;">That is all for this hardware lesson. Below is a quiz that will help you check your understanding. Remember, if you find this lesson difficult to understand, try reading the concepts a few times. Good luck!</span></p>
          </div>
          <hr>
          <footer class="footer" >
            <div class="container">
        <p style="text-align:right;"> <a  href="main_quiz.php?quiz=qt_hardware3&subject=hardware&quiznum=3">Next-></a></p>
            
          </div>           

           </footer>
           <br>
           <hr>
  </BODY>


</div>
</HTML>
