<?php
session_start();
if(isset($_POST['submit']))
{
	  $email = $_POST['email'];
		
	   
	   
	   if(empty( $email))
	   {
		   echo "null submission";
	   }
        
        if($email==$email)
	   {
		   echo " message send";
	   }
        
        
     
	}
?>
