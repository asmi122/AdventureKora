<?php
session_start();
$con = mysqli_connect('localhost', 'root', 'root', 'ak_admin');


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include 'links.php' ?>
</head>
<body>

<header>
		<div class="container center-div shadow">
			<div class="heading text-center text-black">
				Admin Login Page
			<div class="container row d-flex flex-row justify-content-center">
				<div class="admin-form shadow p-2">
					<form action="logincheck.php" method="POST">
						<div class="form-group">
							<label>Email ID</label>
							<input type="text" name="user" value="" class="form-control" autocomplete="off">

						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="text" name="password" value="" class="form-control" autocomplete="off">
							
						</div>
						<input type="submit" class="btn btn-success" name="submit">
					</form>
				</div>
			</div>
			</div>
		</div>
</header>

</body>
</html>