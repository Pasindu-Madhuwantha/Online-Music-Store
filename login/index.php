<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="s1.php">
</head>
<body>
<div class="form-wrapper">

  <form action="#" method="post">
    <h3>  ♫ Life of Rhythms</h3>

    <div class="form-item">
		<input type="text" name="user" required="required" placeholder="Username" autofocus required></input>
    </div>

    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Password" required></input>
    </div>

    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
    </div>
  </form>
  <?php
	if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($con, $_POST['user']);
			$password = mysqli_real_escape_string($con, $_POST['pass']);

			$query 		= mysqli_query($con, "SELECT * FROM newuser WHERE  Password='$password' and Name='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);

			if ($num_row > 0)
				{
					$_SESSION['ID']=$row['ID'];
					header('location:../Homepage/Home music.php');

				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
		}
  ?>
  <div class="reminder">
    <p>Not a member? <a href="../OMS Resgitration/Life of Rhythms_Registration.php">Sign up now</a></p>
    <p><a href="#">Forgot password?</a></p>
  </div>

</div>

</body>
</html>
