<?php require_once('inc/function.php');

$error =""; $msg=""; $pmsg =""; $nmsg =""; $umsg =""; $emsg =""; $imgmsg ="";
$name=""; $username=""; $email=""; $pass=""; $cpass="";


if (isset($_POST['register'])) {

    $name = mysqli_real_escape_string($dbcon,ucwords($_POST['name']));
    //$fullname = preg_match("/^[a-zA-Z]/", $name);
    $uname = mysqli_real_escape_string($dbcon,strtolower($_POST['username']));
    $username = preg_replace('/\s+/','',$uname);
    $email = mysqli_real_escape_string($dbcon,strtolower($_POST['email']));
    $pass =  mysqli_real_escape_string($dbcon,$_POST['password']);
    $cpass =  mysqli_real_escape_string($dbcon,$_POST['cpassword']);

   /* $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_tmp, "./dbpic/$image");*/

    if(empty($name) || empty($username) || empty($email) || empty($pass) || empty($cpass) ){
      $error = "<div class='alert alert-info'><span style='color:red;'>All The Fields are Required !!</span></div>";
    }else if($pass != $cpass){
       $error = "<div class='alert alert-info'><span style='color:red;'>The Password does not match !!</span></div>";
       $pmsg ="<span class='float-right' style='color:red;'>Please Check Your Password</span>";
    }else if(strlen($pass) < 5){
       $error = "<div class='alert alert-info'><span style='color:red;'>The Password must contain atleast 5 characters !!</span></div>";
       $pmsg = "<span class='float-right' style='color:red;'>The Password must contain atleast 5 characters</span>";
    }else if(strlen($name) < 4){
       $error = "<div class='alert alert-info'><span style='color:red;'>The Full Name must contain atleast 4 characters !!</span></div>";
       $nmsg = "<span class='float-right' style='color:red;'>The Full Name must contain atleast 4 characters</span>";
    }else if(strlen($username) < 3){
       $error = "<div class='alert alert-info'><span style='color:red;'>The Username must contain atleast 3 characters</span></div>";
       $umsg = "<span class='float-right' style='color:red;'>The Username must contain atleast 3 characters</span>";
    }elseif (username_exists($username,$dbcon)) {
      $umsg = "<span class='float-right' style='color:red;'>The Username already exists</span>";
    }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
      $error = "<div class='alert alert-info'><span style='color:red;'>Please Enter Valid E-mail Address !!</span></div>";
      $emsg = "<span class='float-right' style='color:red;'>Please Enter Valid E-mail Address !!</span>";
    }else if (email_exists($email,$dbcon)){
       $emsg = "<span class='float-right' style='color:red;'>Email already exists !!</span>";
    /*else if(empty($image)) {
      $error = "<div class='alert alert-info'><span style='color:red;'>Please Upload Image !!</span></div>";
      $imgmsg = "<span class='float-right' style='color:red;'>Please Upload Image !!</span>";*/
    }else{
      $token = "$y$10AbzxsdertyqwopukmnbvchgfhMAZX&MNLKPRTY1234567890#$&%";
      $token = str_shuffle($token);
      $token = substr($token, 0, 15);
      $hashed_pass = password_hash($pass,PASSWORD_DEFAULT); 
      $query = "INSERT INTO users (name,username,email,password,token,image) VALUES('$name','$username','$email','$hashed_pass','$token','market.png')";
      $run = mysqli_query($dbcon,$query);
      header('Location:index.php?msg');
      //$msg = "<div class='alert alert-info'><span style='color:green;'>Your Registration has been Completed Successfuly !!</span></div>"; 
       

         
    }
 }

?>


    
