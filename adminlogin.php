<?php
session_start();        
 $errors = array(); 

 $db=mysqli_connect('localhost','root','','donate');
 if(isset($_POST['adminlogin']))
 {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
 $password_1 = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) { array_push($errors, "Username is required"); }
if (empty($password_1)) { array_push($errors, "Password is required"); }
  

    if (count($errors) == 0) {
    $password = md5($password_1);
    $query = "SELECT * FROM  adminlogin WHERE username='$username' AND password='$password_1'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location:adminaccess.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

 