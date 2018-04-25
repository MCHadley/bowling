<?php
include ('queries.php');

// Accept login info
if(empty($_POST['email']) || empty($_POST['password'])){   
   echo 'Please input email and password to login';
   echo('<h2><a href="index.html">Return to login</a></h2>'); 
}
else 
    {
        echo("<h1>Welcome</h1>");
    }
    


?>