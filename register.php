<?php require_once("inc/top.php");
      require_once("inc/register.php");

?>

<body>

 <?php require_once("inc/navbar.php"); ?>
		<div class="container w-50" style="margin-top: 80px">
    <center><h1 class="bg-primary text-white form-control" style="height: 60px; font-size: 30px;">Register</h1></center>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" id="name" class="form-control" name="name" value="<?php echo $name; ?>" placeholder="Enter Full Name">
          <?php echo $nmsg; ?>
         </div>
         <div class="form-group ">
         <label for="username">Username:</label>
          <input type="text" id="username" class="form-control" name="username" value="<?php echo $username; ?>" placeholder="Enter Username">
          <?php echo $umsg; ?>
         </div>
         <div class="form-group">
          <label for="email">E-mail:</label>
          <input type="text" id="email" class="form-control" value="<?php echo $email; ?>" name="email"  placeholder=" Enter E-mail Address">
          <?php echo $emsg; ?>
         </div>
         <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" class="form-control" value="<?php echo $pass; ?>" name="password" placeholder=" Enter Password">
          <?php echo $pmsg; ?>
         </div>
         <div class="form-group">
          <label for="cpassword">Password:</label>
          <input type="password" id="cpassword" class="form-control" value="<?php echo $cpass; ?>" name="cpassword" placeholder="Re-Enter Password">
          <?php echo $pmsg; ?>
         </div> 
         <center><input type="submit" name="register" value="Register" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" class="btn btn-primary">
         Cancel</a>
         </center>             
      </form>
      </div>   
</body>
</html>
