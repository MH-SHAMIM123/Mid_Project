<?php
  session_start();
  if($_SESSION['flag']==false)
  {
    header('location: layout.php');
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Change Password</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body style="background-color:mediumseagreen";>
        <?php

            
            $username = $_SESSION['user'];
            $password = $_SESSION['password'];        

            $emptyerr = $passerr = "";


            if($_SERVER['REQUEST_METHOD'] == "POST" && $_REQUEST['button'] == "Change Password") {

                if(empty($_POST['currentpassword']) || empty($_POST['newpassword']) ||empty($_POST['confirmpassword'])) {
                    $emptyerr = "Please Fill up the form properly!";
                }

                else if($_POST['newpassword'] != $_POST['confirmpassword']) {
                    $passerr="Password doesn't Match";
                }

                else if(strlen($_POST['newpassword']) <= 7) {
                    $passerr="Password Must be minimum 8 character!";
                }
                else {

                    $log_file = fopen("Login.txt", "r");
                    
                    $data = fread($log_file, filesize("Login.txt"));
                    
                    fclose($log_file);
                    
                    $data_filter = explode("\n", $data);
                    
                    $log_filepath = "Temp.txt";

                    $log_file1 = fopen($log_filepath, "a");

                    for($i = 0; $i< count($data_filter)-1; $i++) {
                        $json_decode = json_decode($data_filter[$i], true);
                        if($json_decode['user'] == $username && $json_decode['password'] == $password ) 
                        {
                            $usertable = array('user' => $username, 'password' => $_POST['newpassword']);
                            $usertable_encoded = json_encode($usertable);
                            fwrite($log_file1, $usertable_encoded . "\n");
                        }
                        else {
                            $usertable_encoded = json_encode($json_decode);
                            fwrite($log_file1, $usertable_encoded . "\n");	
                        } 
                    }
                    fclose($log_file1);

                    $log_file = fopen("Temp.txt", "r");                    
                    $data = fread($log_file, filesize("Temp.txt"));                    
                    fclose($log_file);

                    $log_file = fopen("Login.txt", "w");
                    fwrite($log_file, $data);                    
                    fclose($log_file);

                    $log_file = fopen("Temp.txt", "w");
                    fwrite($log_file, "");                    
                    fclose($log_file);
                    
                    unset($_SESSION['user']);
                    unset($_SESSION['password']); 
                    
                    
                    header("Location:UserLogIn.php");
                    
                }
            }

            if($_SERVER['REQUEST_METHOD'] == "POST" && $_REQUEST['button'] == "Back") {
                unset($_SESSION['user']);
                unset($_SESSION['password']); 
                  
                header("Location:UserLogIn.php");
            
            }
        ?>
        
        <h3 align="center" style="color:white"><big><em>CHANGE PASSWORD</em></big></h3>
        <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" align="center">
            
        Current Password:<br>
        <input type="password" name="currentpassword"><span id="currentPassword" class="required"></span>
       <br>
        <?php echo $emptyerr ?>
        <br>
        New Password:<br>
        <input type="password" name="newpassword"><span id="newPassword" class="required"></span>
        <br>
         <?//php echo $passerr ?>
        <br>
        Confirm Password:<br>
        <input type="password" name="confirmpassword"><span id="confirmPassword" class="required"></span>
        <br>
        <?php echo $passerr ?>
        <br><br>
        <input type="submit" value="Change Password" style="color:tomato" name="button">
        <br>
        <br>
        <input type="submit" value="Back"  style="color:tomato" name="button">

        <?php
         echo "<br>";
         echo "<br>";
         include('footer.php');
        ?>
        </form>
    </body>
</html>