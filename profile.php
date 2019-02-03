<?php require_once("inc/top.php");
if(!isset($_SESSION['username'])){ 
  header("Location:login.php");
}

    $session_username = $_SESSION['username'];

    $query = "SELECT * FROM users WHERE name ='$session_username'";
    $run = mysqli_query($dbcon,$query);
    $row = mysqli_fetch_array($run);
    $id =  $row['id'];
    $name = $row['name'];
    $username = $row['username'];
    $email = $row['email'];
    $image = $row['image'];

?>

<body>
<div id="container">
<!-- ================= NAVBAR CONTENTS=============-->
  <?php include("inc/navbar.php"); ?>
        <div class="container-fluid body-section" style="margin-top: 30px;">
    <center>
      <div><br>
      <a href="logout.php" class="btn btn-primary float-right">Logout</a>

      <h4 style='color:green;text-align: center;'><?php if(isset($_GET['login'])){ echo "You are Logged in !! Congratulations !!";}   ?></h4>
      
      <h5>|| Welcome&nbsp;<small><b><?php if(isset($_SESSION['username'])){echo $_SESSION['username'];} ?> </b></small> ||</h5>
      </div>
    </center>
    <div class="row">
<!-- =================PAGE CONTENTS================== -->
    <div class="col-md-12">
      <h1><i style="color: #013243;" class="fa fa-user ft-c"></i> Profile <small style="font-size: 25px;"> Personal Details</small></h1><hr>
    <div class="row">
    <div class="col-sm-12">
     <span class="float-right">
      <a href="edit.php?edit=<?php echo $id; ?>" class="btn btn-outline-primary float-right" >Edit Profile</a><br><br><a href="changepass.php?id=<?php echo $id; ?>" class="btn btn-outline-primary ">Change Password</a>
     </span>
    <center><img src="dbpic/<?php echo $image; ?>" style="width:40%; box-shadow: 0px 0px 15px 1px rgba(61,57,61,0.97);" class="img-thumbnail" name="profile-image" id="profile-image"></center><br><br>
      <div>

        
      <center><h3>Profile Details</h3></center><br>
       </div>
         <table class="table table-bordered">
           <tr>
             <th width="10%" class="bg-success text-white"><b>User ID:</b></th>
             <td width="10%"><?php echo $id ?></td>
             <td width="10%" class="bg-success text-white"><b>Full Name:</b></td>
             <td width="10%"><?php echo $name ?></td>
           </tr>
           <tr>
             <td width="10%" class="bg-success text-white"><b>Username:</b></td>
             <td width="10%"><?php echo ucfirst($username); ?></td>
             <td width="10%" class="bg-success text-white"><b>E-mail:</b></td>
             <td width="10%"><?php echo $email ?></td>
           </tr>
         </table>
      
         </div>
        </div>
       </div>
      </div>  
   
