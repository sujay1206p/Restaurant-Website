<?php
	require 'connect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="font\awesome\css\font-awesome.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="css/login2.css">
    <link rel="stylesheet" href="css\style.css">

    <title>My site || <?php echo $title ?></title>
  </head>
  <body>
	<nav class="navbar navbar-expand-lg  navbar-dark bg-danger">
		<div class="container">
			<a class="navbar-brand" href="index.php"><h2><b><i>Restaurant</i></b></h2></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse "  id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item <?php if($title == 'Home') { echo 'active'; } ?>">
				<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item <?php if($title == 'About Us') { echo 'active'; } ?>">
				<a class="nav-link" href="about.php">Services</a>
			  </li>
			  <li class="nav-item dropdown <?php if($title == 'Restaurant') { echo 'active'; } ?>">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Restaurant
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="restaurant.php?id=<?php echo '1'; ?>">Bar</a>
				  <a class="dropdown-item" href="restaurant.php?id=<?php echo '2'; ?>">Cafe</a>
				  				</div>
			  </li>
			  <li class="nav-item <?php if($title == 'Gallery') { echo 'active'; } ?>">
				<a class="nav-link " href="gallery.php" tabindex="-1" aria-disabled="true">Gallery</a>
			  </li>
			  <li class="nav-item <?php if($title == 'Contact US') { echo 'active'; } ?>">
				<a class="nav-link " href="contact.php" tabindex="-1" aria-disabled="true">Contact Us</a>
			  </li>

			  <?php if(!empty($_SESSION['log'])) { ?>
			  <li class="nav-item <?php if($title == 'Login') { echo 'active'; } ?>">
				<a class="nav-link " href="login1.php" tabindex="-1" aria-disabled="true"><?php echo $_SESSION['name'] ?>Login</a>
			  </li>
			<?php } else{ ?>
				<li class="nav-item <?php if($title == 'Login') { echo 'active'; } ?>">
				<a class="nav-link " href="login1.php" tabindex="-1" aria-disabled="true">Login</a>
			  </li>
			<?php } ?>

			</ul>
			
		  </div>
	  </div><!-- end container-->
	</nav>