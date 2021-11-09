<?php

require 'configuration.php';

$Owner;
$CVV;
$CardNo;
$ExpireDate;
$Amount;

//insert data
$sql="INSERT INTO money VALUES('Owner','CVV','CardNo','ExpireDate','Amount')";


	 if($con->query($sql))
	 {
		 header("Location:Paypal.php");
		 exit;
	 }
	 else{
		 echo"<script> alert('error inserting!!!')</script>";
	 }

		 $con->close();

?>
