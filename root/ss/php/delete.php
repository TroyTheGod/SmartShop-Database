<?php
$host = "192.168.0.105";
$username = "smartshop";
$password = "";   // default password for "root" user is empty
$dbname =  "smartshop";

$table = $_POST["table"];
$where = $_POST["where"];


// Connect to server
$connect=mysql_connect($host, $username, $password) 
                    or die ("Sorry, unable to connect database server");

$dbselect=mysql_select_db($dbname,$connect) 
                    or die ("Sorry, unable to connect database");


$query = "DELETE FROM ".$table." WHERE ".$where;

$result = mysql_query($query);

echo($result);


mysql_close();
?>

