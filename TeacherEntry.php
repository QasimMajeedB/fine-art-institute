<?php include 'includes/header.php';?>

<div class="courses_section courses-fullwidth">
			<div class="container">
				<div class="row">

					<div class="col-xs-10 courses_right">
						<div class="courses_right_inner">

						<form method="post" enctype="multipart/form-data">

 <div class="form-group">
    <label for="exampleInputEmail1">Frist Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="f_name" required="" placeholder="Frist Name" pattern="^[a-zA-Z. ]{3,10}$">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="l_name" placeholder="Frist Name" required="" pattern="^[a-zA-Z. ]{3,30}$">
  </div>


<div class="form-group">
    <label for="exampleInputEmail1">Profile Photo</label>
    <input type="file" class="form-control" name="Photo"  required="">
  </div>



<div class="form-group">
    <label for="exampleInputEmail1">NIC</label>
    <input type="text" class="form-control" name="nic" placeholder="00000-0000000-0" required="" pattern="^[0-9]{13}$">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Date Of B</label>
    <input type="Date" class="form-control" name="dob" id= "date"  required="">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">E-Mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="mail" aria-describedby="emailHelp" placeholder="Enter email"  required="">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required="">
  </div>



  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="addr" placeholder="Address" required="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Phone No.</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="Phone" placeholder="Phone No." >
  </div>

<label>Gender</label>
<br>
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
<br>

<div class="form-group">
    <label for="exampleInputEmail1">Salary</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="salary" placeholder="salary" required="">
  </div>
  <br>
<label>Married</label>
<br>
<div class="form-check">

  <input class="form-check-input" type="radio" name="mar" id="exampleRadios1" value="NO" checked>
  <label class="form-check-label" for="exampleRadios1">
No  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="mar" id="exampleRadios2" value="Yes">
  <label class="form-check-label" for="exampleRadios2">
Yes

</label>
</div>
<br>



  <div class="form-group" >
    <label for="exampleFormControlSelect1">Select Subject:</label>
    <select class="form-control" name="sub" id="exampleFormControlSelect1">
    
<?php
 $results = mysqli_query($con,"SELECT * FROM `crouse_tbl`");
     if ($results->num_rows > 0) {
   while($row = $results->fetch_assoc()){

    
     echo '<option>'.$row["name"].'</option>';

}}

?>
    </select>
  </div>

  



<div class="form-group" >
    <label for="exampleFormControlSelect1">Degree</label>
    <select class="form-control" name="degree" id="exampleFormControlSelect1">
      <option>Bachelor</option>
      <option>Master</option>

      </select>
    </div>
    <br>

  <div class="col-xs-4"></div><button type="submit" name="apply" class="btn btn-primary col-xs-4">Submit</button>






</form>

							
<?php
if (isset($_POST['apply'])) {







$f_name = $_POST['f_name'];

$l_name = $_POST['l_name'];

$salary= $_POST['salary'];

$email = $_POST['mail'];

$dob = $_POST['dob'];

$degree=$_POST['degree'];
$addr = $_POST['addr'];

$sub = $_POST['sub'];

$pass = $_POST['password'];

$gender = $_POST['gdr'];

$mar=  $_POST['mar'];

$phone = $_POST['Phone'];

$NIC = $_POST['nic'];

if(preg_match("/^([a-zA-Z' ]+)$/",$f_name)){
    echo 'Valid name given.';
}else{
    $error = 1;
}



$file_name = $_FILES['Photo']['name'];
      $file_size =$_FILES['Photo']['size'];
      $file_tmp =$_FILES['Photo']['tmp_name'];


echo $file_name;

$q = mysqli_query($con,"INSERT INTO `teacher_tbl` (`teacher_id`, `f_name`, `l_name`, `gender`, `dob`, `address`, `degree`, `salary`, `married`, `phone`, `email`, `Subject`, `NIC`, `photo`, `pass`) VALUES (NULL, '$f_name', '$l_name', '$gender', '$dob', '$addr', '$degree', '$salary', '$mar', '$phone', '$email', '$sub', '$NIC', '$file_name', 'pass');");

if (isset($q)) {
	
  move_uploaded_file($file_tmp,"upload/".$file_name);

	echo '<script>alert("Records Add Sussecfuly");
</script>';
}

else{

echo '<script>alert("Fail");
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