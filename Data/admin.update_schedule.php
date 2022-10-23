<?php 

session_start();
$data = $_SESSION['data'];
include ("config.php");
?>


<!DOCTYPE html>
<html class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>H . S . S</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <style type="text/css">
        .container {
            width: auto;
            max-width: 680px;
            padding: 0 15px;
        }

        .bd-lead {
            font-size: calc(1.275rem + .3vw);
            font-weight: 300;
        }


  	body {
		background: beige;
		background-image: url(media/nan.jpg);
		background-size: cover;
		background-repeat: no-repeat;
	}
    </style>
</head>
<body class="d-flex flex-column h-100">


<div class="container">
		    <h1 class="mt-5">Schedule</h1>
		    <p class="bd-lead">Current time is ...</p>
		    <p class="bd-lead"><span id="show_date" class="text-danger"></span>.</p>
	
			<div class="row">
				<div class="col-12">
					<h4>Update Schedules</h4>



<?php 
$stmt=$db_conn->prepare('SELECT * FROM schedules');
$stmt->execute();
if($stmt->rowCount()>0)
{
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
    extract($row);
?>
    
<form method="POST" action="updateschedule.admin.php">
<div class="mb-2">
<label>Start time</label>
<input type="time" name="start_time" id="time" class="form-control" value="<?php echo $start_time ?>" required>
</div>
<div class="mb-2">
<label>End time</label>
<input type="time" name="end_time" id="end" class="form-control" value="<?php echo $end_time ?>" required>
</div>
<div class="mb-2">
<label>Duties</label>
<textarea type="text" name="todo" id="duties" class="form-control" required><?php echo $todo ?></textarea>
</div>
<div class="mb-2">
<button type="submit" name="submit_update" id="submit_update" class="btn btn-primary">Update</button>
<a href="admin.schedule.php" class="btn btn-light">Cancel</a>
</div>
</form>  
      
            <?php 

                }
            }
             else
          {   
            ?>
                 <div class="not_registered">
                 <b>No voter registered.</b>    
                 </div>
                        <?php
      }
      ?>





	

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



