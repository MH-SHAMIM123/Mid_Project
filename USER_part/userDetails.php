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
    <title>User Details</title>
    <style>       
    hr{
        height: 2px;
        background-color:black;
        border: none;
    }
</style>

</head>
<body style="background-color:rgb(26, 255, 140)";>

    <h1 align="center" style="color:maroon"><i>Profile Information</i></h1><hr>

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

                /*echo" <p style=text-align:center>User Name:". $_SESSION['user']."</p>";
                echo "<p style=text-align:center>First Name: ". $_SESSION['fname']."</p>";
                echo "<p style=text-align:center>Last Name: ". $_SESSION['lname']."</p>";
                echo "<p style=text-align:center>Date of Birth: ". $_SESSION['dob']."</p>";
                echo "<p style=text-align:center>Gender: ". $_SESSION['gender']."</p>";
                echo "<p style=text-align:center>NID: ". $_SESSION['nid']."</p>";
                echo "<p style=text-align:center>Address: ". $_SESSION['address']."</p>";
                echo "<p style=text-align:center>Email: " .$_SESSION['email']."</p>";
                echo "<p style=text-align:center>Recovary Email: " .$_SESSION['Recemail']."</p>"."<br><br><br><br>";*/
              
                
                }
            }
         }

      }
        fclose($f1);
        fclose($f2);

?>
<table align="center">
    <tr>
       <td> <b><?php echo"User Name:". $_SESSION['user']?></b></td>
    </tr>
    
    <tr>
       <td><b><hr><?php echo "First Name: ". $_SESSION['fname']?></b></td>
    </tr>
    <tr>
       <td><b><hr><?php echo "Last Name: ". $_SESSION['lname']?></b></td>
    </tr>
    <tr>
       <td><b><hr><?php echo "Date of Birth: ". $_SESSION['dob']?></b></td>
    </tr>
    
    <tr>
       <td><b><hr><?php echo "Gender: ". $_SESSION['gender']?></b></td>
    </tr>
    <tr>
       <td><b><hr><?php echo "NID: ". $_SESSION['nid']?></b></td>
    </tr>
    <tr>
       <td><b><hr><?php echo "Address: ". $_SESSION['address']?></b></td>
    </tr>
    <tr>
       <td><b><hr><?php echo "phone: ". $_SESSION['phone']?></b></td>
    </tr>
    <tr>
       <td><b><hr><?php echo "Email: " .$_SESSION['email']?></b></td>
    </tr>
    <tr>
       <td><b><hr><?php echo "Recovary Email: " .$_SESSION['Recemail']?></b></td>

    </tr>
    

</table>

<br><br><br>
<?php
include('footer.php');
?>




</body>
</html>




