<?php 

session_start();
$data = $_SESSION['data'];
include ("config.php");

		
	$start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $todo = $_POST['todo'];


if (isset($_POST['submit_update'])) {

mysqli_query($conn, "UPDATE `schedules` SET start_time = '$start_time', end_time = '$end_time' , todo = '$todo' WHERE id = 1") or die('query failed');

	     $_SESSION['msg'] ="<div class='alert alert-info'>Successful</div>";
          header('location: admin.schedule.php');

	}
?>
