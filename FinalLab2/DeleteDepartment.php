<?php
	require_once "db_config.php";
	$did="";
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$did=$_POST["id"];
		$query="delete from department where ID='$did'";
		execute($query);
		echo "deleted successfully";
	}
?>
<html>
	<body>
		<form action="" method="POST">
			Enter the department id you wanted to delete:<input type="text" name="id" placeholder="Department id"><br>
			<input type="submit" value="DELETE">
		</form>	
	</body>
</html>