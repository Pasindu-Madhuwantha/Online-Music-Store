<?php

	require 'config.php';

?>

              <?php

                 	include('session.php');


           $sql = "SELECT ID,Name,Email,Password,Address,Age,Birthday,Country,Mobile,s1,s2,s3,s4,s5,s6,s7,s8 FROM newuser where ID='$session_id'";

                $result = $con -> query($sql);

                if($result -> num_rows > 0)
                {
                  while($row = $result -> fetch_assoc())
                  {

                      $id = $row["ID"];
                      $name=$row["Name"];
                      $email=$row["Email"];
                      $password=$row["Password"];
                      $address=$row["Address"];
                      $age=$row["Age"];
                      $birthday=$row["Birthday"];
                      $country=$row["Country"];
                      $mobile=$row["Mobile"];
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
    <link href="useraccountnew1.css" rel="stylesheet">



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
          <li><a href="logout.php">Sign Out</a></li>
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

                <li><a href="editprofile.php">Edit Profile</a></li>
                <li><a href="Addfavourites.php" >Modify Favourites</a></li>
            </ul>
        </div>
    </div>


    <div class="profile-info col-md-9">

        <div class="panel">
            <div class="bio-graph-heading">
                ♫“Music is your own experience, your thoughts, your wisdom. If you don’t live it, it won’t come out of your horn.”
– Charlie Parker ♫.
            </div>





              <div class="panel-body bio-graph-info">
            <h1>Bio Graph</h1>
            </div>

            </div>

            <div class="">



            <div class="panel-body bio-graph-info">


                <div class="row">
                  <div class="" >


                    <div class="bio-row">
                        <p id="edit"><span>Name:</span><?php echo $name ?></p>
                    </div>
                    <div class="bio-row">
                        <p id="edit1"><span>Email:</span><?php echo $email ?></p>
                    </div>
                    <div class="bio-row">
                        <p><span>Password:</span><?php echo $password ?></p>
                    </div>
                    <div class="bio-row">

                        <p><span>Address:</span><?php echo $address?></p>
                    </div>
                    <div class="bio-row">
                        <p><span>Age:</span><?php echo $age?></p>
                        </div>
                    <div class="bio-row">
                      <p><span>Birthday:</span><?php echo $birthday?></p>
                        </div>
                    <div class="bio-row">
                        <p><span>Country:</span><?php echo $country?></p>
                    </div>
                    <div class="bio-row">
                        <p><span>Phone:</span><?php echo $mobile?></p>
                    </div>
                </div>
              </div>

            </div>

            <br>

            <div class="panel-body bio-graph-info">
            <h1>Favourites</h1>    </div>


            <div class="panel-body bio-graph-info" >

            <div class="row">
                <div class="bio-row">
                    <p ><span></span><?php echo $s1?></p>
                </div>
                <div class="bio-row">
                    <p><span></span><?php echo $s2?> </p>
                </div>
                <div class="bio-row">
                    <p><span></span><?php echo $s3?></p>
                </div>
                <div class="bio-row">
                    <p><span></span><?php echo $s4?></p>
                </div>
                <div class="bio-row">
                    <p><span></span><?php echo $s5?></p>
                </div>
                <div class="bio-row">
                    <p><span></span><?php echo $s6?></p>
                </div>
                <div class="bio-row">
                    <p><span></span><?php echo $s7?></p>
                </div>
                <div class="bio-row">
                    <p><span></span><?php echo $s8?></p>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>


      <div class="foot">
          Copyright@2021 Life Of Rhythms.All rights reserved.crafted by shadow technology
      </div>

</body>
</html>
