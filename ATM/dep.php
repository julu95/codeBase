<?php
	session_start();
	@mysql_connect("localhost","julu","RHSM25d9548") or die("Couldn't connect");
	@mysql_select_db("atm") or die("Database not connected");
	$AccNo=$_SESSION["AccNo"];
	$query="select * from mainpage where AccNo=$AccNo ";
	if($result=mysql_query($query))
	{
		while($row=mysql_fetch_assoc($result))
		{
	
			$_SESSION["Bal"]=$row["Balance"];
			$amount=$_POST["amount"];
			$_SESSION["Bal"]=$_SESSION["Bal"]+$amount;
			header("Location: http://localhost:87/Projects/ATM/deposit.php");
		}
	}
	else
	{
		die("Fetch operation failed");
	}
	
	
	?>