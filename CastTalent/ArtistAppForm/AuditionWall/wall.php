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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../../../artistindex.php">Back</a>
      </div>

</nav>

    <!-- Page Heading -->
    <h1 class="my-4">Audition Wall
      <small>Explore various types of auditions here</small>
    </h1>

    <!-- Project One -->
    <?php
        $conn = mysqli_connect("localhost","root","","project") or die("failed to connect");
        $que = "select title,gender,location,s_date,l_date,height,weight,age,description,audImage,auditions.id from auditions,production_house where auditions.pid = production_house.id";
        $result = mysqli_query($conn,$que);
        foreach($result as $arr){
          //var_dump($arr);
    ?>
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0" src="../Assest/auditionsWall/<?php echo $arr['audImage']?>" alt=""/>
        </a>
        
        <p><?php echo "$arr[description]"  ?></p>
        
      </div>
      <div class="col-md-5">
        <h3><?php echo"$arr[title]" ?></h3>
        <h6>Gender <input class="" name="gender" type="text" value="<?php echo"$arr[gender]" ?>" readonly></h6>
        <h6>age <input class="" name="age" type="text" value="<?php echo"$arr[age]" ?> " readonly></h6>
        <h6>Location <input class="" name="location" type="text" value="<?php echo"$arr[location]" ?> " readonly></h6>
        <h6>Height <input class="" name="height" type="text" value="<?php echo"$arr[height]" ?> " readonly></h6>
        <h6>Weight <input class="" name="weight" type="text" value="<?php echo"$arr[weight]" ?> " readonly></h6>
        <h6>Start Date <input class="" name="sDate" type="text" value="<?php echo"$arr[s_date]" ?> "readonly></h6>
        <h6>Last Date <input class="" name="lDate" type="text" value="<?php echo"$arr[l_date]" ?> " readonly></h6>
        <a class="btn btn-primary" href="../GiveAudition/applyAudition.php?id=<?php echo $arr['id'] ?>">Apply Now</a>
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