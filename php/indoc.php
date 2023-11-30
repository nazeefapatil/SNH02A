
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor login form</title>
    <link rel="stylesheet" href="../css/styleform.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <span class="bg-animate"></span>
        <div class="form-box login">
            <h2>LOGIN</h2>
            <form action="drlogin.php" method="post">
                <div class="input-box">
                    <input type="text" name="Dr_ID" required/>
                    <label>Doctor ID</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="dpassword" required/>
                    <label>Password</label>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <button type="submit" value="submit" class="btn">Login</button>
                <!-- <input type="submit" /> -->
            </form>
                <!-- <button type="submit" value="submit" class="btn">Login</button> -->
                <div class="logreg-link">
                    <p>Don't have an account? <a href="#" class="register-link">Sign Up</a></p>
                </div>
            
        </div>
        <div class="info-text login">
            <h2>Welcome Back</h2>
                <p>MediShield is Proud of you Doctor!</p>
            
        </div>
    </div>
</body>
</html>