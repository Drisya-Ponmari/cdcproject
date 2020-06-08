<?php

	session_start();
	$conn = mysqli_connect("localhost",$_SESSION["user"],$_SESSION["pass"] );
	#echo "yes".$username;
	$sql = "SET ROLE stud_role";
	if(mysqli_query($conn,$sql))
	{
	
	}
	else
	{
		echo "error in setting role";
	}
	mysqli_select_db($conn,"cdc") or die("Unable to select database");
	
?>
