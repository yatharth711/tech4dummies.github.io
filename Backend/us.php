<?php 
              require 'write.php';
              require 'login_class.php';
              require 'functionality.php';
?>
<HTML>
    <HEAD>
        <TITLE>About Us</TITLE>
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
                  <img alt="Brand" src="./content/logo.png">
                </a>About Us and References</h1>
              <p style="text-align: center;" class="lead">We are three college kids, just trying to let people know the world of Computer Sciences</p>
            </div>
          </div>
          <hr>
          <div class="container">
            <div id="title">
                <p class="text-justify" style="margin-left: 100in;"> <h2 style="text-align: center;"><b> Who are we?</b></h2>
                <p style="text-align: left;">Tech4Dummies is a project passionately created by 3 University of British Columbia students to help educate the general public about our current technology. There was an understanding between the creators that the way for society to advance in the future would be by everyone understanding and utilizing the full potential of technology and embracing the opportunities it creates. We were fortunate enough to learn about computers at school or have the resources to learn on our own, Tech4Dummies is how we intend to let everyone else have the same opportunities as us to understand and use computers and the internet.

                    At its current stage, Tech4Dummies is still in a work-in-progress stage with many more additions and improvements planned. The end product, as intended by us, is to provide Tech4Dummies users with lessons that creates a solid understanding of the fundamentals. We are optimistic about the future of the project and hope to help people grasp the future. Below is a little about the people behind this idea:</p>
                </div>
                <div> 
                    <h2><p style="text-align: center;"><strong><u>The Minds behind</strong></u></p></h2>
                    
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="content/a.png" alt="Communicationimg">
                        </a>
                      </div>
                      
                      <div class="media-body">
                          <h4 class="media-heading"><strong>Akhil Satish Nair, Head of Research and Courses </strong></h4>
                          <ul>
                           <p>
                            I'm currently pursuing a Bachelor's of Management at the University of British Columbia Okanagan. Although I am a Business student, I am aware about the potential of computer science in our present and future society and also find it interesting, this is why I decided to help with this project as I am sure it will not only help me learn more about computers but I will also be able to make a genuine effort to help people around the world. The 3 of us were very fortunate to have the privileges we have and we wanted to make sure we can help the less fortunate acquire the same privelleges through the powers of the computer and the digital world. Although I was not able to contribute a significant amount to the development of the website, I still put in my best effort with the lessons and hope that it will help people with their lives as well as spark an interest in computer science.
                           </p>
                          </ul>
                    
                </div>
                <hr>
                <div>
                    <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="content/c.png" alt="Communicationimg">
                          </a>
                        </div>
                        
                        <div class="media-body">
                            <h4 class="media-heading"><strong>Chris Grace, Head of Back-end Engineering</strong></h4>
                            <ul>
                             <p>
                                I am a student at the University Of British Columbia Okanagan. I’m majoring in computer science because I enjoy coding and developing software, something which has helped me in creating this website. I worked primarily on the back end of the website using my knowledge of coding in PHP and JS. I’m satisfied with the end result of the beta we’ve created and hope to further enhance it.
                             </p>
                            </ul>
                </div>
                <hr>
                <div>
                    <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="content/y.png" alt="Communicationimg">
                          </a>
                        </div>
                        
                        <div class="media-body">
                            <h4 class="media-heading"><strong>Yatharth Mathur, Head of Front-end Engineering</strong></h4>
                            <ul>
                                <p>I am currently an undergraduate student from the University of British Columbia, and I am majoring in Computer Science, with a minor in Data Sciences. Computer Science is a fascinating subject, which I was introduced to last year. It changed my mindset and really helped me think in a more logical way. With this thought, I always felt people need to at least know what computer sciences really is and how it is not as complicated as it feels like. This website is a platform that teaches you the basics of Computer Sciences in laymen's terms, which allows everyone an opportunity to understand and live through this subject. I hope you liked the course and would love to hear from you.&nbsp;</p>
                            </ul>
                </div>
                
          </div>
          <hr>
          <div class="container">
            <p class="text-justify" style="margin-left: 100in;"> <h2 style="text-align: center;"><b> References</b></h2>
              <ul>
                <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Computer&mdash;Software&mdash;Tutorialspoint. (n.d.). Retrieved February 22, 2021, from </span><a href="https://www.tutorialspoint.com/computer_fundamentals/computer_software.html"><span style="font-weight: 400;">https://www.tutorialspoint.com/computer_fundamentals/computer_software.html</span></a></li>
                <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Introduction to Computers: Hardware and Software. (n.d.). Retrieved February 22, 2021, from</span> <a href="http://cs.sru.edu/~mullins/cpsc100book/module02_introduction/module02-03_introduction.html"><span>http://cs.sru.edu/~mullins/cpsc100book/module02_introduction/module02-03_introduction.html</span></a></li>
                <li>Software | Definition, Types, &amp; Facts. (n.d.). Encyclopedia Britannica. Retrieved February 22,</li>
                <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">2021, from </span><a href="https://www.britannica.com/technology/software"><span style="font-weight: 400;">https://www.britannica.com/technology/software</span></a></li>
                <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">What is Software? (n.d.). Retrieved February 22, 2021, from </span><span><a href="https://www.computerhope.com/jargon/s/software.htm">https://www.computerhope.com/jargon/s/software.htm</a></span></li>
                <li style="font-weight: 400;" aria-level="1">
                <p><span style="font-weight: 400;">Chidlow, K. (n.d.). </span><em><span style="font-weight: 400;">Computer Organization</span></em><span style="font-weight: 400;">.</span></p>
                </li>
                <li><span style="font-weight: 400;">Computer&mdash;Hardware&mdash;Tutorialspoint. (n.d.). Retrieved February 22, 2021, from </span><a href="https://www.tutorialspoint.com/computer_fundamentals/computer_hardware.htm"><span style="font-weight: 400;">https://www.tutorialspoint.com/computer_fundamentals/computer_hardware.htm</span></a></li>
                </ul>
                <ul>
                <li><span style="font-weight: 400;">Introduction to Computers: Hardware and Software. (n.d.). Retrieved February 22, 2021, from</span><a href="http://cs.sru.edu/~mullins/cpsc100book/module02_introduction/module02-03_introduction.html"><span>http://cs.sru.edu/~mullins/cpsc100book/module02_introduction/module02-03_introduction.html</span></a></li>
                </ul>
                <ul>
                <li><span style="font-weight: 400;">What is Computer Hardware? Everything You Need To Know. (n.d.). SearchNetworking.</span><span style="font-weight: 400;">Retrieved February 22, 2021, from </span><span style="font-weight: 400;"><a href="https://searchnetworking.techtarget.com/definition/hardware">https://searchnetworking.techtarget.com/definition/hardware</a></span></li>
                <li><span style="font-weight: 400;">What is Software? (n.d.). Retrieved February 22, 2021, from<br /><a href="https://www.computerhope.com/jargon/s/software.htm">https://www.computerhope.com/jargon/s/software.htm</a></span></li>
                <li>
                <p>Malan, D. (n.d.). <em>Harvard&rsquo;s CS50</em>. CS50 Webpage. Retrieved April 8, 2021, from <a href="https://cs50.harvard.edu/web">https://cs50.harvard.edu/web</a></p>
                </li>
                </ul>
                <p><span style="font-weight: 400;"><br /><br /></span></p>
          </div>