<?php
	session_start();
	@mysql_connect("localhost","julu","RHSM25d9548") or die("Couldn't connect");
	@mysql_select_db("atm") or die("Database not connected");
	$AccNo=isset($_POST["AccNo"])?$_POST["AccNo"]:'';
	$pin=isset($_POST["pin"])?$_POST["pin"]:'';
	echo "$AccNo  $pin";
	$query="select * from mainpage where AccNo=$AccNo and Pin=$pin";
	if($result=mysql_query($query))
	{
		while($row=mysql_fetch_assoc($result))
		{
			$_SESSION["AccNo"]=$row["AccNo"];
				//header("menu.php");
				header("Location: http://localhost:87/Projects/ATM/menu.php");
		}
	}
	else
	{
		echo "Fetch operation failed";
	}
	
?>