<?php
session_start();

    if(isset($_POST['submit'])){

        $uname    = $_POST['username'];
        $password   = $_POST['password'];
        if(empty($uname) || empty($password)){
            echo "null submission";

        }
        else if( isset($_COOKIE['uname']) && isset($_COOKIE['password'])){
            
            if($uname == $_COOKIE['uname'] && $password == $_COOKIE['password']){
                
                if(isset($_POST['checkRemember']))
                {
                  setcookie('checkRemember',$_POST['checkRemember'], time()+36000, '/');
                  setcookie('uname', $uname, time()+36000, '/');
                  setcookie('password', $password, time()+36000, '/');
                  setcookie('status', "always ok", time()+36000, '/');
                  header('location: homepage.php');
               }
               else
               {
                    setcookie('status', "OK", time()+36000, '/');
                    setcookie('checkRemember', $_POST['checkRemember'], time()-36000, '/');
                    header('location: homepage.php');

               }
            }
            else{
                echo "Invalid username/password";
            }





            
            
        }
        else{
            echo "Record not found!";
        }
}



else{
    header("location: login.php");
}

?>
