<?php
session_start(); // Start session

// Accept login info
if(!empty($_POST['firstName']) || !empty($_POST['lastName']) || !empty($_POST['password'])){   
    $_SESSION['firstName'] = $_POST['firstName'];
    $_SESSION['lastName'] = $_POST['lastName'];
    $_SESSION['password'] = $_POST['password'];
}
else 
    {
        echo("<h1>Please input name</h1>");
        echo('<h2><a href="index.php">Return to login</a></h2>');
    }
    // Create session variables
    $first = $_SESSION['firstName'];
    $last = $_SESSION['lastName'];
    $password = $_SESSION['password'];
    echo("<h1>Welcome</h1>");
    include ('queries.php');


?>