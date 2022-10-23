<?php

	// Connection To Database
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$conn = new PDO("mysql:host=$servername;dbname=nss", $username, $password);
	session_start();

	require_once($_SERVER['DOCUMENT_ROOT'].'/nss/config.php');
 	require_once(BASEURL.'helpers/helpers.php');
 	

 	if (isset($_SESSION['user_id'])) {
 		$data = array(
 			':user_id' => (int)$_SESSION['user_id']
 		);
 		$sql = "
 			SELECT * FROM users 
 			INNER JOIN schedules 
 			ON schedules.user_id = users.user_id
 			WHERE users.user_id = :user_id 
 			LIMIT 1";
 		$statement = $conn->prepare($sql);
 		$statement->execute($data);

 		foreach ($statement->fetchAll() as $row) {
 			$user_id = $row['user_id'];
 			$fullName = ucwords($row['full_name']);
 		}
 	}

 	if (isset($_SESSION['admin_id'])) {
 		$data = array(
 			':admin_id' => (int)$_SESSION['admin_id']
 		);
 		$sql = "
 			SELECT * FROM admin 
 			WHERE admin_id = :admin_id 
 			LIMIT 1";
 		$statement = $conn->prepare($sql);
 		$statement->execute($data);

 		foreach ($statement->fetchAll() as $admin_row) {
 			$admin_id = $admin_row['admin_id'];
 			$admin_fullName = ucwords($admin_row['full_name']);
 		}
 	}


 	// Display on Messages on Errors And Success
 	if (isset($_SESSION['flash_success'])) {
 	 	echo '<div id="temporary"><p class="text-center text-white bg-success">'.$_SESSION['flash_success'].'</p></div>';
 	 	unset($_SESSION['flash_success']);
 	 }

 	 if (isset($_SESSION['flash_error'])) {
 	 	echo '<divid="temporary"><p class="text-center bg-danger text-white">'.$_SESSION['flash_error'].'</p></div>';
 	 	unset($_SESSION['flash_error']);
 	 }




?>
