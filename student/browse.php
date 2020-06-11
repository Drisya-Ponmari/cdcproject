<?php
			session_start();
		 	if(!isset($_SESSION["user"])){
		    	 header('location:/front_end/home.php');
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
  	<link rel="stylesheet" type="text/css" href="/loginstyle/util.css">
	<link rel="stylesheet" type="text/css" href="/loginstyle/main.css">
</head>
<body>

		<!--Navigation bar -->
		<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color:#00FFFF;">
      		<a class="navbar-brand"><h3><strong> Placement Cell </h3></strong> </a>
      		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav ml-auto">
    		    <li class="nav-link"><a href="/student/home_student.php"><h6><b>Dashboard</b></h6></a></li>    		
    			<li class="nav-link"><a href="/student/logout.php"><h6><b>Logout</b></h6></a></li>
    		</ul>
  			</div>
		</nav> 

		<br/>
<div class="table-responsive text-nowrap">
<table class="table table-dark">
  <thead style="background-color:green;">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">TITLE</th>
      <th scope="col">INTRODUCTION</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">VACANCIES</th>
      <th scope="col">SKILLS REQUIRED</th>
      <th scope="col">SALARY</th>
      <th scope="col">PROCEDURE OF SELECTION</th>
      <th scope="col">START DATE</th>
      <th scope="col">END DATE</th>
      <th scope="col">LAST DATE TO APPLY</th>  
       <th scope="col" style="color:green;">---------------------</th>      
      
    </tr>
  </thead>
  <tbody>
  
  <?php

	include_once 'databaseconnect.php';
	session_start();
	$rollno = $_SESSION["user"];
	$result = mysqli_query($conn,"SELECT * FROM browse");
	if ($result->num_rows > 0) {
			$iteration = 1;
  			while($row = $result->fetch_assoc()) {
			    	echo' <tr style="font-size:70%;"> <th scope="col">';
			    	echo $iteration;
			    	echo'</th> <th scope="col">';
					echo $row["title"]; 
					echo '</th> <th scope="col">';
					echo $row["Intro"]; 
					echo '</th> <th scope="col">';
					echo $row["Description"]; 
					echo '</th> <th scope="col">';
					echo $row["Vacancies"];
					echo '</th> <th scope="col">';
					echo $row["skill_req"]; 
					echo '</th> <th scope="col">';
					echo $row["salary"]; 
					echo '</th> <th scope="col">';
					echo $row["Procedur"]; 
					echo '</th> <th scope="col">';
					echo $row["start"]; 
					echo '</th> <th scope="col">';
					echo $row["end"]; 
					echo '</th> <th scope="col">';
					echo $row["last_date"]; 	
					echo '</th> ';
					echo '</th> <th scope="col">';
					echo '<button type="button" class="btn btn-danger" onclick="Apply()" >Apply</button>'; 	
					echo '</th> ';					
					echo '</tr> ';
					$iteration++;
 			 }
	}
	 else {
  			echo '<script language="JavaScript" type="text/javascript"> if (alert("No jobs to display come back later ")) { history.go(-1); } else {history.go(-1); }</script>';
	}

?>
		</tbody>
		</table>
		</div>
		
		<!-- js-->
		<script>
			function Apply(){
    			alert("Updated successfully");		
   		}
		</script>
		
		<!-- footer -->   
		<footer>
			<p> Copyright </p>
		</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
  </body>
</html>



