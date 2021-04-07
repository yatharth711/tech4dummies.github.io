<?php
    //Starting Sessions
    if(!isset($_SESSION)){ 
        session_start(); 
    } 

    //Methods
    
    //SignOut Script
    function signout(){           
        unset ($_SESSION["user"]);
    }

    //Progress Methods 
    function save($r){           //Save Value
        $_SESSION["save"]=$r;
    }

    function unsave(){           //Remove Save
        unset ($_SESSION["save"]);
    }

    //Use In Sign In Page
    function saveWriterQuiz(){
        if (isset($_SESSION['subject']) && isset($_SESSION['quiznum']) && isset($_SESSION['save'])){
            $user=$_SESSION['user'];   
            $quizID=$_SESSION['subject'].$_SESSION['quiznum'] ;
            $score=$_SESSION["save"];
            $sql="UPDATE quiz SET $quizID = $score WHERE uniqueID='".$user->getUID()."'";
            write($sql,1);
        }
    }
?>
<?
    $server= "sql304.epizy.com";
    $username= "epiz_28131792";
    $password= "PjRj3MuyZq";
    $dbname ="epiz_28131792_tech4dums";

    $conn = mysqli_connect($server,$username,$password,$dbname);

    if(!$conn){
        die("Connection Failed".mysqli_connect_error());
    }
<!-- Requires Write.php -->