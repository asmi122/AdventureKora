<?php
session_start();
$con = mysqli_connect('localhost', 'root', 'root', 'ak_admin');


if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['password'];

	$sql = "select * from admin_table where user = '$username' and password = '$password'";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row ==1){
			//error_reporting(E_ALL);
			//ini_set('display_errors', TRUE);
			$_SESSION['user'] = $username;
			header('location:adminmainpage.php');
		}else{
			header('location:adminlogin.php');
		}
	
}

?>