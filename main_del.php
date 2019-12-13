<?php
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'donate');

	$place=$_GET['place'];
$content=$_GET['content'];

	$sql="DELETE FROM addsubplace WHERE place='$place'";

	$res=mysqli_query($db,$sql);
	$sql1="DELETE FROM addplace WHERE head='$place'";
	$res1=mysqli_query($db,$sql1);
	echo"<script>alert('deleted successfully!!!');</script>";
header('location:mainview.php');
	




?>