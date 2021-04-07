<?php 
              require 'write.php';
              require 'login_class.php';
              require 'functionality.php';
?>
<HTML>
    <HEAD>
        <TITLE>Hardware</TITLE>
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
            <div style="text-align: left;">
                <p>&nbsp;</p>
                <p>Echo &ldquo;&lt;div&gt; &nbsp;Remember from the first lesson that we learned about CPU, do you remember what it stands for? If you thought of Central Processing Unit then you&rsquo;re absolutely correct. The CPU is the area of the motherboard that receives messages and processes them into specific products. The CPU connects with different input and output devices and main memory with a set of wires on the motherboard known as a system bus. The CPU has several different components, let&rsquo;s have a look at them:</p>
                <ul>
                <li>The control unit is responsible for collecting, decoding and implementing instructions</li>
                <li>Arithmetic/Logic Unit (ALU) carries out mathematical functions and logical operations required for the computer to operate.</li>
                <li>Registers are locations of specialized memory used during executions</li>
                </ul>
                <p>&nbsp;</p>
                <p>The CPU has been hardwired for a certain few basic operations that it can perform, some of these operations include:</p>
                <ul>
                <li>Read a memory located in a register</li>
                <li>Sense signals from input/output devices</li>
                <li>Write a register value to a memory location</li>
                <li>And many more</li>
                </ul>
                <p>&nbsp;</p>
                <p>Let&rsquo;s have a look at memory very quickly and then we will be finished with this lesson. Memory is responsible for storing programs and data. Memory is divided into different locations, each of which has an address (starts at 0 and is a decimal).</p>
                <p>&nbsp;</p>
                <p>That&rsquo;s it for this lesson. As always, here is a small quiz for you to check your understanding. Good luck!</p>
                
                </div>
          </div>
          <hr>
          <footer class="footer" >
            <div class="container">
        <p style="text-align:right;"> <a  href="http://localhost/techTest/Backend/main_quiz.php?quiz=qt_hardware2&subject=hardware&quiznum=2">Next-></a></p>
            
          </div>           

           </footer>
           <br>
           <hr>
  </BODY>


</div>
</HTML>
