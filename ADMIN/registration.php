<?php
 
 session_start();
 if(isset($_POST['submit']))
 {

 
        $name = $_POST['name'];
        $uname = $_POST['userName'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $password = $_POST['password'];
        $conpassword = $_POST['confirmPassword'];
        
        
        if(empty($name)||empty($uname)||empty($email)||empty($number)||empty($password))
        {
            echo "null submission";
        }
        else if(empty($conpassword))
        {
          echo "null submission";
          

        }
        
        
        elseif($password != $conpassword)
        {
          echo "Warrning: Password and Confirm Password are not matched!";
          echo "Please, do registration again!";
        }
       

        
          
          $user = [
                
                'name'=>$name,
                'uname'=>$uname,
                'email'=>$email,
                'number'=>$number,
                'password'=>$password,
                'conpassword'=>$conpassword,
          
              ];
    
          setcookie('name', $name, time()+36000, '/');
          setcookie('uname', $uname, time()+36000, '/');
          setcookie('email', $email, time()+36000, '/');
      setcookie('number', $number, time()+36000, '/');
          setcookie('password', $password, time()+36000, '/');
      
         
          header('location:login.php');
        }
    
      
      else{
        header("location: login.php");
      }
?>
