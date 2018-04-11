<?php
// DATABASE CONNECTION
include ('config.php');
// include ('inc-person-class.php');
// END DATABASE CONNECTION

// RECIEVE INPUT FROM REGISTERATION FORM
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName']; 
$email = $_POST['email'];
$password = $_POST['password'];

// $bowler = new Bowler();

// $bowler->setfirstName($firstName);
// $bowler->setlastName($lastName);
// $bowler->setemail($email);
// $bowler->setpassword($password);

// CHECK FOR INPUT
if(!$firstName)
{
    print('<h1>Your first name is required. Please go back and fill out the form correctly.</h1>');
    echo('<p><a href="registeration-form.php">Go back</a></p>');
}
if(!$lastName)
{
    print('<h1>Your last name is required. Please go back and fill out the form correctly.</h1>');
    echo('<p><a href="registeration-form.php">Go back</a></p>');
}
if(!$email)
{
    print('<h1>Your email is required. Please go back and fill out the form correctly.</h1>');
    echo('<p><a href="registeration-form.php">Go back</a></p>');
}
if(!$password)
{
    print('<h1>A password is required. Please go back and fill out the form correctly.</h1>');
    echo('<p><a href="registeration-form.php">Go back</a></p>');
}

// PASSWORD HASHING
$passSecure = password_hash($password, PASSWORD_DEFAULT);

// DATABASE QUERY
if(!$firstName || !$lastName || !$email || !$password)
{
    echo '<p>Fill out form please</p>';
    echo('<p><a href="registeration-form.php">Go back</a></p>');
}
else {
    $connect = mysqli_connect(SERVER, USER, PW, DB); 

if (!$connect){
    exit("<p>Cannot connect to database</p>");
    }
else{
    $userCreate = "INSERT INTO bowlers (email, pass, first_name, last_name) VALUES ('$email',$passSecure', $firstName', '$lastName')";

    $result = mysqli_query($connect, $userCreate);

    echo 'Affected rows ' .mysqli_affected_rows($connect);
    echo '<p><a href="index.php>Return to Login</a></p>';
    }
if(!$result)
    {
        print("Could not run the query $userCreate");
    }
}
?>