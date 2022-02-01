<?php include("authenticate.php");?>
<!DOCTYPE html>
<html>
	<head>
		<title>KAJIADO BLOOD SYSTEM</title>
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<link rel = "stylesheet" href = "styles/default.css">
	</head>
	<body>
		<div class = "card">
			<div class = "card-header" style = "text-align:center;font-size:50px;"><i class = "fas fa-user"></i></div>
			<div class = "card-body">
				<?php if (!empty($login_err)){
						echo '<div class = "alert alert-danger alert-dismissible"><button class = "close" data-dismiss="alert">&times;</button>
						<strong>'.$login_err. '</strong></div>';
					}?>
				<form action = "" method = "post">
					<div class = "form-group">
						<input type = "text" name = "username" class = "form-control" placeholder = "Username">
					</div>
					<div class = "form-group">
						<input type = "password" name = "password" class = "form-control" placeholder = "Password">
					</div>
					<button class = "btn btn-primary"><i class = "fas fa-lock"></i> Login</button>
				</form>
			</div>
		</div>
	</body>
</html>
