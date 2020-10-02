<?php include 'includes/header.php';?>







<div class="courses_section courses-fullwidth">
			<div class="container">
				<div class="row">

					<div class="col-xs-12 courses_right">
						<div class="courses_right_inner">

						<form method="post" enctype="multipart/form-data">

 <div class="form-group">
    <label for="exampleInputEmail1">Title</label>


  <textarea class="form-control" rows="4" name="Title" required=""></textarea>

  </div>

 

<div class="form-group">
    <label for="exampleInputEmail1">Date</label>
    <input type="Date" class="form-control" name="Date" id="Date" required="" >
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Location:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="location" placeholder="Location" required="">
  </div>



  
<br><br><br>

  <div class="col-xs-4"></div><button type="submit" name="apply" class="btn btn-primary col-xs-4">Submit</button>






</form>

							
<?php
if (isset($_POST['apply'])) {


$tilte = $_POST['Title'];
$date = $_POST['Date'];
$location = $_POST['location'];



echo $tilte;

echo $date;

echo $location;



$q = mysqli_query($con,"INSERT INTO `exhibition_tbl` (`e_id`, `tilte`, `date`, `location`) VALUES (NULL, '$tilte', '$date', '$location')");

if (isset($q)) {
	
  
	echo '<script>alert("Records Add Sussecfuly");
</script>';
}



}


?>
							

						</div><!-- end courses_right_inner -->
					</div><!-- end courses_right -->

				</div><!-- end row -->
			</div><!-- end container -->
		</div><!--end post section-->

<?php include 'includes/footer.php';?>