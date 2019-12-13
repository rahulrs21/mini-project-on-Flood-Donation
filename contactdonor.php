<?php include('contactdonornext.php');?>
<!DOCTYPE html>

<html>
<head>
	<title>contact</title>
     <link rel="stylesheet" type="text/css" href="frontpage.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="frontpage.js">
  </script>

	<style>
    .btn{
  display: block;
   width: 30%;
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


		input[type=text],input[type=mail],select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}
input[type=tel] {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}


form{
  margin-left:500px;
  margin-right:500px;
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background:url(img/contact.jpg);
  background-size:cover;
  padding: 20px;
}


<style>
      /* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}
.minbutton{
  margin-top:-68px;
  margin-left:10px;
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
a{
  text-decoration: none;
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
  <form action="contactdonornext.php" method="post">

    <label for="name"> Name</label>
    <input type="text" id="name" name="name" placeholder="Your name.." required>

    

    <label for="state">State</label>
    <select id="country" name="country" required>
      <option value="Karnataka">Karnataka</option>
      <option value="Andra Pradesh">Andhra Pradesh</option>
      <option value="Kerala">Kerala</option>
        <option value="Tamil Nadu">Tamilu Nadu</option>
      <option value="Panjab">Panjab</option>
      

    </select>


      <label for="phno">Mobile Number</label>
    <input type="tel" id="mobno" name="mobileno" placeholder="Mobile No." required>


    <label for="altphno">Alternative Mobile Number</label>
    <input type="tel" id="mobno" name="altmobileno" placeholder=" Alt. Mobile No.">


         <label for="email">Email Address</label>
    <input type="mail" id="email" name="email" placeholder="Email" required>


         <label for="alemail">Alternative Email Address</label>
    <input type="mail" id="altmail" name="altmail" placeholder="Alternative email">

    <label for="subject">Thing you wishes to Donate</label>
    <input type="text" name="thing" placeholder="Thing you wishes to doante" required></input>


    <label for="subject">Address</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>
   

    
<button type="submit" class="btn" name="contact" style="color:white; background-color:green;font-style: bold;"><a href="floodrelated.html" style="color:white";>GO BACK</a></button>
<div class="minbutton">
    <center><button type="submit" class="btn" name="contact" style="color:white; background-color:green;font-style: bold;">DONATE</button>
    </center>
  </div>

  </form>
</div>


</body>
</html>