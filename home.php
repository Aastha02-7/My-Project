<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE</title>
</head>
<body>
<h1 align="center">WELCOME TO MY DYNAMIC WEBSITE <br /><br /></h1>
<h3 align="center">Existing users can login and users new to site can signup using the below options<br /></h3>
<form action="login.php" method="post">
	<table bgcolor="yellow" border="1" align="center" width="30%" cellpadding="12">
		<tr>
		     <td align="center"><lable><b>Email</b></lable></td>
		     <td align="center"><input type="email" name="EMAIL" placeholder="enter email"></td>
		</tr>
		<tr>
			<td align="center"><label><b>Password</b></label></td>
			<td align="center"><input type="password" name="PASSWORD" placeholder="enter password"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="Login"></td>
		</tr>
	</table>
</form>
<p align="center">click here to <b><a href="signup.php">sign up</a></b></p>
</body>
</html>