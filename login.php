<?php
session_start();
require_once('DBConnect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/login_style.css">
    <title>LOGIN</title>
</head>

<body>
    <form method="POST" action="login.php">
        <div class="login-div">
            <div class="title">LOGIN</div>
            <div class="sub-title">Unleash Your Dreams</div>
            <div class="fields">
                <div class="username">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
                    </svg>
                    <input type="Username" name="username" class="user-input" placeholder="Username">
                </div>
                <div class="password">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
                    </svg>
                    <input type="password" name="password" class="pass-input" placeholder="password">
                </div>
            </div>

            <button type="submit" name="submit" class="signin-button">Login</button>
            <div class="link">
                <a href="#">Forgot Password?</a>or <a href="RegistrationForm.php">Sign Up</a>
            </div>

        </div>
    </form>
</body>

</html>
<?php
    if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $flag = false;
    $conn = mysqli_connect("localhost", "root", "", "project") or die("failed to connect");
    $result = mysqli_query($conn, "SELECT * FROM users where email='$username' and password='$password'");
    $row = mysqli_num_rows($result);
    foreach ($result as $new) {
        if (($new["email"] == $username) || ($new["password"] == $passowrd)) {
            $_SESSION["uid"] = $new["id"];
            $_SESSION["name"] = $new["name"];
            $_SESSION["email"] = $new["email"];
            $_SESSION["phone"] = $new["phone"];
            $_SESSION["dob"] = $new["dob"];
            $_SESSION["intrest"] = $new["intrest"];
            $_SESSION["address"] = $new["address"];
            $_SESSION["weight"] = $new["weight"];
            $_SESSION["height"] = $new["height"];
            $_SESSION["type"] = $new["type"];
            $flag = true;
            echo "<script>alert('Login Successful , Welcome $new[name] $new[type]')</script>";
            if($new["type"]== 'Artist'){
                header("Location: artistindex.php");
                exit();
            }
            else if($new["type"]== 'Production House'){
                header("Location: productionindex.php");
                exit();    
            }

            else if($new["type"]== 'Teachers'){
                header("Location: teacher.php");
                exit();
            }

            else if($new["type"]== 'student'){
                header("Location: student.php");
                exit();
            }
        }
        
    }
    if(!$flag){
        echo "<script>alert('Invalid username or password')</script>";
    }
}
?>