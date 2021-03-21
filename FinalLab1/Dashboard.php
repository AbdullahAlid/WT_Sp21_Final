<?php
	if(!isset($_COOKIE["uname"])){
		header("Location: Login.php");
	}

?>

<html>
	<body>
		<h1>Welcome <?php echo $_COOKIE["uname"];?></h1>
	</body>
</html>