<!DOCTYPE html>
<html>
<head>
	<title>edit_profile</title>
</head>
<body>
     <form action="checkeditprofile.php" method="POST">
		<br/>
		<table border ='1'   border="2" width="60%" >
			<tr>
				<td>
				<a href="homepage.php"><img src="image/f.png" height="80" ></a>
				</td>
				<td align="right" >
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
						<legend><b>EDIT PROFILE</b></legend>
						<table>
                            <tr>
								<td> Name</td>
								<td>:</td>
								<td><input name="name" type="text"></td>
							</tr>	

							


							<tr>
								<td> DOB</td>
								<td>:</td>
								<td><input name="dob" type="date"></td>
							</tr>


							<tr>
								<td> Gender</td>
								<td>:</td>
								<td> <input type="radio" name="gender" value="Male" > Male 
            <input type="radio" name="gender" value="Female" > Female
            <input type="radio" name="gender" value="Other" > Other <br></td>
							</tr>

							<tr>
								<td>Adress</td>
								<td>:</td>
								<td><input name="adress" type="text"></td>
							</tr>

							<tr>
								<td> Phone Number</td>
								<td>:</td>
								<td><input name="phoneNumber" type="number"></td>
							</tr>
	
							
							<tr>
								<td>Email</td>
								<td>:</td>
								<td> <input type="email" name="email"  > 
            <button title="hint:sample@example.com" style= "color:blue;"> <b>i</b></button> <br>
</td>
							</tr>	



							 

							



							
					
							<img src="image/pic.png" height="100" align="right" >
						</table>	
						<hr/>
						
					<input type="submit" name= "submit" value="Submit">
					
				</fieldset>
				</tr>			
            
			</table>
				
    </form>		
</body>
</html