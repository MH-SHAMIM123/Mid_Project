<?php
session_start();
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>homepage</title>
</head>
<body>
	<form action="checksecurity_system.php" method="POST">
	<table border ='1' border="2" width="60%" >
			 <tr>	
				<td>

                 <a href="homepage.php"><img src="image/f.png" height="80" ></a>



            </td>
       
            <td colspan='2'align="right">
			
                 <a href = "homepage.php" name="username" > <?php echo $_COOKIE['uname']; ?></a>
            
        </td>
		</tr>
		
		<tr>		
			<td>
			<b>ADMIN</b>
			<hr>
				<ul>
				<a href="homepage.php"><li>Home Page</li></a>
                    <a href="profile.php"><li>View Profile</li></a>
                    <a href="edit_profile.php"><li>Edit Profile</li></a>
                    <a href="check_data.php"><li>Check Data</li></a>
                    <a href="volunteer.php"><li>View Customer</li></a>
                    <a href="select_volunteer.php"><li>Select Customer</li></a>
                    <a href="comment.php"><li>Can comments</li></a>
                    <a href="post.php"><li>Offer</li></a>
                    <a href="notification.php"><li>Check Notification</li></a>
                    <a href="help_center.php"><li>Help Center</li></a>
                    <a href="notification.php"><li>Check Notification</li></a>
                    <a href="consumer.php"><li>View Amount</li></a>
                    <a href="security_system.php"><li>Security System</li></a>
                    <a href="logout.php"><li>Logout</li></a>
                    
				</ul>
			</td>
			<td width=80%>
			
			<fieldset>
						<legend><b>Change Password</b></legend>
						<table>
                            <tr>
								<td>Current Password</td>
								<td>:</td>
								<td><input name="curPass" type="password"></td>
							</tr>
							<tr>
								<td>New Password</td>
								<td>:</td>
								<td><input name="newPass" type="password"></td>
							</tr>
							<tr>
								<td>Confirm Password</td>
								<td>:</td>
								<td><input name="confPass" type="password"></td>
							</tr>
							</table>
							<hr>
							
			              <input type="submit" name="submit" value="Submit">
						   </fieldset>
				</tr>			
			</table>		
    </form>		
</body>
</html