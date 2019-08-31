<!DOCTYPE html>
<html>
<head>
	<title>Signup page</title>
</head>
<body>
	<h1 align="center">Welcome to signup page</h1>
	<h3 align="center">To signup fill all the details asked below all fields are mandatory</h3>
<form action="signupresult.php" method="post">
	<table width="30%" cellspacing="4" border="1" align="center">
		<tr>
			<td align="center"><label><b>NAME</b></label></td>
			<td><input type="text" name="NAME" placeholder="enter your name"></td>
		</tr>
		<tr>
			<td align="center"><label><b>Email id</b></label></td>
			<td><input type="email" name="EMAIL" placeholder="enter email"></td>
		</tr>
		<tr>
			<td align="center"><label><b>Mobile No.</b></label></td>
			<td><input type="text" name="MOBILE" placeholder="enter mobile number"></td>
		</tr>
		<tr>
			<td align="center"><label><b>Password</b></label></td>
			<td><input type="password" name="PASSWORD" placeholder="enter password"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="signin"></td>
		</tr>
	</table>
</form>
</body>
</html>