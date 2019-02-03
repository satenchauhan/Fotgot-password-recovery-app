<?php require_once("inc/top.php"); 
      require_once("inc/reset.php"); ?>

<body>
    <?php require_once("inc/navbar.php"); ?>
      <div class="container w-50" style="margin-top: 80px;">
       <center><h1 class="bg-primary text-white form-control" style="height: 60px; font-size: 30px;">Reset Password</h1></center><br>
        <form action="" method="POST">
          <center><?php echo  $error; ?><?php echo  $msg; ?></center>
         <div class="form-group">
          <label class="password">Password:</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password">
          <?php echo  $error1; ?>
         </div>
         <div class="form-group">
          <label class="cpassword">Confirm Password:</label>
          <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Re-Enter Your Password">
          <?php echo  $error2; ?>
         </div><br><br>
         <div class="form-group">
          <center><button type="submit" name="reset" class="btn btn-primary">Reset Password</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <button class="btn btn-primary "><a href="index.php" class="text-white">Cancel</a></button> 
          </center>
         </div>
        </form>
       </div>
</body>
</html>