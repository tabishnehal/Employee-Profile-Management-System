<!DOCTYPE html>	
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
<title>EPMS</title>
</head>
<body>
  <div class="allexceptfooter">
	<!--header-->
	<?php
         include 'Header.php';
      ?>
    
  <div class="container">
    <div class="row pt-5 mt-5">
	<div class="mx-auto" style="width:500px; height:445px;">
        	<div class="card" style="width:100%; height:90%;">	
			<div class="card-header bg-warning"><h2>Are You Employer? Signin!</h2></div>
			<div class="card-body">
				<form action="employer_signin.php" method="POST">
					<div class="form-group">
					<label for="er_email">Email:</label>
						<input type="text" class="form-control" id="er_email" name="er_email" placeholder="Email" required>
					</div>
					<div class="form-group">
					<label for="er_Password">Password:</label>
						<input type="password" class="form-control" id="er_Password" name="er_Password" placeholder="Password" required>
					</div>
					<button type="submit" name="er_submit" class="btn btn-warning">Signin</button>
				</form>
			</div>
			<div class="card-footer bg-warning">Don't have an account? <a href="contact.php">Contact Us</a></div>
		</div>
	</div>
     
    </div>
  </div>

	<!--footer-->
	<?php
         include 'footer.php';
    	?>
</body>
</html>
