<?php

$error=""; $error1=""; $error2=""; $msg="";

if(isset($_GET['id']) && isset($_GET['token'])){

	$id = mysqli_real_escape_string($dbcon,$_GET['id']);
	$token = mysqli_real_escape_string($dbcon,$_GET['token']);

	$query = "SELECT * FROM users WHERE id=$id AND token='$token'";
	$run = mysqli_query($dbcon,$query);

}else{

	header("Location:login.php");
}

if (isset($_POST['reset'])) {
	
	$password = mysqli_real_escape_string($dbcon,$_POST['password']);
	$cpassword = mysqli_real_escape_string($dbcon,$_POST['cpassword']);

    if (empty($password) || empty($cpassword)) {

		$error = "<div class='alert alert-danger' style='color:red;'>All The Fields are required !!</div>";

	}elseif(strlen($password) < 6 ) {

		$error=  "<div class='alert alert-danger' style='color:red;'>Your password must be atleast 6 characters !!</div>";
		$error1 =  "<span style='color:red; float:right;'>Your password must be atleast 6 characters !!</span>";

	}elseif($password != $cpassword) {
		
		$error2 = "<span style='color:red; float:right;'>Your password do not match !!</span>";

	}else{

		$pass = password_hash($password, PASSWORD_DEFAULT);
		$query = "UPDATE users SET password='$pass' WHERE id='$id'";
		mysqli_query($dbcon,$query);

		$msg =  "<div class='alert alert-success' style='color:green;'>Your new password has been reset please click on<a href='login.php'><b>&nbsp;Login Again</b></a></div>";
	}

}

// else{

// 		$error= "<div class='alert alert-danger' style='color:red;'>Please check your e-mail inbox</div>";
// 	}