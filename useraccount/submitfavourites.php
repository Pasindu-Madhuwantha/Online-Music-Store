<?php

	require 'config.php';

	$s1 = $_POST["field1"];
	$s2 = $_POST["field2"];
	$s3 = $_POST["field3"];
	$s4 = $_POST["field4"];
	$s5 = $_POST["field5"];
	$s6 = $_POST["field6"];
  $s7 = $_POST["field7"];
  $s8 = $_POST["field8"];
  $id = $_POST["field9"];





	$sql = "UPDATE newuser SET s1='$s1',s2 ='$s2',s3='$s3',s4='$s4',s5='$s5',s6='$s6',s7='$s7',s8='$s8'WHERE ID ='$id'";

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
