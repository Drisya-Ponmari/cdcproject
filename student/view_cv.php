
	<?php
	include_once 'databaseconnect.php';
	$result = mysqli_query($conn,"SELECT * FROM stud_view");
	$row= mysqli_fetch_array($result);
	?>

	<!DOCTYPE HTML">
	<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
		<title>Resume</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/style.css">
		<link rel="stylesheet" type="text/css" href="/loginstyle/util.css">
		<link rel="stylesheet" type="text/css" href="/loginstyle/main.css">	
    	 <style type="text/css">
			@page { size: 8.5in 11in; margin-left: 1in; margin-right: 1in; margin-top: 0.5in; margin-bottom: 0.5in }
			@page:first { }
			p { margin-bottom: 0.1in; line-height: 115%; background: transparent }
			/*Remove the below line to avoid underline under the nav bar */
			/*a:link { color: #000080; so-language: zxx; text-decoration: underline }*/
		</style>
		<style>
			body {
				background: #1500;
			}

			.wrapper {
				max-width: 753px;
				margin: auto;
				background: white;
				padding: 10px;
			}
		</style> 
	</head>
	<body lang="en" link="#000080" vlink="#800000" dir="ltr" >

		<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color:#00FFFF;">
			<a class="navbar-brand"><h3><strong> Placement Cell </h3></strong> </a>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-link"><a href="/student/home_student.php"><h6><b>Dashboard</b></h6></a></li>    		
					<li class="nav-link"><a href="/student/logout.php"><h6><b>Logout</b></h6></a></li>
				</ul>
			</div>
			<div style="" class="" onclick="ExportPdf()">
				<button>Download CV</button>
			</div>
			
		</nav> 

		<div class="wrapper" id="myCanvas">
			<div class="wx-holder">
				<div title="header">
					<p align="center" style="margin-right: 0in; margin-bottom: 0in; line-height: 100%">
						<font face="Montserrat ExtraBold, serif">
							<font size="5" style="font-size: 18pt">
							</font>
						</font>
					</p>
					<p align="center" style="margin-bottom: 0in; line-height: 100%">
						<font face="Montserrat ExtraBold, serif">
							<font size="5" style="font-size: 18pt"><br><?php echo $row["name"];?>
						</font>
					</font>
				</p>
				<p style="margin-bottom: 0.2in">
				</p>
			</div>
			<p align="center" style="text-indent: 0in; margin-bottom: 0in; line-height: 100%">Semester: <?php echo $row["semester"];?>
		</p>
		<p align="center" style="">DOB: <?php echo $row["DOB"];?>
	</p>
	<p align="center" style="margin-bottom: 0in; line-height: 100%"><?php echo $row["address"];?> | <?php echo $row["phone_no"];?> |
		<a href="mailto:vipin.official.seth@gmail.com">
			<font color="#1155cc">
				<u>
					<?php echo $row["email"];?>
				</u>
			</font>
		</a>
	</p>
	<p align="center" style="margin-bottom: 0in; line-height: 100%"><br/>
	</p>
	<hr style="margin-left:0;margin-right: 0;height:3px;border-width:0;color:black;background-color:gray">
	<p style="text-decoration: underline; margin-bottom: 0.1in; line-height: 100%;margin-left:0;" >
		<font color="#ff0000">
			<font size="3" style="font-size: 13pt"><b>E</b>
			</font>
		</font>
		<font size="3" style="font-size: 13pt"><b>ducation</b>
		</font>
	</p>
	<p style="margin-bottom: 0in; line-height: 100%; margin-left:0"><b>Indian Institute of Technology, Palakkad</b>
	</p>
	<p style="margin-bottom: 0in; line-height: 100%;margin-left:5"><i>BTech, <?php echo $row["department"];?>
	<span style="float: right;">Year - Present</span></i>
</p>
<ul>
	<li style = "margin-left:0">
		<p style="margin-bottom: 0in; line-height: 100%"><b>Cumulative GPA: <?php echo $row["CGPA"];?>/10</b>
		</p>
		<li style = "margin-left:0">
			<p style="margin-bottom: 0in; line-height: 100%;"><b>Major GPA:(to be calculated)/10</b>
			</p>
			<li style = "margin-left:0">
				<p style="margin-bottom: 0in; line-height: 100%">Relevant Coursework:
				</p>
				<ul>
					<li>
						<p style="margin-bottom: 0in; line-height: 100%"><b><?php echo $row["course"];?></b>
						</p>
					</ul>
				</ul>
				<p style="margin-bottom: 0in; line-height: 100%; margin-left:0"><b>School Name</b>
					<span style="float: right;"><i>Add of School</i></span>
				</p>
				<p style="margin-bottom: 0in; line-height: 100%; margin-left:0"><i>XII
					<span style="float: right;">Year
					</span></i>
				</p>
				<ul>
					<li style = "margin-left:0">
						<p style="margin-bottom: 0in; line-height: 100%">Percentage: <?php echo $row["10th"];?>
					</p>
				</ul>
				<p style="margin-bottom: 0in; line-height: 100%; margin-left:0"><b>School Name</b>
					<span style="float: right;"><i>Add of School</i>
					</span>
				</p>
				<p style="margin-bottom: 0in; line-height: 100%; margin-left:0"><i>X
					<span style="float: right;">Year
					</span></i>
				</p>
				<ul>
					<li style = "margin-left:0">
						<p style="margin-bottom: 0in; line-height: 100%">Percentage: <?php echo $row["12th"];?>
					</p>
				</ul>
				<p style="margin-bottom: 0in; line-height: 100%"><br/>
				</p>
				<p style="text-decoration: underline;margin-left:0;margin-bottom: 0.1in; line-height: 100%">
					<font color="#ff0000">
						<font size="3" style="font-size: 13pt"><b>W</b></font></font><font size="3" style="font-size: 13pt"><b>ork Experience</b>
						</font>
					</p>
					<p style="margin-left:0;margin-bottom: 0in; line-height: 100%"><b><?php echo $row["Work_Exp"];?></b>
						<span style="float: right;"><i>place</i></span><b></b>
					</p>
					<p style="margin-bottom: 0in; line-height: 100%"><br/>
					</p>
					<p style="margin-bottom: 0in; line-height: 100%"><br/>
					</p>
					<p style="text-decoration: underline;margin-left:0;margin-bottom: 0.1in; line-height: 100%">
						<font color="#ff0000"><font size="3" style="font-size: 13pt"><b>P</b></font></font><font size="3" style="font-size: 13pt"><b>rojects</b>
						</font>
					</p>
					<p style="margin-bottom: 0in; line-height: 100%">
					</p>
					<p style="margin-left:0;margin-bottom: 0in; line-height: 100%"><b><?php echo $row["Project"];?></b><span style="float: right;"><i>Year</i></span></p>
					<p style="margin-bottom: 0in; line-height: 100%"><br/>

					</p>
					<p style="text-decoration: underline;margin-left:0;margin-bottom: 0.1in; line-height: 100%">
						<font color="#ff0000"><font size="3" style="font-size: 13pt"><b>S</b></font></font><font size="3" style="font-size: 13pt"><b>kills and </b></font><font color="#ff0000"><font size="3" style="font-size: 13pt"><b>I</b></font></font><font size="3" style="font-size: 13pt"><b>nterest</b></font></p>
						<p style="margin-bottom: 0in; line-height: 100%">
						</p>
						<ul>
							<li style = "margin-left:0"><p style="margin-right: 0in; margin-bottom: 0in; line-height: 100%"><?php echo $row["Skills"];?></p>
								<li style = "margin-left:0"><p style="margin-bottom: 0in; line-height: 100%"><?php echo $row["Interest"];?></p>
								</ul>
								<p style="text-decoration: underline;margin-left:0;margin-bottom: 0.1in; line-height: 100%"><font color="#ff0000"><font size="3" style="font-size: 13pt"><b>A</b></font></font><font size="3" style="font-size: 13pt"><b>ccomplishments</b></font></p>
								<p style="margin-bottom: 0in; line-height: 100%">
								</p>
								<ul>
									<li style = "margin-left:0"><p style="margin-bottom: 0in; line-height: 100%"><?php echo $row["Achievement"];?></p>
									</ul>


									<p style="text-decoration: underline;margin-left:0;margin-bottom: 0.1in; line-height: 100%"><font color="#ff0000"><font size="3" style="font-size: 13pt"><b>P</b></font></font><font size="3" style="font-size: 13pt"><b>osition of Responsibility</b></font></p>
									<p style="margin-bottom: 0in; line-height: 100%">
									</p>
									<ul>
										<li style = "margin-left:0"><p style="margin-bottom: 0in; line-height: 100%"><?php echo $row["POR"];?></p>
										</ul>


										<p style="text-decoration: underline;margin-left:0;margin-bottom: 0.1in; line-height: 100%"><font color="#ff0000"><font size="3" style="font-size: 13pt"><b>E</b></font></font><font size="3" style="font-size: 13pt"><b>xtracurricular</b></font><font size="5" style="font-size: 17pt"><b>
										</b></font><b>Activities</b></p>
										<p style="margin-bottom: 0in; line-height: 100%">
										</p>
										<ul>
											<li style = "margin-left:0"><p style="margin-top: 0.17in; margin-bottom: 0.17in; line-height: 100%">Extracurr</p>
											</ul>

										</div>
									</div>

									<!-- footer -->   
									<footer>
										<p> Copyright #vipin</p>
									</footer>

									<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
									<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
									<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
									<script src="https://kendo.cdn.telerik.com/2017.2.621/js/jquery.min.js"></script>
									<script src="https://kendo.cdn.telerik.com/2017.2.621/js/jszip.min.js"></script>
									<script src="https://kendo.cdn.telerik.com/2017.2.621/js/kendo.all.min.js"></script>


									<script>
										function ExportPdf(){ 
											kendo.drawing
											.drawDOM("#myCanvas", 
											{ 
												paperSize: "A4",
												margin: { top: "1cm", bottom: "1cm" },
												scale: 0.8,
												height: 500
											})
											.then(function(group){
												kendo.drawing.pdf.saveAs(group, "Resume.pdf")
											});
										}
									</script>

								</body>
								</html>
