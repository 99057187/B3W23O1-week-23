<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Lab 2 - Includes en require</title>
		<link rel="stylesheet" href="css/index.css">
	</head>
	<body>
		<div id="header" width="80%" height="200px">
			<?php include "includes/header.php";?>
		</div>
		<?php
			if(isset ($_GET["pages"])){
				$pages= $_GET["pages"];
			}
			else{
				$pages = "onderwerp1";
			}
			include("pages/$pages.php");
			include "includes/footer.php";
		?>
	</body>
</html>
