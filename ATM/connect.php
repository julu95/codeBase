<?php
	$servername="localhost";
	$username="julu";
	$password="RHSM25d9548";
	
	//$conn=mysql_connect($servername,$username,$password) or die("Couldn't connect");
	$dbhandle = mysql_connect($servername, $username, $password) 
	or die("Unable to connect to MySQL");
	echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("examples",$dbhandle) 
  or die("Could not select examples");

//execute the SQL query and return records
$result = mysql_query("SELECT Accno, pin FROM user");

//fetch tha data from the database 
while ($row = mysql_fetch_array($result)) {
   echo "Accno:".$row{'Accno'}." Pin:".$row{'pin'}. //display the results
   "<br>";
}
//close the connection
mysql_close($dbhandle);
?>

