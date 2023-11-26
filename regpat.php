
<?php      

    include "ptdb.php";    
    $pfname = $_POST['pfname'];  
    $plname = $_POST['plname']; 
    $pemail = $_POST['pemail']; 
    $pphone = $_POST['pphone']; 
    $pdob = $_POST['pdob']; 
    $pgender = $_POST['pgender'];
    $paadhaar = $_POST['paadhaar']; 
    $pcontact = $_POST['pcontact'];

    $sql = "INSERT INTO regpt (pfname, plname, pemail, pphone, pdob, pgender, paadhaar, pcontact)
VALUES ('$pfname', '$plname', '$pemail', '$pphone', '$pdob', '$pgender', '$paadhaar', '$pcontact')";

if (mysqli_query($con, $sql)) {
    header("Location: main.html");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
  
//   mysqli_close($conn);



?>