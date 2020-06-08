<?php

	session_start();
	$_SESSION["ss"] = "ss";
	$username = $_POST["email"];
	$password = $_POST["password"];
	$conn = mysqli_connect("localhost","111701030","111701030");
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
	//echo "got it";
	#$s = "SELECT name FROM stud_view";
	#$result = $mysqli->query($s);
	#if($result->num_rows > 0)
	#{
	#	while($row = $result->fetch_assoc())
	#	{
	#		echo "<centre>Name " .$row["name"]. "<br>";
	#	}
		#header('location:/student/home_student.php');
	#}
	#else
	#{
	#	echo "0 results";
	#}
	
?>
