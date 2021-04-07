<?php 
              require 'write.php';
              require 'login_class.php';
              require 'functionality.php';
?>
<HTML>
    <HEAD>
        <TITLE>Coding</TITLE>
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
                  <img alt="Brand" src="./content/cd.png">
                </a>Coding</h1>
              <p style="text-align: center;" class="lead">In this module we shall look into basic coding with the help of HTML and Javascript</p>
            </div>
          </div>
          <div id="title">
            <p class="text-justify" style="margin-left: 100in;"> <h2 style="text-align: center;"><Strong> Javascript (JS) </Strong></h2>
            <strong>Javascript</strong> is a language which is also written on top of HTML and it inlvolves adding logic to HTMl pages
            and helps in making the page more dynamic for the users. 
           <br> In this course we shall touch on basic Javascript syntax and how coding logic is worked with</div>
              <hr>

              <h2><p style="text-align: center;"><strong>Fundamentals of coding </strong></p></h2>
                <br>
                <div class="container">
                <ul>
                  <div class="media-body">
                    
                    <h4 class="media-heading"><strong>What is coding?</strong></h4>
                    <ul>
                        <li style="text-align: left;">Javascript is what gives any page the dynamic factor in it. We can use javascript by initializing the &lt;script&gt; tag where arithmetic, statements, algorithms etc. are written in order to make the website more usable</li>
                        <li style="text-align: left;">Let us start by understanding few fundamentals of coding in Javascript (or any complex language )
                        <ul>
                        <li style="text-align: left;">Writing code is like writing a language, it has few basic terms which help build the language as a whole. Thus, in coding, we call them data types, which give identities to these special storage units in our memory called variables. The following are the main variables:
                        <ul>
                        <li style="text-align: left;">String: used for storing texts and is initialized with double quotations</li>
                        <li style="text-align: left;">int: used for storing integers</li>
                        <li style="text-align: left;">float: used to storing any rational number(decimals, fractions etc.)</li>
                        <li style="text-align: left;">char: mainly stores a specific character, such as letters in the alphabet</li>
                        <li style="text-align: left;">boolean: is used to store two possibilities, true and false</li>
                        <li style="text-align: left;">var: is a variable used in Javascript which automatically assigns your value on the basis of your input. For example, if you initialize a random letter x to be 2, var will assume that you meant 2 to be an int.</li>
                        </ul>
                        </li>
                        <li style="text-align: left;">Programming languages usually run on mathematical operations and logic, which makes them very dependent on maths. Thus, one can perform mathematical operations</li>
                        <li style="text-align: left;">Now, with the understanding that maths plays an important role, let us look into an important aspect of coding called conditional statements
                        <ul>
                        <li style="text-align: left;">"if" condition: it is used when you check to see if you want to apply a condition and want some logic to work. Thus, if condition helps in checking items etc.&nbsp;</li>
                        <li style="text-align: left;">"else if" and "else": these two also perform the same role, but instead work only if the first "if" condition is false</li>
                        </ul>
                        </li>
                        <li style="text-align: left;">Then lastly you have something called loops, as its self-explanatory, loops will play a role in running a logic or algorithm unless the condition present is false<br />
                        <ul>
                        <li style="text-align: left;">"while" loop: a type of which will work constantly unless the condition present in it is false</li>
                        <li style="text-align: left;">"for" loop: is more concise and is more used by people to set certain conditions and helps in iterating or adding numbers by itself much easier</li>
                        </ul>
                        </li>
                        </ul>
                        </li>
                        <li style="text-align: left;">Hence, now we have a basic understanding of coding. Let us now look into coding Javascript and try making a dynamic page.&nbsp;</li>
                        </ul>
                  </div></ul>
                  <br><hr>
                  <h2><p style="text-align: center;"><strong>Creating a basic Javascript webpage</strong></p></h2>
                  <h4 class="media-heading"><strong>Javascript using Script tag</strong></h4>
                    <ul>
                        <pre>
                            <code class="language-HTML">
                                <p>&lt;!DOCTYPE html&gt;<br />&lt;html lang="en"&gt;<br />&lt;head&gt;<br />&lt;title&gt;Hello!&lt;/title&gt;<br />&lt;/head&gt;<br />&lt;body&gt;<br />&lt;h1 style="color: blue; text-align: center;"&gt;Hello World&lt;/h1&gt;<br />&lt;button onclick="distanceFunction()"&gt;Click me to find distance&lt;/button&gt;<br /><br />&lt;/body&gt;</p>
<p>&lt;script&gt;</p>
<p>function distanceFunction(){<br />var A = 9.81;<br />var t = prompt("Please enter a time in seconds");<br />var distanceinMeteres = 0.5* A * t * t;<br />var distanceinFeet = 3.28 * distanceinMeteres;<br />var txt = "You fell for: " + distanceinMeteres + " meters or " + distanceinFeet + " feet.";<br />confirm(txt);</p>
<p>}</p>
<p>&lt;/script&gt;<br />&lt;html&gt;</p>
                            </code>
                        </pre>
                        <div class="media-center">
                            <a href="#">
                              <img style =position: cen="media-object" src="content/c4.PNG" alt="IP">
                            </a>
                          </div>
                          <hr>
                          <div class="media-body">
                            <h2><p style="text-align: center;"><strong>Javascript syntax</strong></p></h2>
                            <ul>
                                <li style="text-align: left;">To find out more about how JavaScript Syntax visit <a href="https://www.w3schools.com/js/js_strings.asp">https://www.w3schools.com/js/js_strings.asp</a></li>
                                </ul>
                            <ul>


                            </ul>
                </div>
                <hr>

                <footer class="footer" >
                  <div class="container">
              <p style="text-align:right;"> <a  href="http://localhost/techTest/Backend/main_quiz.php?quiz=qt_coding3&subject=coding&quiznum=3">Next-></a></p>
                  
                </div>           
    
                 </footer>
                 <br>
                 <hr>
        </BODY>
    
    
      </div>
  </HTML>
                


    