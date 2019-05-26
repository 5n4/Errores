<html>
	<head>
		<title>Craft-Helmet</title>
		<link rel="stylesheet" href="css/mystyle.css">
		<style>div.login{display:none;}	</style><!--login superior se esconde, evito discrepancias-->
		<?php //include 'connection.php';?>	
	</head>
	<body>
		<!--head-->
		<?php include 'header.php';?>
		<!--body-->
		<div class="loginPage">
			<form action="loginProc.php" method="post">
				<p class="titleLoginPage">Enter your data:</p>
				<p>Username:</p>
				<input type="text" name="user"><br>
				<p>Password:</p>
				<input type="password" name="pass"><br><br>
				<input type="submit" class="send" value="Enter">
			</form>
		</div>
	</body>
</html>