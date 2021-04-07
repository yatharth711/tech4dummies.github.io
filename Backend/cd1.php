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
            <p class="text-justify" style="margin-left: 100in;"> <h2 style="text-align: center;"><b> HyperText Markup language (HTML) </b></h2>
            <strong>HTML</strong> or <strong>HyperText Markup Language</strong> is a programming language that is a building block for the front-end part of coding and web pages. 
            Thus, this language is very basic and really a good start for basic coding. 
           <br> Hence with these basics, we shall begin with basic coding.</div>
              <hr>
              <div class="container">
              <h2><p style="text-align: center;"><strong>Basics</strong></p></h2>
              <div>
                <div style="text-align: center;"><strong>To begin with let us understand what programming is and what a programming language is and what its functions are in the world of coding</strong></div>
                <br>
                <div><ol>
                    <li>A programming language is the fundamental and a basic of coding which involves mathematical and logical operations to have made tools and programmes</li>
                    <li>Programming languages also include:
                       
                    <ol>
                    <li>Python: is a high-level language that helps in operations of Maths and creating Web-Pages</li>
                    <li>Java: is another complex program which deals with creating programmes and lines which work on very oriented coding</li>
                    <li>JavaScript: is another language that makes the front-end page more dynamic and helps add logic. It is written with HTML</li>
                    <li>C/C++/C#: is one of the first languages which made it easier for developers to code in simple English.</li>
                    <li>PHP: Hypertext Preprocessor is a language that helps to host webpages and other contents.&nbsp;</li>
                    <li>CSS: is another language that helps to make HTML code prettier with help of adding colour and style to your code.</li>
                    </ol>
                    </li>
                    <li>Looking into HTML, we shall start writing code with the basic syntax and make a page with our first code.&nbsp;</li>
                    </ol></div>
                </div>

                <h2><p style="text-align: center;"><strong>Coding</strong></p></h2>
                <br>
                
                <ul>
                  <div class="media-body">
                    <hr>
                    <h4 class="media-heading"><strong>Making a file</strong></h4>
                    <ul>
                        <li style="text-align: left;">The first step with we need to download VS Code, which is an Integrated Development Environment or IDE. You can download VS code from <a href="https://code.visualstudio.com/">https://code.visualstudio.com/</a>&nbsp;</li>
                        <li style="text-align: left;">Let us start with coding.You will get this as your starting screen, so if you notice under the Explorer, there is a plus sign on the page (red circled marked) to make a file and rename this file as index.html</li>
                        
                        </ul>
              
             </div>
                    <div class="media">
                        <div class="media-center">
                          <a href="#">
                            <img style =position: cen="media-object" src="content/VS1.PNG" alt="IP">
                          </a>
                        </div>
                        <hr>
                        <div class="media-body">
                            
                            <h4 class="media-heading"><strong>Writing your first code</strong></h4>
                            <ul>
                                <li style="text-align: left;">To begin with write these lines of code and </a>&nbsp;</li>
                                <li style="text-align: left;">Let us start with coding.You will get this as your starting screen, so if you notice under the Explorer, there is a plus sign on the page (red circled marked) to make a file and rename this file as index.html</li>
                                
                                </ul>
                      
                     </div>
                     <div class="media">
                        <div class="media-center">
                          <a href="#">
                            <img style =position: cen="media-object" src="content/VS2.PNG" alt="IP">
                          </a>
                        </div>
                        
                    </ul>
                    <div class="media-center">
                          <a href="#">
                            <img style =position: cen="media-object" src="content/h2.PNG" alt="IP">
                          </a>
                        </div>
                    <div class="media-body">
                            <hr>
                            <h4 class="media-heading"><strong>HTML elements</strong></h4>
                            <ul>
                              <li style="text-align: left;">Well done! That was a great start on your way to start coding in the field of Computer Sciences. Thus, you saw how coding on the VS code IDE, you were able to make a page that opened on your web browser(Chrome, Safari, Firefox or others).&nbsp;</li>
                              <li style="text-align: left;">This process of writing code and it renders into output is what coding is all about, and now we shall try making this page more interesting by using some of the tools HTML also lets us use. These tools are called "Elements of coding", which include :
                              <ul>
                              <li style="text-align: left;"><strong>Paragraph attributes</strong>
                              <ul>
                              <li style="text-align: left;">&lt;p&gt;: this tag initiates paragraphs in a page</li>
                              <li style="text-align: left;">&lt;div&gt;: this tag is responsible for creating multiple divisions in the page to make it more organized</li>

                              <li style="text-align: left;">&lt;h1&gt;: these are the heading tag, which gives the size to any sort of headings, this ranges from &lt;h1&gt;(being largest) to &lt;h6&gt;(being smallest)</li>
                              <li style="text-align: left;">&lt;strong&gt;: these are tags used to make some content bold&nbsp;</li>
                              <li style="text-align: left;">&lt;i&gt;: these tags make content italics</li>
                              <li style="text-align: left;">&lt;u&gt;: these tags are used for underlining&nbsp;</li>
                              </ul>
                              </li>
                              <li style="text-align: left;"><strong>Links</strong>
                              <ul>
                              <li style="text-align: left;">&lt;a href "something.com"&gt;&lt;/a&gt;: tags which help in adding links to the page</li>
                              <li>&lt;img src ="picture.png"&gt;: are tags used to add images on the page</li>
                              </ul>
                              </li>
                              <li><strong>Lists</strong>
                              <ul>
                              <li style="text-align: left;">&lt;ul&gt;: unordered list tags, which make lists with points instead of numbers</li>
                              <li style="text-align: left;">&lt;ol&gt;: ordered lists tag, which is responsible for the lists with numbers</li>
                              <li style="text-align: left;">&lt;li&gt;: under the &lt;ul&gt; or &lt;ol&gt; tag we put the list items tag where the contents of the list are added&nbsp;</li>
                              </ul>
                              </li>
                              <li style="text-align: left;"><strong>Table</strong>
                              <ul>
                              <li style="text-align: left;">&lt;table&gt;: tag to initiate the table</li>
                              <li style="text-align: left;">&lt;thead&gt;:&nbsp; tag responsible for giving the table a heading and its contents</li>
                              <li style="text-align: left;">&lt;th&gt;: the headings for the content in rows</li>
                              <li style="text-align: left;">&lt;tbody&gt;: this tag initiates the table body and its contents</li>
                              <li style="text-align: left;">&lt;tr&gt;: tag initates a row in the table&nbsp;</li>
                              <li style="text-align: left;">&lt;td&gt; : tag which helps in adding content in the rows&nbsp;</li>
                              </ul>
                              </li>
                              <li><strong>Other elements</strong>
                              <ul>
                              <li style="text-align: left;">&lt;br&gt;: tag creates white space on the page to make it neat</li>
                              <li style="text-align: left;">&lt;hr&gt;: is a tag that makes a line to differentiate the page</li>
                              </ul>
                              </li>
                              </ul>
                              </li>
                              <li style="text-align: left;">Now let us try using these elements on our page. There is a sample page given below. look at how the code is written and try making a similar page with all the new attributes we learnt from above.&nbsp;&nbsp;</li>
                              </ul>
                   
             
                              <pre><code class="language-HTML">
                                &lt;!DOCTYPE html&gt;
                                &lt;html lang="en"&gt;
                                    &lt;head&gt;
                                        &lt;title&gt;HTML Elements&lt;/title&gt;
                                    &lt;/head&gt;
                                    &lt;body&gt;
                                        &lt;!-- We can create headings using h1 to h6 as tags. --&gt;
                                        &lt;h1&gt; Large Heading&lt;/h1&gt;
                                        &lt;h2&gt; Smaller Heading&lt;/h2&gt;
                                        &lt;h6&gt;The Smallest Heading&lt;/h6&gt;
                                
                                        &lt;!-- The strong and i tags give us bold and italics respectively. --&gt;
                                        A &lt;strong&gt;bold&lt;/strong&gt; word and an &lt;i&gt;italicized&lt;/i&gt; word!
                                
                                        &lt;!-- We can insert links by  using a. --&gt;
                                        View the &lt;a href="https://www.wikipedia.org/"&gt;Wikipedia Page &lt;/a&gt;!
                                
                                        &lt;!-- This is how lists are made --&gt;
                                        &lt;div&gt;
                                        An unordered list:
                                        &lt;ul&gt;
                                            &lt;li&gt;item 1&lt;/li&gt;
                                            &lt;li&gt;item 2&lt;/li&gt;
                                            &lt;li&gt;item 3&lt;/li&gt;
                                        &lt;/ul&gt;
                                        An ordered list:
                                        &lt;ol&gt;
                                          &lt;li&gt;item 1&lt;/li&gt;
                                          &lt;li&gt;item 2&lt;/li&gt;
                                          &lt;li&gt;item 3&lt;/li&gt;
                                        &lt;/ol&gt;
                                        &lt;!--- notice the use of div here--!&gt;
                                        &lt;/div&gt;
                                        &lt;!-- For images we use . --&gt;
                                        An image:
                                        &lt;img src="content/logo.png" alt="Tech4Dummies logo"&gt;
                                        &lt;!-- We can also see above that for some elements that don't contain other ones, closing tags are not necessary. --&gt;
                                
                                        &lt;!-- br tags used to make white spaces  --&gt;
                                        &lt;br/&gt; &lt;br/&gt;
                                        &lt;!-- hr tags used to make lines which differentiate the page  --&gt;
                                        &lt;hr/&gt; &lt;hr/&gt;
                                
                                        &lt;!-- A few different tags are necessary to create a table. --&gt;
                                        &lt;h3&gt;Tallest Buildings and where they are &lt;/h3&gt;
                                        &lt;table&gt;
                                            &lt;thead&gt;
                                                &lt;th&gt;Building&lt;/th&gt;
                                                &lt;th&gt;Country&lt;/th&gt;
                                                &lt;th&gt;Height&lt;/th&gt;
                                            &lt;/thead&gt;
                                            &lt;tbody&gt;
                                                &lt;tr&gt;
                                                    &lt;td&gt;Burj Khalifa&lt;/td&gt;
                                                    &lt;td&gt;828 m&lt;/td&gt;
                                                    &lt;td&gt;UAE&lt;/td&gt;
                                                &lt;/tr&gt;
                                                &lt;tr&gt;
                                                    &lt;td&gt;Shanghai Tower&lt;/td&gt;
                                                    &lt;td&gt;632 m&lt;/td&gt;
                                                    &lt;td&gt;China&lt;/td&gt;
                                                &lt;/tr&gt;
                                            &lt;/tbody&gt;
                                        &lt;/table&gt;
                                    &lt;/body&gt;
                                &lt;html&gt;</code></pre>
                      
                                
                     </div>
                     <br><h4>This is what the above code results in </h4>
                     <div class="media">
                      <div class="media-center">
                        <a href="#">
                          <img style =position: cen="media-object" src="content/h3.PNG" alt="IP">
                        </a>
                      </div>   
                  <hr>
                  <ul>
                    <div class="media-body">
                      <hr>
                      <h4 class="media-heading"><strong>With what we have learnt, try making these pages</strong></h4>
                      <ul>
                          <li style="text-align: left;">A page with a table of teh the worlds tallest men, where tehy are from and their birthdays</li>
                          <li style="text-align: left;">Write an article about any topic which you like and add images in to make in intresting  </li>
                          
                          </ul>
                
             <hr>
             
             </div>
                  </ul>

             <footer class="footer" >
              <div class="container">
          <p style="text-align:right;"> <a  href="http://localhost/techTest/Backend/main_quiz.php?quiz=qt_coding1&subject=coding&quiznum=1">Next-></a></p>
              
            </div>           

             </footer>
             <br>
             <hr>
    </BODY>

</HTML>