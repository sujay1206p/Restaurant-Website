<?php	
	$title='Gallery'; 
	include'header.php';
?>
    <br><h1 class="text-center text-info head">Welcome to gallery!!!</h1><br>
	<div class="container">
		<div class="row gallery_img">
		<?php
				$gallery = mysqli_query($con,"select * from gallery ");
				while($gall = mysqli_fetch_assoc($gallery)){
			  ?>	
			<div class="col-md-4 col-sm-4 ">
				<a href="<?php echo $gall['img']; ?>" data-lightbox="image-1" data-title="My caption">
					<img src="<?php echo $gall['img']; ?>" class="img-fluid">
				</a>
			</div>
			<?php } ?>

		</div>
	</div>
<?php include'footer.php'; ?>

   