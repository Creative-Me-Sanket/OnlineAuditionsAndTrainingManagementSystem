<?php
    session_start();
     unset($_SESSION["uid"]);
     unset($_SESSION["name"] );
     unset($_SESSION["email"] );
     unset($_SESSION["phone"] );
     unset($_SESSION["dob"] );
     unset($_SESSION["intrest"] );
     unset($_SESSION["address"] );
     unset($_SESSION["weight"] );
     unset($_SESSION["height"] );
     unset($_SESSION["type"] );
    header("Location: homepage/index.php");
    exit();
 ?>+