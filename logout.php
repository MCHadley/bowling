<!DOCTYPE html>
<?php
session_start();
?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Show Bowlers</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
      <?php
        session_unset();
        session_destroy();
        header("location:index.php");
        exit();

      ?>  
        
    </body>
</html>