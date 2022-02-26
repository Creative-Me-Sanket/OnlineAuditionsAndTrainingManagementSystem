<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  

    <title>Document</title>
</head>
<body>
    
<div class="embed-responsive embed-responsive-16by9">
<?php
        $conn = mysqli_connect("localhost","root","","project") or die("failed to connect");
        $que = "select title,gender,location,s_date,l_date,height,weight,age,description,audImage,auditions.id from auditions,production_house where auditions.pid = production_house.id";
        $result = mysqli_query($conn,$que);
        foreach($result as $arr){
          //var_dump($arr);
    ?>
  <img src="../ArtistAppForm/Assest/auditionsWall/<?php echo $arr['audImage']?>"  muted controls/>

  <?php } ?> ?>
</div>


    
</body>
</html>