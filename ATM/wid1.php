<?php
	session_start();
	
	@mysql_connect("localhost","julu","RHSM25d9548") or die("Couldn't connect");
	@mysql_select_db("atm") or die("Database not connected");
	$var1=$_POST["amount"];
	$balavail=$_POST["Balance"];
	$var1=$balavail-$var1;
	$var2=$_SESSION['AccNo'];
	echo "$var1  $var2";
	$query="UPDATE `mainpage` SET `Balance` =$var1 WHERE `AccNo` =$var2 ";
	$retval=mysql_query($query);
	if(!$retval)
	{
		echo "updation failed";
	}
	else
		echo "updation was successful";
?>


