<?php
// DATABASE CONNECTION

if($_SERVER ['HTTP_HOST'] == 'mchadley.me')
{
    define('SERVER', 'localhost');
    define('USER', 'bowling');
    define('PW', 'strike');
    define('DB', 'bowling');
}
else
{
    define('SERVER', 'localhost');
    define('USER', 'bowling');
    define('PW', 'strike');
    define('DB', 'bowling');
}

?>