<!DOCTYPE html>
<html>
	<head>
		<title>Online Learning - Learn anything that you want</title>
		<link rel="stylesheet" type="text/css" href="./CSS/HomePage.css">
		<link rel="stylesheet" type="text/css" href="./CSS/LoginPage.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<!-- registration -->
		<!-- login -->
		<!-- main page -->
		<!-- payment -->
		<!-- mycourse -->
		<!-- contact -->
		
		<div class="nav-bar">
	<a href="HomePage.php" class="logo">
		<img src="./Image/logoo.png" />
	</a>
	<ul class="col-md-6" style="margin-top: 3%;">					
		<li><a href="HomePage.php" class="active">Home</a></li>
		<li>
			<a href="MyCoursePage.php">My Course</a>
		</li>
		<li><a href="AccountPage.php">Account</a></li>
		<li><a href="AboutUsPage.php">About Us</a></li>
		<li><a href="#">|</a></li>
		<?php
		$isLoggedIn = false; 
		$username = ''; 


		if ($isLoggedIn) {
			echo '<li><a href="AccountPage.php" class="login">' . $username . '</a></li>';
		} else {
			echo '<li><a href="login.php" class="login">Log In</a></li>';
			echo '<li><a href="register.php" class="signup">Sign Up</a></li>';
		}
		?>
	</ul>			
</div>

		
		<div class="page-container">
			<br><br>
			<br>
			<div class="container">
				<div>
					<img src="./Image/dashboardImage.png" class="themeImage"/>
				</div>
				<br>
				<!-- content -->
				<div style="margin-bottom: 30px;">
					<h3>Popular Courses</h3>
					<br>
					<table>
						<tr>
							<td>
								<div class="card">
								  <img src="./Image/csharp.png" class="course-image">
								  <div class="card-content">
									<h4><b>Mosh Hamedani</b></h4> 
									<p>C# Basics for Beginners: Learn C# Fundamentals by Coding</p>
									<h4 style="float: right;">$ 12.99</h4>									
								  </div>
								</div>
							</td>
							<td>
								<div class="card">
								  <img src="./Image/python.png" class="course-image">
								  <div class="card-content">
									<h4><b>Jose Portilla</b></h4> 
									<p>Complete the Python Bootcamp: Go from zero to hero in Python 3</p> 
									<h4 style="float: right;">$ 12.99</h4>
								  </div>
								</div>
							</td>
							<td>
								<div class="card">
								  <img src="./Image/html.png" class="course-image">
								  <div class="card-content">
									<h4><b>Jonas Schmedtmann</b></h4> 
									<p>Build Real World Websites with HTML5 and get learn various types of tags</p> 
									 <h4 style="float: right;">$ 12.99</h4>
								  </div>
								</div>
							</td>
							<td>
								<div class="card">
								  <img src="./Image/css.png" class="course-image">
								  <div class="card-content">
									<h4><b>Jonas Schmedtmann</b></h4> 
									<p>Advanced CSS and Sass: Flexbox, Grid, Animations and More!</p> 
									<h4 style="float: right;">$ 12.99</h4>
								  </div>
								</div>
							</td>
							<td>
								<div class="card">
								  <img src="./Image/nodejs.png" class="course-image">
								  <div class="card-content">
									<h4><b>Anthony Alicea</b></h4> 
									<p>Learn and Understand wheread who NodeJS is used on sever side</p> 
									<h4 style="float: right;">$ 12.99</h4>
								  </div>
								  
								</div>
							</td>
						</tr>
					</table>
					<br>
					<h3>Newly Uploaded</h3>
					<br>
					<table>
						<tr>
							<td>
								<div class="card">
								  <img src="./Image/nodejs.png" class="course-image">
								  <div class="card-content">
									<h4><b>Anthony Alicea</b></h4> 
									<p>Learn and Understand wheread who NodeJS is used on sever side</p> 
									<h4 style="float: right;">$ 12.99</h4>
								  </div>
								</div>
							</td>
							<td>
								<div class="card">
								  <img src="./Image/html.png" class="course-image">
								  <div class="card-content">
									<h4><b>Jonas Schmedtmann</b></h4> 
									<p>Build Real World Websites with HTML5 and get learn various types of tags</p> 
									<h4 style="float: right;">$ 12.99</h4>
								  </div>
								</div>
							</td>
							<td>
								<div class="card">
								  <img src="./Image/csharp.png" class="course-image">
								  <div class="card-content">
									<h4><b>Mosh Hamedani</b></h4> 
									<p>C# Basics for Beginners: Learn C# Fundamentals by Coding</p> 
									<h4 style="float: right;">$ 12.99</h4>
								  </div>
								</div>
							</td>
							<td>
								<div class="card">
								  <img src="./Image/css.png" class="course-image">
								  <div class="card-content">
									<h4><b>Jonas Schmedtmann</b></h4> 
									<p>Advanced CSS and Sass: Flexbox, Grid, Animations and More!</p> 
									<h4 style="float: right;">$ 12.99</h4>
								  </div>
								</div>
							</td>
							<td>
								<div class="card">
								  <img src="./Image/python.png" class="course-image">
								  <div class="card-content">
									<h4><b>Jose Portilla</b></h4> 
									<p>Complete the Python Bootcamp: Go from zero to hero in Python 3</p> 
									<h4 style="float: right;">$ 12.99</h4>
								  </div>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		
		<footer class="footer">
		<div class="footer-col1">
			<h3>Support:</h3>
			<a href="#phone"><i class="fa fa-phone"></i>&nbsp;&nbsp;+1-647 609 2674</a>
			<a href="#email"><i class="fa fa-envelope"></i>&nbsp;&nbsp;elearning@domain.com</a>				
		</div>				
		<div class="footer-col2">
			<h3>Useful Links:</h3>
			<a href="HomePage.php">Home</a>
			<a href="MyCoursePage.php">My Course</a>
			<a href="AccountPage.php">Account</a>
			<a href="AboutUsPage.php">About us</a>
		</div>				
		<div class="footer-col3">
			<h3>Follow us:</h3>
			<a href="https://www.facebook.com/"><i class="fa fa-facebook-f" style="color: rgb(0,135,201);"></i>&nbsp;&nbsp;Facebook</a>
			<a href="https://twitter.com/?lang=en"><i class="fa fa-twitter" style="color: rgb(0,135,201);"></i>&nbsp;Twitter</a>
		</div>				
	</footer>

		
	</body>
</html>
