<html>
<head>
<title>Registraion Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
table{
  font-family: Lucida Sans; 
  color:black; 
  font-size: 13pt; 
  font-style: normal;
  font-weight: bold;
  margin-top: 40px;
  border-radius: 25px;
  border-collapse: collapse; 
  border: 2px 
  ;
}
body {
  background-color: #17202A;
}
#type{
width: 10px;
height: 100px;
}
.cap{
color: white;
}
td{

color: white;
}
.w3-input{
border-radius:10px;
height: 35px;
width: 300px;
}
.place{
width: 200px;
color: white;
height: 40px;
 border-radius:10px;
 border: 0;
}

</style>
</head>
 <?php
 $link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"bypassfarmer");

 if(isset($_POST["login1"])){
	   $name=$_POST["name"];
    $pass=$_POST["pass"];
	$que="SELECT * FROM signin WHERE name='$name' && password='$pass'" ;
	$query=mysqli_query($link,$que);
	
	$rowcount=mysqli_num_rows($query);
	if($rowcount==true){
		$_POST['name']=$name;
		$url="postfarmer.php?name=".$name;
		header("Location:".$url);
		exit();
		
	}else{
		header("Location: bypassfarmer_loginfarmer.php");
		 
	}
   }
   
 
   
?>
<body background="wheat3.jpg">
<form name="form" action="bypassfarmer_loginfarmer.php" method="post">

<table  style="background-color:rgba(92, 191, 191, 0.6);" align="center"  width= "500" height="300" cellpa dding="10">
<caption class="cap"><h1>Login Farmer</h1></caption>
<tr>
<td>Name </td>
<td><input class="w3-input" type= "text" name="name" id="name"></td>
</tr>
<tr><td>Password</td>
<td colspan= "3" ><input class="w3-input" type= "text" name="pass" id="pass"></td>
</tr>

<tr><td colspan="1" align="center"><button name="login1" type="submit" style="background-color:rgba(18, 14, 81, 0.6);" class="place" >login</button></td>
<td colspan="1" >
<button  onclick="location.href='bypassfarmer_Signupfarmer.html'" type="button" style="background-color:rgba(18, 14, 81, 0.6);" class="place" >SignUp</button>
</td></tr>
</table>
<script >
function validate(){
if(document.form.username.value == ""){
alert("Enter the Username");
return false;
}
   if (!/^[a-zA-Z]*$/g.test(document.form.username.value)) {
        alert("Please enter Alphabets");
        document.form.usernamename.focus();
        return false;
}
 var p1=form.Password.value;
        var p2=form.Confirm.value;
if(document.form.Password.value == ""){
alert("Enter the Password");
return false;
}


}


</script>
</body>
</html>