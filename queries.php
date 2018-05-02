<?php
    include ('config.php');
    session_start(); // Start session
    // CONNECT TO THE DATABASE
    $connect = mysqli_connect(SERVER, USER, PW, DB); 
    if (!$connect){
        print("<p>Cannot connect to database</p>");
    }
    // SQL QUERY
    else {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $bowlingQuery = "SELECT * from bowlers WHERE email = '$email'";
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
        echo "<h1>Hello, ".$row['first_name']. " " .$row['last_name']."</h1>";
    }
        $hash = $row['pass'];

                if(password_verify($password, $hash))
                {
                    // success
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['pass'] = $row['pass'];
                    
                    echo '<p><a href="logout.php">Logout</a>' . " " . $_SESSION['email'] . '</p>';
                    echo '<p><a href="show-bowlers.form.php">Show Bowlers</a></p>';

                }
            else
                    echo "<p>Passwords do not match.</p>";
?>