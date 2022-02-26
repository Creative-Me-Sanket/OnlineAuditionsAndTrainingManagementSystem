<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/video_gallery_style.css">

    <title>Course Gallery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body style="background-color: rgb(255, 155, 67)">
    <!-- Adding Video Gallery -->
    <div class="container">
        <div class="heading">Course Gallery</div>

        <div class="video-container">
           

                            <?php
                            $index = 0;
                        $conn = mysqli_connect("localhost","root","","project") or die("failed to connect");
                        $que = "select cTitle,cType,cTeacher,description,audImage,courses.id from courses,teachers";
                        $result = mysqli_query($conn,$que);
                        foreach($result as $arr){
                        //var_dump($arr);
                       ?>
                <div class="col-md-4">
                    <div class="video">
                        <video src="CastTalent/ArtistAppForm/Assest/courseWall/<?php echo $arr['audImage']?>"  muted controls></video>
                    </div>
                    <p style="color: white; text-align: center !important; font-weight:600;font-size: 19px;">
                    <h1> <?php echo"$arr[cTitle]" ?> </h1>
                    </p>
                </div>
         
            <?php
            }
          ?>
        </div>
    </div>


    <!-- Processing Videos -->

    <script>
        var video = document.querySelectorAll('video')

        video.forEach(play => play.addEventListener('click', () => {
            play.classList.toggle('active');

            if (play.paused) {
                play.play();
            } else {
                play.pause();
                play.currentTime = 0;
            }

        }));
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/javascript.util/0.12.12/javascript.util.min.js" integrity="sha512-oHBLR38hkpOtf4dW75gdfO7VhEKg2fsitvHZYHZjObc4BPKou2PGenyxA5ZJ8CCqWytBx5wpiSqwVEBy84b7tw==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>

</html>