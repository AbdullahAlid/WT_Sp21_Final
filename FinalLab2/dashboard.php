<?php
	session_start();
	if(!isset($_SESSION["user"])){
		header("Location: Login.php");
	}
?>
<html>
	<body>
	<h1>Welcome <?php echo $_SESSION["user"]; ?></h1>
       <a href="Allstudents.php">Show all students. </a><br>
	   <a href="Addstudent.php">Add new student. </a><br>
	   <a href="AllDepartment.php">Show all department. </a><br>
	   <a href="AddDepartment.php">Add new dept.</a><br>
		
	</body>
</html>