<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>

table{
	border-collapse: collapse;
	width: 100%;
}


button{
  display: block;
   width: 7%;
   height: 50px;
   border-radius: 25px;
   margin:1rem 0;
   font-size: 1.2rem;
   outline:none;
   border:none;
   background-image: linear-gradient(to right,#32be8f,#38d39f,#32be8f);
   cursor:pointer;
   color:#fff;
    font-family: 'Poppins',sans-serif;
    background-size:200%;
    transition: .5s;
    text-transform: uppercase;




}
#add{
  position: relative;
  top:30px;
  right: 0px;
  width: 160px;
  left: 1100px;
  color: gray;
  background-color: pink;
}
a{
	text-decoration: none;
}
th,td{
	text-align: left;
	padding: 8px;
	text-align: center;
}
tr:nth-child(even){
	background-color: white;
}
tr:nth-child(odd){
	background-color: #f1f3f4;
}
th{
	background-color: #009688;
	color: white;
}
body{
	background:url(img/donor.jfif);
	background-size:cover;
}

</style>
</head>
<center><h3 style="font-weight:bold;color:white">DONOR'S DETAIL</h3></center>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "donate";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name,country,mobileno,altmobileno,emailid,altemailid,donatethings,address FROM finaldonation";
$result = $conn->query($sql);

if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}


if ($result->num_rows > 0) { 
    echo "<table><tr><th>NAME</th><th>STATE</th><th>MOBILE NO</th><th>ALT. MOBILE NO</th><th>EMAIL ID</th><th>ALT. EMAIL ID</th><th>THINGS TO DONATE</th><th>ADDRESS</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["country"]."</td><td>" . $row["mobileno"]."</td><td>" . $row["altmobileno"]."</td><td>" . $row["emailid"]."</td><td>" . $row["altemailid"]."</td><td>" . $row["donatethings"]."</td><td>" . $row["address"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "<table><tr><th>NO DONOR FOUND requested</th></tr></table>";
}

$conn->close();
?> 

<center><button style="margin-top:20px;"><a href="frontpage.html">GO BACK</a></button></center>
<body>
<button id="add"><a href="adminadd.php">ADD FLOOD DETAILS</a></button>
<!--<button id="add"><a href="admindelete.php">DELETE FLOOD DETAILS</a></button>-->

</body>
</html>