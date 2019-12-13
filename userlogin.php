<?php include('user_login.php');?>
<!DOCTYPE html>
<html>
<head>
   <title>register</title>
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <link rel="stylesheet" type="text/css" href="userlogin2.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Play">
    <script type="text/javascript" src="https://kit.fontawesome.com/a81368914c.js"></script>
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
  <div class="login-container">
    <form action="userlogin.php" method="post">

     <?php include('errorsregister.php'); ?>
     <img class="avatar" src="personimage.png">
     <h2>WELCOME</h2>
     <div class="input-div one focus">
      <div class="i">
        <i class="fas fa-user"></i>
      </div>
      
      <div>

        <h5>Username</h5>
        <input class="input" type="text" name="username" placeholder="username">
      </div>
    </div>
    <div class="input-div two focus">
      <div class="i">
         <i class="fas fa-lock"></i>
       </div>
       <div>  
        <h5>Password</h5>
         <input class="input" type="password" name="pass" placeholder="password">
       </div>
     </div>
    
        <button type="submit" class="btn" name="userlogin">Login</button>
     
         <div id="container-one">
            
            Don't have account?<a href="signup.php">Sign Up</a>
         </div>
        </form>
      </div>
    </div>
    <script type="text/javascript" src="userlogin.js"></script>
</body>
</html>