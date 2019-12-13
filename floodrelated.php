<!DOCTYPE html>
<html lang="en">
<head>
  <title> flood</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X_UA_Comapatible" contents="ie=edge">
  <link rel="stylesheet" type="text/css" href="floodrelated.css">
<script type="text/javascript" src="frontpage.js"></script>
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>

      /* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
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
.slides{
  margin-top:10px;
  margin-left:100px;
}
a:hover{
  text-decoration: none;
}
.slides1{
  margin-top:10px;
  margin-left:100px;
}a{
  text-transform: uppercase;
}

.container table,th,tr{
  margin-bottom:100px;
}
    </style>
</head>
<body>
  <div class="topnav" id="myTopnav">
 
  
  <a href="frontpage.html" style="background-color:green;">LOGOUT</a>
  

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a> 
</div>

<div class="container">
      <div class="row justify-content-center">
        <table>
          
          <?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'donate');
$sql="SELECT head,content,image,more,details from addplace";
$result = mysqli_query($db, $sql);
  //$user = mysqli_fetch_assoc($result);
$count=$result->num_rows;
//echo$count;
$i=0;
  if($result->num_rows>0)
  {
echo"<tr>";
    while($row=$result->fetch_assoc())
    {
        $i++;
          echo"<td><div class='col-md-4'>
          <div class='card shadow' style='width: 20rem';>
            <div class='inner'>";
           echo"<img src='".$row['image']."' class='card-img-top' >";  
  //<img src='add1.php' class='card-img-top' alt='keralaimage'>
echo"</div>
  <div class='card-body text-center'>
    <strong><h5 class='card-title'>".$row['head']."</h5></strong>
    <p class='card-text'>".$row['content']."</p>
    <a href='keraladetails.php?more=$row[more]&details=$row[details]&name=$row[head]' class='btn btn-success'>Learn More.....</a>
  </div>
</div>
</div></td>";
$count--;
if($i%3==0)
{
  echo"</tr><tr>";
}
//echo"</tr>";
}


echo"</tr>";
}
echo"</table>";

   ?>    


  <tr>
    <th>
   <button type="submit" class="btn" name="reg_user" style="position: absolute;top:30px;left:-20px;"><a href=frontpage.html style="">GO BACK</a></button>  </th>
   <th> 
   <center><button type="submit" class="btn" name="reg_user"style="position: absolute;top:30px;right:80px;"><a href=contactdonor.php>DONATE</a></button></center>
 </th>
</tr>

  </tr>
</tr>
</table>
</div>
</div>


  
 <script type="text/javascript">carousel();</script>

</body>
</html>



