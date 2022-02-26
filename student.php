<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <title>Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/studentstyle.css">
</head>

<body>

  <div class="header" id="topheader">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Student</a>
    </div>
    <ul class="nav navbar-nav">
      <li class=""><a href="artistportfolio.php">Profile</a></li>
      <li><a href="CastTalent/ArtistAppForm/AuditionWall/courseWall.php">Enroll Courses</a></li>
      <li><a href="courseTableStudent/courseTableStudent.php">Course List</a></li>
      <li><a href="logout.php">Logout </a></li>
    </ul>
  </div>
</nav>


    <section class="header-section">
      <div class="center-div">
        <h1 class="font-weight-bold">Welcome</h1>
        <p>Learn beyond Imagination
        <p>

      </div>
    </section>

  </div>


  <!-- My Courses  -->
  <section class="courses bg-light" id="courses">
    <div class="container text-center">
      <h1 style="color: white;">MY COURSES</h1>
      <p style="color: white;">Your Enrolled Courses</p>
      <div class="container testimonial-group" >
      <div class="row text-center example">
      <?php
      $conn = mysqli_connect("localhost", "root", "", "project") or die("failed to connect");
      $que = "select * from applied_courses,courses where  applied_courses.cid = courses.id and applied_courses.uid = $_SESSION[uid]";
      $result = mysqli_query($conn, $que);
      foreach($result as $arr){ 
      ?>
        
        <div class="col-xs-4"  style="border-radius: 20px; padding-block-start: 50px;">
        <div>
        <div>
          <video src="CastTalent/ArtistAppForm/Assest/courseWall/<?php echo $arr['audImage']?>" style="width: 200px; height: 300px;"></video>
          <div class="card-body">
          <a href="video_gallery.php">
            <h5 class="card-title" style="color: white;"><?php echo"$arr[cTitle]" ?></h5>
          </a>
           
          </div>
        </div>
      </div>
    </div>
    <?php 
      }
    ?>
  </div>
</div>
    </div>
  </section>
  <!-- My Courses End -->

  <br>
</body>
</html>