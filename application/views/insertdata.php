<!DOCTYPE html>
<html>
<head>
	<title>insertion</title>
</head>
<body>
	<center><b><i><h2>Please Enter The Details...</h2></i></b></center>
	<form method="post" enctype="multipart/form-data" action="<?php echo base_url()?>Main/insertdata">
	<table align="center">
		<tr></tr>
		<tr>
			<td>Photo:</td>
			<td><input type="file" name="pic" required=""></td>
		</tr>
		<tr>
			<td>Candidate ID:</td>
			<td><input type="text" name="candid" required=""></td>
		</tr>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" required=""></td>
		</tr>
		<tr>
			<td>Batch:</td>
			<td><input type="text" name="batch" required=""></td>
		</tr>
		<tr>
			<td>DOB:</td>
			<td><input type="date" name="dob" required=""></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><textarea name="add" required=""></textarea></td>
		</tr>
		<tr>
			<td>Mobile Number:</td>
			<td><input type="text" name="num" required=""></td>
		</tr>
		<tr>
			<td>Language Known:</td>
			<td><input type="text" name="lang" required=""></td>
		</tr>
		<tr>
			<td>Technical Skill:</td>
			<td><input type="text" name="skill" required=""></td>	
		</tr>
		<tr>
			<td>Guardian Occupation:</td>
			<td><input type="text" name="occ" required=""></td>
		</tr>
		<tr>
			<td>Qualification:</td>
			<td><textarea name="qual" required=""></textarea></td>
		</tr>
		<tr>
			<td>Email ID:</td>
			<td><input type="email" name="email" required=""></td>
		</tr>
		<tr>
			<td></td><td><input type="submit" name="submit" value="INSERT"></td>
		</tr>
	</table>
</body>
</html>