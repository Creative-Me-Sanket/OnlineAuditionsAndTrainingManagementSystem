<?php 
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Apply Audition</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Fill Your Details</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Full Name" value="<?php echo"$_SESSION[name]" ?>" name="name">
                        </div>
                        <!-- <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" placeholder="Birthdate" name="birthday">
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div> -->
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="skills" >
                                    <option disabled="disabled" selected="selected">Skills</option>
                                    <option value="acting">Acting</option>
                                    <option value="dancing">Dancing</option>
                                    <option value="music">Music</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="email" value="<?php echo"$_SESSION[email]" ?>" name="email">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="phone" value="<?php echo"$_SESSION[phone]" ?>" name="phone">
                        </div>


                        <div class="input-group">
                           
                            <div class="">
                                <input class="input--style-3" type="file" name="file_cv" id="file">
                                <label class="input--style-3" for="file">Upload Your Best Shot</label>
                                <span class="input--style-3__info">No file chosen</span>
                            </div>

                        </div>

                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" name="submit" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
<?php 
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $skills = $_POST["skills"];
        $conn = mysqli_connect("localhost","root","","project") or die("failed to connect");
        $que = "insert into applied_auditions(uid,aid,name,email,phone,skills) values($_SESSION[uid],$_GET[id],'$name','$email',$phone,'$skills')";
        $result = mysqli_query($conn,$que);
         //$query = "";
         //$result = mysqli_query($conn,"insert into users(id,name) values(4,'abcd')");
      
         //$result = mysqli_query($conn,"Insert into newuser values($phone,'$name')");
        var_dump($result);
        if($result){
          echo "<script>alert('Applied successfully, Best of luck')</script>";
        }
        else{
          echo "<script>alert('Something went wrong :(')</script>";
        }
      }
?>