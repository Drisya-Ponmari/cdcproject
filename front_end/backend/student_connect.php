<?php

	session_start();
	$username = $_POST["email"];
	$password = $_POST["password"];
	$mysqli = new mysqli("localhost",$username,$password);
	#echo "yes".$username;
	$_SESSION["user"] = $username;
	$_SESSION["pass"] = $password;
	$sql = "SET ROLE stud_role";
	if($mysqli->query($sql) == TRUE)
	{
		echo "Connecetion established<br>";
	}
	else
	{
		echo "error";
	}
	$mysqli->select_db("cdc") or die("Unable to select database");
	//echo "got it";
	$s = "SELECT name FROM stud_view";
	$result = $mysqli->query($s);
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			echo "<centre>Name " .$row["name"]. "<br>";
		}
		header('location:/student/home_student.php');
	}
	else
	{
		echo "0 results";
	}
?>
