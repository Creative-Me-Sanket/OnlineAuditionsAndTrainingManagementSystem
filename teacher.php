<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teacher</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/teacher.css">
</head>
<body>

<div class="header" id="topheader">

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav">
       <li class="nav-item">
            <a class="nav-link active" href="teacher.php">Home</a>
       </li>
       <li class="nav-item">
           <a class="nav-link active" href="CastTalent/ArtistAppForm/postCourse.php">Add Course</a>
       </li>
       <li class="nav-item">
              <a class="nav-link active" href="courseTableTeacher/modifyCourse.php">Details</a>
        </li>
        <li class="nav-item">
              <a class="nav-link active" href="logout.php">Logout</a>
        </li>
   </ul>
 </nav>
 <section class="header-section">
    <div class="center-div">
        <h1 class="font-weight-bold" style="color: white;">Welcome</h1>
       
      
      </div>
  </section>
</div>   


</div>

 <!-- My Auditions  -->
 <div class="container mt-5">
     <div class="row">
                <?php
                  $conn = mysqli_connect("localhost", "root", "", "project") or die("failed to connect");
                  $que = "select * from courses";
                  $result = mysqli_query($conn, $que);
                  foreach($result as $arr){ 
                  ?>
        <div class="col-md-4">
            <div class="card p-3">
                <div class="d-flex flex-row mb-3"><img src="images/tables/audArtistAudition.jpg" width="70">
                <div class="d-flex flex-column ml-2"><span><?php echo"$arr[cTitle]" ?></span><span class="text-black-50"><?php echo"$arr[cTeacher]" ?></span><span class="ratings"><?php echo"$arr[cType]" ?></span></div>
                
                </div>
                <h6> <?php echo"$arr[description]" ?></h6>
                <div class="d-flex justify-content-between install mt-3"><span>Posted</span><span class="text-primary"><a href="courseTableTeacher/modifyCourse.php">View&nbsp;<i class="fa fa-angle-right"></i></a></span></div>
            </div>
        </div>
        
                   <?php } ?>   
     </div>
</div>


    <!-- My Auditions End -->

    
<br>



</body>
</html>
