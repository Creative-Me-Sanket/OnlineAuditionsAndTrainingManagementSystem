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
    <title>Course Details </title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>


    <form method="POST" action="postCourse.php" enctype="multipart/form-data">
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Course Details</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="castTalent.php">
                        <div class="form-row">
                            <div class="name">Course Title</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="cTitle">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Type</div>
                            <div class="value">
                                <select name="cType" class="input--style-6">
                                    <option value="M">Music</option>
                                    <option value="A">Acting</option>
                                    <option value="O">Other</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Teacher</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="cTeacher">
                                </div>
                            </div>
                        </div>
                       

                        <div class="form-row">
                            <div class="name">Description</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload Course</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="audImage" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="label--file">No file chosen</span>
                                </div>
                                <div class="label--desc">Upload your Course</div>
                            </div>

                            
                        </div>

                        
                    </form>
                </div>
                <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" name="submit" type="submit">Post Course</button>
                    
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
    
    $cTitle = $_POST["cTitle"];
    $cType = $_POST["cType"];
    $cTeacher = $_POST["cTeacher"];
    $description = $_POST["description"];
   // $tid = $_SESSION["tid"];
   $a_img=$_FILES['audImage']['name'];
   



    $conn = mysqli_connect("localhost", "root", "", "project") or die("failed to connect");
    $que = "insert into courses(cTitle,cType,cTeacher,description,audImage) values('$cTitle','$cType','$cTeacher','$description','$a_img')";
    $result = mysqli_query($conn, $que);
    move_uploaded_file($_FILES["audImage"]["tmp_name"],"Assest/courseWall/".$a_img);
    
    var_dump($result);
    if ($result) {
        echo "<script>alert('Course Posted Successfully')</script>";
    } else {
        echo "<script>alert('Something went wrong :(')</script>";
    }
}
?>