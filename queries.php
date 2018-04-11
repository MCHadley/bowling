<?php
    include ('config.php');
    // CONNECT TO THE DATABASE
    $connect = mysqli_connect(SERVER, USER, PW, DB); 
    if (!$connect){
        print("<p>Cannot connect to database</p>");
    }
    // SQL QUERY
    else {
        $bowlingQuery = "SELECT first_name, last_name, pass from bowlers WHERE first_name = '$first' AND last_name = '$last' AND pass = '$password";
        $result = mysqli_query($connect, $bowlingQuery);
        $row = mysqli_fetch_assoc($result);
    }
    // QUERY NOT SUCCESSFUL
    if (!$result){
        exit("<p>Could not run the query, $bowlingQuery</p>");
    }
    
    // NO RESULT FOR QUERY
    elseif(count($row['first_name']) == 0)
    {
        echo 'No result returned for the query' . $query;
    }

    // PRINT SQL QUERY
    else {
        echo "<p>Hello, ".$row['first_name']. " " .$row['last_name']."</p>";
        echo('<h2><a href="logout.php">Logout</a></h2>');
    }
?>