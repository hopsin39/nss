<?php 

require_once ("connection/conn.php");
include ("includes/header.php");
include ("includes/nav.php");


if (!adminIsLogin()) {
    adminLoginErrorRedirect();
}


if (isset($_GET['delete']) && !empty($_GET['delete'])) {
	$id = (int)$_GET['delete'];

	$delete_query = "
		DELETE FROM users 
		WHERE user_id = :user_id
	";
	$statement = $conn->prepare($delete_query);
	$result = $statement->execute([':user_id' => $id]);
	if ($result) {
		$_SESSION['flash_success'] = 'Nurse deleted!';
		header('Location: admin.users.php');
	}
}

if (isset($_GET['add']) && !empty($_GET['add'])) {
	if (isset($_POST['submit_user'])) {
		$query = "
			INSERT INTO users (full_name, email, password) 
			VALUES (:full_name, :email, :password)
		";
		$statement = $conn->prepare($query);
		$result = $statement->execute([
			':full_name' => sanitize($_POST['full_name']),
			':email' => sanitize($_POST['email']),
			':password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
		]);
		$user_id = $conn->lastInsertid();
		if ($result) {
			$sub_query = "
				INSERT INTO schedules (user_id) 
				VALUES (:user_id)
			";
			$statement = $conn->prepare($sub_query);
			$statement->execute(
				[
					':user_id' => $user_id
				]
			);

			$_SESSION['flash_success'] = $_POST['full_name'] . ' added as a Nurse!';
			header('Location: admin.users.php');
		}
	}
}




?>

<style type="text/css">
	body {
		background: beige;
		background-image: url(media/gro.jpg);
		background-size: cover;
	
	}
</style>

    
	<!-- Begin page content -->
	<main class="flex-shrink-0">
    	<div class="container">
		    <h1 class="mt-5">Workers</h1>
		    <p class="bd-lead">Current time is ...</p>
		    <p class="bd-lead"><span id="show_date" class="text-danger"></span>.</p>
		    <a href="admin.users.php?add=1">Add User</a>
	
			<div class="row">
				<div class="col-12">
					<?php if (isset($_GET['add']) && !empty($_GET['add'])): ?>
						<form method="POST" action="admin.users.php?add=1">
							<h4>Add worker</h4>
							<div class="mb-2">
								<input type="text" name="full_name" id="full_name" required autofocus autocomplete="off" placeholder="Enter worker full name here ..." class="form-control">
							</div>
							<div class="mb-2">
								<b><input type="email" name="email" id="email" required autocomplete="off" placeholder="Enter worker Email here ..." class="form-control">
							</div>
							<div class="mb-2">
								<input type="text" name="password" id="password" required placeholder="******" class="form-control">
					</b></div>
							<button type="submit" name="submit_user" id="submit_user" class="btn btn-primary">Add worker</button>
							<a href="admin.users.php" class="btn btn-light">Cancel</a>
						</form>
					<?php else: ?>
					<table class="table">
						<thead>
							<tr>
								<th>Full name</th>
								<th>Email</th>
								<th>Joined Date</th>
								<th>Last Login Date</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?= get_all_users(); ?>
						</tbody>
					</table>
					<?php endif ?>
				</div>
			</div>
		    

	    </div>

<?php include ("includes/footer.php"); ?>
<script>
	function startTime() {
	  	const today = new Date();
	  	let h = today.getHours();
	  	let m = today.getMinutes();
	  	let s = today.getSeconds();
	  	h = checkTime(h);
	 	m = checkTime(m);
	  	s = checkTime(s);
	  	document.getElementById('show_date').innerHTML =  h + " : " + m + " : " + s;
	  	console.log(h + ":" + m + ":" + s);
	  	setTimeout(startTime, 1000);
	}

	function checkTime(i) {
		// add zero in front of numbers < 10
	  	if (i < 10) {
	  		i = "0" + i
	  	};
	  	return i;
	}
	startTime();
</script>