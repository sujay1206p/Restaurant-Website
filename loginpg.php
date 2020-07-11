<html>
	<head>
		<meta charset="utf-8">
		
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		<style type="text/css">
		
		

			body{
			background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
			background-size: cover;
			background-repeat: no-repeat;
			height: 100%;
			font-family: 'Numans', sans-serif;
			}

			.container{
			height: 100%;
			align-content: center;
			}
			.social_icon span{
			font-size: 60px;
			margin-left: 10px;
			color: #E8F5E9;
			}

			.social_icon span:hover{
			color: white;
			cursor: pointer;
			}
			.social_icon{
			position: absolute;
			right: 20px;
			top: -45px;
			}

			.card-header h3{
			color: blue;
			}
			.card{
			height: 370px;
			margin-top: auto;
			margin-bottom: auto;
			width: 400px;
			background-color: rgba(0,0,0,0.5) !important;
			}
			.input-group-prepend span{
			width: 50px;
			background-color: #FFC312;
			color: black;
			border:0 !important;
			}
			.form-control{
				background-color: rgba(0,0,0,0);
			}
			.remember{
			color: blue;
			}

			.remember input
			{
			width: 20px;
			height: 20px;
			margin-left: 15px;
			margin-right: 5px;
			}

			.login_btn{
			color: black;
			background-color: #FFC312;
			width: 100px;
			}

			.login_btn:hover{
			color: black;
			background-color: white;
			}

			.links{
			color: white;
			}

			.links a{
			margin-left: 4px;
			}   

			 
			</style>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	</head>
	<body>
	
		<title>Login Page</title>
	
	
		<link rel="stylesheet" type="text/css" href="styles.css">


		<div class="container">
			<div class="d-flex justify-content-center h-100">
				<div class="card">
					<div class="card-header">
						<h3>Sign In</h3>
					</div>
					<div class="card-body">
						<form>
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" class="form-control" placeholder="username" required>
							</div>
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
								<input type="password" class="form-control" placeholder="password">
							</div>
							<div class="row align-items-center remember">
								<input type="checkbox">Remember Me
							</div>
							<div class="form-group">
								<a href="index.php" class="btn float-right login_btn"><span style="text-decoration:none;" "color:black;">Login</span></a>
							</div>
						</form>
					</div>
					<div class="card-footer">
						<div class="d-flex justify-content-center links">
							Don't have an account?<a href="signup.php">Sign Up</a>
						</div>
						<div class="d-flex justify-content-center">
							<a href="#">Forgot your password?</a>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</body>
</html>