<?php
if(isset($_POST['submit']))
{
	header("location:home.html");

}
if(isset($_POST['submit']))
{
	header("location:add.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title><style type="text/css">
		body{
			background-image: url(img/poo3.jfif);
		background-size: cover;
		background-repeat: no-repeat;
		}
		.prod1{
			display: block;
			border-width: 100px;
			border-collapse: collapse;
			background-color: green;
		}
		table
		{
			border-collapse: collapse;
			display: block;
			box-sizing: 100px 100px;
			border-collapse: collapse;
			width: 750px;
			color:black;
			font-family:manospace;
			font-size: 15px;
			text-align: center;
			padding-right: 10px;
			padding: 4px 30px 4px 8px;
			margin-top: 10%;
			position: absolute;
			top:-110px;
			left: 10px;
			opacity: 0.7;

	
		}
		table th {
			text-align: left;
			padding-right: 50px;
			padding-left: 70px;
			border-width: 10px;
			border-radius: 2px;
			border:1px solid black;
			background-color: blue;
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

		#edit{
			color:red;
			background-color: yellow;
			width:100px;
			height: 40px;
			border-radius: 5px;
			box-shadow: 2px 3px  gray;
		}
		p
		{
			text-align: center;
			color:red;
			text-shadow: 2px 3px gray;
			font-size: 40px;
		}
		#btn1
		{
			color:brown;
			background-color: lightgreen;
			width:140px;
			height: 50px;
			}table
		{
			display: block;
			box-sizing: 100px 100px;
			border-collapse: collapse;
			width: 100%;
			color:blue;
			font-family:manospace;
			font-size: 25px;
			text-align: center;
			padding-right: 80px;
			padding: 4px 30px 4px 8px;
			position: relative;
			top:-100px;
			left:100px;
	


		}
		table th {
			text-align: left;
			padding-right: 50px;
			padding-left: 50px;
			border-width: 10px;
			border-radius: 2px;
			border:1px solid black;
			background-color: aqua;
			padding-top: 10px;
			padding-bottom: 10px;




			
		}

		#btn1{
			color: pink;
background-color: dodgerblue;
			width:180px;
			height: 50px;
			border-radius: 10px;
			float: left;
			position: relative;
			top:-40px;
			left:1050px;
			font-size: 16px;

		} 
		table tr td {
			padding-top: 0px;
			border-width: 1px;
			text-align: left;
			padding-right: 10px;
			padding-left: 10px;
			border-width: 10px;
			border-radius: 2px;
			border:1px solid black;
			background-color: lavender;
			text-align: center;
			font-size: 18px;
			color:black;
			padding-bottom: 0px;
		}
		#del{
			color:blue;
			background-color: pink;
			width:100px;
			height: 40px;
			border-radius: 5px;
			box-shadow: 2px 3px gray;
		padding-left: 0px;

			
			
		}
		#btn2
		{
			color:brown;
			background-color: skyblue;
			width:120px;
			height: 50px;
			border-radius: 10px;
			float: left;
			position: absolute;
			top:30px;
			left:100px;


		}
	</style>
</head>
<body>
	<form method="post"action="addsale.php">
<strong><p>FLOOD AREA DETAILS</p></strong>


	<?php
	$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'donate');


	$sql="SELECT head,content from addplace";
	$result=mysqli_query($db, $sql);
	if($result->num_rows>0)
	{echo"<table>
	<tr><th><strong>MAIN AREA</strong></th><th><strong>DETAILS</strong></th><th><strong> DELETE</strong></th></tr>";
		while($row=$result->fetch_assoc())
		{

			echo "<tr><td><strong>".$row['head']."</strong></td><td><strong>".$row['content']."</strong></td>";
			echo"<td><button id='del'><a href='main_del.php?place=$row[head]&content=$row[content]'style='text-decoration:none;color:red;'>DELETE</a></button> " ;
			
			echo"</td>";
			

			
			
			echo "</tr>";
			}
		
		echo"</table>";
	}
	else
	{
		echo"<p style='font-size:30px;text-align:center;'>DETAILS EMPTY</p>";
	}
	mysqli_close($db);
	?>
</table>

<a href="adminadd.php"><input type="button" name="" value="BACK" id="btn2" style="color:black;"></a>
</form>

</body>
</html>