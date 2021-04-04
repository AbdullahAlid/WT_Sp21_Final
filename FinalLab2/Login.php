<?php
	require_once "db_config.php";
	session_start();
	$uname="";
	$pass="";
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$uname=$_POST["username"];
		$pass=$_POST["password"];
		$_SESSION["user"]=$uname;
		$query="select * from Admin where Username='$uname' and password='$pass'";
		$result=get($query);
		if(count($result)==1){
			header("Location: dashboard.php");
		}
		else
			echo "Incorrect username or password";
	}
?>
<html>
	<body>
		<form action="" method="POST">
			Username: <input type="text" name="username" placeholder="username"><br>
			Password: <input type="password" name="password" placeholder="password"><br>
			<input type="submit" value="Login">
		</form>
	
	</body>
</html>