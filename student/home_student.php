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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  	<link rel="stylesheet" href="/css/style.css">
</head>
<body>

		<!-- ------------------------------------ -->

		<!--Navigation bar -->
		
		<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color:#00FFFF;">
      		<a class="navbar-brand"><h3><strong> Placement Cell </h3></strong> </a>
      		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav ml-auto">
      			<li class="nav-link active"><a href="/student/home_student.php">Dashboard</a></li>
      			<li class="nav-link"><a href="/student/logout.php">Logout</a></li>
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
			<p> <div class="chooseb" ><a class="choosec" href="/student/apply_com.php"> APPLIED COMPANY</a></div> </p>

		</ul>
			
		<!-- footer -->   
		<footer>
			<p> Copyright </p>
		</footer>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>




