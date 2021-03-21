<?php

session_start();
if(isset($_COOKIE['checkRemember']))
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>



        <table border ="1" width=70% align="center">

            
<tr>
    <th colspan="3"><img width="70" align="left"   height="80" src="image/f.png">
     
     <a href="registration.html" >Registration</a>

</tr>
<tr height="250px">
    <td width="100">

	
	
		<fieldset>
			<legend>LOGIN</legend>
			<form action="loginCheck.php" method="POST">
		<table>
			<tr>
				<td>User Name :</td>
				<td><input type="text" name="username" value =""></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="password" value =""></td>
			
			</tr>

		</table>
		
		<hr>
			<input type="checkbox" name="checkRemember" >Remember Me
			<br><br>
			<input type="submit" name="submit" value="Submit"> <a href="forgotpassword.html">Forgot Password?</a> 
			
	
		</fieldset>
	</form>
</body>
</html>
                
