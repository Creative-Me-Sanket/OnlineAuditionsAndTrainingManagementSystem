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
    <title>Auditions Details </title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>



    <form method="POST" action="castTalent.php" enctype="multipart/form-data">
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Auditions Details</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="castTalent.php">
                        <div class="form-row">
                            <div class="name">Audition Title</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="title">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Gender</div>
                            <div class="value">
                                <select name="gender" class="input--style-6">
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                    <option value="O">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Age</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-125" name="age" type="number" placeholder="21">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Location</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="location" placeholder="pune">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Height</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="height" placeholder="157">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Weight</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="weight" placeholder="65">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Start Date</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="date" name="sDate" placeholder="pune">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Last Date</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="date" name="lDate" placeholder="pune">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Requirements</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload Imagae</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="audImage" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Upload your short video. Max file size 50 MB</div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" name="submit" type="submit">Post Audition</button>
                    
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
<?php
if (isset($_POST["submit"])) {
    
    $title = $_POST["title"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $location = $_POST["location"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];
    $sDate = $_POST["sDate"];
    $lDate = $_POST["lDate"];
    $description = $_POST["description"];
    $pid = $_SESSION["pid"];

    $a_img=$_FILES['audImage']['name'];

    print_r($_FILES);
    $conn = mysqli_connect("localhost", "root", "", "project") or die("failed to connect");
    $que = "insert into auditions(title,gender,age,location,height,weight,s_date,l_date,description,pid,audImage) values('$title','$gender',$age,'$location',$height,'$weight','$sDate','$lDate','$description',$pid,'$a_img')";
    $result = mysqli_query($conn, $que);
    move_uploaded_file($_FILES["audImage"]["tmp_name"],"Assest/auditionsWall/".$a_img);
    var_dump($result);
    if ($result) {
        echo "<script>alert('Audition Posted Successfully')</script>";
    } else {
        echo "<script>alert('Something went wrong :(')</script>";
    }
}
?>