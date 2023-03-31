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
  <body>
    <div class="container" style="padding-left: 500px;">
      <div class="forms-container">
        <div class="signin-signup">
          
          <form action="" name="mainID" id="mainID" method="post">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

            <h2 class="title">Sign Up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="name">
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email">
              
            </div>
            
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" id="password">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Conform Password" name="conf_password">
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="number" placeholder="Age" name="age">
            </div>
            <div class="input-field">
              <i class="fas fa-date"></i>
              <input type="date" placeholder="" name="date">
            </div>
            <div class="input-field">
              <i class="fas fa-flag"></i>
              <input type="text" placeholder="Country" name="Country">
            </div>
            <div class="input-field">
              <i class="fas fa-city"></i>
              <input type="text" placeholder="City" name="City">
            </div>
            <div class="input-field">
              <i class="fas fa-chess-queen"></i>
              <input type="text" placeholder="State" name="State">
            </div>
            <div class="input-field">
              <i class=""></i>
              <input type="file" style="padding: 20px; margin-right: 40px;" name="file">
            </div>
            <input type="submit" class="btn" value="Sign up"  name="submit">


            <p class="social-text">Or Sign up with social platforms</p>
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
      </div>

      <div class="panels-container" >
        <div class="panel left-panel" >
          <div class="content">
            <h3>One of us ?</h3>
           <br>
            <a href="login.php"><button class="btn transparent" >
              Sign in
            </button></a>
          </div>
          <img src="img/clip-online-shopping-6.png" class="image" alt="" />
        </div>
      
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/validation.js"></script>


<?php
include "connection.php";

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$age = $_POST['age'];
$Date = $_POST['date'];
$Country = $_POST['Country'];
$City = $_POST['City'];
$State = $_POST['State'];
$file = $_POST['file'];
$query=mysqli_query($con,"INSERT INTO `userlog`(`name`, `email`, `password`, `age` ,`date`,`Country`,`City`,`State`,`file`) VALUES ('$name','$email','$password','$age','$Date','$Country','$City','$State','$file')");
if($query)
{
    echo "<script>alert('You are successfully register');</script>";
}
else
{
  echo "<script>alert('Email Is All Ready Exists');</script>";
}
}

?>