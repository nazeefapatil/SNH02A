<?php    
echo 'Server:'.$_SERVER['REQUEST_METHOD'];  
    // include "drdb.php";    
    // $Dr_ID = $_POST['Dr_ID'];  
    // $dpassword = $_POST['dpassword'];  
      
    //     //to prevent from mysqli injection  
    //     $Dr_ID = stripcslashes($Dr_ID);  
    //     $dpassword = stripcslashes($dpassword);  
    //     $Dr_ID = mysqli_real_escape_string($con, $Dr_ID);  
    //     $dpassword = mysqli_real_escape_string($con, $dpassword);  
      
    //     $sql = "select *from drlogin where Dr_ID = '$Dr_ID' and dpassword = '$dpassword'";  
    //     $result = mysqli_query($con, $sql);  
    //     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    //     $count = mysqli_num_rows($result);  
          
    //     if($count == 1){  
    //         // echo "<h2><center> Login successful </center></h2>"; 
    //         header("Location: docafter.php");
            
    //     }  
    //     else{  
    //         // echo "<h2> Login failed. Invalid username or password.</h2>";  
    //         header("Location: registration.html?error=Invalid_ID_or_password");
    //     }     
?>  


<?php
// session_start();
// require_once 'drdb.php'; // Ensure correct file path

if ($_SERVER['REQUEST_METHOD']== "POST") {
    // Retrieve user input
    // $usernameOrEmail = $_POST['Dr_ID'];
    // $password = $_POST['dpassword'];

    // // Query to check user credentials
    // $stmt = $con->prepare("SELECT * FROM drlogin WHERE Dr_ID = ?");
    // $stmt->bind_param("s", $usernameOrEmail);
    // $stmt->execute();
    // $result = $stmt->get_result();

    // if ($result->num_rows > 0) {
    //     // User found, check password
    //     $user = $result->fetch_assoc();
    //     if (password_verify($password, $user['dpassword'])) {
    //         // Password matched, set session variables for logged-in user
    //         $_SESSION['Dr_ID'] = $user['Dr_ID'];
    //         $_SESSION['logged_in'] = true;
    
    //         // Redirect to dashboard or some authenticated page
    //         header("Location: docafter.php");
    //         exit();
    //     }
    // }
    
    // // If user not found or invalid credentials, redirect back with an error message
    // $_SESSION['error_message'] = 'Invalid username/email or password.';
    header("Location: drlogin.php");
    exit();
    
} else {

    echo 'Server:'.$_SERVER['REQUEST_METHOD'];

    // If the form wasn't submitted, redirect back to the sign-in page
    // header("Location: patafter.php");
    exit();
}
?>
