<?php include 'includes/header.php';?>

<div class="courses_section courses-fullwidth">
			<div class="container">
				<div class="row">

					<div class="col-xs-12 courses_right">
						<div class="courses_right_inner">

						<form method="post" enctype="multipart/form-data">

 <div class="form-group">
    <label for="exampleInputEmail1">Crouse Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="c_name" placeholder="Crouse Name">
  </div>

  
  


  





<div class="form-group">
    <label for="exampleFormControlSelect1">Duration of C:</label>
    <select class="form-control" name="time" id="exampleFormControlSelect1">
      <option>2 Year</option>
      <option>3 Year</option>
      
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Degree:</label>
    <select class="form-control" name="Degree" id="exampleFormControlSelect1">
      <option>Bachelor</option>
      <option>Diploma</option>
    </select>
  </div>


  
  
<br><br><br>

  <div class="col-xs-4"></div><button type="submit" name="apply" class="btn btn-primary col-xs-4">Submit</button>






</form>

							
<?php
if (isset($_POST['apply'])) {

$name = $_POST['c_name'];

$time = $_POST['time'];
$degree = $_POST['Degree'];





$q = mysqli_query($con,"INSERT INTO `crouse_tbl`(`name`, `time`, `degree`) VALUES ('$name','$time','$degree')");

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