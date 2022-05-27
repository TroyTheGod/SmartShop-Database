<?php
$host = "192.168.0.105";
$username = "smartshop";
$password = "";   // default password for "root" user is empty
$dbname =  "smartshop";

$col = $_POST["col"];
$table  = $_POST["table"];
$where = $_POST["where"];
$order = $_POST["order"];


// Connect to server
$connect=mysql_connect($host, $username, $password) 
                    or die ("Sorry, unable to connect database server");

$dbselect=mysql_select_db($dbname,$connect) 
                    or die ("Sorry, unable to connect database");


if($order="SsNoInput"){
$query = "SELECT ".$col." from ".$table." Where ".$where;
}else{
$query = "SELECT ".$col." from ".$table." Where ".$where." order by ".$order;
}
$result = mysql_query($query);

if ($result) {

    while ($row = mysql_fetch_assoc($result)) {
	$output[] = $row;
    }

	print("{\"result\":");
    print(json_encode($output));
	print("}");

}

mysql_close();
?>

