<?php
    include ('config.php');
    $connect = mysqli_connect(SERVER, USER, PW, DB); 
    if (!$connect){
        print("<p>Cannot connect to database</p>");
    }
    // SQL Query
    else {   
        $bowlingQuery = "SELECT first_name, last_name from bowlers WHERE first_name = '$first' AND last_name = '$last'";
        $result = mysqli_query($connect, $bowlingQuery);
        $row = mysqli_fetch_assoc($result);
    }
    if (!$result){
        exit("<p>Could not run the query, $bowlingQuery</p>");
    }
    

    elseif(count($row['first_name']) == 0)
    {
        echo 'No result returned for the query' . $query;
    }

    // Print SQL Query
    else {
        echo "<p>Hello, ".$row['first_name']. " " .$row['last_name']."</p>";
        echo('<h2><a href="logout.php">Logout</a></h2>');
    }
?>