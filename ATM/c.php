<!doctype html>
<html>
<head>
	<TITLE>mainpage</TITLE>
	<link rel="stylesheet" type="text/css" href="mainpage.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>
		<?php
		session_start();
	@mysql_connect("localhost","julu","RHSM25d9548") or die("Couldn't connect");
	@mysql_select_db("atm") or die("Database not connected");
	$AccNo=$_POST["AccNo"];
	$pin=$_POST["pin"];
	$query="select * from mainpage where AccNo=$AccNo and Pin=$pin";
	if($result=mysql_query($query))
	{
		while($row=mysql_fetch_assoc($result))
		{
			//echo $row["AccNo"].'  '.$row["CardNo"].'  '.$row["Pin"].'<br>';
			 $_SESSION["mainpage"] = $AccNo;
			header("Location: http://localhost:87/Projects/ATM/menu.php");
		}
	}
	else
	{
		echo "Fetch operation failed";
	}
	
?>
	<h1 class="m">WELCOME. . .</h1>
	<form method="post" action="c.php">
	<table class="t">
		<tr>
			<td>Enter A/C No/ Card No:</th><th><input type ="text" maxlength="16" name="accno"></th>
			
		</tr>
		<tr>
			<td>Enter Pin:</td><td><input type="text" maxlength="4" name="pin"></td>
		</tr>
		<tr>
			<td><input type = "submit" value="Login"></td>
		</tr>
	</table>
	</form>
	

	
</body>
</html>
