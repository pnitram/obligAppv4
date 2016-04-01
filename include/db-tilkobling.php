<?php


$host="localhost";
$user="oblig4";
$password="oblig4"; //mysqlpassord
$database="oblig4"; 


$db=mysqli_connect($host,$user,$password,$database) or die("Ikke kontakt med DB-server: " .mysqli_connect_error());

?>
