<!--Back button disabling if we click logout -->
<?php
			session_start();
		 	if(!isset($_SESSION["user"])){
		    	 header('location:/front_end/home.php');
			}
?>

<?php
	include_once 'databaseconnect.php';
	if(count($_POST)>0)
	{
		mysqli_query($conn,"UPDATE stud_view set Roll_no='" . $_POST['Roll_no'] . "', name='" . $_POST['name'] . "', department='" . $_POST['department'] . "', gender='" . $_POST['gender'] . "' ,semester='" . $_POST['semester'] . "' WHERE Roll_no='" . $_POST['Roll_no'] . "'");
		$message = "Record Modified Successfully";
	}
	session_start();
	$rollno = $_SESSION["user"];
	$result = mysqli_query($conn,"SELECT * FROM stud_view WHERE Roll_no=$rollno ");
	$row= mysqli_fetch_array($result);
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

		<!--Navigation bar -->
		<nav class="navbar navbar-inverse">
  			<div class="container-fluid">
    		<div class="navbar-header">
      		<a class="navbar-brand" >Placement Cell</a>
    		</div>
    		<ul class="nav navbar-nav navbar-right">
      			<li><a href="/student/logout.php">Logout</a></li>
    		</ul>
  			</div>
		</nav> 

		<!-- javascriopt -->

		<!-- Showing the cv -->
		<form class="enter" method="post" action="/student/edit_cv.php">
			<!-- <input type="hidden" name="userid" class="txtField" value="<?php echo $row['userid']; ?>">
			<input type="text" name="userid"  value="<?php echo $row['userid']; ?>"> -->
			
			  	<h4><strong>Personal Details: </strong> </h4>
						
					<label >Name:</label>
                	<input type= "text"  name="name" value ="<?php echo $row['name']; ?>" >
                
                	<label>Phone Number:</label>
                	<input type= "text"  name="phone_no" value ="<?php echo $row['phone_no']; ?>" >
                
                	<label>Address:</label>
                	<input type= "text"  name="address" value ="<?php echo $row['address']; ?>" >
                	
                	<label>Email:</label>
                	<input type= "text"  name="email" value ="<?php echo $row['email']; ?>" >
                            
                    <label>Gender:</label>
                	<input type= "text"  name="gender" value ="<?php echo $row['gender']; ?>" >
                            
                    <label>Roll Number:</label>
                	<input type= "text"  name="Roll_no" value ="<?php echo $row['Roll_no']; ?>" >
                	
                	<label>Department:</label>
                	<input type= "text"  name="department" value ="<?php echo $row['department']; ?>" >

                    <label>Year:</label>
                	<input type= "text"  name="year" value ="<?php echo $row['year']; ?>" >
                    
                    <label>Semester:</label>
                	<input type= "text"  name="semester" value ="<?php echo $row['semester']; ?>" >
                    

          	

          		<h4><strong>Education: </strong> </h4>
          		
          			<label>SEM1:</label>
                	<input type="text"  name="sem1" value ="<?php echo $row['sem1']; ?>" >
                	
                	<label>SEM2:</label>
                	<input type= "text"  name="sem2" value ="<?php echo $row['sem2']; ?>" >
                	
                	<label>SEM3:</label>
                	<input type= "text"  name="sem3" value ="<?php echo $row['sem3']; ?>" >
                	
                	<label>SEM4:</label>
                	<input type= "text"  name="sem4" value ="<?php echo $row['sem4']; ?>" >
                	
                	<label>SEM5:</label>
                	<input type= "text"  name="sem5" value ="<?php echo $row['sem5']; ?>" >
                	
                	<label>SEM6:</label>
                	<input type= "text"  name="sem6" value ="<?php echo $row['sem6']; ?>" >
                	
                	<label>SEM7:</label>
                	<input type= "text"  name="sem7" value ="<?php echo $row['sem7']; ?>" >
                	
                	<label>SEM8:</label>
                	<input type= "text"  name="sem8" value ="<?php echo $row['sem8']; ?>" >
                	
                	<label>Number of Backlogs:</label>
                	<input type= "text"  name="backlog" value ="<?php echo $row['backlog']; ?>" >
                	
          	

          	<h4><strong>Work Experience: </strong> </h4>
          		 
          		 <label>Internship:</label>
                 <input type="text"  name="Work_Exp" value ="<?php echo $row['Work_Exp']; ?>" >
                	
         	<h4><strong>Project: </strong> </h4>
          		 
          		 <label>Semester Project:</label>
                 <input type="text"  name="Project" value ="<?php echo $row['Project']; ?>" >
          				
				<br/>
				<br/>
          		 
          		 <label>Technical Skills:</label>
                 <input type="text"  name="Skills" value ="<?php echo $row['Skills']; ?>" > 				
                 
                 <label>Achievements:</label>
                 <input type="text"  name="Achievement" value ="<?php echo $row['Achievement']; ?>" > 	
                 
                 <label>Area of Interest:</label>			
                 <input type="text" name="Interest" class="txtField" value="<?php echo $row['Interest']; ?>">
                 
                 <label>Position of Responsibility:</label>
                 <input type="text"  name="POR" value ="<?php echo $row['POR']; ?> " > 				
                 
                 <label>Extracurricular Activities:</label>
                 <input type="text"  name="Extracurr" value ="<?php echo $row['Extracurr'] ?>" > 				
          
          
			<button class="button" id="success" type="submit" onclick="Notification()">submit</button> </small>
		</form>
			
		<!--javascript code for the successful pop up -->
		<script>
			function Notification(){
    			alert("Updated successfully");		
   		}
		</script>
		
		
		<!-- footer -->   
		<div style="width:100%;height:60px;background:black">
			Iam done
		</div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>




