<!doctype HTML>
<html lang="en">
	<head>
		<title> i &#10084; Green</title>
		<link rel="icon" type="image/png" href="Images/favicon.png">
		<!-- VIEWPORT -->
		<meta name="viewport" content="width=device-width, intial-scale=1">

		<!-- INCLUDE -->
		<link rel="stylesheet" href="dist/css/bootstrap.min.css"/>
			<script src="dist/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
		<!-- FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>

		<style>
			
			.header{
			font-family: 'Oswald', sans-serif;
			}

			.special{
				font-family: 'Francois One', sans-serif;
				font-size: 30px;
			}

			.thin{
				font-family: 'Open Sans Condensed', sans-serif;
				font-size: 20px;
			}

			.footer{
				font-family: 'Titillium Web', sans-serif;
				font-size: 14px;
			}
			
			.subHeading{
				font-family: 'Titillium Web', sans-serif;
				font-size: 18px;
			}

			.gray{
				col:gray;
			}

			a {
				 color:inherit;
				 text-decoration: none; 
			}
			a:hover{
				color:inherit;
				text-decoration: none; 
			}
			
			a:active{
				color:inherit;
				text-decoration: none;
			}
			a:visited{
				color:inherit;
				text-decoration: none;
			}
			
			
		</style>

	</head>
	<body>

		<div class="container">
			<div class="row">
				<div class="visible-md visible-lg hidden-sm col-md-12">
					<div class="page-header">
						<h1 class="header"><span style="margin-left:60px;"><a href="index.html">GREEN SYNTAX</a></span>
						</h1>
						<p class="thin" style="margin-left:60px;">Yes, We Think We Can Change the World</p>

					</div>
				</div>

				<div class=" visible-sm visible-xs hidden-md hidden-lg col-sm-12">
					<div class="page-header">
						<h1 class="header text-center"><span style=""><a href="index.html">GREEN SYNTAX</a></span>
						</h1>
						<p class="thin" style="">Yes, We Think We Can Change the World</p>

					</div>
				</div>

			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-8">
					<p class="subHeading lead text-center">YOU WANT US TO BUILD YOUR IDEA</p>
					<form action="send_quote_mail.php" method="POST">
						<div class="form-group">
							<label for="">Name</label>
							<input type="text" class="form-control" name="customer_name" placeholder="Your Full Name">
						</div>

						<div class="form-group">
							<label for="">Email</label>
							<input type="text" class="form-control" name="customer_email" placeholder="Your Email Address">
						</div>

						<div class="form-group">
							<label for="">Phone</label>
							<input type="text" class="form-control" name="customer_phone" placeholder="Your Phone Number">
						</div>
						
						<label for="">Your Message</label>
						<div class="checkbox">
							<label> <input type="checkbox" name="static_webiste">Static Website</label><br>
							<label> <input type="checkbox" name="dynamic_website">Dynamic Website</label><br>
							<label> <input type="checkbox" name="android_app">Android App</label><br>
							<label> <input type="checkbox" name="ios_app">iOS App</label><br>
							<label> <input type="checkbox" name="windows_app">Windows App</label><br>
						</div>
						
						<div class="form-group">
							<label for="">Product Completion Time, </label><br>
							<select name="dealine_duration" class="form-control">
								<option value="1">1 Months</option>
								<option value="2">2 Months</option>
								<option value="3">3 Months</option>
								<option value="6">6 Months</option>
							</select>
						</div>

						<div class="form-group">
							<label for="">Your Message</label>
							<textarea name="customer_message" class="form-control" id="#" rows="5"></textarea>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-success btn-block footer strong" style="color:white;">Send Your Proposal</button>
						</div>
					</form>
				</div>

				<div class="col-sm-2"></div>
				<div class="col-sm-1"></div>

			</div>
		</div>
		<div class="container">
			<hr/>
			<div class="row">
				<div class=" visible-md visible-lg hidden-sm col-sm-8 text-left">
					<div style="margin-left:40px;">
						<a href="achievements.html"><span class="footer" style="color:gray;"> Achievements</span></a>
						<a href="about.html"><span class="footer" style="color:gray;">| About</span></a>
						<a href="team.html"><span class="footer" style="color:gray;">| Team</span></a>
						<a href="contact.html"><span class="footer" style="color:gray;">| Contact Us</span></a>
					</div>
				</div>

				<div class=" visible-md visible-lg hidden-sm col-sm-4 text-center">
					<span class="footer">&copy; Green Syntax <span class="glyphicon glyphicon-tree-deciduous"></span></span>
				</div>

				<!-- SM XS -->
				<div class=" visible-sm visible-xs hidden-md hidden-lg col-sm-8 text-center">
					<div style="">
						<a href="achievements.html"><span class="footer" style="color:gray;"> Achievements</span></a>
						<a href="about.html"><span class="footer" style="color:gray;">| About</span></a>
						<a href="team.html"><span class="footer" style="color:gray;">| Team</span></a>
						<a href="contact.html"><span class="footer" style="color:gray;">| Contact Us</span></a>
					</div>
				</div>

				<div class=" visible-sm visible-xs hidden-md hidden-lg col-sm-4 text-center">
					<span class="footer text-center">&copy; Green Syntax <span class="glyphicon glyphicon-tree-deciduous"></span></span>
				</div>

			</div>
		</div>

		
	</body>
</html>