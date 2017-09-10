<?php
session_start();
if($_SESSION["AccNo"]=="")
header("Location: http://localhost:87/Projects/ATM/mainpage.html");
?>
<!DOCTYPE html>
<html>
<head>
	<TITLE>withdraw</TITLE>
	<link rel="stylesheet" type="text/css" href="mainpage.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
	
</head>
<body bgcolor="Water-Bubbles">
	
	
	<h1 class="m">WITHDRAW ! ! !</h1>
	<form method="post" action="wid1.php">
	
	<table class="t">
		<tr>
			<td class="en">Your A/C No:</td><td><input type="text" class="tb" value="<?php echo $_SESSION["AccNo"];?>" readonly="" ></td>
		</tr>
		<tr>
			<td class="en">Your Current Balance:</td><td><input type="text" class="tb" value="<?php echo $_SESSION["Bal"];?>" readonly="" name="Balance"></td>
		</tr>
		<tr>
			<td class="en">Enter Amount To Withdraw:</td><td><input type="text" name="amount" class="tb"></td>
		</tr>
		<tr>
			<td><button type="submit" class="btn btn-success">Withdraw</button></td>
		</tr>
	</table>
	</form>
	

</body>
</html>