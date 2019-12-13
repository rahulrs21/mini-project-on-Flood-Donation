<?php
$username = "";
$email    = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'donate');


if (isset($_POST['submit'])) {
  $head = mysqli_real_escape_string($db, $_POST['head']);


if(empty($head))
{
	echo "<script>alert('please enter valid information');</script>";
}

else{

$sql="delete from addplace where head='$head'";
$sql1="delete from addsubplace where place='$head'";


$result = mysqli_query($db, $sql);
$result1=  mysqli_query($db, $sql1);
 if($result||$result1)
 {
 	echo "<script>alert('successfully deleted!!...');</script>";
 }
else
{
	echo "<script>alert('Failed..!!');</script>";
}


}
}

mysqli_close($db);
?>
<html>
<head>
	<style type="text/css">
		body{
			background:url(img/poo3.jfif) ;

			
		background-size: cover;
		background-repeat: no-repeat;
		opacity:1;
		
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
			margin-top: 5%;
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

#delete{
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
	position: relative;
	top:10px;
	left:980px;
	font-size: 20px;
			color:maroon;
			text-shadow: 5px;
			background-color:pink; 
			margin-bottom: 30px;
			padding :10px;
border-radius: 10px;
width: 120px;
box-shadow: 1px 1px 10px gray;
}

	</style>
	</head>
	<body>
		<table>
		<form method="post" action="adminadd.php">
		<div class="prod1">
			<tr><td colspan="2" style="text-align: center;font-color:blue;font-size: 20px;color: blue;font-size: 30px;"><Strong>DELETE THE FLOOD DETAILS</Strong></td></tr><tr><td><center><strong><label> PLEASE ENTER THE PLACE YOU WANT TO DELETE</label></strong><br><input type="text" name="head"style="width:400px;height:30px;"></center></td></tr>
			
			<tr><td colspan="2"style="text-align: center;"><input type="submit" name="submit" value="DELETE"id="delete"></td></tr>
		</div>
		</form>
	</table>

  
	<button id="back"><a  href="adminaccess.php" style="text-decoration: none;">BACK</a></button>

		</body>
	</html>
