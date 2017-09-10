<!DOCTYPE HTML>
<html>
<head>
	<TITLE>Deposit</TITLE>
	<link rel="stylesheet" type="text/css" href="mainpage.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
</head>
<body bgcolor="Water-Bubbles">
	<?php session_start();
	if($_SESSION["AccNo"]=="")
header("Location: http://localhost:87/Projects/ATM/mainpage.html");
	?>
	<h1 class="m">DEPOSIT ! ! !</h1>
	<form method="post" action="dep1.php">
	<table class="t">
		<tr>
			<td class="en">Your A/C No:</td><td><input type="text" class="tb" value="<?php echo $_SESSION["AccNo"];?>" readonly=""></td>
		</tr>
		<tr>
			<td class="en">Your Current Balance:</td><td><input type="text" class="tb" value="<?php echo $_SESSION["Bal"];?>" readonly="" name="Balance"></td>
		</tr>
		<tr>
			<td class="en">Enter Amount To Deposit:</td><td><input type="text" name="amount" class="tb"></td>
		</tr>
		<tr>
			<td><button type="submit" class="btn btn-success">Deposit</button></td>
		</tr>
	</table>
	</form>
</body>
</html>