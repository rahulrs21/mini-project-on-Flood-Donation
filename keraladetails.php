<!DOCTYPE html>
<html lang="en">
<head>
  <title> places</title>
  <link rel="stylesheet" type="text/css" href="swiper.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X_UA_Comapatible" contents="ie=edge">
  
  <link rel="stylesheet" type="text/css" href="keralaflood.css">
<script type="text/javascript" src="frontpage.js"></script>
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
      /* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
body{
  background-size: cover;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;

  }
}
.main{
  background:url(img/flood4.jfif);
  background-size:cover;
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
.slides1{
  margin-top:10px;
  margin-left:100px;
}

.main{
  height:130%;
}


body{
  font-family:tohoma;
  overflow-x:hidden;
  

}
 .second{
  float:right;
letter-spacing: 1px;
margin-left:800px;
margin-top:-185px;text-align:justify;
margin-right:20px;
color:white;
font-weight: bold;
}


.btn a:hover{
  text-decoration:none;
}
.swiper-slide
{
  width:400px;
}
a:hover{
  text-decoration: none;
}
h1,.first,.second,.container
{
  opacity:0;
  display:inline-block;
  animation:animate1 1s linear forwards;
}
@keyframes animate1{
  0%
  {
    opacity:0;
    transform:rotateY(-360deg);
    filter:blur(10px);

  }
  50%{
    color:yellow;
  }
  100%{
    opacity:1;
     transform:rotateY(0);
     filter:blur(0);
  }
}
a
{
  text-transform: uppercase;
}

 
      /* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
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


    </style>
</head>
<body>
  <div class="topnav" id="myTopnav">
  <a href="frontpage.html" style="background-color:green;">LOGOUT</a>
  

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a> 

</div>

<div class="main">


<br>
   
     <center><h1 style="font-size:20px;font-weight:bold;color:white"><?php echo $_GET['name'];?> </h1></center><br><br>
<p style="margin-right:800px;text-align:justify;letter-spacing: 1px;margin-left:20px;background-image: url(img/kerala1.jpg);color:white;font-weight:bold;" class="first">
<?php echo $_GET['more'];?>
</p> 
<p class="second "><?php echo $_GET['details'];?>
</p>


 <!--<div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
<div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card " style="width: 20rem;">
            <div class="inner">
  <img src="img/Kerala10.jpg" class="card-img-top" alt="keralaimage">
</div>-->
<?php 
//session_start();
$name=$_GET['name'];
$db = mysqli_connect('localhost', 'root', '', 'donate');
 $sql = "SELECT * FROM addsubplace WHERE place='$name'";
  $result = mysqli_query($db, $sql);
 
    //$user = mysqli_fetch_assoc($result);
$count=$result->num_rows;
//echo$count;
echo"<table>";
$i=0;
  if($result->num_rows>0)
  {
echo"<tr>";
    while($row=$result->fetch_assoc())
    {
        $i++;
    echo"<td><div class='swiper-slide'>
<div class='container' style='padding-left:5px;''>
      <div class='row justify-content-center'>
        <div class='col-md-4'>
          <div class='card '' style='width: 20rem;'>
            <div class='inner' >
  <img src='".$row['image']."' class='card-img-top' alt='keralaimage' >
</div>
  <div class='card-body text-center'>
    <stromg><h5 class='card-title'>".$row['subplacename']."</h5></strong>
    <strong><p class='card-text'>".$row['content']."</p></strong>
    
  </div>
</div>
</div>
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
   <center><button type="submit" class="btn" name="reg_user" id="back"><a href=floodrelated.php>back</a></button></center>
  
 </div>
  <script type="text/javascript" src="swiper.min.js"></script>
  
 <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 30,
        stretch: 0,
        depth: 200,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
 </script>
</div>

<center></center>
 </div>


</body>
</html>