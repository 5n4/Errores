<html>
	<head>
		<title>Craft-Helmet</title>
	</head>
	<body>		
		<?php
			try{
				$base=new PDO("mysql:host=localhost; dbname=craft1", "root", ""); //Conexion
				$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$query="SELECT * FROM users WHERE username= :login AND password= :password";
				$result=$base->prepare($query);
				$userLogin= htmlentities(addslashes($_POST["user"]));
				$passLogin= htmlentities(addslashes($_POST["pass"]));
				$result->bindValue(":login", $userLogin);
				$result->bindValue(":password", $passLogin);
				$result->execute();
				$exist=$result->rowCount();
				if($exist==1){
					session_start();
					$_SESSION["userActive"]= $userLogin;
					header("location:shop.php");
				}else{
					header("location:login.php");
				}
			}catch(Expection $e){
				die("Error: ".$e->getMessage());
			}
		?>
	</body>
</html>