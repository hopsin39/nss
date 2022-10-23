<?php 

session_start();
$data = $_SESSION['data'];
include ("config.php");

		
	$pass = $_POST['pass'];
    $confirm_pass = $_POST['confirm_pass'];


if (isset($_POST['submit_update'])) {

mysqli_query($conn, "UPDATE `admin` SET password = '$pass', end_time = '$end_time' WHERE id = 1") or die('query failed');

	     $_SESSION['msg'] ="<div class='alert alert-info'>Successful</div>";
          header('location: admin.schedule.php');

	}
?>
