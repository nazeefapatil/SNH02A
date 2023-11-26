<?php      
    include "ptdb.php";    
    $Pat_ID = $_POST['Pat_ID'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $Pat_ID = stripcslashes($Pat_ID);  
        $password = stripcslashes($password);  
        $Pat_ID = mysqli_real_escape_string($con, $Pat_ID);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from patlogin where Pat_ID = '$Pat_ID' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            // echo "<h2><center> Login successful </center></h2>"; 
            header("Location: patafter.php");
        }  
        else{  
            // echo "<h2> Login failed. Invalid username or password.</h2>";  
            header("Location: patafter.php");
        }     
?>  
