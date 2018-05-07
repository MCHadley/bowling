<?php
function dbEscape($connect, $string){
    return mysqli_real_escape_string($connect, $string);
}
?>