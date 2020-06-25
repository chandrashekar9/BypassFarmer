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
  overflow: auto;
}

.navbar a {
  
  padding: 130px;
  color: white;
 
  font-size: 40px;
  width: 100%; /* Four links of equal widths */
  text-align: center;
}
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 35%;
  padding: 15px 8px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}



/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 25px;
  
  background-color: #f1f1f1;
}
h5    {background-color: red;

}
.place{
width: 200px;
color: white;
height: 40px;
 border-radius:10px;
 border: 0;
}

</style>
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">Enroute Farmer</h3>
  <a href="userhome.php" class="w3-bar-item w3-button">Home</a>
  <a href="order.php" class="w3-bar-item w3-button">Order</a>
   <a href="myorders.php" class="w3-bar-item w3-button">My orders</a>
  <a href="aboutus.php" class="w3-bar-item w3-button">About us</a>
</div>

<!-- Page Content -->
<div style="margin-left:25%">
<div class="navbar">
  <a  class="active">Enroute Farmer </a>
<?php echo "<a style='text-decoration:none' href='logout.php'>Logout</a>";?>  
  </div>
  
  <div class="card">
  
  <div class="container">
    <?php
$conn= mysqli_connect('localhost','root','','bypassfarmer');

?>
<?php
$query="SELECT * FROM farmerform WHERE cropname='oats'" ;
$result=mysqli_query($conn,$query);
?>
<?php
while($row=mysqli_fetch_array($result)){
	echo "Farmer Name :{$row['Firstname']}  <br> ".
         "Crop Name : {$row['cropname']} <br> ".
         "Amount per kg : {$row['price']} <br><br> ";
	echo( "<button onclick= \"location.href='orderform.php'\" style=\"background-color:rgba(18, 14, 81, 0.6);\" class=\"place\">Buy</button><br><br>");
echo ("---------------------------------------------------------------------<br>");
}

?>

  </div>
</div>

</body>
</html>



   