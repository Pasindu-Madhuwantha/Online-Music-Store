


<?php include('config.php'); ?>


<html>
  <head>

    <title></title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="mystyles.css">
    <script type="text/javascript" src="myscript.js">

    </script>



  </head>
  <body>

    <section id="main">
      <nav>
        <a href="#" class="logo">
          ♫ Life of Rhythms
        </a>

        <span class="menu-space"></span>

        <ul class="menu">
          <li><a href="../Homepage/Home music.php">Home</a></li>
          <li><a href="../categories/indexc.php">library</a></li>
          <li><a href="../Audio-Video/storeaudio/readaudio.php">Audio</a></li>
          <li><a href="../Audio-Video/storevideos/readfiles.php">Video</a></li>
          <li><a href="#">Contacts</a></li>
        </ul>

      </nav>
    </section>



<div class="bt1">
  <a href="#" class="btn1">♫ Life of Rhythms</a>

</div>

  <br><br><br><br>

<div class="bt2">

  <fieldset >

<a class="head" >Create An Account</a>

      <form method="post" onsubmit="checkPassword()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  <br><br><br><br>

  <label for="Enter Name">Your Name:</label>   <br>     <input type="text" id="fname" name="name"required><br/>
  <br/>
  <label for="E-mail">E-mail:</label>   <br>  <input type="text" id="fname" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9]+\.[a-z]{2,3}"  required ><br/>
  <br/>
  <label for="Password">Password: </label>  <br>  <input type="password"  id="pwd" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}"  required> <br/>
  <br/>
  <label for="Re-Password">Re-Enter Password: </label>  <br>  <input type="password" id="cnfrmpwd" required ><br/>

  <br><br>


<input type="checkbox"id="checkid" onclick="enableButton()">Accept Privacy policy and terms

   <br>

  <input type="submit" name="btnSubmit"id="subtn" value="♫ Create Your Life Of Rhythms Account" disabled >


</form>

  </fieldset>



<div class="bt4">
  <a class="btn4">By creating an account you agree to Life Of Rhythms conditions of use and privacy notice.</a>
  <a class="btn5">     Already have an account?</a>
  <a href="../login/index.php" class="btn6">Sign in</a>
 <a class="btn7"> Sign in With:</a>


     <a href="https://www.facebook.com" class="fbbtn">
           <i class="fa fa-facebook fa-fw"></i>
          </a>
         <a href="#" class="twitterbtn">
           <i class="fa fa-twitter fa-fw"></i>
         </a>
         <a href="#" class="googlebtn"><i class="fa fa-google fa-fw">
           </i>
         </a>
</div>
</div>

<a class="foot"><i><b>Copyright@2021 Life Of Rhythms.All rights reserved.crafted by shadow technology</a></i></p>
</body>


</html>

<?php


if(isset($_POST["btnSubmit"]))
{

$name=$_POST["name"];
$mail=$_POST["mail"];
$password=$_POST["password"];


          $sql ="INSERT INTO newuser(Name,Email,Password) VALUES('$name','$mail','$password')";


          if($con->query($sql))
          {

            header("Location:../login/index.php");



           }
           else{
              echo "Error:". $con->error;
            }

      }

            $con->close();
?>
