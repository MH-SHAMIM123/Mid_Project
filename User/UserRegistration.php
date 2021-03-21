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
	

	 
	


    <h1 style="text-align:center;"><em>Regestered With Us</em></h1>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <fieldset>
    	<legend><b>Basic information: </b></legend>

		<label for="firstname">First Name :</label> 
		<input type="txt" id="firstname" name="fname" value="<?php echo $firstName ?>">
		<p><?php echo $firstNameErr;?></p>
		<br>
		<label for="lastname">Last Name :</label> 
		<input type="txt" id="lastname" name="lname" value="<?php echo $lastName ?>">
		<p><?php echo $lastNameErr;?></p>
		<br>
	    <label>Gender:</label>
		<input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="male") echo "checked";?>
        value="male">Male
        <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="female") echo "checked";?>
         value="female">Female
		<p><?php echo $genderErr;?></p>
		<br>
		<label>Dob:</label>
		<input type="date" id="birthday" name="birthday" value="<?php echo $dob ?>">
		<p><?php echo $dobErr;?></p>
		<br>
		<label for="nid">NID:</label>
        <input type="number" id="nid" name="nid" value="<?php echo $nid ?>">
        <p><?php echo $nidErr;?></p>
    </fieldset>
	     <br>

	<fieldset>

		<legend><b>Contract information:</b></legend>
        <label>Present address:</label>
		<input type="text" id="presentaddress" name="preAdd" value="<?php echo $address ?>">
		<p><?php echo $addressErr;?></p>
		<br>
		<label for="phone">Phone:</label>
        <input type="number" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" value="<?php echo $phone ?>">
        <p><?php echo $phoneErr;?></p>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="EmailId" name="email" value="<?php echo $email ?>">
        <p><?php echo $emailErr;?></p>
        <br>
      
    </fieldset>
        <br>
     <fieldset>
     	<legend><b>User Account Information:</b></legend>
		<label for="user">User Name :</label> 
		<input type="txt" id="username" name="uname" value="<?php echo $user ?>">
		<p><?php echo $userErr;?></p>
		<br>
		<lable for="pass">Passwod :</lable>
		<input type="password" name="password" id="password" minlength="8"value="<?php echo $password ?>">
		<p><?php echo $passwordErr;?></p>
		<br>
		<label for="email">Recovary Email:</label>
        <input type="email" id="recEmailId" name="recemail" value="<?php echo $recEmail ?>">
        <p><?php echo $recEmailErr;?></p>
        <br><br>
		
     </fieldset>
     <br>
     <input type="submit" value="Sign up" style="color:tomato">

   <?php
    echo "<br>";
    echo "<br>";
    include('footer.php');
       
  ?>

     


</form>


</body>
</html>

