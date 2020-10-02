<?php include 'includes/header.php';?>

<div class="courses_section courses-fullwidth">
			<div class="container">
				<div class="row">

					<div class="col-xs-12 courses_right">
						<div class="courses_right_inner">

						<form method="post" enctype="multipart/form-data">

  
  


  





<div class="form-group">
    <label for="exampleFormControlSelect1">Batch Teacher:</label>
    <select class="form-control" name="teacher" id="exampleFormControlSelect1">
        <?php $result = mysqli_query($con,"SELECT * FROM `teacher_tbl`");
     if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()){
    //  echo '<option>'.$row['name'].'</option>';

        

     echo ' <option>'.$row['f_name'].'</option>';

   }
 }

      ?>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Crouse:</label>
    <select class="form-control" name="Crouse" id="exampleFormControlSelect1">
     
       <?php $result = mysqli_query($con,"SELECT * FROM `crouse_tbl`");
     if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()){
    //  echo '<option>'.$row['name'].'</option>';

        

     echo ' <option>'.$row['name'].'</option>';

      
}
}
      ?>



    </select>
  </div>


  
  
<br><br><br>

  <div class="col-xs-4"></div><button type="submit" name="apply" class="btn btn-primary col-xs-4">Submit</button>






</form>

							
<?php
if (isset($_POST['apply'])) {

$crouse = $_POST['Crouse'];

$teacher = $_POST['teacher'];







$q = mysqli_query($con,"INSERT INTO `tbl_batch`(`batch_id`, `batch_teacher`, `batch_c`) VALUES (null,'$teacher','$crouse')");

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