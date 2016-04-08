<?php


session_start();
setcookie(session_name(), '', 100);
session_unset();
session_destroy();
$_SESSION = array();

print("<meta http-equiv='refresh' content='0;URL=./index.php'>");


?>