<?php

$conn = mysqli_connect('localhost','root','','time_scheduler2') or die('connection failed');


	$db_host='localhost';
	$db_user='root';
	$db_pass='';
	$db_name='time_scheduler2';



	try {
		$db_conn= new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$db_conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	}catch(PDOException $e){
		echo $e->getMessage();
	}


	$n=1;
 	$s=rand(1, 8);
 	$y=3;

?>