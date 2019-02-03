<?php 
require_once("inc/top.php"); 
require_once('inc/login.php');
 
?>

<body>

  <?php require_once("inc/navbar.php"); ?>

		   <div class="container w-50 " style="margin-top: 80px">
       <center><h1 class="bg-primary text-white form-control" style="height: 60px; font-size: 30px;">Login</h1></center><br>
      
        <form action="" method="POST">
          <center><?php echo $error; ?></center>
           <div class="form-group">
             <label class="email">Email:</label>
             <input type="text" class="form-control" value="<?php echo $email ?>" name="email" id="email" placeholder="exampl@gmail.com">
            <?php echo $msg1; ?><?php echo $msg3; ?>
           </div>
           <div class="form-group">
              <label class="password">Password:</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password">
            <?php echo $msg2; ?><?php echo $msg5; ?>

           </div><br><br>
           <div class="form-group">
            <center><input type="submit" name="login" class="btn btn-primary" value="Login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary"><a href="index.php" class="text-white">Back to Home</a></button><br><br>
            <a href="forget_password.php" class="primary">Forgot Password ?</a></center>
           </div>
          </form>
         </div>
</body>
</html>