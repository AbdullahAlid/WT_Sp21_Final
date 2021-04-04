<?php
	require_once "db_config.php";
	$dname="";
	$err_dname="";
	$did="";
	$err_did="";
	$has_error=false;
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(empty($_POST["dn"])){
			$err_dname="Enter Department name.";
			$has_error=true;
		}
		else{
			$dname=htmlspecialchars($_POST["dn"]);
		}
		if(empty($_POST["di"])){
			$err_did="Enter Department id.";
			$has_error=true;
		}
		else{
			$did=htmlspecialchars($_POST["di"]);
		}
		if(!$has_error){
			$query="insert into department values('$dname','$did')";
			execute($query);
			echo "Inserted successfully";
		}
	}
?>
<html>
	<body>
	<fieldset>
		<legend align="center"><h1>Department adding form...</h1></legend>
		<form action="" method="POST">
			<table align="center">
				<tr>
					<td align="right">Department name:</td>
					<td><input type="text" name="dn">
					<span><?php echo $err_dname;?></span></td>
				</tr>
				<tr>
					<td align="right">Department id:</td>
					<td><input type="text" name="di">
					<span><?php echo $err_did;?></span></td>
				</tr>
				<tr>
					<td align="right" colspan="2"><input type="submit" value="ADD"></td>
				</tr>
			</table>
		</form>
	</fieldset>
	</body>
</html>