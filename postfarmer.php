<!DOCTYPE html>
<html>
<head>
<title>Enroute Farmer</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
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
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      line-height: 42px;
      font-size: 42px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 25px 0 #d6e0f5; 
      }
      .banner {
      position: relative;
      height: 300px;
      background-image: url("farmer2.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.3); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
          .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #d6e0f5;
      color: #d6e0f5;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 28px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #0087cc;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #6eb8dd;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
          }
    </style>


</head>
 
<!-- <?php
$name=$_GET['name'];

$url="ordersbyusers.php?name=".$name;

?> -->


<body>
 
<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">Enroute Farmer</h3>
  <a href="contact.php" class="w3-bar-item w3-button">Don't kow how to post crops</a>
  <a href="postfarmer.php" class="w3-bar-item w3-button">Home</a>

  <a href="http://localhost:8888/notebooks/tarpfinal.ipynb" class="w3-bar-item w3-button">Prediction of next buyer</a>
 

  <?php echo "<a href='$url'  class='w3-bar-item w3-button'>Orders by users</a>"?>
  <a href="aboutus.php" class="w3-bar-item w3-button">About Us</a>
    <a href="bypassfarmer_loginfarmer.php" class="w3-bar-item w3-button">Logout</a>
</div>
<!-- Page Content -->

<div  style="margin-left:25%">
 <div class="testbox">
      <form form action="postfarmerdb.php" method="POST">
	 
       
		<div><p align="center" style="font-size:50px;">Enroute Farmer</p><br></div>
     <div><p style="font-size:30px;" align="center">crop sale post</p></div>
        
          <p><b>Farmer - name</b></p>
          <div class="name-item">
            <input type="text" name="name" placeholder="Name" />
            </div>
			
        
		<div class="item">
		<p>Crop Name</p>
			<input type="text" name="cropname" placeholder="Cropname" />
          
        </div>
        <div class="item">
          <p>Phone</p>
          <input type="text" name="phone" placeholder="### ### ####"/>
        </div>
        <div class="item">
          <p><b>crop production date</b></p>
          <input type="date" name="bdate" required/>
          <i class="fas fa-calendar-alt"></i>
        </div>

        <div class="item">
          <p><b>Price</b></p>
          <input type="text" name="price" placeholder="Price/kg"/>
        </div>
        <h3>Delivery Metod</h3>
        <div class="metod">
          <div>
		  
            <input type="radio" value="1" id="radioTwo" name="delivery" checked/>
            <label for="radioTwo" class="radio">For delivery</label>
          </div>
        </div>
         <div class="item">
          <p>Additional notes</p>
          <textarea name="note" rows="3"></textarea>
        </div>
         <div class="btn-block">
          <button type="submit" href="/">Send</button>
        </div>
      </form>
    </div>
	 </div>

   

      
</body>
</html>
