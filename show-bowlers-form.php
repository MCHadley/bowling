<?php
include ("config.php");
$connect = mysqli_connect(SERVER, USER, PW, DB); 
if (!$connect){
    print("<p>Cannot connect to database</p>");
}
else {
    $showQuery = "SELECT first_name, last_name FROM `bowlers` ORDER BY first_name ASC";
    $result = mysqli_query($connect, $showQuery);
    // $row = mysqli_fetch_assoc($result);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>Name</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["first_name"]. " " . $row["last_name"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
}



?>