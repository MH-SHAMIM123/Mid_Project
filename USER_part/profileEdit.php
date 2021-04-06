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
	<title></title>
</head>
<body style="background-color:mediumseagreen";>
	<?php
	    $username = $_SESSION['user'];
        $password = $_SESSION['password'];
	    $firstName = $lastName = $gender = $dob = $nid = $address = $phone = $email = $user = $recEmail="";
	    $firstNameErr = $lastNameErr = $genderErr = $dobErr = $nidErr = $addressErr = $phoneErr = $emailErr = $userErr =
	    $recEmailErr="";
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

	    	if(empty($_POST['newname']))
	    	{
	    		$userErr="Plz fill up the user name";
	    	}
	    	else
	    	{
	    		$user=trim($_POST['newname']);
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

        $user_file = "usertemp.txt";
        $f1 = fopen($user_file, "a");
		$log_filepath = "Temp.txt";
        $f2 = fopen($log_filepath, "a");
        $log_file = fopen("Login.txt", "r");
        $data = fread($log_file, filesize("Login.txt"));
        fclose($log_file);
        $data_filter = explode("\n", $data);
        $f3 = fopen("userinfo.txt", "r");
        $data1 = fread($f3, filesize("userinfo.txt"));
        fclose($f3);
        $data_filter1 = explode("\n", $data1);
        
        for($i = 0; $i< count($data_filter)-1; $i++) {
        $json_decode = json_decode($data_filter[$i], true);
        if($json_decode['user'] == $_SESSION['user'] && $json_decode['password'] ==$_SESSION['password']) 
        {
        	for($j = 0; $j< count($data_filter1)-1; $j++) {
            
                $json_decoded = json_decode($data_filter1[$j], true);
                if($json_decoded['user'] == $_SESSION['user'])
                {
            
                $arr1 = array('firstname' =>$_POST['fname'], 'lastname' =>$_POST['lname'], 'gender' =>$_POST['gender'],'DOB' =>$_POST['birthday'], 'NID' =>$_POST['nid'],'address' =>$_POST['preAdd'],'phone' =>$_POST['phone'],'email'=>$_POST['email'],'user'=>$_POST['newname'],'Remail'=>$_POST['recemail']);
                $json_encoded_1 = json_encode($arr1);
                fwrite($f1, $json_encoded_1. "\n");

                $userinfo = array('user'=>$_POST['newname'],'password'=>$password);
                $userinfo_encoded = json_encode($userinfo);
                fwrite($f2, $userinfo_encoded . "\n");  
                          
                }
                else
                {
                	$json_encoded_1 = json_encode($json_decoded);
                    fwrite($f1, $json_encoded_1. "\n");
                   // $userinfo_encoded = json_encode($json_decode);
                   // fwrite($f2, $userinfo_encoded . "\n"); 
                }
        
              
             }
         }
         else
         {
        	//$json_encoded_1 = json_encode($json_decoded);
            //fwrite($f1, $json_encoded_1. "\n");
            $userinfo_encoded = json_encode($json_decode);
            fwrite($f2, $userinfo_encoded . "\n"); 
         }
     }
     fclose($f1);
     fclose($f2);
   


     $log_file = fopen("usertemp.txt", "r");                    
     $data = fread($log_file, filesize("usertemp.txt"));                    
     fclose($log_file);

     $log_file = fopen("userinfo.txt", "w");
     fwrite($log_file, $data);                    
     fclose($log_file);

     $log_file = fopen("usertemp.txt", "w");
     fwrite($log_file, "");                    
     fclose($log_file);

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
      unset($_SESSION['passward']); 
                   
                    
      header("Location: UserLogin.php");
		   }

       }
   ?>
		

	 
	


    <h1 style="text-align:center; color:white"><em>Profile Update</em></h1>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
<center>
    <fieldset style="width: 40%; border:2px solid black;"  >
    	<legend><b>Basic information: </b></legend>
    	<table>
    		<tr>
    			<td><label for="firstname">First Name :</label> </td>
    			<td><input type="txt" id="firstname" name="fname"></td>
    			<td><p><?php echo $firstNameErr;?></p></td>
    		</tr>
    		<tr>
    			<td><label for="lastname">Last Name :</label> </td>
    			<td><input type="txt" id="lastname" name="lname"></td>
    			<td><p><?php echo $lastNameErr;?></p></td>
    		</tr>
    		<tr>
    			<td> <label>Gender:</label></td>
    			<td><input type="radio" name="gender" id="male" value="male">
		        <label for="male">Male</label>
		        <input type="radio" name="gender" id="female" value="female">
		        <label for="female">Female</label></td>
		        <td><p><?php echo $genderErr;?></p></td>
    		</tr>
    		<tr>
    			<td><label>Dob:</label></td>
    			<td><input type="date" id="birthday" name="birthday" ></td>
    			<td><p><?php echo $dobErr;?></p></td>
    		</tr>
    		<tr>
    			<td><label for="nid">NID:</label></td>
    			<td> <input type="number" id="nid" name="nid" ></td>
    			<td> <p><?php echo $nidErr;?></p></td>
    		</tr>
       </table>
    </fieldset>
 </center>   
	     <br>

<center>
	<fieldset style="width: 40%; border:2px solid black;"  >

		<legend><b>Contract information:</b></legend>
		<table>
			<tr>
				<td><label>Present address:</label></td>
				<td><input type="text" id="presentaddress" name="preAdd"></td>
				<td><p><?php echo $addressErr;?></p></td>
			</tr>
			<tr>
				<td><label for="phone">Phone:</label></td>
				<td><input type="number" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"></td>
				<td><p><?php echo $phoneErr;?></p></td>
			</tr>
			<tr>
				<td> <label for="email">Email:</label></td>
				<td><input type="email" id="EmailId" name="email"></td>
				<td><p><?php echo $emailErr;?></p></td>
			</tr>
        </table>
      
    </fieldset>
  </center>
        <br>
  <center>
     <fieldset style="width: 40%; border:2px solid black;">
     	<legend><b>User Account Information:</b></legend>
     	<table>
     		<tr>
     			<td><label for="user">User Name :</label> </td>
     			<td><input type="txt" id="username" name="newname"></td>
     			<td><p><?php echo $userErr;?></p></td>
     		</tr>
     		<tr>
     			<td><label for="email">Recovary Email:</label></td>
     			<td><input type="email" id="recEmailId" name="recemail" ></td>
     			<td> <p><?php echo $recEmailErr;?></p></td>
     		</tr>
     	</table>
	</fieldset>
 </center>
     <br>
   <center>  <input type="submit" value="Update" style="color:tomato"><center>

   <?php
    echo "<br>";
    echo "<br>";
    include('footer.php');
       
   ?>

     


</form>


</body>
</html>

	    	
