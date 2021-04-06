<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color:mediumseagreen";>
	<?php
	    $firstName = $lastName = $gender = $dob = $nid = $address = $phone = $email = $user = $password =$recEmail="";
	    $firstNameErr = $lastNameErr = $genderErr = $dobErr = $nidErr = $addressErr = $phoneErr = $emailErr = $userErr =
	    $passwordErr =$recEmailErr="";
	    if($_SERVER['REQUEST_METHOD']=="POST"){
	    	if(empty($_POST['fname']))
	    	{
	    		$firstNameErr="Plz fill up the first name";
	    	}
	    	else
	    	{
	    		$firstName=trim($_POST['fname']);
	    	}
	    	if(empty($_POST['lname']))
	    	{
	    		$lastNameErr="Plz fill up the last name";
	    	}
	    	else
	    	{
	    		$lastName=trim($_POST['lname']);
	    	}
	    	if(empty($_POST['gender']))
	    	{
	    		$genderErr="Plz Select Gender";
	    	}
	    	else
	    	{
	    		$gender=($_POST['gender']);
	    	}
	    	if(empty($_POST['birthday']))
	    	{
	    		$dobErr="Plz Select your Birthday";
	    	}
	    	else
	    	{
	    		$dob=$_POST['birthday'];
	    	}
	    	if(empty($_POST['nid']))
	    	{
	    		$nidErr="Plz fill up the NID";
	    	}
	    	else
	    	{
	    		$nid=trim($_POST['nid']);
	    	}
	    	if(empty($_POST['preAdd']))
	    	{
	    		$addressErr="Plz fill up the address";
	    	}
	    	else
	    	{
	    		$address=trim($_POST['preAdd']);
	    	}
	    	if(empty($_POST['phone']))
	    	{
	    		$phoneErr="Plz fill up the phone number";
	    	}
	    	else
	    	{
	    		$phone=trim($_POST['phone']);
	    	}
	    	if(empty($_POST['email']))
	    	{
	    		$emailErr="Plz fill up the email";
	    	}
	    	else
	    	{
	    		$email=trim($_POST['email']);
	    	}

	    	if(empty($_POST['uname']))
	    	{
	    		$userErr="Plz fill up the user name";
	    	}
	    	else
	    	{
	    		$user=trim($_POST['uname']);
	    	}
	    	if(empty($_POST['password']))
	    	{
	    		$passwordErr="Plz Enter a password";
	    	}
	    	else if(strlen($_POST['password']) <= 7) {
                    $passwordErr="Password Must be minimum 8 character!";
                }
	    	else
	    	{
	    		$password=trim($_POST['password']);
	    	}
	    	if(empty($_POST['recemail']))
	    	{
	    		$recEmailErr="Fill up the reccovary email";
	    	}
	    	else
	    	{
	    		$recEmail=trim($_POST['recemail']);
	    	}

	    	if($firstNameErr == "" && $lastNameErr == "" && $genderErr == "" && $dobErr =="" && $nidErr =="" && $addressErr =="" && $phoneErr =="" && $emailErr=="" && $userErr =="" && $passwordErr=="" && $recEmailErr=="") {
			
	        $arr1 = array('firstname' =>$_POST['fname'], 'lastname' =>$_POST['lname'], 'gender' =>$_POST['gender'],'DOB' =>$_POST['birthday'], 'NID' =>$_POST['nid'],'address' =>$_POST['preAdd'],'phone' =>$_POST['phone'],'email'=>$_POST['email'],'user'=>$_POST['uname'],/*'password'=>$_POST['password'],*/'Remail'=>$_POST['recemail']);
            $json_encoded_1 = json_encode($arr1);
            $f1 = fopen("userinfo.txt", "a");
            fwrite($f1, $json_encoded_1 . "\n");
            fclose($f1);
            $userinfo = array('user'=>$_POST['uname'],'password'=>$_POST['password']);
                            $userinfo_encoded = json_encode($userinfo);

                            $log_filepath = "Login.txt";

                            $log_file = fopen($log_filepath, "a");
                            fwrite($log_file, $userinfo_encoded . "\n");  
                            fclose($log_file);


                            header('Location:UserLogIn.php');
                            exit;

	       
		   }

       }
   ?>
	

	 
	


    <h1 style="text-align:center;color:white"><em>Regestered With Us</em></h1>
	<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" >
<center>
    <fieldset style="width: 40%; border:2px solid black;" >
    	<legend><b>Basic information: </b></legend>
       <table>
       	<tr> 
       		<td><label>First Name :</label> </td>
       		<td><input type="txt" id="firstname" name="fname" value="<?php echo $firstName ?>"></td>
       		<td><p><?php echo $firstNameErr;?></p></td>

       	</tr>
		
		<tr>
			<td><label >Last Name :</label> </td>
			<td><input type="txt" id="lastname" name="lname" value="<?php echo $lastName ?>"></td>
			<td><p><?php echo $lastNameErr;?></p></td>
		</tr>
		
		<tr>
			<td> <label>Gender:</label></td>
			<td><input type="radio" name="gender"
            <?php if (isset($gender) && $gender=="male") echo "checked";?>
             value="male">Male
             <input type="radio" name="gender"
             <?php if (isset($gender) && $gender=="female") echo "checked";?>
             value="female">Female</td>
             <td><p><?php echo $genderErr;?></p></td>
		</tr>
	
	   <tr>
	   	   <td><label>Dob:</label></td>
	   	   <td><input type="date" id="birthday" name="birthday" value="<?php echo $dob ?>"></td>
	   	   <td><p><?php echo $dobErr;?></p></td>
	   </tr>
	  <tr>
		 <td><label for="nid">NID:</label></td>
         <td><input type="number" id="nid" name="nid" value="<?php echo $nid ?>"></td>
         <td> <p><?php echo $nidErr;?></p></td>
      </tr>
    </table>
    </fieldset>
</center>
	     <br>
 <center>

	<fieldset  style="width: 40%; border:2px solid black;">

		<legend><b>Contract information:</b></legend>
		<table>
			<tr>
				<td><label>Present address:</label></td>
				<td><input type="text" id="presentaddress" name="preAdd" value="<?php echo $address ?>"></td>
				<td><p><?php echo $addressErr;?></p></td>
			</tr>
        <tr>
        	<td><label for="phone">Phone:</label></td>
        	<td><input type="number" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" value="<?php echo $phone ?>"></td>
        	<td><p><?php echo $phoneErr;?></p></td>
        </tr>
		<tr>
			<td><label for="email">Email:</label></td>
			<td><input type="email" id="EmailId" name="email" value="<?php echo $email ?>"></td>
			<td><p><?php echo $emailErr;?></p></td>
		</tr>
     
      </table>
    </fieldset>
</center>
        <br>
 <center>
     <fieldset  style="width: 40%; border:2px solid black;" >
     	<legend><b>User Account Information:</b></legend>
     	<table>
     		<tr>
     			<td><label for="user">User Name :</label> </td>
     			<td><input type="txt" id="username" name="uname" value="<?php echo $user ?>"></td>
     			<td><p><?php echo $userErr;?></p></td>
     		</tr>
     		<tr>
     			<td><lable for="pass">Passwod :</lable></td>
     			<td><input type="password" name="password" id="password" minlength="8"value="<?php echo $password ?>"></td>
     			<td><p><?php echo $passwordErr;?></p></td>
     			
     		</tr>
     		<tr>
     			<td><label for="email">Recovary Email:</label></td>
     			<td> <input type="email" id="recEmailId" name="recemail" value="<?php echo $recEmail ?>"></td>
     			<td><p><?php echo $recEmailErr;?></p></td>
     		</tr>
		</table>
		
     </fieldset>
 </center>
     <br>
    <center> <input type="submit" value="Sign up" style="color:tomato"><center>

   <?php
    echo "<br>";
    echo "<br>";
    include('footer.php');
   ?>

     


</form>


</body>
</html>

