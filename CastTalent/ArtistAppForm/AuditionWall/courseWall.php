<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <title>Document</title>
</head>
<body>
    
<!-- Page Content -->
<div class="container">

<div class="header" id="topheader">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../../../student.php">Back</a>
    </div>

</nav>

    <!-- Page Heading -->
    <h1 class="my-4">Courses Wall
      <small>Achieve Your Next Level</small>
    </h1>

    <!-- Project One -->
    <?php
        $conn = mysqli_connect("localhost","root","","project") or die("failed to connect");
        $que = "select cTitle,cType,cTeacher,description,audImage,courses.id from courses,teachers";
        $result = mysqli_query($conn,$que);
        foreach($result as $arr){
          //var_dump($arr);
    ?>
    <div class="row">
      <div class="col-md-7">
      <a href="#">
          <video class="img-fluid rounded mb-3 mb-md-0" src="../Assest/courseWall/<?php echo $arr['audImage']?>" alt=""></video>
        </a>
        
        <p><?php echo "$arr[description]"  ?></p>
        
      </div>
      <div class="col-md-5">
        <h3><?php echo"$arr[cTitle]" ?></h3>
        <h6>Type <input class="" name="cType" type="text" value="<?php echo"$arr[cType]" ?>" readonly></h6>
        <h6>Teacher <input class="" name="cTeacher" type="text" value="<?php echo"$arr[cTeacher]" ?> " readonly></h6>
        <a class="btn btn-primary" href="enrollCourse.php?id=<?php echo $arr['id'];?>">Enroll Now</a>
      </div>
    </div>
    <!-- /.row -->
          <?php
            } 
          ?>
    <hr>

    <!-- Pagination -->
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>

  </div>
  <!-- /.container -->

</body>
</html>