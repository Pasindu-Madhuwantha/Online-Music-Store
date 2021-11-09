<?php
include("configx.php");
?>
<!doctype html>
<html>
  <head>
    <title>Upload and Store audio to MySQL Database with PHP</title>
    <link rel="stylesheet" href="new.css">
  </head>
  <body>

    <h1 style="color:white;">“Music is the soundtrack of your life.” </h1>


    <div>

     <?php
     $fetchVideos = mysqli_query($con, "SELECT * FROM audio ORDER BY id DESC");
     while($row = mysqli_fetch_assoc($fetchVideos)){
       $location = $row['location'];
       $name = $row['name'];
       echo "<div >
          <video src='".$location."' controls width='320px' height='100px' ></video>
          <br><br>
          <span style=color:white;font-weight:bold>"  .$name.     "</span>
       </div>";
     }
     ?>

    </div>

  </body>
</html>
