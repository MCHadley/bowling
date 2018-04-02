<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bowling</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <h1>Test for bowling</h1>
        <?php
            include ('config.php');
            $connect = mysqli_connect(SERVER, USER, PW, DB);

            if(!$connect)
            {
                exit("Error. Could not connect to database");
            }
            // mysqli_close($connect);

            $userQuery = "SELECT first_name, last_name FROM bowlers ORDER BY last_name ASC";
            $result = mysqli_query($connect, $userQuery);

            if(!$result){
                exit("<p>Could not run the query, $userQuery</p>");
            }

            if (mysqli_num_rows($result) == 0)
            {
                echo "<p>No records returned</p>";
            }
            else
            {
                echo "<h1>Bowlers</h1>";
                while($row = mysqli_fetch_assoc($result) )
                {
                    echo "<p>".$row['first_name']."".$row['last_name']."</p>";
                }
            }

        ?>
    </body>
</html>