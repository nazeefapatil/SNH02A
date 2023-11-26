<?php      
    include "drdb.php";    
    $Dr_ID = $_POST['Dr_ID'];  
    $dpassword = $_POST['dpassword'];  
      
        //to prevent from mysqli injection  
        $Dr_ID = stripcslashes($Dr_ID);  
        $dpassword = stripcslashes($dpassword);  
        $Dr_ID = mysqli_real_escape_string($con, $Dr_ID);  
        $dpassword = mysqli_real_escape_string($con, $dpassword);  
      
        $sql = "select *from drlogin where Dr_ID = '$Dr_ID' and dpassword = '$dpassword'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            // echo "<h2><center> Login successful </center></h2>"; 
            header("Location: main.html");
            
        }  
        else{  
            // echo "<h2> Login failed. Invalid username or password.</h2>";  
            header("Location: registration.html?error=Invalid_ID_or_password");
        }     
?>  
