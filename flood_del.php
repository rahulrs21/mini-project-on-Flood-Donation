<?php
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'donate');

	$place=$_GET['place'];
$sub=$_GET['sub'];

	$sql="DELETE FROM addsubplace WHERE place='$place'and subplacename='$sub'";
	$res=mysqli_query($db,$sql);
	echo"<script>alert('deleted successfully!!!');</script>";
	header('location:addsub.php');
	




mysqli_query($db,$q);
header('location:addsale.php');
?>