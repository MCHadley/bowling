<?php
include ('config.php');

// RECEIVE INPUT FROM REGISTERATION FORM
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName']; 
$email = $_POST['email'];
$password = $_POST['password'];

// CHECK FOR INPUT
if (!$firstName || !$lastName || !$email || !$password){
    print("Please fill out all information");
    print('<p><a href="registeration-form.php"</a>Return to Registration form</p>');
}
elseif($firstName && $lastName && $email && $password){
    // HASH PASSWORD
    $passSecure = password_hash($password, PASSWORD_DEFAULT);
    // CONNECT TO DATABASE
    $connect = mysqli_connect(SERVER, USER, PW, DB);
        if(!$connect){
            exit('Could not connect to database');
        }
        // DATABASE QUERY
        elseif($connect)
        {
            $userCreate = "INSERT INTO bowlers (email, pass, first_name, last_name) VALUES ('$email', '$passSecure', '$firstName', '$lastName')";

            $result = mysqli_query($connect, $userCreate);

            echo 'Affected rows' .mysqli_affected_rows($connect);
            echo '<p><a href="index.php>Return to Login</a></p>';

            if(!$result){
                print("Could not run the query $userCreate");
            }
        }
}
?>