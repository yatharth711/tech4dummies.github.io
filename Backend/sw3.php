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
                  <img alt="Brand" src="./content/s1.png">
                </a>Software</h1>
              <p style="text-align: center;" class="lead">Here we learn about the software and tools with it</p>
            </div>
          </div>
          <hr>
          <div class="container">
          <div style="text-align: left;">
<p>Hopefully, you enjoyed the first two lectures on software, here is the third one; you learned about the fundamentals of the software, now it&rsquo;s time to look at a specific software called Spreadsheets. The spreadsheet is a program that is used to store and manipulate data that is being represented in a table of cells. Spreadsheets are incredibly useful as they allow a user to organize data and compute results using formulas. Each cell of the table has a row number and a column label that can be combined to represent its &ldquo;address&rdquo; and also a location that stores a number, text, or formula (Chidlow, n.d.).&nbsp;</p>
<p>&nbsp;</p>
<p>A cell can be located by finding its column label (look at the x-axis) and row number (look at the y-axis). Data can be entered into a cell by selecting a specific cell and simply typing in your intended information. Due to their wide use, spreadsheets get new updates frequently with each update intended to improve user experience; one example of how spreadsheets improve user experience is when you enter a piece of data, the spreadsheet automatically tries to detect what data type it is and will attempt to format it. If you would rather manually format your cells, simply go to the top menu of your spreadsheet and select the options you like (bold, italics, underline, etc). Do not just read along, make sure to follow along on spreadsheets as you learn.</p>
<p>&nbsp;</p>
<p>You&rsquo;ve been taught how to enter information into cells and how to format it, now let&rsquo;s learn how to manipulate cells. Select a cell that you had previously entered information into. One of the actions you can take is to delete everything in the cell, to do this, simply press the delete key after selecting the cell or right-click with your mouse and select delete. Another action you can take is to cut/copy and then paste. If you accidentally entered information into the wrong cell, you could cut and paste the information into another cell. Select the cell with the information and then either right-click or press command then X on your keyboard to cut the information. Now select the cell you want to put the information in and click paste or press command then V. If you intend to duplicate the information in a cell, follow the same steps but instead of pressing command then X to cut, press command then C to copy. Additionally, if you want to avoid seeing a column or row, simply hide it by right-clicking on the column or row header and then selecting hide. The column/row is still in your document, but you will not be able to see it unless you unhide it.</p>
<p>&nbsp;</p>
<p>Before we end this lesson, let's learn how to use one of the most useful functions of spreadsheets, formulas. In spreadsheets, a formula is an expression beginning with an equal sign (Chidlow, n.d.). If you would like to complete a calculation and do not want to do it in your brain. First, select an empty cell, then look below the top menu to find a long bar with an f(x) symbol, type in an equal symbol (=) and then hold command before selecting any cells with information in it; once you selected the cells, their address will be shown with a comma separating them, simply replace the comma with your intended operation (+, -, *,) and watch spreadsheets do its magic.</p>
<p>&nbsp;</p>
<p>That is all for your third lesson, make sure to practice the lesson multiple times until you can do it effortlessly. To assist you in your pursuit of computer knowledge, here is a small quiz to check your understanding. Good luck!</p>
<p>&nbsp;</p>
</div>
          </div>
          <hr>
          <footer class="footer" >
            <div class="container">
        <p style="text-align:right;"> <a  href="main_quiz.php?quiz=qt_software3&subject=software&quiznum=3">Next-></a></p>
            
          </div>           

           </footer>
           <br>
           <hr>
  </BODY>


</div>
</HTML>
