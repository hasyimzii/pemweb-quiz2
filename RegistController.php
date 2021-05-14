<?php
    if(isset($_POST['regist'])){
 
		session_start();
		include '_main.php';
 
		$fullname = $_POST['fullname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confpass = $_POST['password'];
 
        
        if(!empty($username) && !empty($password) && !empty($confpass) && !empty($fullname)) {
            // confirm password
            if($password == $confpass) {
                // check username availability
                $check = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

                // if exist
                if(mysqli_num_rows($check) != 0) {
                    $_SESSION['message'] = "*Registration Failed. Username already used!";
                    header('location:regist.php');
                }
                // if available
                else {
                    $query = mysqli_query($conn, "INSERT INTO users(username, password, fullname) VALUES('$username', '$password', '$fullname')");
                    header('location:login.php');
                }
            }
            // confirm password wrong
            else {
                $_SESSION['message'] = "*Registration Failed. Please write the Confirm Password correctly!";
                header('location:regist.php');
            }
        }
    }
?>
