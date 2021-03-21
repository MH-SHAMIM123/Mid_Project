<?php
 
    session_start();
    
?>

<?php 
	//include('footer.php');
	    $username="";
        $log_file = fopen("Login.txt", "r");
        $data = fread($log_file, filesize("Login.txt"));
        fclose($log_file);
        $data_filter = explode("\n", $data);
       // $log_filepath = "Temp.txt";
        //$f1 = fopen($log_filepath, "a");
        for($i = 0; $i< count($data_filter)-1; $i++) {
        $json_decode = json_decode($data_filter[$i], true);
        if($json_decode['user'] == $_SESSION['user'] && $json_decode['password'] ==$_SESSION['password']) 
        {
            $username=$_SESSION['user'];

        }
      }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
	<h1><em>Delete Profile</em></h1>
</div>
<div >
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		<table>
			<tr>
				<td> <?php echo "Are you sure to delete $username's  account?" ?> </td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="delete" value="Delete">
				</td>
			</tr>
		</table>
	</form>
</div>
<?php
    include('footer.php');
	if(isset($_POST['delete']))
	{
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
        	for($j= 0; $j< count($data_filter1)-1; $j++) {
            
                $json_decoded = json_decode($data_filter1[$j], true);
                if($json_decoded['user'] == $_SESSION['user'])
                {
            
                $arr1 = array('firstname' =>"", 'lastname' =>"", 'gender' =>"",'DOB' =>"", 'NID' =>"",'address' =>"",'phone' =>"",'email'=>"",'user'=>"",'Remail'=>"");
                $json_encoded_1 = json_encode($arr1);
                fwrite($f1, $json_encoded_1. "\n");

                $userinfo = array('user'=>"",'password'=>"");
                $userinfo_encoded = json_encode($userinfo);
                fwrite($f2, $userinfo_encoded . "\n");  
                          
                }
                else
                {
                	$json_encoded_1 = json_encode($json_decoded);
                    fwrite($f1, $json_encoded_1. "\n");
                }
        
              
             }
         }
         else
         {
        	
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
      unset($_SESSION['password']); 
                   
                    
      header("Location: index.html");

     

 }
?>


</body>
</html>






		
