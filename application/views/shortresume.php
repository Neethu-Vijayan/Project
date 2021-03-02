<html>
<head>
<title>resume</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
 
    input[type="file"] {
    display: none !important;
}
.btn-success{    width:100%;    font-size: 22px;
    font-weight: bold;}
.navbar-brand img{width:80%;}
.well label, .well label img{width:100%;cursor:pointer;}
.well{  background: #f6f6f6;
    border-top: 5px solid #479b25;}
 
.custom-text{font-size:16px;display:none;}
 
@media only screen and (max-width:767px){
 
 
.header-text h1 {
    font-size: 20px;
    font-weight: bold;
    color: #03828a;
}
.well{padding:5px;width:100%;}
#myform {
   margin-left: 0px;
    margin-right: 0px;
}
}
 
 
</style>
</head>
<body>
<form method="post" action="<?php echo base_url()?>Main/shortresume">
<center>
<b><h3>Short Resume</h3></b><br>
<?php
if(isset($n))
{
	foreach($n->result() as $row)
	{

?>
<table border="1">
<br>
<tr>
			<td>Photo:</td>
			<td><img name="photo" src="<?php echo base_url("/upload/"); 
if($row->images) echo $row->images; else echo "no-photo.jpg"; ?>" alt="" height="150" width="150"/></td>
		</tr>
		<tr>
			<td>Candidate ID:</td>
			<td><input type="text" name="candid" value="<?php echo $row->candid;?>"></td>
		</tr>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" value="<?php echo $row->name;?>"></td>
		</tr>
		<tr>
			<td>Batch:</td>
			<td><input type="text" name="batch" value="<?php echo $row->batch;?>"></td>
		</tr>
		<tr>
			<td>DOB:</td>
			<td><input type="date" name="dob" value="<?php echo $row->dob;?>"></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><textarea name="add"><?php echo $row->address;?></textarea></td>
		</tr>
		<tr>
			<td>Mobile Number:</td>
			<td><input type="text" name="num" value="<?php echo $row->mobile;?>"></td>
		</tr>
		<tr>
			<td>Language Known:</td>
			<td><input type="text" name="lang" value="<?php echo $row->langknown;?>"></td>
		</tr>
		<tr>
			<td>Technical Skill:</td>
			<td><input type="text" name="skill" value="<?php echo $row->skill;?>"></td>	
		</tr>
		<tr>
			<td>Guardian Occupation:</td>
			<td><input type="text" name="occ" value="<?php echo $row->occupation;?>"></td>
		</tr>
		<tr>
			<td>Qualification:</td>
			<td><textarea name="qual" ><?php echo $row->qualification;?></textarea></td>
		</tr>
		<tr>
			<td>Email ID:</td>
			<td><input type="email" name="email" value="<?php echo $row->emailid;?>"></td>
		</tr>
<tr></tr>
<tr>
<td>
<input type="hidden" name="hidden_id" value="<?php echo $row->did; ?>">
<tr><td></td><td><input type="submit" name="submit" value="Generate"></td></tr>
</tr>
</table>
<?php
	}
}
else
{
	?>
	<tr>
	<td>No Data Found</td>
	</tr>
	<?php
}

?>
</table>
</div>
</center>
</form>
</body>
</html>
</body>
</html>