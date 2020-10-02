<?php include 'includes/header.php';?>

<div class="courses_section courses-fullwidth">
			<div class="container">
				<div class="row">

					<div class="col-xs-12 courses_right">
						<div class="courses_right_inner">
<form method="post" enctype="multipart/form-data">

<div class="form-group" >
    <label for="exampleFormControlSelect1">Select Subject:</label>
    <select class="form-control" name="sub" id="exampleFormControlSelect1">
    
<?php
 $results = mysqli_query($con,"SELECT * FROM `comp_tbl`");
     if ($results->num_rows > 0) {
   while($row = $results->fetch_assoc()){

    
     echo '<option>'.$row["comp_name"].'</option>';

}}

?>
    </select>
  </div>


  <div class="col-xs-4"></div><button type="submit" name="app" class="btn btn-primary col-xs-4">Submit</button>






</form>
<br><br><br>
							
<?php


if (isset($_POST['app'])) {
  
$c =$_POST['sub'];


$comp_id= mysqli_query($con,"SELECT `comp_id` FROM `comp_tbl` WHERE `comp_id` = '$c'");








if (isset($comp_id)) {
  echo '
  <form method="post" enctype="multipart/form-data">

 <div class="form-group">
    <label for="exampleInputEmail1">File:</label>
    <input type="File" class="form-control" id="exampleInputEmail1" name="file" placeholder="File">
  </div>

  
  


  
  
<br><br><br>

  <div class="col-xs-4"></div><button type="submit" name="apply" class="btn btn-primary col-xs-4">Submit</button>



</form>';
}





if (isset($_POST['apply'])) {
 
$mark= 0;

$d = date("Y/m/d");

$id = $_SESSION['userid'];

$batch_code = $_SESSION['batch'];





$file_name = $_FILES['file']['name'];
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];


$q = mysqli_query($con,"INSERT INTO `subm_tbl`(`subm_id`, `file`, `mark`, `date`, `s_id`, `com`, `batch_code`) VALUES (null,'$file_name','$mark','$d','$id','$comp_id','$batch')")

if (isset($q)) {

move_uploaded_file($file_tmp,"sub/".$file_name);
	echo '<script>alert("Records Add Sussecfuly");
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

<?php include 'includes/footer.php';?>