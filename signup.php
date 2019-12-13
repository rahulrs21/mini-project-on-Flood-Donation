<?php include('signupnext.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Play">
  <script type="text/javascript" src="frontpage.js"></script>
	<style>
     @media screen and (max-width: 500px) {
        .signup
        {
         margin-left:65px;
        }
      }

      @media screen and (max-width: 800px) {
        .signup
        {
          
        }
      }
		@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
	</style>
</head>


<body>

	<div class="topnav" id="myTopnav">
 <a href="aboutus.html">About Us</a>
   <a href="userlogin.php">User Login</a>
   <a href="adminloginfirst.php">Admin Login</a>
    <a href="signup.php">Register</a>
  <a href="frontpage.html" >Home</a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a> 

</div>


   

  <div class="container">
  <div class="img">
    <img src="imagephone.png">
  </div>
  <div class="login-conatiner">

     <form action="signup.php" method="post">
      <?php include('errorsregister.php'); ?>
      <img class="avatar" src="personimage.png">
     <h2>SIGN UP</h2>
     <div class="input-div one focus">
      <div class="i">
        <i class="fas fa-user"></i>
      </div>
      <div>
   		<input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
    </div>
  </div>
  <div class="input-div two focus">
      <div class="i">
         <i class="fas fa-lock"></i>
       </div>
       <div>

   		<input type="email" name="email" placeholder="Email"
      value="<?php echo $email; ?>">
    </div>
  </div>
  <div class="input-div three focus">
      <div class="i">
         <i class="fas fa-lock"></i>
       </div>
       <div>
   		<input type="password" name="password_1" placeholder="Password" minlength='6' required >
    </div>
  </div>
  <div class="input-div four focus">
      <div class="i">
         <i class="fas fa-lock"></i>
       </div>
       <div>
   		<input type="password" name="password_2" placeholder="Confirm Password" minlength="6" required><br>
   		</div>
    </div>
   		<div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button><br>
    </div>
    

      <div class="bottom">Already have an account?<a href="userlogin.php">Log in</a>
      </div>
   	 </form>
   </div>
<script type="text/javascript" src="userlogin.js"></script>
</body>
</html>