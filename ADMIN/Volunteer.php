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
			
			
			
<h2 align="center">View Customer Details </h2>
<table border ='1' border="2" width="60%" align="center" >
  <tr>
    <th>NAME</th>
    <th>ID</th>
    <th>Phone Number</th>
     <th>Email Adress</th>
  </tr>
  <tr>
    <td>Mahmud Eashen</td>
    <td>01</td>
    <td>01746789345</td>
    <td>Eashen@gmail.com</td>

  </tr>
  <tr>
    <td>Rahim</td>
    <td>02</td>
    <td>01746679378</td>
    <td>rahim@gmail.com</td>

  </tr>
   <tr>
    <td>karim</td>
    <td>03</td>
    <td>01346679398</td>
    <td>karim@gmail.com</td>

  </tr>

   <tr>
    <td>Mila</td>
    <td>04</td>
    <td>01744479378</td>
    <td>mila@gmail.com</td>

  </tr>
   <tr>
    <td>Shila</td>
    <td>05</td>
    <td>01714657937</td>
    <td>shila@gmail.com</td>

  </tr>
	


</table><br><br>







			
			
			
			</table>
				
    </form>		
</body>
</html