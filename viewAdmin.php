<?php 


include ("includes/header.php");

include("connection.php");






?>



<style type="text/css">
	body {
		background: beige;
		background-image: url(media/HOS.jpg);
		background-size: cover;
	
	}
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user.index.php">Home</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="user.complain.php">Complain</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link text-secondary" href="viewAdmin.php">Contact Admins</a>
                        </li>
                      
                            <li>
                                <a class="dropdown-item" href="user.profile.php">Profile</a>
                            </li>
                            
                            <li>
                                <a class="dropdown-item" href="teacher_login.php">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        
    </nav>
	<!-- Begin page content -->
	<main class="flex-shrink-0">
    	<div class="container">
		    <p class="bd-lead">Current time is ...</p>
		    <p class="bd-lead"><span id="show_date" class="text-danger"></span>.</p>
		    <p class="bd-lead"><span id="show_date" class="text-danger"></span>.</p>
	
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="card mb-3">
						<div class="row g-0">
						    <div class="col-md-4">
						      	<img src="media/DAV.jpEg" class="img-fluid rounded-start" alt="...">
						    </div>
						    <div class="col-md-8">
						      	<div class="card-body">
						        	<h5 class="card-title">Admin profile</h5>
						        	<ul class="list-group list-group-flush">
									    <li class="list-group-item">
									    	Full name: <b class="text-muted">OWUSU DAVID</b>
									    </li>
									    <li class="list-group-item">
									    	Email: <b class="text-muted">davidowusu604@gmail.com</b>
									    </li>
									    <li class="list-group-item">
									    	CONTACT: <b class="text-muted">055 581 9649</b>
									    </li>
									</ul>
			
									
						      	</div>
						    </div>
						</div>
					</div>
					<!-- <div class="card" style="width: 18rem;">
						<img src="media/profile.jpg" class="card-img-top" alt="...">
						<div class="card-body">
					    </div>
					    <ul class="list-group list-group-flush">
						    <li class="list-group-item">
						    	Schedule starts at: <b class="text-muted">12 : 00 PM</b>
						    </li>
						    <li class="list-group-item">
						    	Schedule ends at: <b class="text-muted">12 : 00 AM</b>
						    </li>
						    <li class="list-group-item">
						    	Duties: <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</small>
						    </li>
						</ul>
						<div class="card-body">
					    	<a href="profile" class="card-link">Profile</a>
    						<a href="logout.php" class="card-link">Logout</a>
					  	</div>
					</div> -->
				</div>
			</div>

                         <!-------------------adminOne-->
            <main class="flex-shrink-0">
    	<div class="container">
		    
		    <p class="bd-lead"><span id="show_date" class="text-danger"></span>.</p>
		    <p class="bd-lead"><span id="show_date" class="text-danger"></span>.</p>
	
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="card mb-3">
						<div class="row g-0">
						    <div class="col-md-4">
						      	<img src="media/GOR.jpeg" class="img-fluid rounded-start" alt="...">
						    </div>
						    <div class="col-md-8">
						      	<div class="card-body">
						        	<h5 class="card-title">Admin profile</h5>
						        	<ul class="list-group list-group-flush">
									    <li class="list-group-item">
									    	Full name: <b class="text-muted">Gorden Yenba-uuno Naah</b>
									    </li>
									    <li class="list-group-item">
									    	Email: <b class="text-muted">naahyenbauunogorden@gmail.com</b>
									    </li>
									    <li class="list-group-item">
									    	CONTACT: <b class="text-muted"> 020 452 4609</b>
									    </li>
									</ul>
						      	</div>
						    </div>
						</div>
					</div>

   
		    

	    </div>
		

                         <!------------------------------------------------------------------------------------------------------->

<main class="flex-shrink-0">
    	<div class="container">
		    
		    <p class="bd-lead"><span id="show_date" class="text-danger"></span>.</p>
		    <p class="bd-lead"><span id="show_date" class="text-danger"></span>.</p>
	
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="card mb-3">
						<div class="row g-0">
						    <div class="col-md-4">
						      	<img src="media/dan.jpeg" class="img-fluid rounded-start" alt="...">
						    </div>
						    <div class="col-md-8">
						      	<div class="card-body">
						        	<h5 class="card-title">Admin profile</h5>
						        	<ul class="list-group list-group-flush">
									    <li class="list-group-item">
									    	Full name: <b class="text-muted">OWURAKU DANSO</b>
									    </li>
									    <li class="list-group-item">
									    	Email: <b class="text-muted">dansofrimpongowuraku165@gmail.com</b>
									    </li>
									    <li class="list-group-item">
									    	CONTACT: <b class="text-muted"> 054 608 3635</b>
									    </li>
									</ul>
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