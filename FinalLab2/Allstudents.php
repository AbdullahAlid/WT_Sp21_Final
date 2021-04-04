<?php
	require_once "db_config.php";
	$query="select * from student";
	$result=get($query);
	
			
	
?>
<html>
	<body>
		<table border="1" style="border-collapse:collapse;">
			<tr>
				<td>Name</td>
				<td>ID</td>
				<td>DOB</td>
				<td>Credit</td>
				<td>CGPA</td>
				<td>Dept_id</td>
				<td></td>
				<td></td>
			</tr>
<?php
	foreach($result as $row){
		echo "<tr>";
			echo "<td>".$row["Name"]."</td>";
			echo "<td>".$row["ID"]."</td>";
			echo "<td>".$row["DOB"]."</td>";
			echo "<td>".$row["Credit"]."</td>";
			echo "<td>".$row["CGPA"]."</td>";
			echo "<td>".$row["Dept_id"]."</td>";
			echo "<td>"?><a href="Editstudent.php">edit</a></td>
			<td><a href="Deletestudent.php">delete</a></td><?php
		echo "</tr>";
	}


?>
</table>
</body>
</html>