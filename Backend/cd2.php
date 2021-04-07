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
            <p class="text-justify" style="margin-left: 100in;"> <h2 style="text-align: center;"><Strong> Cascading Style Sheets (CSS) </Strong></h2>
            <strong>CSS</strong> or <strong>Cascading Style Sheets</strong> is a language which is refernced on a HTML page and helps make the page more beutiful applying color,
            giving allignment to text and contents, putting borders etc. 
           <br> Now we shall add some color and decortion to our page at the start.</div>
              <hr>
              <h2><p style="text-align: center;"><strong>Adding CSS to HTML page</strong></p></h2>
                <br>
                <div class="container">
                <ul>
                  <div class="media-body">
                    
                    <h4 class="media-heading"><strong>Adding style to your basic tag</strong></h4>
                    <ul>
                        <li style="text-align: left;">Now we can add style by adding commands like text-align: center or colour: green.</li>
                        <li style="text-align: left;">Below is an example of how style is added in the tag which makes the text blue&nbsp;&nbsp;</li>
                    </ul>
                  </div></ul>

                    <pre><code class="language-HTML">
                        &lt;!DOCTYPE html&gt;
                        &lt;html lang="en"&gt;
                            &lt;head&gt;
                                &lt;title&gt;CSS&lt;/title&gt;
                            &lt;/head&gt;
                            &lt;body&gt;                                
                                &lt;h1 style ="color:blue,text-align: center"&gt; Hello World &lt;/h1&gt;
                            &lt;/body&gt;
                            &lt;/html&gt;
                                </code></pre>
                                <br>
                                <div class="media-center">
                                    <a href="#">
                                      <img style =position: cen="media-object" src="content/c2.PNG" alt="IP">
                                    </a>
                                  </div>
                            <hr>

                            <div class="media-body">
                    
                                <h4 class="media-heading"><strong>Style attributes </strong></h4>
                                <ul>
                                    <li style="text-align: left;">As we saw that is how we add style to every line of code, this tool is really helpful when you want to add different types of texts or alignments to pictures, graphs, videos.&nbsp;</li>
                                    <li style="text-align: left;">VS-Code helps you give many options in CSS, but these are a few basic attributes one should be aware of CSS:
                                    <ul>
                                    <li style="text-align: left;">colour: helps you choose the colour of your text</li>
                                    <li style="text-align: left;">text-align: aligns your text to the place you want&nbsp;</li>
                                    <li style="text-align: left;">background-colour: which lets you choose a background colour</li>
                                    <li style="text-align: left;">padding: the spacing you give from the border inside the elements</li>
                                    <li style="text-align: left;">font-family: which lets you choose the type of font</li>
                                    <li style="text-align: left;">font-size: the setting the size of texts or fonts by changing the pixels</li>
                                    <li style="text-align: left;">border: which takes the size or colour to put in the border</li>
                                    </ul>
                                    </li>
                                </ul>


                              </div>
                              <hr>
                              <div class="media-body">
                    
                                <h4 class="media-heading"><strong> CSS </strong></h4>
                                <ul>
                                    <li style="text-align: left;">With all the above attributes we can edit pages to make them look prettier and more organized. But, re-using the&nbsp; style factor in all the tags gets repetitive and we have an efficient method to solve this, we can use the &lt;style&gt; tag in the heading page to assign a certain type of element to follow the specified CSS</li>
                                    <li style="text-align: left;">Here we shall try this by adding some CSS to our previously created page, add the &lt;style&gt; tag in the as shown below and also notice how the other elements change with the help of style and CSS</li>
                                    </ul>
                                
                              </div>

                              <pre>
                                  <code class="language-HTML">
                                    
                                    <p>&nbsp;</p>
                                <p><br />&lt;!DOCTYPE html&gt;<br />&lt;html lang="en"&gt;<br />&lt;head&gt;<br />&lt;title&gt;HTML Elements&lt;/title&gt;<br />&lt;style&gt;<br />table, th, td {<br />border: 1px solid black;<br />}<br />&lt;/style&gt;<br />&lt;/head&gt;<br />&lt;body&gt;<br />&lt;!-- We can create headings using h1 to h6 as tags. --&gt;<br />&lt;h1 style="text-align: center;color: blue;"&gt; Large Heading&lt;/h1&gt;<br />&lt;h2 style="text-align: center;background-color: blueviolet;"&gt; Smaller Heading&lt;/h2&gt;<br />&lt;h6 style="text-align: center;"&gt;The Smallest Heading&lt;/h6&gt;</p>
                                <p>&lt;!-- The strong and i tags give us bold and italics respectively. --&gt;<br />A &lt;strong&gt;bold&lt;/strong&gt; word and an &lt;i&gt;italicized&lt;/i&gt; word!</p>
                                <p>&lt;!-- We can insert links by using a. --&gt;<br />View the &lt;a href="https://www.wikipedia.org/"&gt;Wikipedia Page &lt;/a&gt;!</p>
                                <p>&lt;!-- This is how lists are made --&gt;<br />An unordered list:<br />&lt;ul&gt;<br />&lt;li&gt;item 1&lt;/li&gt;<br />&lt;li&gt;item 2&lt;/li&gt;<br />&lt;li&gt;item 3&lt;/li&gt;<br />&lt;/ul&gt;<br />An ordered list:<br />&lt;ol&gt;<br />&lt;li&gt;item 1&lt;/li&gt;<br />&lt;li&gt;item 2&lt;/li&gt;<br />&lt;li&gt;item 3&lt;/li&gt;<br />&lt;/ol&gt;</p>
                                <p>&lt;!-- For images we use . --&gt;<br />An image:<br />&lt;img src="logo.png" alt="Tech4Dummies logo"&gt;<br />&lt;!-- We can also see above that for some elements that don't contain other ones, closing tags are not necessary. --&gt;</p>
                                <p>&lt;!-- br tags used to make white spaces --&gt;<br />&lt;br/&gt; &lt;br/&gt;<br />&lt;!-- hr tags used to make lines which differentiate the page --&gt;<br />&lt;hr/&gt; &lt;hr/&gt;</p>
                                <p>&lt;!-- A few different tags are necessary to create a table. --&gt;<br />&lt;h3&gt;Tallest Buildings and where they are &lt;/h3&gt;<br />&lt;table&gt;<br />&lt;thead&gt;<br />&lt;th&gt;Building&lt;/th&gt;<br />&lt;th&gt;Country&lt;/th&gt;<br />&lt;th&gt;Height&lt;/th&gt;<br />&lt;/thead&gt;<br />&lt;tbody&gt;<br />&lt;tr&gt;<br />&lt;td&gt;Burj Khalifa&lt;/td&gt;<br />&lt;td&gt;828 m&lt;/td&gt;<br />&lt;td&gt;UAE&lt;/td&gt;<br />&lt;/tr&gt;<br />&lt;tr&gt;<br />&lt;td&gt;Shanghai Tower&lt;/td&gt;<br />&lt;td&gt;632 m&lt;/td&gt;<br />&lt;td&gt;China&lt;/td&gt;<br />&lt;/tr&gt;<br />&lt;/tbody&gt;<br />&lt;/table&gt;<br />&lt;/body&gt;<br />&lt;html&gt;</p>
                                                                
                                </code>
                              </pre>
                              <br>
                              <div class="media-center">
                                <a href="#">
                                  <img style =position: cen="media-object" src="content/c3.PNG" alt="IP">
                                </a>
                              </div>
                              <hr>

                              <footer class="footer" >
                                <div class="container">
                            <p style="text-align:right;"> <a  href="http://localhost/techTest/Backend/main_quiz.php?quiz=qt_coding2&subject=coding&quiznum=2">Next-></a></p>
                                
                              </div>           
                  
                               </footer>
                               <br>
                               <hr>
                      </BODY>
                  
                  
                    </div>
                </HTML>