<?php
  session_start();
  $conn = mysqli_connect("localhost", "root", "", "project") or die("failed to connect");

  $result = mysqli_query($conn, "SELECT id FROM production_house where uid=$_SESSION[uid]");
  foreach ($result as $new) {
    $_SESSION["pid"] = $new["id"];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Production</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/production.css">
</head>
<body>

<div class="header" id="topheader">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link active" href="artistportfolio.php">Portfolio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="CastTalent/ArtistAppForm/castTalent.php">Cast Talent</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="audTableProductionHouse/modifyAudition.php">Shortlist</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="logout.php">Logout</a>
    </li>
  </ul>
 </nav>

    
<section class="header-section">
    <div class="center-div">
        <h1 class="font-weight-bold">Welcome</h1>
       <p>Cast New Talent<p>
       
      </div>
  </section>

</div>

 <!-- Posted Auditions  -->
 <div class="container mt-5">
     <div class="row">
                <?php
                  $conn = mysqli_connect("localhost", "root", "", "project") or die("failed to connect");
                  $que = "select auditions.id,title,location,l_date,description from auditions,production_house where auditions.pid = production_house.id and production_house.uid = $_SESSION[uid]";
                  $result = mysqli_query($conn, $que);
                  foreach($result as $arr){ 
                  ?>
        <div class="col-md-4">
            <div class="card p-3">
                <div class="d-flex flex-row mb-3"><img src="images/tables/productionHouseLogo.png" width="70">
                <div class="d-flex flex-column ml-2"><span><?php echo"$arr[title]" ?></span><span class="text-black-50"><?php echo"$arr[location]" ?></span><span class="ratings"><?php echo"$arr[l_date]" ?></span></div>
                
                </div>
                <h6> <?php echo"$arr[description]" ?></h6>
                <div class="d-flex justify-content-between install mt-3"><span>Posted</span><span class="text-primary"><a href='audTableProductionHouse/modifyAudition.php?id=<?php echo $arr['id'] ?>'>Shortlist&nbsp;<i class="fa fa-angle-right"></i></a></span></div>
            </div>
        </div>
        
                   <?php } ?>   
     </div>
</div>


    <!-- Posted Auditions End -->
<br>



</body>
</html>
