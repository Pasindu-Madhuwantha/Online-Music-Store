<?php

	require 'config.php';

?>

<?php
	include('session.php');





  $sql = "SELECT ID,Name,Email,s1,s2,s3,s4,s5,s6,s7,s8 FROM newuser where ID='$session_id'";

  $result = $con -> query($sql);

  if($result -> num_rows > 0)
  {
    while($row = $result -> fetch_assoc())
    {
      $id = $row["ID"];
      $name=$row["Name"];
      $email=$row["Email"];
      $s1=$row["s1"];
      $s2=$row["s2"];
      $s3=$row["s3"];
      $s4=$row["s4"];
      $s5=$row["s5"];
      $s6=$row["s6"];
      $s7=$row["s7"];
      $s8=$row["s8"];

}
    }


else
  {
    echo "0 results";
  }

echo "</table>";

$con -> close();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="useraccountnew1.php" rel="stylesheet">

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
					<li><a href="../Homepage/Home music.php">Home</a></li>
          <li><a href="../categories/indexc.php">Library</a></li>
          <li><a href="../Audio-Video/storeaudio/readaudio.php">Audio</a></li>
          <li><a href="../Audio-Video/storevideos/readfiles.php">Video</a></li>
          <li><a href="#">Sign Out</a></li>
        </ul>

      </nav>
    </section>
    <div class="profile-nav col-md-3">
        <div class="panel">
            <div class="user-heading round">
                <a href="#">
                    <img src="mysterious-man-hood-on-dark-260nw-1716416197.jpg" alt="">
                </a>
                <h1><?php echo $name ?></h1>
                <p><?php echo $email ?></p>
            </div>
                     <br><br>
            <ul class="nav nav-pills nav-stacked">

            </ul>
        </div>
    </div>

  <br><br><br>
    <div class="profile-info col-md-9">

        <div class="panel">
            <div class="bio-graph-heading">
                ♫“Music is your own experience, your thoughts, your wisdom. If you don’t live it, it won’t come out of your horn.”
– Charlie Parker ♫.
            </div>




<div class="panel-body bio-graph-info">
            <h1>Favourites</h1>

            	<form method="POST" action="submitfavourites.php" >

                <input type="hidden" name="field1" value=<?php echo $s1 ?>><br> <br>



              Song 1: <br>
            		<input type="text" name="field1" value="<?php echo $s1 ?>"><br> <br>

            	Song 2: <br>
            		<input type="text"  name="field2" value="<?php echo $s2 ?>"><br> <br>

            	Song 3:<br>
            		<input type="text" name="field3" value="<?php echo $s3 ?>" ><br> <br>

            	Song 4:<br>
            		<input type="text" name="field4" value="<?php echo $s4?>"><br> <br>

            	Song 5: <br>
            		<input type="text" name="field5" value="<?php echo $s5?>"><br> <br>

              Song 6:<br>
                <input type="text" name="field6" value="<?php echo $s6?>"> <br> <br>

              Song 7:<br>
                <input type="text" name="field7" value="<?php echo $s7?>"> <br> <br>

              Song 8:<br>
                <input type="text" name="field8" value="<?php echo $s8?>"> <br> <br>

                <input type="hidden" name="field9" value="<?php echo $id?>">

              <input type="submit" value="Add">


            	</form>
              </div>

  <div class="foot">
          Copyright@2021 Life Of Rhythms.All rights reserved.crafted by shadow technology
      </div>

</body>
</html>
