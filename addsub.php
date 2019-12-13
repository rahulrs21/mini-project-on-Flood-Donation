<?php
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'donate');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $head = mysqli_real_escape_string($db, $_POST['head']);

  $content= mysqli_real_escape_string($db, $_POST['content']);

  $image = mysqli_real_escape_string($db, $_POST['image']);
  
   $name = mysqli_real_escape_string($db, $_POST['name']);


/*$user_name=$_POST["username"
$user_password=$_POST["password"];
$user_cpassword=$_POST["cpassword"];*/


if(empty($content)||empty($image)||empty($name))
{
	echo"<script>alert('please enter valid information');</script>";
}

else{

$sql="INSERT into addsubplace(place,subplacename,content,image)values('$name','$head','$content','$image');";

$result = mysqli_query($db, $sql);
 if($result)
 {
 	echo"<script>alert('successfully added!!...');</script>";
 }
else
{
	echo"<script>alert('Failed..!!');</script>";
}


}
}

mysqli_close($db);
?>
<html>
<head>
	<style type="text/css">
		body{
			background:url(img/poo3.jfif);

			
		background-size: cover;
		background-repeat: no-repeat;
		
		}
		.prod1{
			display: block;
			border-width: 100px;
			border-collapse: collapse;
			background-color: green;
			border-radius: 20px;
			border-radius: 20px;

		}
		table
		{
			border-collapse: collapse;
			display: block;
			box-sizing: 100px 100px;
			border-collapse: collapse;
			width: 100%;
			color:black;
			font-family:manospace;
			font-size: 15px;
			text-align: center;
			padding-right: 180px;
			padding: 4px 30px 4px 8px;
			margin-top: 10%;
			position: absolute;
			top:-70px;
			left: 450px;
			opacity: 0.7;
			border-radius: 40px;


	
		}
		table th {
			text-align: left;
			padding-right: 50px;
			padding-left: 70px;
			border-width: 10px;
			border-radius: 2px;
			border:1px solid black;
			background-color: orange;
			padding: 20px 10px;

}
table tr td {
			border-width: 3px;
			text-align: left;
			padding-right: 10px;
			padding-left: 70px;
			border-width: 10px;
			border-radius: 2px;
			border:1px solid black;
			background-color: white;
			font-size: 18px;
			color:black;
			padding: 30px 20px;
			position: center;
			background-color: lightgray;
		

}

#add{
font-size: 20px;
			color:maroon;
			text-shadow: 5px;
			background-color:lime; 
			margin-bottom: 30px;
			padding :10px;
border-radius: 10px;
width: 180px;
box-shadow: 1px 1px 10px gray;
}

#back{
	font-size: 20px;
			color:maroon;
			text-shadow: 5px;
			background-color:pink; 
			margin-bottom: 30px;
			padding :10px;
border-radius: 10px;
width: 120px;
box-shadow: 1px 1px 10px gray;
position: absolute;
top:30px;
left: 30px;
}
#view{
	font-size: 20px;
			color:maroon;
			text-shadow: 5px;
			background-color:pink; 
			margin-bottom: 20px;
			padding :10px;
border-radius: 10px;
width: 120px;
box-shadow: 1px 1px 10px gray;
position: absolute;
top:90px;
left: 30px;
}

	</style>
	</head>
	<body>
		<table>
		<form method="post" action="addsub.php">
		<div class="prod1">
			<tr><td colspan="2" style="text-align: center;font-color:blue;font-size: 20px;color: blue;font-size: 30px;"><Strong>ADD NEW DETAILS</Strong></td></tr>
			<tr><td><strong>Main Place:</strong><input type="text" name="name"placeholder="enter header"style="width:400px;height:30px;"></center></td></tr>
			<tr><td><center><strong><label> SubplaceNAME:</label></strong><input type="text" name="head"placeholder="enter header"style="width:400px;height:30px;"></center></td></tr>
			<tr><td ><center><strong><label>CONTENT:</label></strong><input type="text" name="content"placeholder="enter content" style="width: 320px;height: 50px;"></center></td></tr>
	        <tr><center><td colspan="2"><center><strong>Choose Image :<input type="file" name="image"placeholder="choose image"></strong></center></strong></td></center></tr>
	     
			<tr><td colspan="2"style="text-align: center;"><input type="submit" name="submit" value="ADD"id="add"></td></tr>
		</div>
		</form>
	</table>

<button><a href="adminadd.php" id="back" style="text-decoration: none;">BACK<a></button><br><br><br><br><br>
	<br>
	<button><a href="adminviewdet.php" id="view" style="text-decoration: none;">VIEW</a></button>

		</body>
	</html>
