<?php
include("config.php");
?>
<!doctype html>
<html>
  <head>
    <title>Upload and Store video to MySQL Database with PHP</title>
    <link rel="stylesheet" href="audio_styles2.css">
  </head>
  <body>
      <h1 style="color:white;">“Music is the soundtrack of your life.” </h1>
      <br>
    <div>

     <?php
     $fetchVideos = mysqli_query($con, "SELECT * FROM videos ORDER BY id DESC");
     while($row = mysqli_fetch_assoc($fetchVideos)){
       $location = $row['location'];
       $name = $row['name'];
       echo "<div style='float:left; margin-right: 150px;' >
          <video src='".$location."' controls width='320px' height='320px' ></video>
            <br>

          <span style=color:white;font-weight:bold>".$name. "</span>
          <br><br><br><br>
       </div>";
     }
     ?>

    </div>

  </body>
</html>
