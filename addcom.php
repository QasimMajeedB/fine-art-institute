<?php include 'includes/header.php';?>







<div class="courses_section courses-fullwidth">
			<div class="container">
				<div class="row">

					<div class="col-xs-12 courses_right">
						<div class="courses_right_inner">

						<form method="post" enctype="multipart/form-data">

 <div class="form-group">
    <label for="exampleInputEmail1">Competition Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="c_name" placeholder="Frist Name">
  </div>

 

<div class="form-group">
    <label for="exampleInputEmail1">Profile Photo</label>
    <input type="file" class="form-control" name="Photo" >
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Date:</label>
    <input type="Date" class="form-control" id="exampleInputPassword1" name="enddate" placeholder="Password">
  </div>



  
<br><br><br>

  <div class="col-xs-4"></div><button type="submit" name="apply" class="btn btn-primary col-xs-4">Submit</button>






</form>

							
<?php
if (isset($_POST['apply'])) {

$c_name = $_POST['c_name'];

$c_date = $_POST['enddate'];

$c_photo = $_POST['Photo'];





$file_name = $_FILES['Photo']['name'];
      $file_size =$_FILES['Photo']['size'];
      $file_tmp =$_FILES['Photo']['tmp_name'];

$q = mysqli_query($con,"INSERT INTO `comp_tbl`(`comp_name`, `end_date`, `photo`) VALUES ('$c_name','$c_date','$c_photo')");

if (isset($q)) {
	
  move_uploaded_file($file_tmp,"upload/".$file_name);

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