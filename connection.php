<?php








# CONNECT WITH XAMPP

$hostname="localhost";
$username="root";
$password= "root";//Com MAMP tem que root
$dbname ="myfirstdatabase";




$dbc = mysqli_connect($hostname, $username, $password, $dbname) OR die
("Could not connect to database, ERROR: ".mysqli_connect_error());

mysqli_set_charset ($dbc, "utf8");


echo "conexão funcionando!";



?>
