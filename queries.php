<?php
<<<<<<< HEAD
    include('config.php');
=======
    include ('config.php');
    session_start(); // Start session
    // CONNECT TO THE DATABASE
>>>>>>> registeration
    $connect = mysqli_connect(SERVER, USER, PW, DB); 
    if (!$connect){
        print("<p>Cannot connect to database</p>");
    }
<<<<<<< HEAD
    // SQL Query
    else {   
        $bowlingQuery = "SELECT first_name, last_name from bowlers WHERE first_name = '$first' AND last_name = '$last'";
=======
    // SQL QUERY
    else {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $bowlingQuery = "SELECT * from bowlers WHERE email = '$email'";
>>>>>>> registeration
        $result = mysqli_query($connect, $bowlingQuery);
        $row = mysqli_fetch_assoc($result);
    }
    // QUERY NOT SUCCESSFUL
    if (!$result){
        exit("<p>Could not run the query, $bowlingQuery</p>");
    }
    
    // NO RESULT FOR QUERY
<<<<<<< HEAD
    elseif(count($row['first_name']) == 0)
=======
    elseif(count($row['email']) == 0)
>>>>>>> registeration
    {
        echo 'No result returned for the query' . $query;
    }

    // PRINT SQL QUERY
    else {
<<<<<<< HEAD
        echo "<p>Hello, ".$row['first_name']. " " .$row['last_name']."</p>";
        echo('<h2><a href="logout.php">Logout</a></h2>');
    }
=======
        $hash = $row['pass'];

                if(password_verify($password, $hash))
                {
                    // success
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['pass'] = $row['pass'];
                    
                    echo '<h1>Welcome</h1>';
                    echo '<p><a href="logout.php">Logout</a>' . " " . $_SESSION['email'] . '</p>';
                    echo '<p><a href="show-bowlers.form.php">Show Bowlers</a></p>';

                }
            else
                    echo "<p>Passwords do not match.</p>";

            }
>>>>>>> registeration
?>