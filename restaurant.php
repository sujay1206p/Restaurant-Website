<?php	
	$title='Service';
	include'header.php'; 
?>

   <div class="container">
		<div class="row">
			<div class="col-12 mt-5">
				<h2 class="text-center text-uppercase head"><b>Our Branch</b></h2>
				<br>
			</div>
			<div class="row text-justify">
			<?php 
				$id = $_GET['id'];
				$service = mysqli_query($con, "select * from service where type='$id'");
				$no =1;
				while($row = mysqli_fetch_assoc($service)){
					if($no % 2==0){
			?>
			
						<div class="col-md-6">
							<img src="image/<?php echo $row['img'] ?>" class=" img-fluid" alt="icon">
						</div>
						<div class="col-md-6">
							<h5 class="card-title text-center mt-5"><?php echo $row['name'] ?></h5>
							<p class="card-text"><?php echo $row['disc'] ?></p>
						  
						</div>
						<hr/>
					<?php }else{ ?>
						<div class="col-md-6">
							<h5 class="card-title text-center mt-5"><?php echo $row['name'] ?></h5>
							<p class="card-text"><?php echo $row['disc'] ?></p>
						  </div>
						<div class="col-md-6">
							<img src="image/<?php echo $row['img'] ?>" class=" img-fluid" alt="icon">
						</div>
				<?php } //end else
					$no++;
				} //end while ?>
				
				
				
			</div>
	</div>
<?php include'footer.php'; 
?>
