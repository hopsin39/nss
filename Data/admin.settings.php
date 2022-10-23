



    
	<!-- Begin page content -->
	<main class="flex-shrink-0">
    	<div class="container">
		    <h1 class="mt-5"><?= $fullName; ?>, <br><h4 class="text-secondary">edit your profile</h4></h1>
		    <p class="bd-lead">Current time is ...</p>
		    <p class="bd-lead"><span id="show_date" class="text-danger"></span>.</p>
	
			<div class="row justify-content-center">
				<div class="col-md-5">
					<div class="card" style="width: 18rem;">
						<?php if (isset($_GET['pass']) && !empty($_GET['pass'])): ?>
						<div class="card-body">
							<form method="POST" action="adminsettings.php">
								<div class="mb-2">
									<input type="password" class="form-control" name="old_password"  id="old_password" placeholder="Enter Old Password" value="<?= $old_password; ?>">
								</div>
								<div class="mb-2">
									<input type="password" class="form-control" name="password"  id="password" placeholder="Enter New Password" value="<?= $password; ?>">
								</div>
								<div class="mb-2">
									<input type="password" class="form-control" name="confirm"  id="confirm" placeholder="Enter Confirm New Password" value="<?= $confirm; ?>">
								</div>
								<div class="mb-2">
									<input type="submit" class="btn btn-secondary" name="submit_password" value="Change Password" id="submit_password">
								</div>
							</form>
						</div>
						<div class="card-body">
					    	<a href="settings.php" class="card-link">Settings</a><br>
					    	<a href="settings.php?profile=1" class="card-link">Change profile image</a>
					  	</div>
						<?php elseif (isset($_GET['profile']) && !empty($_GET['profile'])): ?>
						<div class="card-body">
							<form method="POST" action="settings.php?profile=1" enctype="formdata">
								<div class="mb-1">
									<input type="file" class="form-control" name="file" id="file">
								</div>
								<div class="mb-1">
									<input type="submit" class="btn btn-secondary" name="submit_file" value="Update profile image" id="submit_file">
								</div>
							</form>
						</div>
						<div class="card-body">
					    	<a href="settings.php" class="card-link">Settings</a><br>
					    	<a href="settings.php?pass=1" class="card-link">Change password</a>
					  	</div>
						<?php else: ?>
						<div class="card-body">
							<div class="form">
								<form method="POST" action="settings.php">
									<div class="mb-2">
										<input type="text" name="full_name" id="full_name" class="form-control" placeholder="Enter your full name here ..." required value="<?= $full_name = ((isset($_POST['full_name']))?sanitize($_POST["full_name"]):$fullName); ?>">
									</div>
									<div class="mb-2">
										<input type="email" name="email" id="email" class="form-control" placeholder="Enter your full name here ..." required value="<?= $full_name = ((isset($_POST['full_name']))?sanitize($_POST["full_name"]):$row["email"]); ?>">
									</div>
									<div class="mb-2">
										<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Edit your profile">
									</div>
								</form>
							</div>
					    </div>
						<div class="card-body">
					    	<a href="settings.php?pass=1" class="card-link">Change password</a><br>
					    	<a href="settings.php?profile=1" class="card-link">Change profile image</a>
					  	</div>
					  	<?php endif ?>
					</div>
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