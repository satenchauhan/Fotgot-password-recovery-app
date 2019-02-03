<?php 

include('function.php');
$error=""; $msg1=""; $msg2=""; $msg3=""; $msg4=""; $msg5=""; $email='';

if (isset($_POST['login'])) {

	$email = mysqli_real_escape_string($dbcon,$_POST['email']);
	$password = mysqli_real_escape_string($dbcon,$_POST['password']);

	if (empty($email)) {
		
		$msg1 = "<span style='color:red;float:right'>Please Enter E-mail Address</span>";

	}elseif (empty($password)) {

		$msg2 = "<span style='color:red;float:right'>Please Enter Your Password</span>";
	}elseif (!email_exists($email,$dbcon)) {

		$error ="<div class='alert alert-danger'><span style='color:red;'>The E-mail address does not exists !!</span></div>";
		$msg3 ="<span style='color:red; float:right;'>The E-mail address does not Exists !!</span>";
	}else{

		$query = "SELECT * FROM users WHERE email='$email'";
		$run=mysqli_query($dbcon,$query);
		mysqli_num_rows($run);
		$row=mysqli_fetch_array($run);
		$db_name = $row['name'];
		$db_username= $row['username'];
		$db_email=$row['email'];
		$dehashed_pass = password_verify($password,$db_pass = $row['password']);
		if($email==$db_email && $dehashed_pass == $db_pass = $row['password']){
			header("Location:profile.php");
			$_SESSION['username']= $db_name;
			$_SESSION['email']= $db_email;

		}else{

			$error ="<div class='alert alert-danger'><span style='color:red;'>The Password does not Match !!</span></div>";
			$msg5 ="<span style='color:red; float:right;'>The Password does not Match !!</span>";

		}
	}
}

