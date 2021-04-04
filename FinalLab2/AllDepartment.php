<?php
	require_once "db_config.php";
	$query="select * from department";
	$result=get($query);
	
			
	
?>
<html>
	<body>
		<table border="1" style="border-collapse:collapse;">
			<tr>
				<td>Name</td>
				<td>ID</td>
			</tr>
<?php
	foreach($result as $row){
		echo "<tr>";
			echo "<td>".$row["Name"]."</td>";
			echo "<td>".$row["ID"]."</td>";
			
		echo "</tr>";
	}


?>
</table>
</body>
</html>