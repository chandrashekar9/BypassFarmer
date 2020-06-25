<!DOCTYPE html>
<html>
  <head>
    <title>Enroute Farmer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
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
      html, body {
      height: 100%;
      }
      body, input, select { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }
      h1, h3 {
      font-weight: 400;
      }
      h1 {
      font-size: 32px;
      }
      h3 {
      color: #1c87c9;
      }
      .main-block, .info {
      display: flex;
      flex-direction: column;
      }
      .main-block {
      justify-content: center;
      align-items: center;
      width: 100%; 
      min-height: 100%;
      background: url("farmer.jpeg") no-repeat center;
      background-size: cover;
      }
      form {
      width: 80%; 
      padding: 25px;
      margin-bottom: 20px;
      background: rgba(0, 0, 0, 0.9);
      }
      input, select {
      padding: 5px;
      margin-bottom: 20px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option {
      background: black; 
      border: none;
      }
      .metod {
      display: flex; 
      }
      input[type=radio] {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin-right: 20px;
      text-indent: 32px;
      cursor: pointer;
      }
      label.radio:before {
      content: "";
      position: absolute;
      top: -1px;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #1c87c9;
      }
      label.radio:after {
      content: "";
      position: absolute;
      width: 8px;
      height: 4px;
      top: 5px;
      left: 5px;
      border-bottom: 3px solid #1c87c9;
      border-left: 3px solid #1c87c9;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      button {
      display: block;
      width: 200px;
      padding: 10px;
      margin: 20px auto 0;
      border: none;
      border-radius: 5px; 
      background: #1c87c9; 
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      }
      button:hover {
      background: #095484;
      }
      @media (min-width: 568px) {
      .info {
      flex-flow: row wrap;
      justify-content: space-between;
      }
      input {
      width: 46%;
      }
      input.fname {
      width: 100%;
      }
      select {
      width: 48%;
      }
      }
    </style>
  </head>
  <body>
  <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">Enroute Farmer</h3>
  <a href="userhome.php" class="w3-bar-item w3-button">Home</a>
  <a href="order.php" class="w3-bar-item w3-button">Order</a>
   <a href="myorders.php" class="w3-bar-item w3-button">My orders</a>
  <a href="aboutus.php" class="w3-bar-item w3-button">About us</a>
</div>

<div  style="margin-left:25%">
<div class="navbar">
  <a  class="active">Enroute Farmer </a> 
  <?php echo "<a style='text-decoration:none' href='logout.php'>Logout</a>";?>
  </div>
  <div class="main-block">
 <h1 style="color:black;">Order Form</h1>
      <form action="orderdb.php" method="POST">
        <div class="info">
          <input class="fname" type="text" name="name" placeholder="Full name">
          <input type="text" name="email" placeholder="Email">
          <input type="text" name="phone" placeholder="Phone number">
          <input type="text" name="cropname" placeholder="crop name">
           <input type="text" name="farmername" placeholder="farmername">
          <input type="text" name="location" placeholder=" location">
		 
          
<select name="weight">
            <option value="number" disabled selected>Weight in KG</option>
            
            <option value="2kg">1</option>
            <option value="3kg">2</option>
            <option value="4kg">3</option>
            <option value="4kg">4</option>
            <option value="5kg">5</option>
            <option value="6kg">6</option>
          </select> 
          <select name="time">
            <option value="time" disabled selected>Pick up time(only for pickup users)</option>
            <option value="8">8:00am</option>
            <option value="9">9:00am</option>
            <option value="10">10:00am</option>
            <option value="12">12:00pm</option>
            <option value="1">1:00pm</option>
            <option value="3">3:00pm</option>
            <option value="6">6:00pm</option>
            <option value="7">7:00pm</option>
          </select> 
		   <select name="weather">
            <option value="time" disabled selected>weather</option>
            <option value="Summer">Summer</option>
            <option value="winter">winter</option>
            <option value="rainy">rainy</option>
            
          </select> 
        </div>
        <h3>Delivery Metod</h3>
        <div class="metod">
          <div> 
            <input type="radio" value="1" id="radioOne" name="pick" checked/>
            <label for="radioOne" class="radio">For pick up</label>
          </div>
          <div>
          
        </div>
          
        </div>
        <button href="/" class="button">Submit</button>
      </form>
    </div>
	 </div>
  </body>
</html>