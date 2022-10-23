<?php 

	// Make Date Redable
	function pretty_date($date){
		return date("M d, Y h:i A", strtotime($date));
	}
	
// Check For Incorrect Input Of Data
	function sanitize($dirty) {
		return htmlentities($dirty, ENT_QUOTES, "UTF-8");
	}

	// GET USER IP ADDRESS
	function getIPAddress() {  
	    //whether ip is from the share internet  
	    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {  
	        $ip = $_SERVER['HTTP_CLIENT_IP'];  
	    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  // whether ip is from the proxy
	       $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
	     } else {  // whether ip is from the remote address 
	        $ip = $_SERVER['REMOTE_ADDR'];  
	    }  
	    return $ip;  
	}

	// PRINT OUT RANDAM NUMBERS
	function digit_random($digits) {
	  	return rand(pow(10, $digits - 1) - 1, pow(10, $digits) - 1);
	}
	 














	// Sessions For User login
	function userLogin($user_id) {
		$_SESSION['user_id'] = $user_id;
		global $conn;
		$data = array(
			':last_login' => date("Y-m-d H:i:s"),
			':user_id' => (int)$user_id
		);
		$query = "UPDATE users SET last_login = :last_login WHERE user_id = :user_id";
		$statement = $conn->prepare($query);
		$result = $statement->execute($data);
		if (isset($result)) {
			$_SESSION['flash_success'] = 'You are now logged in!';
			echo '<script>window.location = "'.PROOT.'index.php";</script>';
		}
	}

	function userChecker($user_id) {
		$_SESSION['user_id'] = $user_id;
		echo '<script>window.location = "'.PROOT.'onb/pin";</script>';
	}

	function userIsLogin(){
		if (isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0) {
			return true;
		}
		return false;
	}

	// Redirect If not Logged in
	function userLoginErrorRedirect($url = 'login.php') {
		$_SESSION['flash_error'] = 'Oops... you must be logged in to access that page.';
		echo '<script>window.location = "'.PROOT.$url.'";</script>';
	}

	// LOG USER OUT AFTER !% MINS OF IDLENESS
	function automaticallyLogUserOut() {
		// 900 = 15 * 60 
		if ((time() - $_SESSION['last_login_timestamp']) > 900) {  
            $_SESSION['flash_error'] = 'You have been logout because, you have been idle for sometime.';
			echo '<script>window.location = "'.PROOT.'onb/logout";</script>'; 
        } 
	}














	///////////////////////////////////////// ADMIN
	function adminLogin($admin_id) {
		$_SESSION['admin_id'] = $admin_id;
		global $conn;
		$data = array(
			':last_login' => date("Y-m-d H:i:s"),
			':admin_id' => (int)$admin_id
		);
		$query = "UPDATE admin SET last_login = :last_login WHERE admin_id = :admin_id";
		$statement = $conn->prepare($query);
		$result = $statement->execute($data);
		if (isset($result)) {
			$_SESSION['flash_success'] = 'You are now logged in!';
			echo '<script>window.location = "'.PROOT.'admin.index.php";</script>';
		}
	}

	function adminIsLogin(){
		if (isset($_SESSION['admin_id']) && $_SESSION['admin_id'] > 0) {
			return true;
		}
		return false;
	}

	// Redirect If not Logged in
	function adminLoginErrorRedirect($url = 'admin.login.php') {
		$_SESSION['flash_error'] = 'Oops... you must be logged in to access that page.';
		echo '<script>window.location = "'.PROOT.$url.'";</script>';
	}




















	// GET ALL USERS
	function get_all_users() {
		global $conn;
		$output = '';

		$userQ = "
			SELECT * FROM users 
			ORDER BY user_id DESC
		";
		$statement = $conn->prepare($userQ);
		$statement->execute();
		$user_result = $statement->fetchAll();
		$user_count = $statement->rowCount();

		if ($user_count > 0) {
			foreach ($user_result as $user_row) {
				$output .= '
					<tr>
						<td>'.ucwords($user_row["full_name"]).'</td>
						<td>'.$user_row["email"].'</td>
						<td>'.pretty_date($user_row["joined_date"]).'</td>
						<td>'.pretty_date($user_row["last_login"]).'</td>
						<td>
							<a class="small" href="admin.users.php?delete='.$user_row["user_id"].'">Delete</a>
						</td>
					</tr>
				';
			}
		} else {
			$output .= '
					<tr>
						<td colspan="4">No data found!</td>
					</tr>
				';
		}
		return $output;
	}


	
	// GET ALL COMPLAINS
	function get_all_complains() {
		global $conn;
		$output = '';

		$complainQ = "
			SELECT * FROM complains 
			INNER JOIN users 
			ON users.user_id = complains.user_id 
			ORDER BY complain_id DESC
		";
		$statement = $conn->prepare($complainQ);
		$statement->execute();
		$complain_result = $statement->fetchAll();
		$complain_count = $statement->rowCount();

		if ($complain_count > 0) {
			foreach ($complain_result as $complain_row) {
				$output .= '
					<tr>
						<td>'.ucwords($complain_row['full_name']).'</td>
						<td>'.$complain_row['user_msg'].'</td>
						<td>'.$complain_row['admin_response'].'</td>
						<td>'.pretty_date($complain_row['complain_date']).'</td>
				';
				if ($complain_row['admin_response'] == '') {
					$output .= '
						<td>
							<a href="admin.complains.php?reply='.$complain_row['complain_id'].'">reply</a>
						</td>
					';
				} else {
					$output .= '
						<td>
						</td>
					';
				}
				$output .= '</tr>';
			}
		} else {
			$output .= '
					<tr>
						<td colspan="4">No data found!</td>
					</tr>
				';
		}
		return $output;
	}



	
	// SCHEDULE
	function schedule() {
		global $conn;
		$output = '';

		$complainQ = "
			SELECT * FROM users 
			INNER JOIN schedules 
			ON users.user_id = schedules.user_id 
		";
		$statement = $conn->prepare($complainQ);
		$statement->execute();
		$schedule_result = $statement->fetchAll();
		$schedule_count = $statement->rowCount();

		if ($schedule_count > 0) {
			foreach ($schedule_result as $schedule_row) {
				$output .= '
					<tr>
						<td>'.ucwords($schedule_row['full_name']).'</td>
						<td>'.$schedule_row['todo'].'</td>
						<td>'.$schedule_row['start_time'].'</td>
						<td>'.$schedule_row['end_time'].'</td>
						<td><a href="admin.schedule.php?update='.$schedule_row['id'].'">update</a></td>
					</tr>
				';
			}
		} else {
			$output .= '
					<tr>
						<td colspan="4">No data found!</td>
					</tr>
				';
		}
		return $output;
	}


?>