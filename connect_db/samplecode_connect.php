<?php
	$mysqli = new mysqli("localhost","111701030","111701030");
	echo "success";
	$sql = "SET ROLE stud_role";
	if($mysqli->query($sql) == TRUE)
	{
		echo "thank god";
	}
	else
	{
		echo "error";
	}
	$mysqli->select_db("cdc") or die("Unable to select database");
	echo "got it";
$s = "SELECT name FROM stud_view";
$result = $mysqli->query($s);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo "Name " .$row["name"]. "<br>";
	}
}else
{
	echo "0 results";
}

?>
