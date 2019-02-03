<?php

function email_exists($email, $dbcon)
{
   $query = "SELECT id FROM users WHERE email='$email'";
   $run = mysqli_query($dbcon, $query);
   
   //print_r($run);

   if(mysqli_num_rows($run) > 0){

       return true;

   }else{

      return false;

   }

}

function username_exists($username ,$dbcon)
{
   $query = "SELECT id FROM users WHERE username = '$username'";
   $run = mysqli_query($dbcon, $query);
   
   if(mysqli_num_rows($run) > 0){

   	 return true;

   }else{

   	return false;

   }
}

function admin_exists($username,$dbcon)
{
   $query = "SELECT id FROM admin WHERE username = '$username'";
   $run = mysqli_query($dbcon, $query);
   
   if(mysqli_num_rows($run) > 0){

       return true;

   }else{

      return false;

   }

}

function pass_exists($password,$dbcon)
{
   $query = "SELECT id FROM users WHERE  password='$password'";
   $run = mysqli_query($dbcon, $query);
   
   if(mysqli_num_rows($run) > 0){

       return true;

   }else{

      return false;

   }

}


/*function auth()
{
   if(isset($_SESSION['username']) || isset($_SESSION['username']))
   {
      return false;

   }else{
      return true;
   }
//}*/




?>