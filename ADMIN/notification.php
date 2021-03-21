<?php
session_start();
	
	 
?>



<!DOCTYPE html>
<html>
<head>
	<title>homepage</title>
</head>
<body>
	
	<table border ='1' border="2" width="60%" >
			 <tr>	
				<td>

                 <a href="homepage.php"><img src="image/f.png" height="80"></a>



            </td>
       
            <td colspan='2'align="right">
			
                 <a href = "profile.php" name="username" > <?php echo $_COOKIE['uname']; ?></a>
            
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
		
			<li>Admin aprove your status ..... </li><br>
			<li>Rasel cheakIn 10 Feb 2021 ..... </li><br>
			<li>Mahmudul cheakIn 1 March 2021 ..... </li><br>
			<li>Rasel Payment 2000 taka ..... </li><br>
			<li>Admin reply your comments ..... </li><br>

			
			
			
			
			</table>
				
    </form>		
</body>
</html