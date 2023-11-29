<?php
session_start(); // Make sure to start the session


if (!isset($_SESSION['Pat_ID'])) {
    echo "Redirecting to login page";
    header("Location: ptlogin.php");
    exit();
}
include("ptdb.php");

// Use prepared statements to prevent SQL injection
$sqlpatient = "SELECT * FROM patlogin WHERE Pat_ID=?";
$stmt = mysqli_prepare($con, $sqlpatient);
mysqli_stmt_bind_param($stmt, "s", $_SESSION['Pat_ID']);
mysqli_stmt_execute($stmt);
$qsqlpatient = mysqli_stmt_get_result($stmt);
$rspatient = mysqli_fetch_array($qsqlpatient);

$sqlappointment = "SELECT * FROM appointment WHERE adoctor='Nazeefa'";
$qsqlappointment = mysqli_query($con, $sqlappointment);
$rsappointment = mysqli_fetch_array($qsqlappointment);

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
        <p><h1>Welcome to MediShield!</h1></p>
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
                } else {
                    sidenav.style.right = "-250px";
                    menu.src = "menu_small.png";
                }
            }
        </script>
    </nav>
    <main>
        <section id="patientInfo" align="center">
            <h2>Welcome , <?php echo $rspatient['Pat_ID']; ?>!</h2>
        </section>
        <section id="appointments" align="center">
            <h3>Your Appointment</h3>
            <?php
            echo "Name: " . $rsappointment['pname'] . "<br>";
            echo "Department: " . $rsappointment['pdept'] . "<br>";
            echo "Hospital: " . $rsappointment['hospital'] . "<br>";
            echo "Doctor: " . $rsappointment['adoctor'] . "<br>";
            echo "Date: " . $rsappointment['adate'] . "<br>";
            echo "Time: " . $rsappointment['atime'] . "<br>";
            ?>
        </section>
    </main>

    <?php
    include("footer.html");
    ?>
    <script src="scripts.js"></script>
</body>
</html>
