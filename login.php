<?php  
	$EMAIL=$_POST['EMAIL'];
	$PASSWORD=$_POST['PASSWORD'];
$con= mysqli_connect("localhost","root","","test");
$q= "SELECT*FROM login WHERE email='$EMAIL' AND password='$PASSWORD'";
$result= mysqli_query($con,$q);
$count=mysqli_num_rows($result);
if ($count==1) {
	$conn= mysqli_connect("localhost","root","","test");
	$s= "SELECT*FROM user";
	$resu= mysqli_query($conn,$s);
	echo '<h1 align="center">welcome to dashboard</h1>';
}
else{
	echo '<h1 align="center">You have not sinned up with us please <a href="signup.php">sign up</a> first or either email or password is incorrect try <a href="home.php">login</a> again</h1> ';
}
?>