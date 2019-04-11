<?php

include('banner.php');
//include('menu.php');
?>
<div id="main_content">
		<div id="body_content"><form action="actionpage.php" method="get">
		 <br />
 <br />
<br />
		<table>
			<tr>
				<td>First Name:</td>
				<td><input type="text" name="firstName" /></td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input type="text" name="lastName" /></td>
			</tr>
			<tr>
				<td>Age:</td>
				<td><input type="number" name="age" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit" /></td>
			</tr>
			
		</table>


</form></div>
		<?php include('advert.php'); ?>
</div>
<?php
include('footer.php');
?>
