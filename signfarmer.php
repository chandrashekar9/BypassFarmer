<?php
$host='localhost';
$user='root';
$pass='';
$db='bypassfarmer';
$a=filter_input(INPUT_POST,'Firstname');
$b=filter_input(INPUT_POST,'Password');
$c=filter_input(INPUT_POST,'Email');
$d=filter_input(INPUT_POST,'Mobile');
$e=filter_input(INPUT_POST,'Yaddress');
$f=filter_input(INPUT_POST,'City');
$g=filter_input(INPUT_POST,'State');
$h=filter_input(INPUT_POST,'Zipcode');
$i=filter_input(INPUT_POST,'country');
$con=new mysqli($host,$user,$pass,$db);
if($con->connect_error)
{     
die("Connection failed: " . $con->connect_error); 
} 
$sql="INSERT INTO signin(name,password,email,mobile,address,city,state,zipcode,country) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i')";

if ($con->query($sql) === TRUE) 
{
    echo "login created";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close();
?>
<html>
<button  style="background-color:rgba(18, 14, 81, 0.6);" class="place" type="button"  onclick="location.href='bypassfarmer_loginfarmer.php'">Go to login page</button>
</html>