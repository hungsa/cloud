<!DOCTYPE html>
<html>
	<head>
		<title>About Us</title>
		<link rel="stylesheet" type="text/css" href="./CSS/HomePage.css">
		<link rel="stylesheet" type="text/css" href="./CSS/LoginPage.css">
		<link rel="stylesheet" type="text/css" href="./CSS/AccountPage.css">
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
			<br>
			<form action="HomePage.php">
				<div class="container">
				
					<table>
						<tr>
							<td>
								<div class="profile-card1">
									<div class="profile-card-content1">
										<img src="./Image/profile.png">
								  
										<h4><b>John Delai</b></h4> 
										<p>Student</p> 
								  </div>
								</div>							
							</td>
							<td>
								<div class="profile-card2">
									<div class="profile-card-content2">
										<h3 class="form-title" style="text-align:center">Profile Info</h3>
										<p>First Name</p>
										<input class="form-control" type="text" value="John" name="firstName">
										<p>Last Name</p>
										<input class="form-control" type="text" value="Delai" name="lastName">
										<p>Email/ Username</p>
										<input class="form-control" type="email" value="john.delai@gmail.com" name="email">
										<p>Password</p>
										<input class="form-control" type="password" value="123456789" name="password">									
									</div>
								</div>	
							</td>
							<td>
								<div class="profile-card3">
									<div class="profile-card-content3">
										<h3 class="form-title" style="text-align:center">Payment Info</h3>
										<p>Debit/ Credit Card Number</p>
										<input class="form-control" type="text" value="9876 7896 0900 7677" name="cardNumber">
										<p>Name</p>
										<input class="form-control" type="text" value="John Delai" name="cardName">
										<p>Expire Date</p>
										<input class="form-control" type="text" value="08/2020" name="expireDate">
										<p>Cvv</p>
										<input class="form-control" type="password" value="234" name="cvv">									
									</div>
								</div>	
							</td>
						</tr>
					</table>
					<br>
					<br>
					<button class="btn-blue" style="float:right">SAVE</button>
					
				</div>
			</form>
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
	</body>
</html>
