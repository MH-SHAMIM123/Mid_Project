<?php
  session_start();
?>
<?php
        $f2 = fopen("Login.txt", "r");
        
        $data = fread($f2, filesize("Login.txt"));

        $data_filter1 = explode("\n", $data);
        $f1 = fopen("userinfo.txt", "r");
        
        $data = fread($f1, filesize("userinfo.txt"));

        $data_filter = explode("\n", $data);
        
        for($i = 0; $i< count($data_filter1)-1; $i++) {
            
            $json_decode = json_decode($data_filter1[$i], true);
            

            if($json_decode['user'] == $_SESSION['user'] && $json_decode['password'] ==$_SESSION['password']) 
            {
            	for($i = 0; $i< count($data_filter)-1; $i++) {
            
                $json_decoded = json_decode($data_filter[$i], true);
                if($json_decoded['user'] == $_SESSION['user'])
                {
                $_SESSION['fname']=$json_decoded['firstname'];
                $_SESSION['lname']=$json_decoded['lastname'];
                $_SESSION['dob']=$json_decoded['DOB'];
                $_SESSION['gender']=$json_decoded['gender'];
                $_SESSION['nid']=$json_decoded['NID'];
                $_SESSION['address']=$json_decoded['address'];
                $_SESSION['phone']=$json_decoded['phone'];
                $_SESSION['email']=$json_decoded['email'];
                $_SESSION['Recemail']=$json_decoded['Remail'];


                echo "User Name: ". $_SESSION['user']."<br>";
                echo "First Name: ". $_SESSION['fname']."<br>";
                echo "Last Name: ". $_SESSION['lname']."<br>";
                echo "Date of Birth: ". $_SESSION['dob']."<br>";
                echo "Gender: ". $_SESSION['gender']."<br>";
                echo "NID: ". $_SESSION['nid']."<br>";
                echo "Address: ". $_SESSION['address']."<br>";
                echo "Email: " .$_SESSION['email']."<br>";
                echo "Recovary Email: " .$_SESSION['Recemail']."<br><br><br><br>";
              
                include('footer.php');
                }
            }
         }

      }
        fclose($f1);
        fclose($f2);

?>




