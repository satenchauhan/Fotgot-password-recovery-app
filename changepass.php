<?php require_once("inc/top.php"); 
      require_once("inc/change.php"); ?>

<body>
    <?php require_once("inc/navbar.php"); ?>
      <div class="container w-50" style="margin-top: 100px;">
       <center><h1 class="bg-primary text-white form-control" style="height: 60px; font-size: 30px;">Change Password</h1></center><br>
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
          <center><button type="submit" name="change" class="btn btn-primary">Save Change</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <button class="btn btn-primary "><a href="profile.php" class="text-white">Cancel</a></button> 
          </center>
         </div>
        </form>
       </div>
</body>
</html>