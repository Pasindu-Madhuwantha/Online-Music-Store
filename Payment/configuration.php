<?php

$servername="localhost";
$username="root";
$password="";
$dbname="user_registration";

$con=new mysqli($servername,$username,$password,$dbname);

if($con->connect_error)
{
	die("connection Failed!!".$con->connect_error);
}
else
{
	echo"<script>alert('connected Successfully!')</script>";
}
?>
