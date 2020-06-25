<html>
<head>
<title>Registraion Form</title>


 <?php
 if(isset($_POST["login1"])){
	 $name=$_POST["Email"];
	 $pass=$_POST["pass"];
 }
 

    

  
   
?>
<body >
<form name="form" action="twotwo.php" method="post" id="id2" >

<table  style="background-color:rgba(92, 191, 191, 0.6);" align="center"  width= "500" height="300" cellpadding="10">
<caption class="cap"><h1>Login User</h1></caption>
<tr>
<td>Email Address</td>
<td><input class="w3-input" type= "text" name="Email" id="Email"></td>
</tr>




<tr><td>Password</td>
<td colspan= "3" ><input class="w3-input" type= "text" name="pass" id="pass"></td>
</tr>





<tr><td colspan="1" align="center"><button name="login1" type="submit" style="background-color:rgba(18, 14, 81, 0.6);" class="place" >login</button></td>
<td colspan="1" >
<button  onclick="location.href='bypassfarmer_Signupuser.html'" type="button" style="background-color:rgba(18, 14, 81, 0.6);" class="place" >SignUp</button>
</td></tr>
</table>

</body>
</html>