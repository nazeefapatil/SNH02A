
<?php      

    include "ptdb.php";    
    $hname = $_POST['hname'];  
    $hemail = $_POST['hemail']; 
    $hphone = $_POST['hphone']; 
    $message = $_POST['message']; 

    $sql = "INSERT INTO contact (hname, hemail, hphone, message)
VALUES ('$hname', '$hemail', '$hphone', '$message')";

if (mysqli_query($con, $sql)) {
    echo "We will get back to you soon ☻";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
  
//   mysqli_close($conn);



?>