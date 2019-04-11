<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Test Page</title>
	<link rel="stylesheet" type="text/css" href="demo.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div id="content">
		<div id="banner">Institute of Information Technology
			<div id="user_info">
				<!-- <?php
					if(isset($_SESSION['name']))
					{
						echo "Welcome " . $_SESSION['name'];
						echo " | ";
						echo "<a href='logout.php'>Logout</a>";
					}
				?> -->
			</div>
		</div>
		<?php 
			if(isset($_SESSION['type']))
			{
				if($_SESSION['type'] == "admin")
				{
					include('menu_admin.php');
				}
				else
				{
					include('menu.php');
				}
			}
			else
			{
				include('menu.php');
			}
		?>