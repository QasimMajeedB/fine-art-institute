<?php include 'includes/header.php';?>




<div class="courses_section courses-fullwidth">
      <div class="container">
        <div class="row">

          <div class="col-xs-12 courses_right">
            <div class="courses_right_inner">
<?php
            
if (isset($_GET['email'])) {
   
echo '

<form method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="exampleInputEmail1">E-Mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="emailtxt"  required="" placeholder="demo@demo.com" >
  </div>

  <div class="col-xs-4"></div><button type="submit" name="email" class="btn btn-primary col-xs-4">Submit</button>

  </form>
';

}
   
?>

 
<?php

if (isset($_GET['f_name'])) {
   
echo '

<form method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="exampleInputEmail1">Frist Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="f_nametxt"  required="" placeholder="Frist Name" pattern="^[a-zA-Z. ]{3,10}$">
  </div>

  <div class="col-xs-4"></div><button type="submit" name="appname" class="btn btn-primary col-xs-4">Submit</button>

  </form>
';

}
   
?>


<?php

if (isset($_GET['l_name'])) {
   
echo '

<form method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="l_nametxt"  required="" placeholder="Last Name" pattern="^[a-zA-Z. ]{3,10}$">
  </div>

  <div class="col-xs-4"></div><button type="submit" name="applname" class="btn btn-primary col-xs-4">Submit</button>
  </form>
';

}
   
?>

<?php

if (isset($_GET['gender'])) {
   
echo '

<form method="post" enctype="multipart/form-data">
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

  <div class="col-xs-4"></div><button type="submit" name="gender" class="btn btn-primary col-xs-4">Submit</button>

  </form>
';

}
   
?>


<?php

if (isset($_GET['NIC'])) {
   
echo '

<form method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="exampleInputEmail1">NIC</label>
    <input type="text" class="form-control" name="nic" placeholder="00000-0000000-0" required="" pattern="^[0-9]{13}$">
  </div>

  <div class="col-xs-4"></div><button type="submit" name="NICname" class="btn btn-primary col-xs-4">Submit</button>
  </form>
';

}
   
?>



<?php

if (isset($_GET['Phone'])) {
   
echo '

<form method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="exampleInputPassword1">Phone No.</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="PhoneNo" placeholder="Phone No." >
  </div>
  <div class="col-xs-4"></div><button type="submit" name="Phonename" class="btn btn-primary col-xs-4">Submit</button>
  </form>
';

}
   
?>


<?php

if (isset($_GET['photo'])) {
  



echo '
<form method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="exampleInputEmail1">Profile Photo</label>
    <input type="file" class="form-control" name="file"  required="">
  </div>

  <div class="col-xs-4"></div><button type="submit" name="psub" class="btn btn-primary col-xs-4">Submit</button>

  </form>
';

}
   
?>

<?php

if (isset($_GET['degree'])) {
   
echo '
<form method="post">


<div class="form-group" >
    <label for="exampleFormControlSelect1">Degree</label>
    <select class="form-control" name="degreetxt" id="exampleFormControlSelect1">
      <option>Bachelor</option>
      <option>Master</option>

      </select>
    </div>
    <br>
  
  <div class="col-xs-4"></div><button type="submit" name="degree" class="btn btn-primary col-xs-4">Submit</button>
</form>

';

}



if (isset($_GET['salary'])) {
   
echo '
<form method="post">

<div class="form-group">
    <label for="exampleInputEmail1">Salary</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="salary" placeholder="salary" required="">
  </div>
  
  <div class="col-xs-4"></div><button type="submit" name="salaryname" class="btn btn-primary col-xs-4">Submit</button>
</form>

';

}


if (isset($_GET['dob'])) {
   
echo '
<form method="post">
 <div class="form-group">
    <label for="exampleInputEmail1">Date Of B</label>
    <input type="Date" class="form-control" name="dobtxt" id= "date"  required="">
  </div>
  
  <div class="col-xs-4"></div><button type="submit" name="dobname" class="btn btn-primary col-xs-4">Submit</button>
</form>

';

}


if (isset($_GET['Subject'])) {
   
?>
<form method="post">
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
  
  <div class="col-xs-4"></div><button type="submit" name="Subject" class="btn btn-primary col-xs-4">Submit</button>
</form>

<?php


}

   
?>


<?php
if (isset($_POST['applname'])) {

$id= $_GET['l_name'];

$name = $_POST['l_nametxt'];

$q =mysqli_query($con,"UPDATE `teacher_tbl` SET `l_name` = '$name' WHERE `teacher_tbl`.`teacher_id` = '$id'");

if (isset($q)) {
  
echo '<script>window.location.href = "teachview.php"
</script>';
}

}


?>
              
<?php
if (isset($_POST['appname'])) {

$id= $_GET['f_name'];

$name = $_POST['f_nametxt'];

$q =mysqli_query($con,"UPDATE `teacher_tbl` SET `f_name` = '$name' WHERE `teacher_tbl`.`teacher_id` = '$id'");

if (isset($q)) {
  
echo '<script>window.location.href = "teachview.php"
</script>';
}

}


?>

<?php
if (isset($_POST['dobname'])) {

$id= $_GET['dob'];

$name = $_POST['dobtxt'];

$q =mysqli_query($con,"UPDATE `teacher_tbl` SET `dob` = '$name' WHERE `teacher_tbl`.`teacher_id` = '$id'");

if (isset($q)) {
  
echo '<script>window.location.href = "teachview.php"
</script>';
}

}


?>

<?php
if (isset($_POST['salaryname'])) {

$id= $_GET['salary'];

$name = $_POST['salary'];

$q =mysqli_query($con,"UPDATE `teacher_tbl` SET `salary` = '$name' WHERE `teacher_tbl`.`teacher_id` = '$id'");

if (isset($q)) {
  
echo '<script>window.location.href = "teachview.php"
</script>';
}

}


?>

<?php
if (isset($_POST['gender'])) {

$id= $_GET['gender'];

$name = $_POST['gdr'];

$q =mysqli_query($con,"UPDATE `teacher_tbl` SET `gender` = '$name' WHERE `teacher_tbl`.`teacher_id` = '$id'");

if (isset($q)) {
  
echo '<script>window.location.href = "teachview.php"
</script>';
}

}


?>

<?php
if (isset($_POST['Phonename'])) {

$id= $_GET['phone'];

$name = $_POST['PhoneNo'];

$q =mysqli_query($con,"UPDATE `teacher_tbl` SET `phone` = '$name' WHERE `teacher_tbl`.`teacher_id` = '$id'");

if (isset($q)) {
  
echo '<script>window.location.href = "teachview.php"
</script>';
}

}


?>

<?php
if (isset($_POST['email'])) {

$id= $_GET['email'];

$name = $_POST['emailtxt'];

$q =mysqli_query($con,"UPDATE `teacher_tbl` SET `email` = '$name' WHERE `teacher_tbl`.`teacher_id` = '$id';
");

if (isset($q)) {
  
echo '<script>window.location.href = "teachview.php"
</script>';
}

}


?>


<?php
if (isset($_POST['degree'])) {

$id= $_GET['degree'];

$name = $_POST['degreetxt'];

$q =mysqli_query($con,"UPDATE `teacher_tbl` SET `degree` = '$name' WHERE `teacher_tbl`.`teacher_id` = '$id';
");

if (isset($q)) {
  
echo '<script>window.location.href = "teachview.php"
</script>';
}

}


?>



<?php
if (isset($_POST['Subject'])) {

$id= $_GET['Subject'];

$name = $_POST['sub'];

$q =mysqli_query($con,"UPDATE `teacher_tbl` SET `Subject` = '$name' WHERE `teacher_tbl`.`teacher_id` = '$id';
");

if (isset($q)) {
  
echo '<script>window.location.href = "teachview.php"
</script>';
}

}


?>


<?php
if (isset($_POST['psub'])) {

$id= $_GET['photo'];



$file_name = $_FILES['file']['name'];

 $new_name = md5(rand()).'.'.$file_name;
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];





$q =mysqli_query($con,"UPDATE `teacher_tbl` SET `photo` = '$new_name' WHERE `teacher_tbl`.`teacher_id` = '$id';
");

if (isset($q)) {
  

  move_uploaded_file($file_tmp,"upload/".$new_name);


echo '<script>window.location.href = "teachview.php"</script>';
}

}


?>

              

            </div><!-- end courses_right_inner -->
          </div><!-- end courses_right -->

        </div><!-- end row -->
      </div><!-- end container -->
    </div><!--end post section-->

<?php include 'includes/footer.php';?>