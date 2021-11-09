<?php
include("configx.php");

if(isset($_POST['but_upload'])){
   $maxsize = 5242880; // 5MB
   if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ''){
       $name = $_FILES['file']['name'];
       $target_dir = "audio/";
       $target_file = $target_dir . $_FILES["file"]["name"];

       // Select file type
       $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp3","avi","3gp","mov","mpeg");

       // Check extension
       if( in_array($extension,$extensions_arr) ){

          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
             $_SESSION['message'] = "File too large. File must be less than 5MB.";
          }else{
             // Upload
             if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
               // Insert record
               $query = "INSERT INTO audio(name,location) VALUES('".$name."','".$target_file."')";

               mysqli_query($con,$query);

               $_SESSION['message'] = "<br><br><br><br><br><br><h1>Upload successfully.<h2>";
             }
          }

       }else{
          $_SESSION['message'] = "Invalid file extension.";
       }
   }else{
       $_SESSION['message'] = "Please select a file.";
   }
   header('location: indexa.php');
   exit;
}
?>
<!doctype html>
<html>
  <head>
     <title>Upload and Store video to MySQL Database with PHP</title>
       <link rel="stylesheet" href="audio_styles2.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>

    <section id="main">
      <nav>
        <a href="#" class="logo">
          ♫ Life of Rhythms
        </a>
        <div class="wrap">
     <div class="search">
        <input type="text" class="searchTerm" placeholder="What are you looking for?">
        <button type="submit" class="searchButton">
          <i class="fa fa-search"></i>
       </button>
     </div>
  </div>

  <span class="menu-space"></span>

        <ul class="menu">
          <li><a href="../../Homepage/Home music.php">Home</a></li>
          <li><a href="../../categories/indexc.php">Library</a></li>
          <li><a href="readaudio.php">Audio</a></li>
          <li><a href="../storevideos/readfiles.php">Video</a></li>
          <li><a href="#">Sign Out</a></li>
        </ul>

      </nav>
    </section>

    <!-- Upload response -->
    <?php
    if(isset($_SESSION['message'])){
       echo $_SESSION['message'];
       unset($_SESSION['message']);
    }
    ?>
    <br><br><br><br><br><br><br>
    <form method="post" action="" enctype='multipart/form-data' >
      <input type='file' name='file'  >
      <input type='submit' value='Upload audio' name='but_upload'>
    </form>

  </body>
</html>
