
<?php

$error=""; $msg=""; $msg1="";

if (isset($_POST['forgot'])) {
	
	$email = mysqli_real_escape_string($dbcon,$_POST['email']);

	$query = "SELECT id FROM users WHERE email='$email'";
	$run = mysqli_query($dbcon,$query);
    
    if (mysqli_num_rows($run) > 0) {
    	$row = mysqli_fetch_array($run);
    	$id = $row['id'];
    	$token = "AbzxsdertyqwopukmnbvchgfhMAZX&MNLKPRTY1234567890#$&%";
        $token = str_shuffle($token);
        $token = substr($token, 0, 15);

//=to send email to user
        $to = $email;
    	$sub = "Reset Password<br>";
    	$msg = "Please click on the given link to reset your password <br>";
    	$msg .= "<a href='http://localhost/forgetpass/reset_password.php?id=$id&token=$token'>reset_password.php?id=$id&token=$token</a><br>";
    	$header = "From : Saten Chauhan";
    	$send = mail($to,$sub,$msg,$header);

    	$query="UPDATE users SET token='$token' WHERE id=$id";
    	$run = mysqli_query($dbcon,$query);
    	
    	$msg1 ="<div class='alert alert-success' style='color:green;'>Please check your E-mail to reset your new password</div>";
    	
    }else{

    	$error=  "<div class='alert alert-danger' style='color:red;'>Your E-mail address is not exists</div>";
    }


}