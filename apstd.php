
<?php include 'includes/header.php';?>

<div class="courses_section courses-fullwidth">
			<div class="container">
				<div class="row">

					<div class="col-xs-12 courses_right">
						<div class="courses_right_inner">

						<form method="post" enctype="multipart/form-data">

  
  


  





<div class="form-group">
    <label for="exampleFormControlSelect1">Select Batch Code</label>
    <select class="form-control" name="batch_code" id="exampleFormControlSelect1">
        <?php $result = mysqli_query($con,"SELECT * FROM `tbl_batch`");
     if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()){
    //  echo '<option>'.$row['name'].'</option>';

        

     echo ' <option>'.$row['batch_id'].'</option>';

   }
 }

      ?>
    </select>
  </div>

  


  
  
<br><br><br>

  <div class="col-xs-4"></div><button type="submit" name="apply" class="btn btn-primary col-xs-4">Submit</button>






</form>

							
<?php

if (isset($_GET['std_id'])) {
$id= $_GET['std_id'];

if (isset($_POST['apply'])) {

$batch_code = $_POST['batch_code'];

$status = 1;







$q = mysqli_query($con,"UPDATE `apply_tbl` SET `status`='$status',`batch_code`='$batch_code' WHERE apply_id = $id");

if (isset($q)) {


	echo '<script>alert("Records Add Sussecfuly");
</script>';

echo '<script>window.location.href = "viewstd.php"
</script>';
}



}
}


?>
							

						</div><!-- end courses_right_inner -->
					</div><!-- end courses_right -->

				</div><!-- end row -->
			</div><!-- end container -->
		</div><!--end post section-->







?>