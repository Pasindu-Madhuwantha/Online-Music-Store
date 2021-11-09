<?php

	require 'config.php';

	$name = $_POST["field1"];
	$email = $_POST["field2"];
	$password = $_POST["field3"];
	$address = $_POST["field4"];
	$age = $_POST["field5"];
	$birthday = $_POST["field6"];
  $country = $_POST["field7"];
  $mobile = $_POST["field8"];
  $id = $_POST["field9"];





	$sql = "UPDATE newuser SET Name='$name',Email ='$email',Password='$password',Address='$address',Age ='$age',
  Birthday='$birthday',Country='$country',Mobile='$mobile'
  WHERE ID ='$id'";

if($con -> query($sql))
	{
		echo "<script> alert('Bio Graph Updated Successfully ') </script>";
		header("Location:useraccountnew.php");
	}
	else
	{
	   echo "error".$con->error;
		//echo "<script> alert('Error updating!!!')</script>";
	}

	$con -> close();

?>
