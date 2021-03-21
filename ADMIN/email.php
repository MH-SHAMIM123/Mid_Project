<?php
if($_POST){
	$name=$_POST['name'];
	$email=$_POST['email'];
    $body=$_POST['body'];
	$handle=fopen("e.txt", "a");
	fwrite($handle,"<b><i><br>" .$name."</i> said:<br>".$body);
	fclose($handle);
}
	
	 
?>



<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
</head>
<body>
	
	<table border ='1' border="2" width="50%" >


			 <tr>	
				<td>

                 <a href="homepage.php"><img src="image/f.png" height="80" ></a>



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
			
			<table   >
<h1>Send an email:</h1>
			<form action="" method="post"  >

            ADMIN:<br/>
  <input type="text" name="name"  ><br>

   To:
  <td><input type="email" name="email"  > 
  <button title="hint:sample@example.com" style= "color:blue;"> <b>i</b></button> <br>
  Subject:<br/>
  <input type="text" subject="subject"  ><br>
  Body:<br/><textarea rows="10" cols="30" name="body" ></textarea><br><br>
  <input type="submit" value="Send">
  

    </form>	
   <hr>
   <h2>All Mail</h2>
    <?php
    include "e.txt";
    ?>

    </table>	
</body>
</table>
</html