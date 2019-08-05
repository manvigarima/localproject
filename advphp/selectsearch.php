<!DOCTYPE html>
<html>
<head>
	<title>select search</title>
</head>
<body>
<table>
<tr>
	<td>Select product type</td>
	<td>
		<select name="category" style="width:200px;">
			<option>Select any one</option>
			<?php 
			include 'include/database.php';
			$sql="select * from cats";
			$run=mysqli_query($conn,$sql);
			while($c=mysqli_fetch_array($run))
			{?>
			<option value="<?php echo $c['category']; ?>" ><?php echo $c['category']; ?></option>
		<?php } ?>
		</select>
	</td>
</tr>
</table>
</body>
</html>