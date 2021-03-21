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
			
			
						
<h2 align="center">View Amount </h2>
<table border ='1' border="2" width="60%" align="center" >
	<th colspan="4">
		<h3>Customer</h3>
  <tr>
    <th>NAME</th>
    <th>DATE</th>
    <th>AMOUNT</th>
     
  </tr>
  <tr>
    <td>Shamim</td>
    <td>01/10/2020</td>
    <td>20000</td>
    

  </tr>


  <tr>
    <td>Rasel</td>
    <td>11/10/2020</td>
    <td>30000</td>
    

  </tr>
 
	


</table><br><br>
 <a href="homepage.php" align="right"><li> Go Home</li></a>






			
			
			
			</table>
				
    </form>		
</body>
</html>
			
			
			
			
			</table>
				
    </form>		
</body>
</html