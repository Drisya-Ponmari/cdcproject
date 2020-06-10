<!--Back button disabling if we click logout -->
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
</head>
<body>

		<!--Navigation bar -->
		<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color:#00FFFF;">
      		<a class="navbar-brand"><h3><strong> Placement Cell </h3></strong> </a>
      		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav ml-auto">
    			<li class="nav-link"><a href="/student/logout.php">Logout<span </a></li>
    		</ul>
  			</div>
		</nav> 


		<!--  job_id (no need)     | varchar(10)  | NO   |     | NULL    |       |
| title       | varchar(60)  | NO   |     | NULL    |       |
| Intro       | varchar(100) | NO   |     | NULL    |       |
| Description | varchar(100) | NO   |     | NULL    |       |
| Vacancies   | int(11)      | NO   |     | NULL    |       |
| skill_req   | varchar(100) | NO   |     | NULL    |       |
| salary      | int(11)      | NO   |     | NULL    |       |
| Procedur    | varchar(100) | NO   |     | NULL    |       |
| start       | date         | NO   |     | NULL    |       |
| end         | date         | YES  |     | NULL    |       |
| last_date   | date         | NO   |     | NULL    |       |
| job_type   -->  
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
		<!-- footer -->   
		<footer>
			<p> Copyright </p>
		</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
  </body>
</html>



