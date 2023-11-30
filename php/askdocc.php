
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I am a Doctor</title>
    <link rel="stylesheet" href="../css/styledr.css">
</head>
<body>
    <section id="banner">
        <img src="../img/LogoActual2.png" class="logo">
        <div class="banner-text">
            
            <h1>MEDISHIELD</h1>
            <p>We make sure you feel as good as you look. A pharmacy with new tech. <br></p>
            <div class="banner-btn">
                <a href="../html/regdoc.html"><span></span><strong>Register</strong></a>
                <a href="indoc.php"><span></span><strong>Login</strong></a>
               </div>
        </div>
    </section>
    <div id="sidenav">
        <nav>
            <ul>
                <li><a href="../html/main.html"><strong>Home</strong></a></li>
                <li><a href="../html/schemes.html"><strong>Schemes</strong></a></li>
                <li><a href="../html/dept.html"><strong>Departments</strong></a></li>
                <li><a href="#"><strong>Find Doctors</strong></a></li>
                <li><a href="#"><strong>Health Records</strong></a></li>
                <li><a href="#"><strong>Help</strong></a></li>
            </ul>
        </nav>
    </div>
    <div id="menuBtn">
        <img src="../img/menu_small.png" id="menu">
    </div>
    <script>
        var menuBtn = document.getElementById("menuBtn")
        var sidenav = document.getElementById("sidenav")
        var menu = document.getElementById("menu")
        sidenav.style.right = "-250px";  
        menuBtn.onclick = function(){
            if(sidenav.style.right == "-250px"){
                sidenav.style.right = "0";
                menu.src = "../img/close.png";
            }else{
                sidenav.style.right = "-250px";
                menu.src = "../img/menu_small.png";
            }
        }
    </script>
</body>
</html>