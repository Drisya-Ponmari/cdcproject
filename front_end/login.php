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
      			<li class="nav-link"><a href="/front_end/home.php"> <h6><b> Home</b></h6></a></li>
      			<li class="nav-link"><a href="/front_end/about.php"> <h6><b> AboutIITPKD</b></h6></a></li>
      			<li class="nav-link"><a href="/front_end/forstudents.php"> <h6><b>ForStudent</b></h6></li>
      			<li class="nav-link"><a href="/front_end/forcompany.php"> <h6><b>ForCompany</b></h6></a></li>
      			<li class="nav-link"><a href="/front_end/login.php" style="color:red;"> <h6><b>Login</b></h6></a></li>
    		</ul>
  			</div>
		</nav> 

		<!-- login -
		 <form class="loginform" action="#">
		 	<!-- username --
    			<p> <small> <input type="text" name="email" placeholder="Email"> </p> 
    			</p> <input type="password" name="password" placeholder="Password"></p>
  				<button type="submit" class="button">submit</button> </small>
  				<br/>
  				<p class="forgot"><a href="#">forgot password?</a></p>
		</form> -->
		
		<div class="limiter">
		<div class="text-center p-t-12">
			<div  class="text-center p-t-12">
				<div class="text-center p-t-12" data-tilt>
					 <img src="/images/tpo.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" style="text-align:center;"action="#" method="POST">
					<span class="login100-form-title">
						<h4>Company Login</h4>
					</span>

					<div class="wrap-input100 " >
						<input class="input100" type="text" name="email" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>
			</form>
			</div>
		</div>
	</div>


		<!-- footer -->
				<footer>
			<p> Copyright </p>
		</footer>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>




