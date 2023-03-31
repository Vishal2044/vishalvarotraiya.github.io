<?php 
session_start(); 

include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign in & Sign up Form</title>
  </head>
  <div class="container" style="padding-left: 500px;">
    <div class="forms-container">
      <div class="signin-signup">
        
        <form action="" name="mainID" id="mainID" method="post">
            <h2 class="title">Sign In</h2>
    <div class="input-field">
      <i class="far fa-envelope"></i>
      <input type="email" placeholder="Email" name="email">
    </div>
    <div class="input-field">
      <i class="fas fa-lock"></i>
      <input type="password" placeholder="Password" name="password">
    </div>
    <input type="submit" value="Login" class="btn solid" name="sub">
    <p class="social-text">Or Sign in with social platforms</p>
    <div class="social-media">
      <a href="#" class="social-icon">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#" class="social-icon">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#" class="social-icon">
        <i class="fab fa-google"></i>
      </a>
      <a href="#" class="social-icon">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
</form>

</div>
      <div class="panels-container" >
        <div class="panel left-panel" >
          <div class="content">
            <h3>New here ?</h3><br>
            <button class="btn transparent" ><a href="index.php" style="text-decoration: none; color: white;">Sign up</a></button>
          </div>
          <img src="img/clip-online-shopping-6.png" class="image" alt="" />
        </div>
      </div>
    </div>
</div>

  <script src="js/jquery-3.6.0.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/validation.js"></script>


<?php
if(isset($_POST['sub']))
{
  
  $email=$_POST['email'];
  $password=md5($_POST['password']);
  $_SESSION['email'] = "$email";
  $query = mysqli_query($con,"SELECT * FROM userlog WHERE email='$email' AND password = '$password' ");
  $row = mysqli_fetch_array($query);

  if(is_array($row))
  {
    echo "<script>alert('Best');</script>";
    header("Location:infomation.php");  
  }
  else
  {
    echo "<script>alert('Invalid');</script>";  
  }
}

?>