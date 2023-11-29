<?php
include("ptdb.php");
//include("ptlogin.php");
$sqlhs = "SELECT * FROM hospital where hsptlname='$_POST[hsptlname]' ";
$qsqlhs = mysqli_query($con,$sqlhs);
$rshs = mysqli_fetch_array($qsqlhs);

// $sqlhsptl = "SELECT * FROM appointment where adoctor='Nazeefa' ";
// $qsqlhsptl = mysqli_query($con,$sqlhsptl);
// $rshsptl = mysqli_fetch_array($qsqlhsptl);
?>


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

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>
    <link rel="stylesheet" href="hsptlinfo.css">
</head>
<body>
    <header>
        <!-- Hospital Name  -->
        <?php 
            echo $rshs['hsptlname'];
        ?>
    </header>
    <section>
    <!-- Hospital Address -->
    <?php 
            echo $rshs['hsptladdress'];
        ?>
    </section>
    <section>
    <!-- Phone number -->
    <?php 
            echo $rshs['hsptlphone'];
        ?>
    </section>
    <section>
    <!-- Available Departments -->
    </section>
    <section>
    <!-- Available Doctor -->
    </section>
</body>