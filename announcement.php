<?php include 'includes/header.php';?>

<div class="courses_section courses-fullwidth">
			<div class="container">
				<div class="row">

					<div class="col-xs-12 courses_right">
						<div class="courses_right_inner">

						<form method="post" enctype="multipart/form-data">



<div class="form-group" >
    <label for="exampleFormControlSelect1">Student ID:</label>
    <select class="form-control" name="stdid" id="exampleFormControlSelect1" required="">
      <?php


   $result = mysqli_query($con,"SELECT * FROM `apply_tbl`");
     if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()){
      echo '<option>'.$row['apply_id'].'</option>';

   }}

      ?>
    </select>


</div>

  <div class="form-group" >
    <label for="exampleFormControlSelect1">Competition</label>
    <select class="form-control" name="comp" id="exampleFormControlSelect1" required="">
      <?php


   $result = mysqli_query($con,"SELECT * FROM `comp_tbl`");
     if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()){
      echo '<option>'.$row['comp_name'].'</option>';

   }}

      ?>
    </select>
  
</div>

  
<div class="form-group">
    <label for="exampleInputEmail1">Photo</label>
    <input type="file" class="form-control" id="exampleInputEmail1" name="Photo"  required="">
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="des" placeholder="Description" required="">
  </div>


  
  
<br><br><br>

  <div class="col-xs-4"></div><button type="submit" name="apply" class="btn btn-primary col-xs-4">Submit</button>






</form>

							
<?php
if (isset($_POST['apply'])) {

$stdid = $_POST['stdid'];

$comp = $_POST['comp'];
$des = $_POST['des'];


$file_name = $_FILES['Photo']['name'];
      $file_size =$_FILES['Photo']['size'];
      $file_tmp =$_FILES['Photo']['tmp_name'];


$q = mysqli_query($con,"INSERT INTO `award_tbl`(`a_id`, `Student_id`, `photo`, `competition`, `des`) VALUES (null,'$stdid','$file_name','$comp','$des')");

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