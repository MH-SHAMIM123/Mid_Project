<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Log In Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="background-color:mediumseagreen";>
   
  <?php
  $user=$password="";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
         if(empty($_POST['uname'])||empty($_POST['password'])){
          echo "<center>";
          echo "<h2>Fill up the from properly</h2>";
          echo "</center>";
         }
         else if(strlen($_POST['password']) <= 7) {
              echo "Password Must be minimum 8 character!";
            }
         else{
          $user=trim($_POST['uname']);
          $password=trim($_POST['password']);
          $log_file = fopen("Login.txt", "r");
          $data = fread($log_file, filesize("login.txt"));
          fclose($log_file);
          $data_filter = explode("\n", $data);
          for($i = 0; $i< count($data_filter)-1; $i++) {
            $json_decode = json_decode($data_filter[$i], true);
            if($json_decode['user'] == $user && $json_decode['password'] == $password) 
            {
              
              $_SESSION['user'] = $user;
              $_SESSION['password'] = $password;
              $_SESSION['flag'] = true;
              header("Location:home.php");
              exit;
              //echo "<a href='userDetails.php'> View Profile</a>" ;
            }
          }
          echo "Wrong Username or Password! Please Try Again.";
      }
    }
           
        
     
       
  ?>
  
  
  


  <h2 style="text-align:center">Login Form</h2>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" align="center">
   <div>
    <label for="uname"><b>Username</b></label><br>  
    <input type="text" placeholder="Enter Username" name="uname" >
    <br><br>

    <label for="psw"><b>Password </b></label><br> 
    <input type="password" placeholder="Enter Password" name="password">
    <br><br>
        
    <button type="submit" style="color:DodgerBlue">Login</button>
    <br>
    
  </div>
  <?php
    echo "<br>";
    echo "<br>";
    include('footer.php');
       
  ?>


  </form>
</body>
</html>