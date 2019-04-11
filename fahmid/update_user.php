<?php
include('connect.php');
include('banner.php');
//include('menu.php');

$q ="SELECT * from person where Id='" . $_REQUEST["id"] ."'";
	$mq = mysqli_query($cn,$q);
	$row;
	if(mysqli_num_rows($mq) > 0)
	{
		//echo 'hi';
		$row = mysqli_fetch_array($mq);
	}
?>
<div id="main_content">
		<div id="body_content"><form action="" method="get">
		 <br />
 <br />
<br />
		<table>
			<tr>
				<td>First Name:</td>
				<td><input type="text" name="firstName" value="<?php echo $row["FirstName"]; ?>" /></td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input type="text" name="lastName" value="<?php  echo $row["LastName"]; ?>" /></td>
			</tr>
			<tr>
				<td>Age:</td>
				<td><input type="number" name="age" value="<?php  echo $row["Age"]; ?>" /></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php  echo $row["Id"]; ?>" /></td>
				<td><input type="submit" value="Submit" /></td>
			</tr>
			
		</table>


</form></div>
		<?php include('advert.php'); ?>
</div>
<?php
include('footer.php');
?>
