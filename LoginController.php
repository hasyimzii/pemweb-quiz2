<?php
    if(isset($_POST['login'])){
 
		session_start();
		include '_main.php';
 
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		// check user existance
		$query = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' && password='$password'");
		
		// id not exist
		if (mysqli_num_rows($query) == 0){
			$_SESSION['message'] = "*Login Failed. User not Found!";
			header('location:login.php');
		}
		// if exist
		else{
			$row = mysqli_fetch_array($query);
 
			if (isset($_POST['remember'])){
				//set up cookie
				setcookie("username", $row['username'], time() + (86400 * 30)); 
				setcookie("password", $row['password'], time() + (86400 * 30)); 
			}
 
			$_SESSION['id'] = encrypt($row['id']);
			header('location:index.php');
		}
	}
	// if not login
	else{
		header('location:login.php');
		$_SESSION['message'] = "*Please Login!";
	}
?>
