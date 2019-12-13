<?php
session_start();

// initializing variables

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'donate');


if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// REGISTER USER
if (isset($_POST['contact'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['name']);

$country = mysqli_real_escape_string($db, $_POST['country']);

$mobileno = mysqli_real_escape_string($db, $_POST['mobileno']);

$altmob = mysqli_real_escape_string($db, $_POST['altmobileno']);


  $email = mysqli_real_escape_string($db, $_POST['email']);

  $altemail = mysqli_real_escape_string($db, $_POST['altmail']);

    $thing = mysqli_real_escape_string($db, $_POST['thing']);

      $address = mysqli_real_escape_string($db, $_POST['subject']);



  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
 

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  
  	$query = "INSERT INTO finaldonation (name,country,mobileno,altmobileno,emailid,altemailid,donatethings,address) 
  			  VALUES('$username', '$country', '$mobileno','$altmob','$email','$altemail','$thing','$address')";
  	if(mysqli_query($db, $query)){
    header('location:thank.html');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
}

mysqli_close($db);
?>