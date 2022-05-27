<?php
$host = "192.168.0.105";
$username = "smartshop";
$password = "";   // default password for "root" user is empty
$dbname =  "smartshop";

$values = $_POST["values"];
$table = $_POST["table"];
$col = $_POST["col"];


// Connect to server
$connect=mysql_connect($host, $username, $password) 
                    or die ("Sorry, unable to connect database server");

$dbselect=mysql_select_db($dbname,$connect) 
                    or die ("Sorry, unable to connect database");


$query = "INSERT INTO ".$table." ( ".$col." ) VALUES ( ".$values." )";

$result = mysql_query($query);


mysql_close();
?>

