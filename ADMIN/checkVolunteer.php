<?php
session_start();
if(isset($_POST['submit']))
{
	  $amount = $_POST['amount'];
		$card = $_POST['card'];
		
	   
	   
	   if(empty( $amount)||empty($card))
	   {
		   echo "null submission";
	   }
       else
	   {
		   echo "done";
		}
		 
	}
	else{
	  header("location: login.php");
	}
?>