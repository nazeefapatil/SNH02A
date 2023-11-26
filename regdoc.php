
<?php      

    include "drdb.php";    
    $dname = $_POST['dname'];  
    $dregno = $_POST['dregno']; 
    $demail = $_POST['demail']; 
    $dphone = $_POST['dphone']; 
    $ddob = $_POST['ddob']; 
    $dpic = $_POST['dpic'];
    // $dpassword = $_POST['dpassword']; 
    // $pswd2 = $_POST['pswd2'];

    $sql = "INSERT INTO regdoc (dname, dregno, demail, dphone, ddob, dpic)
VALUES ('$dname', '$dregno', '$demail', '$dphone', '$ddob', '$dpic')";

if (mysqli_query($con, $sql)) {
    echo "Registered successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
  
//   mysqli_close($conn);



?>