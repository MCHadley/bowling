<?php
session_start(); // Start session

// Accept login info
if(!empty($_POST['firstName']) || !empty($_POST['lastName'])){   
    $_SESSION['firstName'] = $_POST['firstName'];
    $_SESSION['lastName'] = $_POST['lastName'];
    // Create session variables
    $first = $_SESSION['firstName'];
    $last = $_SESSION['lastName'];
    echo("<h1>Welcome</h1>");

    // Begin SQL connect/query
    
    include ('config.php');
    $connect = mysqli_connect(SERVER, USER, PW, DB); 
    if (!$connect){
        print("<p>Cannot connect to database</p>");
    }
    // SQL Query
    else {   
        $bowlingQuery = "SELECT first_name, last_name from bowlers WHERE first_name = '$first' AND last_name = '$last'";
        $result = mysqli_query($connect, $bowlingQuery);
    }
    if (!$result){
        exit("<p>Could not run the query, $bowlingQuery</p>");
    }
    // Print SQL Query
    // else {
    //     $row = mysqli_fetch_assoc($result);
    //     echo "<p>Hello, ".$row['first_name']. " " .$row['last_name']."</p>";
    // }


}
// Error if no info in input
else {
    echo("<h1>Please input name</h1>");
    echo('<h2><a href="index.php">Return to login</a></h2>');
}


?>