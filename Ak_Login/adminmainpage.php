<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include 'links.php' ?>
</head>
<body>
<div class="container center-div shadow">
			<div class="heading text-center text-black">
				Welcome <?php echo $_SESSION['user'] ?>
			<a href="logout.php" class="btn btn-danger">Logout</a>
			</div>
</div>
</body>
</html>