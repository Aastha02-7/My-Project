<?php 
	$NAME = $_POST['NAME'];
	$EMAIL = $_POST['EMAIL'];
	$MOBILE = $_POST['MOBILE'];
	$PASSWORD = $_POST['PASSWORD'];
$con= mysqli_connect("localhost","root","","test");
$q="INSERT INTO login (email,password)  VALUES('$EMAIL','$PASSWORD');";
$result= mysqli_query($con,$q);
$num_result=$result;
$conn= mysqli_connect("localhost","root","","test");
$s= "INSERT INTO user (name,email,Mobile) VALUES('$NAME','$EMAIL','$MOBILE')";
$resu= mysqli_query($conn,$s);
$num_resu=$resu;
if ($result and $resu) {
	echo '<h1 align="center">You have successfully sign up <br /><br /></h1><p align="center">Please return to home page for <a href="home.php">login</a></p>';
}
else
{
	echo '<h1 align="center">Currently we are facing some issue plese try again later</h1>';
}
?>