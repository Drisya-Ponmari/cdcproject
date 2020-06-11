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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  	 <link rel="stylesheet" href="/css/style.css"> 
  	<link rel="stylesheet" type="text/css" href="/loginstyle/util.css">
	<link rel="stylesheet" type="text/css" href="/loginstyle/main.css">
</head>
<body>

		<!--Navigation bar -->
		
		<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color:#00FFFF;">
      		<a class="navbar-brand"><h3><strong>Placement Cell </h3></strong> </a>
      		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav ml-auto">
    		    <li class="nav-link"><a href="/student/home_student.php"><h6><b>Dashboard</b></h6></a></li>    		
      			<li class="nav-link"><a href="/student/logout.php"><h6><b>Logout</b></h6></a></li>
    		</ul>
  			</div>
		</nav> 

		<!-- javascriopt -->

		<!-- Showing the cv -->
		<form method="post" action="/student/edit_cv.php">
			<!-- <input type="hidden" name="userid" class="txtField" value="<?php echo $row['userid']; ?>">
			<input type="text" name="userid"  value="<?php echo $row['userid']; ?>"> -->
			
				<br/>
			  	<h4><strong>Personal Details: </strong> </h4> <br/>
					
					<div class="form-group row">			
					<label class="col-sm-2 col-form-label">Name:</label>
					<div class="col-sm-10">
                	<input type= "text"   class="form-control" name="name" value ="<?php echo $row['name']; ?>" >
                    </div>
               		</div>
               		
               		<div class="form-group row">	
                	<label class="col-sm-2 col-form-label">Phone Number:</label>
                	<div class="col-sm-10">
                	<input type= "text"  class="form-control" name="phone_no" value ="<?php echo $row['phone_no']; ?>" >
                	</div>
                	</div>
                	
                	<div class="form-group row">	
                	<label class="col-sm-2 col-form-label">Address:</label>
                	<div class="col-sm-10">
                	<input type= "text"  class="form-control" name="address" value ="<?php echo $row['address']; ?>" >
                	</div>
                	</div>
                	
                	<div class="form-group row">	
                	<label class="col-sm-2 col-form-label">Email:</label>
                	<div class="col-sm-10">
                	<input type= "text"  class="form-control" name="email" value ="<?php echo $row['email']; ?>" >
                    </div>
                    </div>
                    
                    <div class="form-group row">	
                	<label class="col-sm-2 col-form-label">Gender:</label>
                	<div class="col-sm-10">
                	<input type= "text"  class="form-control" name="gender" value ="<?php echo $row['gender']; ?>" >
                	</div>
                	</div>
                    
                    <div class="form-group row">	
                	<label class="col-sm-2 col-form-label">Roll Number:</label>
                	<div class="col-sm-10">        
                	<input type= "text"  class="form-control" name="Roll_no" value ="<?php echo $row['Roll_no']; ?>" >
                	</div>
                	</div>
                	
                	<div class="form-group row">	
                	<label class="col-sm-2 col-form-label">Department:</label>
                	<div class="col-sm-10">
                	<input type= "text"  class="form-control" name="department" value ="<?php echo $row['department']; ?>" >
					</div>
                	</div>
                	
					<div class="form-group row">	
                	<label class="col-sm-2 col-form-label">Year:</label>
                	<div class="col-sm-10">
                	<input type= "text"  class="form-control" name="year" value ="<?php echo $row['year']; ?>" >
                    </div>
                	</div>
                	
                    <div class="form-group row">	
                	<label class="col-sm-2 col-form-label">Semester:</label>
                	<div class="col-sm-10">
                	<input type= "text"  class="form-control" name="semester" value ="<?php echo $row['semester']; ?>" >
                    </div>
                	</div>

          	

          		<h4><strong>Education: </strong> </h4>
          		
          			
          			<div class="form-group row">	
                	<label class="col-sm-2 col-form-label">SEM1:</label>
                	<div class="col-sm-10">
                	<input type="text"  class="form-control" name="sem1" value ="<?php echo $row['sem1']; ?>" >
                	</div>
                	</div>
                	
                	<div class="form-group row">	
                	<label class="col-sm-2 col-form-label">SEM2:</label>
                	<div class="col-sm-10">
                	<input type= "text"  class="form-control" name="sem2" value ="<?php echo $row['sem2']; ?>" >
                	</div>
                	</div>
                	
                	
                	<div class="form-group row">	
                	<label class="col-sm-2 col-form-label">SEM3:</label>
                	<div class="col-sm-10">
                	<input type= "text"  class="form-control" name="sem3" value ="<?php echo $row['sem3']; ?>" >
                	</div>
                	</div>
                	
                	
                	<div class="form-group row">	
                	<label class="col-sm-2 col-form-label">SEM4:</label>
                	<div class="col-sm-10">
                	<input type= "text"  class="form-control" name="sem4" value ="<?php echo $row['sem4']; ?>" >
                	</div>
                	</div>
                	
                	
                	<div class="form-group row">	
                	<label class="col-sm-2 col-form-label">SEM5:</label>
                	<div class="col-sm-10">
                	<input type= "text"  class="form-control" name="sem5" value ="<?php echo $row['sem5']; ?>" >
                	</div>
                	</div>
                	
                	
                	<div class="form-group row">	
                	<label class="col-sm-2 col-form-label">SEM6:</label>
                	<div class="col-sm-10">
                	<input type= "text"  class="form-control" name="sem6" value ="<?php echo $row['sem6']; ?>" >
                	</div>
                	</div>
                	
                	
                	<div class="form-group row">	
                	<label class="col-sm-2 col-form-label">SEM7:</label>
                	<div class="col-sm-10">
                	<input type= "text"  class="form-control" name="sem7" value ="<?php echo $row['sem7']; ?>" >
                	</div>
                	</div>
                	
                	<div class="form-group row">	
                	<label class="col-sm-2 col-form-label">SEM8:</label>
                	<div class="col-sm-10">
                	<input type= "text"  class="form-control" name="sem8" value ="<?php echo $row['sem8']; ?>" >
                	</div>
                	</div>
                	
                	<div class="form-group row">	
                	<label class="col-sm-2 col-form-label">Number of Backlogs:</label>
                	<div class="col-sm-10">
                	<input type= "text"  class="form-control" name="backlog" value ="<?php echo $row['backlog']; ?>" >
                	</div>
                	</div>
                	
          	

          	<h4><strong>Work Experience: </strong> </h4>
          		 
          		 <div class="form-group row">	
                <label class="col-sm-2 col-form-label">Internship:</label>
                <div class="col-sm-10">
                 <input type="text"  class="form-control"name="Work_Exp" value ="<?php echo $row['Work_Exp']; ?>" >
                </div>
                </div>
                
         	<h4><strong>Project: </strong> </h4>
          		 
          		<div class="form-group row">	
                <label class="col-sm-2 col-form-label">Semester Project:</label>
                <div class="col-sm-10">
                <input type="text"  class="form-control" name="Project" value ="<?php echo $row['Project']; ?>" >
          		</div>
          		</div>
          				
				<br/>
				<br/>
          		 
         		<div class="form-group row">	
                <label class="col-sm-2 col-form-label">Technical skils:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="Skills" value ="<?php echo $row['Skills']; ?>" > 				
                </div>
                </div>
                
                <div class="form-group row">	
                <label class="col-sm-2 col-form-label">Achievements:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="Achievement" value ="<?php echo $row['Achievement']; ?>" > 	
                </div>
                </div>
                
                <div class="form-group row">	
                <label class="col-sm-2 col-form-label">Area of Interest:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="Interest" class="txtField" value="<?php echo $row['Interest']; ?>">
                </div>
                </div>
                
                <div class="form-group row">	
                <label class="col-sm-2 col-form-label">Position of Responsibility:</label>
                <div class="col-sm-10">
                <input type="text"  class="form-control" name="POR" value ="<?php echo $row['POR']; ?> " > 				
                </div>
                </div>
                
                <div class="form-group row">	
                <label class="col-sm-2 col-form-label">Extracurricular Activities:</label>
                <div class="col-sm-10">
                <input type="text"  class="form-control" name="Extracurr" value ="<?php echo $row['Extracurr'] ?>" > 				
          		</div>
          		</div>
          		
          		<br/>
			<div style="text-align:center;"><button style="width:60%;"class="btn btn-success" id="success" type="submit" onclick="Notification()">submit</button> </div> <br/>
		</form>
			
		<!--javascript code for the successful pop up -->
		<script>
			function Notification(){
    			alert("Updated successfully");		
   		}
		</script>
		
		
		<!-- footer -->   
		<div style="width:100%;height:60px;background:#00FFFF">
			Iam done
		</div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>




