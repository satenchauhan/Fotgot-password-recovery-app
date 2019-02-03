<?php 

require_once("inc/top.php");
require_once("inc/edit.php");


?>
<body>

 <?php require_once("inc/navbar.php"); ?>
	
		<div class="container w-50 " style="margin-top: 80px">
      <center><h1 class="bg-primary text-white form-control" style="height: 60px; font-size: 30px;">Update</h1></center><br>
        <form action="" method="POST">
          <center><?php echo $error; ?><?php echo $msg; ?></center>
          <div class="form-group">
            <label class="fullname">Full Name:</label>
            <input type="text" class="form-control" name="fullname" value="<?php echo $fname; ?>"  id="fullname" placeholder="Enter Your Full Name">
            <?$php echo $fmsg1; ?><?$php echo $fmsg2; ?>
          </div>
          <div class="form-group">
             <label class="username">Username:</label>
            <input type="text" class="form-control" name="username" value="<?php echo $username; ?>"  id="username" placeholder="Enter Your  Username">
            <?$php echo $umsg; ?><?$php echo $umsg2; ?>
           </div>
           <div class="form-group">
             <label class="email">Email:</label>
             <input type="text" class="form-control" name="email" id="email" value="<?php echo $email; ?>"  placeholder="exampl@gmail.com">
             <?$php echo $emsg; ?><?$php echo $emsg2; ?>
           </div>
           <div class="form-group">
               <center><input type="submit" name="update" value="Update" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" class="btn btn-primary">
               Cancel</a>
               </center>
           </div>
          </form>
         </div>
</body>
</html>
