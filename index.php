<?php require_once("inc/top.php"); ?>

<body style="padding: 5px;">

 <?php require_once("inc/navbar.php"); ?>
	   <div class="container" style="margin-top: 40px;">
       <div class="container">
         <center><h1 class="bg-primary text-white form-control" style="height: 60px; font-size: 30px;">Home</h1></center>
        <div class="row">
         <div class="col-md-6"><img src="pic/pic32.jpg"  width="100%"></div>
         <div class="col-md-6"><img src="pic/pic37.jpg" width="100%"></div>
        </div>
           <center>
            <div class='alert alert-success w-100' style='color:green;'>
              
            <h2><?php if(isset($_GET['msg'])){ echo "<div class='alert alert-info'><span style='color:green;'>Your Registration has been Completed Successfuly !!</span></div>"; } ?></h2>
              <h3 style='color:green;text-align: center;'>You are logged in</h3>
            <h5>||Welcome&nbsp; <small><b>Pawan Kumar</b></small>||</h5>
            </div>
           </center>  
          <div class="form-group">
           <center>
             <a href="register.php" class="btn btn-primary btn-lg ">Register</a>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <a href="login.php" class="btn btn-primary btn-lg">Login</a>
           </center>   
          </div>
        </div>
	   </div>
</body>
</html>