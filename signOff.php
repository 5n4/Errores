<html>
	<head>
		<title>Craft-Helmet</title>
		<link rel="stylesheet" href="css/mystyle.css">
	</head>
	<body>
		<?php
			session_start();
			session_destroy();
			header("location:index.php");
		?>
	</body>
</html>