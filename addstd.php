<?php include 'includes/header.php';?>







<div class="courses_section courses-fullwidth">
			<div class="container">
				<div class="row">

					<div class="col-xs-12 courses_right">
						<div class="courses_right_inner">

						<form method="post" enctype="multipart/form-data">

 <div class="form-group">
    <label for="exampleInputEmail1">Frist Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="f_name" placeholder="Frist Name" pattern="^[a-zA-Z. ]{3,10}$">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="l_name" placeholder="Frist Name" pattern="^[a-zA-Z. ]{3,10}$">
  </div>


<div class="form-group">
    <label for="exampleInputEmail1">Profile Photo</label>
    <input type="file" class="form-control" name="Photo" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">E-Mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="mail" aria-describedby="emailHelp" placeholder="Enter email">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>


<div class="form-check">
  <input class="form-check-input" type="radio" name="gdr" id="exampleRadios1" value="Male" checked>
  <label class="form-check-label" for="exampleRadios1">
Male  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gdr" id="exampleRadios2" value="Female">
  <label class="form-check-label" for="exampleRadios2">
Female

</label>
</div>


<div class="form-group">
    <label for="exampleFormControlSelect1">Select State:</label>
    <select class="form-control" name="state" id="exampleFormControlSelect1">
      <option>kpk</option>
      <option>Balochistan</option>
      <option>Punjab</option>
      <option>Sindh</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Select City:</label>
    <select class="form-control" name="city" id="exampleFormControlSelect1">
      <option>Karachi</option>
      <option>Qutta</option>
      <option>Lahore</option>
      <option>Peshawar</option>
    </select>
  </div>


  <div class="form-group" >
    <label for="exampleFormControlSelect1">Select Crouse:</label>
    <select class="form-control" name="Crouse" id="exampleFormControlSelect1">
    
<?php
 $results = mysqli_query($con,"SELECT * FROM `crouse_tbl`");
     if ($results->num_rows > 0) {
   while($row = $results->fetch_assoc()){

    
     echo '<option>'.$row["name"].'</option>';

}}

?>
    </select>
  </div>
  
<br><br><br>

  <div class="col-xs-4"></div><button type="submit" name="apply" class="btn btn-primary col-xs-4">Submit</button>






</form>

							
<?php
if (isset($_POST['apply'])) {

$f_name = $_POST['f_name'];

$l_name = $_POST['l_name'];



$mail = $_POST['mail'];

$state = $_POST['state'];

$city = $_POST['city'];

$Crouse = $_POST['Crouse'];

$pass = $_POST['password'];

$gender = $_POST['gdr'];
$status = 1;


$file_name = $_FILES['Photo']['name'];
      $file_size =$_FILES['Photo']['size'];
      $file_tmp =$_FILES['Photo']['tmp_name'];

$q = mysqli_query($con,"INSERT INTO `apply_tbl`(`f_name`, `l_name`, `mail`, `photo`, `pass`, `gender`, `state`, `city`, `Crouse`, `status`) VALUES ('$f_name','$l_name','$mail','$file_name','$pass','$gender','$state','$city','$Crouse','$status')");

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