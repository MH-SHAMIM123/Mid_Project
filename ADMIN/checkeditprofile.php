<?php
session_start();
if(isset($_POST['submit']))
{
	   $name = $_POST['name'];
	   $email = $_POST['email'];
	   $phoneNumber =$_POST['phoneNumber'];
	   $adress =$_POST['adress'];
	   $dob = $_POST['dob'];
	   
	   
	   
	   if(empty($name)||empty($email)||empty($phoneNumber)||!isset($_POST['gender'])||empty($adress)||empty($dob))
	   {
		   echo "null submission";
	   }
	   else {

		if($_POST['gender']=='Male')
		{
		  $gender = 'Male';
			 
		}
		elseif($_POST['gender']=='Female')
		{
		  $gender = 'Female';
		}

		elseif($_POST['gender']=='Female'){
		  $gender = 'Other';
		}


		
  
		setcookie('name', $name, time()+36000, '/');
		setcookie('email', $email, time()+36000, '/');
		setcookie('phoneNumber', $phoneNumber, time()+36000, '/');
		setcookie('adress', $adress, time()+36000, '/');
		setcookie('dob', $dob, time()+36000, '/');
		
		setcookie('gender', $gender, time()+36000, '/');
		
		
  
		header('location:homepage.php');
	  }
  
	}
?>