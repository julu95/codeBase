<?php
	session_start();
	@mysql_connect("localhost","julu","RHSM25d9548") or die("Couldn't connect");
	@mysql_select_db("atm") or die("Database not connected");
	//$AccNo=$_POST["AccNo"];
	//$CardNo=$_POST["CardNo"];
	//$Name=$_POST["Name"];
	//$Age=$_POST["Age"];
	//$Sex=$_POST["Sex"];
	//$Votor_id=$_POST["Votor_id"];
	//$Address=$_POST["Address"];
	//$Mobile_No=$_POST["Mobile_No"];
	//$Email_Id=$_POST["Email_Id"];
	$query="select * from information";
	$query='INSERT INTO information(AccNo,CardNo,Name,Age,Sex,Votor_id,Address,Mobile_No,Email_Id) VALUES(:AccNo,:CardNo,:Name,:Sex,:Votor_id,:Address,:Mobile_No,:Email_Id);';
	if($result=mysql_query($query))
	{
		while($row=mysql_fetch_assoc($result))
		{
			echo "new record created successful";
		}
	}
	else
	{
		echo "Fetch operation failed";
	}
	
?>