<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$username=$_POST["uname"];
		$password=$_POST["upass"];
		if($username=="alidabdullah" && $password=="1940096"){
			setcookie("uname","$username",time()+120);
			header("Location: dashboard.php");
		}
		
	}
?>

<html>
	<head></head>
	<body>
	
	
		<form action="" method="POST">
			<table align="center">
				<tr>
					<td><span>Username </span></td>
					<td>:<input type="text" placeholder="username"  name="uname" >
					
				</tr>
				<tr>
					<td><span>Password </span></td>
					<td>:<input type="password" placeholder="password"  name="upass">
					
					
				</tr>
				<tr>
					<td align="right" colspan="2"><input type="submit" name="submit" value="Login"></td>
					
				</tr>
			</table>
		</form>
		
	</body>
</html>	