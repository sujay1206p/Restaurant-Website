<?php 
	$title='Login US';
	include'header.php'; 
	if(isset($_POST['login'])){
		$name = $_POST['username'];
		$password = $_POST['password'];
		
		$log = mysqli_query($con,"select * from user where (email = '$name' OR name ='$name') AND password = '$password' ");
		if(mysqli_num_rows($log) >  0){	// 1 > 0 true
			$user = mysqli_fetch_assoc($log);	// array user 
			//print_r($user);
			$_SESSION['log'] = $user['id'];	// user, id
			$_SESSION['name'] = $user['name'];	//user, name
			header('location:index.php');
		}else{
			$error = 'Please check username and password';
		}
	}
?>

<head>
	 <title>Hotel Login</title>
		<style type="text/css"> 
		body{
			background-image: url();
			background-size: cover;
			background-attachment: fixed;
			font-family: calibri light;
			;
		}
		
		.in{
			position: relative;
			border-radius: 5px;
		}
		.but1{
			
			background:transparent;
			color:white;
			text-align:center;
		}
		.btn-yellow {
		color: #030304;
		background:#ee3131;
		}
		.btn {
			position: relative;
			border-radius: 50px;
			outline: none!important;
		}
			
		</style>
		<link rel="stylesheet" type="text/css" href="login2.css">
	</head>
	<div class="login mb-5">
		<div class="container">
										
			<div class="row mt-5">
					<div class="col-md-5"></div>
					<div class="col-md-2">
						<h1 class="text-center mt-5 mb-5 but1"><strong>LOGIN</strong></h1>	
					</div>
					<div class="col-md-5"></div>
				
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<form action="#" method="post">
						<?php 
							if(!empty($error)){
								echo "<div class='alert alert-danger'>".$error."</div>";
							}
						?>
						<input type="text" class="form-control in" placeholder="Enter Name" name="username"><br>
						<input type="password" name="password" class="form-control in" placeholder="Enter password"><br>
						
				</div>
				<div class="col-md-4"></div>
				<div class="col-md-5"></div>
					<div class="col-md-2">
						<center><button class="btn btn-yellow btn-block" name="login" type="submit"><i class="fa fa-sign-in"></i> Sign in</button>
						<div class="form-group text-center text-white m-2">
							No account yet? <br> <a href="signup.php">Sign up</a>
						</div></center>	
					</div>
					<div class="col-md-5"></div>
				
				
			</div>
		</div>
	</div>
	
<?php include'footer.php'; ?> 