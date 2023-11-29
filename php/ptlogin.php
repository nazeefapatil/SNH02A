<?php
include "ptdb.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Pat_ID = $_POST['Pat_ID'];
    $password = $_POST['password'];

    //to prevent from mysqli injection
    $Pat_ID = stripcslashes($Pat_ID);
    $password = stripcslashes($password);
    $Pat_ID = mysqli_real_escape_string($con, $Pat_ID);
    $password = mysqli_real_escape_string($con, $password);

    $sql = "SELECT * FROM patlogin WHERE Pat_ID = '$Pat_ID' AND password = '$password'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        // Login successful
        $_SESSION['Pat_ID'] = $Pat_ID;
        header("Location: patafter.php");
         // Make sure to exit after a header redirect
    } else {
        // Login failed
        $login_error = "Invalid username or password";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient login form</title>
    <link rel="stylesheet" href="styleform.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <span class="bg-animate"></span>
        <div class="form-box login">
            <h2>LOGIN</h2>
            <form action="ptlogin.php" method="post">
                <div class="input-box">
                    <input type="text" name="Pat_ID" required>
                    <label>Patient ID</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" required>
                    <label>Password</label>
                    <a href="#">Forgot Password?</a>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <a href="patafter.php">
                <button type="submit" class="btn" style="cursor: pointer">Loginn</button>
                </a>
                <div class="logreg-link">
                    <?php
                    if (isset($login_error)) {
                        echo "<p class='error'>$login_error</p>";
                    }
                    ?>
                    <p>Don't have an account? <a href="regpat.html" class="register-link">Sign Up</a></p>
                </div>
            </form>
        </div>
        <div class="info-text login">
            <h2>Welcome Back</h2>
                <p>MediShield is here to take care of you.</p>
        </div>
    </div>
</body>
</html>
