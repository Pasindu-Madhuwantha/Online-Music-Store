<?php //The connection object
$con=new mysqli("localhost","root","","user_registration"); // Check connection
if($con->connect_error)
{ die("Connection failed: " . $con->connect_error);
}

else
{
  echo "connected successfully";
}

?>
