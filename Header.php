<link rel="stylesheet" type="text/css" href="style.css" media="all"/>	
	<!--header-->
	<nav class="navbar navbar-expand-md bg-primary fixed-top navbar-light">
		
		<!--Brand-->
		<a class="navbar-brand" href="#"><img src="logo.png" width="5%" height="5%" alt="">Employee Profile Management System</a>

		<!-- Toggler/collapsibe Button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
		<span class="navbar-toggler-icon"></span>
		</button>

		<!--Navbar Links-->
		<div class="collapse navbar-collapse" id="myNavbar">		
				
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php"><i class="fa fa-home"></i> Home </a>
				</li>

				<!--Dopdown-->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><i class="fa fa-sign-in"></i> Signin</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="employer_signin.php"><i class="fa fa-user-md"> </i> Employer</a>			
							<a class="dropdown-item" href="employee_signin.php"><i class="fa fa-users"> </i> Employee</a>
						</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.php"><i class="fa fa-phone-square"></i> Contact us</a>
				</li>
			</ul>
		</div>
	</nav>
