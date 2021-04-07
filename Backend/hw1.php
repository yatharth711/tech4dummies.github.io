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
<p>Welcome to the first session of your new life, once you&rsquo;ve completed the course, you will be in a world surrounded by unlimited opportunities created by the internet, which will soon be in your disposal. To start off this new chapter, let us start by learning about one of the foundational topics in computer science, hardware.</p>
<p>&nbsp;</p>
<p>Hardware refers to the physical components of a computer (similar to body parts that humans have). It helps you provide your computer with instructions for certain tasks. Computer hardware could be internal (inside) and external (outside). Internal hardware includes the CPU, hard disk, motherboard, etc. External hardware includes a keyboard for typing, a mouse for selecting things, a monitor for display, etc. External hardware is often what you would see connected to the computer (like the earphones you may be using now).</p>
<p>&nbsp;</p>
<p>Let&rsquo;s look at some specific internal hardware pieces; the Motherboard to a computer is like a brain to the body. It is connected to every part of the computer and sends and receives messages to and from the different parts. The motherboard, like how the brain has different areas) contains areas such as the CPU and RAM.&nbsp;</p>
<ul>
<li>CPU (Central Processing Unit) is the area of the motherboard that receives messages and processes them into specific products. CPU&rsquo;s speed, the speed at which information is processed in the CPU, is measured in gigahertz (GHz). The faster the GHz, the faster your CPU processes information.</li>
<li>RAM (Random Access Memory) can be seen as the memory storage of vital applications. Many of the applications on your computer (Microsoft Word, Paint, etc) are stored here for easy and quick access. RAM is what we call volatile, information is stored when the computer is on, when the computer is turned off by you, that information will be gone. When you reboot your computer for use again, the information inside the RAM will be reloaded back on.</li>
</ul>
<p>Another unit, the HDD (Hard-disk Drive) is a nonvolatile memory. It stores your documents, movies, songs, etc and stores information permanently. The GPU (Graphing Processing Unit) creates the graphics that you are seeing now.</p>
<p>Let&rsquo;s now look at some specific external hardware pieces; the Display screen is what lets you watch this video. It is the screen right in front of you. Many of the phones made these days are touchscreen, meaning instead of operating with a mouse, you can use your finger to select and perform different functions. The PSU (Power Supply Unit) is what gives your computer power to operate. Power from electricity is brought from the charging cable plugged into your computer, this power is then provided to the motherboard which will individually supply different hardware components with power. With enough power, components will not function and your computer may not perform its tasks. The Removable Drives can be seen as extra memory space. They are devices like a USB that are plugged in (remember external hardware) to give your computer extra space to store information</p>
<p>Before we finish off, here are some important information to know</p>
<ul>
<li>It&rsquo;s important to note that, especially in this day and age, that just like your body, hardware can be damaged by computer viruses and different kinds of software.</li>
<li>Auxiliary Hardware is used for 3 functions: data storage, input &amp; output. An adapter will help connect one type of hardware to communicate with a different piece.</li>
<li>Hardware to limited to the tasks it's designed to do</li>
</ul>
<p>&nbsp;</p>
<p>Hope you enjoyed learning about hardware just as much as I did, here is a small quiz to test what you have learned. I recommend reading the content over once again before doing the quiz. Good luck!</p>
<p>&nbsp;</p>
</div>
          </div>
          <hr>
          <footer class="footer" >
            <div class="container">
        <p style="text-align:right;"> <a  href="main_quiz.php?quiz=qt_hardware1&subject=hardware&quiznum=1">Next-></a></p>
            
          </div>           

           </footer>
           <br>
           <hr>
  </BODY>


</div>
</HTML>
