<?php 
	$title='Home';
	include'header.php';

 ?>
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner" height="500px">
		<div class="carousel-item active">
		  <img src="image\slider1.jpg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
		  <img src="image\slider2.jpg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
		  <img src="image\slider5.jpeg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
		  <img src="image\slider4.jpg" class="d-block w-100" alt="...">
		</div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>

<br>
<br>
<br>
<br>
<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="text-center head">Menu</h2>
				<hr/>
			</div>
			<?php
				$team = mysqli_query($con,"select * from team ");
				while($teams = mysqli_fetch_assoc($team)){
			  ?>
			<div class="col-md-3">
				<div class="card" >
				  <img src="<?php echo $teams['img']; ?>" class="card-img-top img-fluid" alt="<?php echo $teams['img']; ?>">
				  <div class="card-body text-justify">
					<h5 class="card-title text-center"><?php echo $teams['name']; ?></h5>
					<p class="card-text"><?php echo $teams['info']; ?></p>
				  </div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
<?php include'footer.php'; ?>

   