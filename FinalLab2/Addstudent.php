<html>
	<head></head>
	<body>
		<?php
			require_once "db_config.php";
			$name="";
			$id="";
			$dob="";
			$credit="";
			$err_name="";
			$err_id="";
			$err_dob="";
			$err_credit="";
			$err_cgpa="";
			$dept="";
			$has_error=false;
			//if(isset($_POST["submit"])){
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				$dept=$_POST["dept"];
				if(empty($_POST["name"])){
					$err_name="*Enter Name";
					$has_error=true;
				}
				else
				{
					$name=htmlspecialchars($_POST["name"]);
				}
				if(empty($_POST["id"])){
				    $err_id="*Enter id";
					$has_error=true;
				}
				else
				{
					$id=htmlspecialchars($_POST["id"]);
				}
				if(empty($_POST["dob"]))
				{
					$err_dob="*Enter date of birth";
					$has_error=true;
				}
				else if(strlen($_POST["dob"])<10)
				{
					$err_dob="*invalid date format";
					$has_error=true;
				}
				else
				{
					$dob=htmlspecialchars($_POST["dob"]);
				}
				if(empty($_POST["credit"])){
				    $err_credit="*Enter credit number.";
					$has_error=true;
				}
				else if(strlen($_POST["credit"])>3)
				{
					$err_credit="*Not acceptable.";
					$has_error=true;
				}
				else
				{
					$credit=htmlspecialchars($_POST["credit"]);
				}
				if(empty($_POST["cgpa"])){
				    $err_cgpa="*Enter CGPA.";
					$has_error=true;
				}
				else if(strlen($_POST["cgpa"])<4 || strlen($_POST["cgpa"])>4)
				{
					$err_cgpa="*invalid cgpa format";
					$has_error=true;
				}
				else
				{
					$cgpa=htmlspecialchars($_POST["cgpa"]);
				}
				
				if(!$has_error){
					$query="insert into student(Name,ID,DOB,Credit,CGPA,Dept_id) values ('$name','$id','$dob','$credit','$cgpa','$dept')";
					execute($query);
					echo "Inserted successfully";
					
				}
			
			}
			
		?>
		<fieldset>
		<legend align="center"><h1>Student adding form...</h1></legend>
		<form action="" method="post">
				<table align="center">
					<tr>
						<td align="right"><span>Name:</span></td>
						<td><input type="text" placeholder="name" name="name" >
						<span><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span>ID:</span></td>
						<td><input type="text" name="id" placeholder="student id">
						<span><?php echo $err_id;?></span></td>
						
					</tr>
					<tr>
						<td align="right">Date of Birth:</td>
						<td><input type="text" name="dob" placeholder="dd/mm/yyyy">
						<span><?php echo $err_dob;?></td>
					</tr>
					<tr>
						<td align="right"><span>Credit:</span></td>
						<td><input type="text" name="credit" placeholder="total completed credit">
						<span><?php echo $err_credit;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span>CGPA:</span></td>
						<td><input type="text" name="cgpa" placeholder="_._ _">
						<span><?php echo $err_cgpa;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span>Dept:</span></td>
						<td>
							<select name="dept">
								<option value="1">CSE</option>
								<option value="2">EEE</option>
								<option value="3">BBA</option>
								<option value="4">LAW</option>
								<option value="5">Architecture</option>
							</select>
						</td>
						
					</tr>
					
					<tr>
						<td align="center" colspan="2"><input type="submit" value="ADD"></td>
					</tr>
					
				</table>
				 
				
			</form>
		</fieldset>
	</body>
</html>