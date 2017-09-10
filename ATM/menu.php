<!DOCTYPE HTML>
<html>
<head>
	<TITLE>menu</TITLE>
	<link rel="stylesheet" type="text/css" href="mainpage.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
	<script type="text/javascript">
	function withdraw()
	{
		window.location.assign("wid.php");
		
	}
	function deposit()
	{
		window.location.assign("dep.php");
	}
	</script>
	</head>
<body bgcolor="Water-Bubbles">
	<?php
		session_start();
		echo "Account Number: ".$_SESSION["AccNo"];
		?>
	<h1 class="m">MENU ! ! !</h1>
	<form method="post"  name="f1">
	<table class="t">
		<tr class="l">
			<td><input type="button" value="Withdraw" name="wid" onclick="withdraw()"  class="b"></td><td><input type="button" value="Check Balance" name="bal"></td>
		</tr>
		<tr>
			<td><input type="button" value="Deposit" name="dep" onclick="deposit()" class="b"></td><td><input type="button" value="Request Check book" name="rcb"></td>
		</tr>
		<tr>
			<td><input type="button" value="Case Transfer" Name="trn"></td><td><input type="button" value="Change  Pin" name="pin"></td>
		</tr>
		<tr>
			<td><input type="button" value="Update Customer" name="uc"></td><td><input type="button" value="MiniStatement" name="mini"></td>
		</tr>
		</table>
		
	</table>
	</form>
</body>
</html>