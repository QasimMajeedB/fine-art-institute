<?php include 'includes/header.php';?>

<div class="post_section clearfix">
			<div class="container">
				<div class="row">

				<?php
 $results = mysqli_query($con,"SELECT * FROM `award_tbl`");
     if ($results->num_rows > 0) {
   while($row = $results->fetch_assoc()){	


   	echo '<div class="col-xs-12 col-sm-12 post_left">
						<div class="post_left_section post_left_border">

							<div class="post">
								<div class="post_thumb">
									<img src="upload/'.$row['photo'].'" alt="" />
								</div><!--end post thumb-->
								
								<h1><a href="#">'.$row['competition'].'</a></h1>
								<div class="post_desc">
									<p>'.$row['des'].'.</p>
								</div><!--end post desc-->
						
							</div><!--end post-->';

							
							}}

?>

						</div>
					</div>
				</div>
			</div>
		</div>

<?php include 'includes/footer.php';?>