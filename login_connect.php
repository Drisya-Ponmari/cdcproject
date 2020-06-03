<?php
	//echo "hello";
	session_start();
	$username = $_POST['username'];
	$password  = $_POST['password'];
	echo "hello";
	
		$connect = mysqli_connect("localhost","111701030","111701030") or die("Couldn't Connect");
		$result = $mysqli_query("set role stud_view");
		mysqli_select_db("cdc") or die("Cant find DB");
		echo "<center>Login Successfull..!!"
	//die("Please enter USN and Password");
?>
