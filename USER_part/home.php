<?php
  session_start();
  if($_SESSION['flag']==false)
  {
  	header('location: index.html');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		a{
			color:black;
			font-size: 150%;
		}
	</style>
</head>
<body style="background-color:mediumseagreen";>
<div>
	<h1><em>Welcome home, 
			<?php
			  $log_file = fopen("Login.txt", "r");
              $data = fread($log_file, filesize("Login.txt"));
              fclose($log_file);
              $data_filter = explode("\n", $data);
              for($i = 0; $i< count($data_filter)-1; $i++) {
              $json_decode = json_decode($data_filter[$i], true);
              if($json_decode['user'] == $_SESSION['user'] && $json_decode['password'] ==$_SESSION['password']) 
              {
              	$username = $json_decode['user'];
				echo $username;
              }
          }
				 
			?>		
		</em></h1>
	</div>

	<div>
			
	</div>
<center>
	<fieldset style="width: 98%; border:2px solid black;">
    <br>
        <nav>
         <center>  
         	<a href="userDetails.php">View Profile</a> ||
		    <a href="DeleteUser.php">Delete Profile</a> ||
		    <a href="ChangePassword.php">Change password</a> ||
		    <a href="profileEdit.php">Update Profile</a> ||
		    <a href="Gallary.php">Gallary</a> ||
		    <a href="Specialoffer.php">Special offer</a> ||
		    <a href="logout.php";style=text-align:left> Logout</a>
		  </center>
        </nav>
    <br>
</fieldset>
</center>

	

<?php
  echo"<br>";
  echo"<br>";
  echo"<br>";
  echo"<br>";

 include('footer.php'); 

 ?>

</body>
</html>	

	