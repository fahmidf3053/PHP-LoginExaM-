<?php

include('banner.php');
?>
<div id="main_content">
		<div id="body_content"><form action="actionpage.php" method="get">
		 <br />
 <br />
<br />
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="Name" /></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="Email" /></td>
			</tr>
			<tr>
				<td>Subject:</td>
				<td><input type="text" name="Subject" /></td>
			</tr>
			<tr>
				<td>Message:</td>
				<td>
					<textarea name="Message"></textarea>
					<!-- <input type="textArea" name="message" /> -->

				</td>
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
