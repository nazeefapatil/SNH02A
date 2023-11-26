<?php
include("ptdb.php");
//include("ptlogin.php");
// if(!isset($_SESSION['Pat_ID']))
// {
// 	;
// }
$sqlpatient = "SELECT * FROM patlogin where Pat_ID='samyu23' ";
$qsqlpatient = mysqli_query($con,$sqlpatient);
$rspatient = mysqli_fetch_array($qsqlpatient);

$sqlappointment = "SELECT * FROM appointment where adoctor='Nazeefa' ";
$qsqlappointment = mysqli_query($con,$sqlappointment);
$rsappointment = mysqli_fetch_array($qsqlappointment);
// $data = array();

// while ($row = mysqli_fetch_assoc($qsqlpatient)) {
//     $data[] = $row;
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="patafter.css">
    <title>I am a Patient</title>
</head>
<body>
    <header>
    <p> <h1>Welcome to MediShield!</h1> </p>
    </header>
    <nav>
        <div id="sidenav">
            <nav>
                <ul>
                    <li><a href="main.html"><strong>Home</strong></a></li>
                    <li><a href="schemes.html"><strong>Schemes</strong></a></li>
                    <li><a href="dept.html"><strong>Departments</strong></a></li>
                    <li><a href="#"><strong>Find Doctors</strong></a></li>
                    <li><a href="#"><strong>Health Records</strong></a></li>
                    <li><a href="contact.html"><strong>Help</strong></a></li>
                </ul>
            </nav>
        </div>
        <div id="menuBtn">
            <img src="menu_small.png" id="menu">
        </div>
        <script>
            var menuBtn = document.getElementById("menuBtn")
            var sidenav = document.getElementById("sidenav")
            var menu = document.getElementById("menu")
            sidenav.style.right = "-250px";
            menuBtn.onclick = function(){
                if(sidenav.style.right == "-250px"){
                    sidenav.style.right = "0";
                    menu.src = "close.png";
                }else{
                    sidenav.style.right = "-250px";
                    menu.src = "menu_small.png";
                }
            }
        </script>
    </nav>
    <main>
        <section id="patientInfo" align="center">
            <h2>Welcome , <?php 
            echo $rspatient['Pat_ID'];
            //print_r($rspatient);
            // foreach ($data as $value) {
            //     echo "Pat_ID: " . $value . "<br>";
            // } ?>! </h2>
          
            
        </section>
        <section id="appointments" align="center">
            <h3>Your Appointment</h3>
            <?php
            echo "Name:";
            echo $rsappointment['pname'];
            echo "<br>";
            echo "Department:";
            echo $rsappointment['pdept'];
            echo "<br>";
            echo "Hospital:";
            echo $rsappointment['hospital'];
            echo "<br>";
            echo "Doctor:";
            echo $rsappointment['adoctor'];
            echo "<br>";
            echo "Date:";
            echo $rsappointment['adate'];
            echo "<br>";
            echo "Time:";
            echo $rsappointment['atime'];
            echo '<br>';
            ?>
        </section>
    </main>
    
    <?php
include("footer.html");
?>
    <script src="scripts.js"></script>
</body>
</html>
