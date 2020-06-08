		<!--prevents the bsck button after logging in -->
		<!--php code -->
<?php
	session_start();
	if(!isset($_SESSION["user"])){
		header('location:/front_end/home.php');
	}
?>


<?php
	include_once 'databaseconnect.php';
	$result = mysqli_query($conn,"SELECT * FROM verify_view");
	$row= mysqli_fetch_array($result);
	if ($row["verified"] == "no") {
		$mess = "Dear ".$row["Roll_no"]." , You are unverified. Please contact Student Respresentative to verify yourself";
	}
	else {
		$mess = "Verified Student";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student_Home</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>

		<!-- ------------------------------------ -->

		<!--Navigation bar -->
		<nav class="navbar navbar-inverse">
  			<div class="container-fluid">
    		<div class="navbar-header">
      		<a class="navbar-brand" >Placement Cell</a>
    		</div>
    		<ul class="nav navbar-nav navbar-right">
      			<li class="active"><a href="/student/home_student.php">Dashboard</a></li>
      			<li><a href="/student/logout.php">Logout</a></li>
    		</ul>
  			</div>
		</nav> 

		<h3 style="text-align:center"><?php if(isset($mess)) { echo $mess; } ?></h3>
		<!-- Showing the options -->
		<ul class="choosea">
			<p> <div class="chooseb" ><a class="choosec" href="#"> VIEW CV</a></div> </p>
			<p> <div class="chooseb" ><a class="choosec" href="/student/edit_cv.php"> EDIT CV</a></div>    </p>
		<?php if( $mess	== "Verified Student"){
			echo '<p> <div class="chooseb" ><a class="choosec" href="#"> BROWSE OPPURTUNITIES</a></div> </p>';
			} 
		?>
			<p> <div class="chooseb" ><a class="choosec" href="#"> STATUS OF APPLICATION</a></div> </p>

		</ul>
			
		<!-- footer -->   
		<footer>
			<p> Copyright </p>
		</footer>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>



