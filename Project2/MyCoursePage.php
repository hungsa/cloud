<!DOCTYPE html>
<html>
	<head>
		<title>About Us</title>
		<link rel="stylesheet" type="text/css" href="./CSS/HomePage.css">
		<link rel="stylesheet" type="text/css" href="./CSS/MyCoursePage.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>		
		<div class="nav-bar">
			<a href="HomePage.php" class="logo">
				<img src="./Image/logoo.png" />
			</a>
			<ul style="margin-top: 3%;">					
				<li><a href="HomePage.php">Home</a></li>
				<li>
					<a href="MyCoursePage.php">My Course</a>
				</li>
				<li><a href="AccountPage.php">Account</a></li>
				<li><a href="AboutUsPage.php">About Us</a></li>
				<li><a href="#">|</a></li>
				<li><a href="login.php" class="login">Log In</a></li>
				<li><a href="register.php" class="signup">Sign Up</a></li>
			</ul>			
		</div>
		
		<div class="page-container">
			
			<br>
			<br>
			<div class="container">
				<table>
					<tr>
						<td>
							<div class="video-card">
								<h2 class="video-card-content">ch1: Introduction</h2>
								<video width="700" controls>
									<source src="./Image/introduction.mp4" type="video/mp4">
									Your browser does not support HTML5 video.
								</video>
							</div>
						</td>
						<td>
							<div class="list-card" style="overflow-y: auto;">
								<h2 style="text-align: center;width: 450px;">Course List</h2>

								<button id="accordion" class="accordion">C#</button>
								<div class="panel">
									<a href="#C#_lec1">Introduction</a>
									<a href="#C#_lec2">Chapter 1</a>
									<a href="#C#_lec3">Chapter 2</a>
									<a href="#C#_lec4">Chapter 3</a>
									<a href="#C#_lec5">Chapter 4</a>
									<a href="#C#_quiz">Quiz</a>
								</div>

								<button class="accordion">java</button>
								<div class="panel">
									<a href="#Java_lec1">Introduction</a>
									<a href="#Java_lec2">Chapter 1</a>
									<a href="#Java_lec3">Chapter 2</a>
									<a href="#Java_lec4">Chapter 3</a>
									<a href="#Java_lec5">Chapter 4</a>
									<a href="#Java_quiz">Quiz</a>
								</div>

								<button class="accordion">Nodejs</button>
								<div class="panel">
									<a href="#Nodejs_lec1">Introduction</a>
									<a href="#Nodejs_lec2">Chapter 1</a>
									<a href="#Nodejs_lec3">Chapter 2</a>
									<a href="#Nodejs_lec4">Chapter 3</a>
									<a href="#Nodejs_lec5">Chapter 4</a>
									<a href="#Nodejs_quiz">Quiz</a>
								</div>
								
							</div>
						</td>
					</tr>
				</table>				
				
			</div>
			<br>
			<br>
			<br>
		</div>
		
		<div class="footer">
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
		</div>
		<script>
			var acc = document.getElementsByClassName("accordion");
			var i;
			for (i = 0; i < acc.length; i++) {			
				acc[i].addEventListener("click", function() {
					this.classList.toggle("active");	
					var panel = this.nextElementSibling;
					if (panel.style.display === "block") {
						panel.style.display = "none";
					} else {
						panel.style.display = "block";
					}
				});
			}
		</script>
	</body>
</html>
