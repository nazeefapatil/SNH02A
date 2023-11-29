<?php
include("ptdb.php");
include("ptlogin.php");
// if(!isset($_SESSION['Pat_ID']))
// {
// 	;
// }
$sqlpatient = "SELECT * FROM patlogin WHERE Pat_ID='$_POST[Pat_ID]' ";
$qsqlpatient = mysqli_query($con,$sqlpatient);
// $rspatient = mysqli_fetch_array($qsqlpatient);
$data = array();

while ($row = mysqli_fetch_assoc($qsqlpatient)) {
    $data[] = $row['Pat_ID'];
}


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
    <p>
    
        <h3>Welcome , <?php
        // echo $rspatient['Pat_ID'];
        foreach ($data as $value) {
    echo "Pat_ID: " . $value . "<br>";
}

         ?>! </p>
    </header>
    <nav>
        <div id="sidenav">
            <nav>
                <ul>
                    <li><a href="main.html"><strong>Home</strong></a></li>
                    <li><a href="#"><strong>Buy Medicines</strong></a></li>
                    <li><a href="#"><strong>Find Doctors</strong></a></li>
                    <li><a href="#"><strong>Health Records</strong></a></li>
                    <li><a href="#"><strong>Help</strong></a></li>
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
        <section id="patientInfo">
            <h2>Welcome , <?php echo $rspatient['Pat_ID']; ?>! </h2>
          
            
        </section>
        <section id="appointments">
        </section>
    </main>
    
    <?php
include("footer.html");
?>
    <script src="scripts.js"></script>
</body>
</html>
