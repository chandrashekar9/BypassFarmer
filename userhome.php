<!DOCTYPE html>
<html>
<title>Enroute Farmer</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
* {box-sizing: border-box}
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #555;
 
}

.navbar a {
  
  padding: 130px;
  color: white;
 
  font-size: 40px;
  width: 100%; /* Four links of equal widths */
  text-align: center;
}



</style>

<?php
session_start();
if(!isset($_SESSION['name'])){
	header("Location: bypassfarmer_loginuser.php");
	exit();
}
$email=$_SESSION['name'];


$url="myorders.php";


   
?>

<body>
 
<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">Enroute Farmer</h3>
  <a href="userhome.php" class="w3-bar-item w3-button">Home</a>
  <a href="order.php" class="w3-bar-item w3-button">Order</a>
  <?php echo "<a class='w3-bar-item w3-button' style='text-decoration:none' href='$url'>My Orders</a>"; ?>
  
  <a href="aboutus.php" class="w3-bar-item w3-button">About us</a>
</div>
<!-- Page Content -->
<div style="margin-left:25%">
<div class="navbar">
  <a  class="active">Enroute Farmer </a> 
  
 <?php echo "<a style='text-decoration:none' href='logout.php'>Logout</a>";?>
</div>
<div class="highbar">
  <!-- <img src="high.png">-->
</div>
<div>

  <!-- <p> 143 people brought wheat</p>-->
</div>
</div>


      
</body>
</html>