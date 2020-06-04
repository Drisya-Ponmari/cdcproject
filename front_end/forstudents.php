<!DOCTYPE html>
<html>
<head>
	<title>forstudents</title>

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
      			<li><a href="/front_end/home.php">Home</a></li>
      			<li><a href="/front_end/about.php">AboutIITPKD</a></li>
      			<li class="active"><a href="/front_end/forstudents.php">ForStudent</a></li>
      			<li><a href="/front_end/forcompany.php">ForCompany</a></li>
      			<li><a href="/front_end/login.php">Login</a></li>
    		</ul>
  			</div>
		</nav> 
	
		<!-- login -->
		 <form class="loginform" action="backend/student_connect.php" method="POST">
		 	<!-- username -->
    			<p> <small> <input type="text" name="email" placeholder="Email"> </p> 
    			</p> <input type="password" name="password" placeholder="Password"></p>
  				<button type="submit" class="button">submit</button> </small>
  				<br/>
  				<p class="forgot"> <a href="#">forgot password?</a></p>
		</form> 


		<!-- footer -->
			<footer>
			<p> Copyright </p>
		</footer>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>




