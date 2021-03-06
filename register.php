<?php
include ('config.php');
include ('functions.php');

// RECEIVE INPUT FROM REGISTERATION FORM
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName']; 
$email = $_POST['email'];
$password = $_POST['password'];

// CHECK FOR INPUT
if (!$firstName || !$lastName || !$email || !$password){
    print("Please fill out all information");
    print('<p><a href="registeration-form.html"</a>Return to Registration form</p>');
}
elseif($firstName && $lastName && $email && $password){
// HASH PASSWORD
    $options = ['cost' => 12, 'salt' => 'helloagainhelloagainhelloagainhelloagainhelloagainhelloagainhelloagainhelloagainhelloagainhelloagainhelloagainhelloagainhelloagainhelloagainhelloagain'
    ];

    $passSecure = password_hash($password, PASSWORD_BCRYPT, $options);
    
// CONNECT TO DATABASE
    $connect = mysqli_connect(SERVER, USER, PW, DB);
        if(!$connect){
            exit('Could not connect to database');
        }
// DATABASE QUERY
        elseif($connect)
        {
            $first_name = dbEscape($connect, $firstName);
            $last_name = dbEscape($connect, $lastName);
            $emailAdd = dbEscape($connect, $email);
            $userCreate = "INSERT INTO bowlers (email, pass, first_name, last_name) VALUES ('$emailAdd', '$passSecure', '$first_name', '$last_name')";

            $result = mysqli_query($connect, $userCreate);

            echo '<p>Affected rows: ' .mysqli_affected_rows($connect).'</p>';
            echo '<p><a href="login.html>Return to Login</a></p>';

            if(!$result){
                print("Could not run the query $userCreate");
            }
        }
}
?>