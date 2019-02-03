<?php

$error=""; $fmsg1 =""; $fmsg2 ="";  $umsg =""; $umsg2 =""; $emsg =""; 
$emsg2=""; $fname=""; $username =""; $email=""; $msg ="";

if (isset($_GET['edit'])) {

  $edit_id = $_GET['edit'];
  $edit_query = "SELECT * FROM users WHERE id ='$edit_id'";
  $run= mysqli_query($dbcon,$edit_query);
  if(mysqli_num_rows($run) > 0){
    $row=mysqli_fetch_array($run);
    $fname = $row['name'];
    $username = $row['username'];
    $email = $row['email'];  
         
  }else{

    header("Location:dashboard.php");
  }

}else{

  header("Location:dashboard.php");
}


if (isset($_POST['update'])) {
  
  $fullname = mysqli_real_escape_string($dbcon,$_POST['fullname']);
  $username = mysqli_real_escape_string($dbcon,$_POST['username']);
  $email = mysqli_real_escape_string($dbcon,$_POST['email']);

     if(empty($fullname)){
        $fmsg1 = "<span class='float-right' style='color:red;'>Please enter full name ! Required !!</span>";
      }else if(empty($username)){
         $umsg = "<span class='float-right' style='color:red;'>Please enter username ! Required !!</span>";
      }else if (strlen($username) < 4 ) {
         $error="<div class='alert alert-danger' style='color:red;'>The Username must be at least 4 characters !!</div>";
         $umsg2 = "<span class='float-right' style='color:red;'>The Username must be at least 4 characters !!</span>";
      }else if(empty($email)){
         $emsg = "<span class='float-right' style='color:red;'>Please enter e-mail address ! Required !!</span>";
      }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $error="<div class='alert alert-danger' style='color:red;'>The E-mail address is invalid !!</div>";
         $emsg2 = "<span class='float-right' style='color:red;'>Please enter valid e-mail address !!</span>";
      }else{

          $query = "UPDATE users SET name='$fullname', username='$username', email='$email' WHERE id='$edit_id'";
          mysqli_query($dbcon,$query);
          if(mysqli_query($dbcon,$query)){
             $msg = "<div class='alert alert-success'><span style='color:green;'>Your details has been updated !!</span></div>";
          }else{
            $error = "<div class='alert alert-success'><span style='color:red;'>User data has not been updated !!</span></div>";
         }
     }
}

?>