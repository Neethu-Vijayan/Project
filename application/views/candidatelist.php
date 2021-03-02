<html>
<head>
	<title>list</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<center>
	<div class="container">
<form enctype="multipart/form-data" method="post" action="<?php echo base_url()?>Main/candidatelist">
<table>
<tr>
<?php
if($n->num_rows()>0)
{
  foreach($n->result() as $row)
  {
  ?>
  <td class="success"><a href="<?php echo base_url(); ?>Main/shortresume/<?php echo $row->did; ?>"><?php echo $row->name;?></a></td>
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
</tr>
</table>
</form>
</div>
</center>
</body>
</html>