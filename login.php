<?php include 'includes/header.php';?>

<div class="courses_section courses-fullwidth">
			<div class="container">
				<div class="row">

					<div class="col-xs-12 courses_right">
						<div class="courses_right_inner">

						<form method="post" enctype="multipart/form-data">

 


  <div class="form-group">
    <label for="exampleInputEmail1">E-Mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="mail" aria-describedby="emailHelp" placeholder="Enter email">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>




  
<br><br><br>

  <div class="col-xs-4"></div><button type="submit" name="apply" class="btn btn-primary col-xs-4">Submit</button>






</form>

							
<?php
if (isset($_POST['apply'])) {

$mail = $_POST['mail'];

$pass = $_POST['password'];


$q = mysqli_query($con,"SELECT * FROM `apply_tbl` WHERE `mail` = '$mail' AND `pass` =  '$pass'");

$qu = mysqli_query($con,"SELECT * FROM `tbl_admin` WHERE `mail` = '$mail' AND `pass` =  '$pass'");

$quu = mysqli_query($con,"SELECT * FROM `teacher_tbl` WHERE `email` = '$mail' AND `pass` =  '$pass' ");

if(mysqli_num_rows($q)>0) 
{

 if($row = $q->fetch_assoc()){


 if ($row['status'] > 0) {
 	

 	$name = $row['f_name'];

 	$userid = $row['apply_id'];

 	$batch = $row['batch_code'];

 $_SESSION['user'] = $name;

  $_SESSION['userid'] = $userid;

echo '<script>alert("Login Sussecfuly");
</script>';

  
echo '<script>window.location.href = "index.php"
</script>';

 }

 else{

 	echo '<script>alert("you admission is not approved  ");
</script>';

  
echo '<script>window.location.href = "index.php"
</script>';
 }

}


}

elseif(mysqli_num_rows($qu)>0){

	if($row = $qu->fetch_assoc()){


 $name = $row['username'];

 $_SESSION['admin'] = $name;

 echo '<script>alert("Login Sussecfuly");
</script>';

  
echo '<script>window.location.href = "index.php"
</script>';
}

}


elseif(mysqli_num_rows($quu)>0){

	if($row = $quu->fetch_assoc()){


 $name = $row['f_name'];

 $_SESSION['teacher'] = $name;

 echo '<script>alert("Login Sussecfuly");
</script>';

  
echo '<script>window.location.href = "index.php"
</script>';
}

}


else {
echo '<script>alert("email or password invlid ");
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