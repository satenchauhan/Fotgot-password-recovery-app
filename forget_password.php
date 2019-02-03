<?php require_once("inc/top.php"); 
require_once("inc/forgot.php"); 

?>

<body>
   <?php require_once("inc/navbar.php"); ?>
      <div class="container w-50" style="margin-top: 80px;">
        <center><h1 class="bg-primary text-white form-control" style="height: 60px; font-size: 30px;">Forget Password</h1></center>
        <form action="" method="POST">
          <center><?php echo $error; ?><?php echo $msg1; ?>
</center><br>
         <div class="form-group">
         <label class="name"><h4 class="bg-default">Enter Your Email Address:</h4></label>
         <input type="text" class="form-control" name="email" id="email" placeholder="Please Enter Your Email Address">

         </div><br>
         <div class="form-group">
          <center><button type="submit" name="forgot" class="btn btn-primary">Request for New Password</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
          <button class="btn btn-primary "><a href="index.php" class="text-white">Cancel</a></button> 
          </center>
         </div>
        </form>
      </div>
      <?php echo $msg; ?>
</body>
</html>

