<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="css/artist_style.css">
</head>
<body>
    
   <!-- Navbar -->
    <div class="header" id="topheader">

       
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Artist</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">

     
        <a class="nav-link active " href="artistportfolio.php">Portfolio</a>
        <a class="nav-link active" href="../OnlineAudition/CastTalent/ArtistAppForm/AuditionWall/wall.php">Auditions</a>
        <a class="nav-link active" href="audTableArtist/audtableArtist.php">Status</a>
        <a class="nav-link active" href="logout.php">Logout</a>
      </div>
    </div>
  </div>
</nav>


          <section class="header-section">
              <div class="center-div">
                  <h1 class="font-weight-bold">Welcome</h1>
                 <p>Start Your Journey Here<p>
                 
                </div>
            </section>

    </div>

    <!-- Header Dashboard Part Ends -->


    <!-- My Auditions  -->
    <div class="container mt-5">
     <div class="row">
                <?php
                  $conn = mysqli_connect("localhost", "root", "", "project") or die("failed to connect");
                  $que = "select * from auditions";
                  $result = mysqli_query($conn, $que);
                  foreach($result as $arr){ 
                  ?>
        <div class="col-md-4">
            <div class="card p-3">
                <div class="d-flex flex-row mb-3"><img src="images/tables/audArtistAudition.jpg" width="70">
                <div class="d-flex flex-column ml-2"><span><?php echo"$arr[title]" ?></span><span class="text-black-50"><?php echo"$arr[location]" ?></span><span class="ratings"><?php echo"$arr[l_date]" ?></span></div>
                
                </div>
                <h6> <?php echo"$arr[description]" ?></h6>
                <div class="d-flex justify-content-between install mt-3"><span>Applied</span><span class="text-primary"><a href="audTableArtist/audtableArtist.php">View&nbsp;<i class="fa fa-angle-right"></i></a></span></div>
            </div>
        </div>
        
                   <?php } ?>   
     </div>
</div>


    <!-- My Auditions End -->

    
    
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>