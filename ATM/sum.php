<?php
	@mysql_connect("localhost","julu","RHSM25d9548") or die("Couldn't connect");
	@mysql_select_db("atm") or die("Database not connected");
	$curr_amount=isset($_POST['curr_amount']);
	$query="select * from withdraw where curr_amount=$curr_amount";
	if($result=mysql_query($query))
	{
		while($row=mysql_fetch_assoc($result))
		{
			//$num1 = isset($_POST['num1']);
			//$num2 = isset($_POST['num2']);
			$apotelesma = 0;
			$apotelesma = $num1 + $num2;
			echo $apotelesma;
		}
	}
	
	
?>