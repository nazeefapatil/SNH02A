<?php    
    include("ptdb.php");     
    $hsptlname = $_POST['hsptlname'];  
    $hsptladdress = $_POST['hsptladdress']; 
    $hsptlphone = $_POST['hsptlphone']; 

    $sql = "INSERT INTO hospital (hsptlname, hsptladdress, hsptlphone)
VALUES ('$hsptlname', '$hsptladdress', '$hsptlphone')";

if (mysqli_query($con, $sql)) {
    echo "Registered successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
  
//   mysqli_close($conn);



?>