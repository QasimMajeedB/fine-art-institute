<?php include 'includes/header.php';?>

<?php

if (isset($_GET['std_id'])) {
   
$id = $_GET['std_id'];


 $result = mysqli_query($con,"SELECT * FROM `apply_tbl` WHERE `apply_id` = '$id' ");
     if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()){

    ?>




 <div class="container">
        <div class="row">
          <div class="col-xs-12">
              <div class="col-xs-4"><img src="upload/<?php echo $row['photo']?>" width="300px" height="250px"></div>


        <div class="col-xs-6">
            

<table class="table table-dark">
    <br>
  
  <tbody>
  

    <tr>

      <th scope="row">Student ID</th>
      <td><?php echo $row['apply_id']?></td>
     
    </tr>

    <tr>
      <th scope="row">Frist Name</th>
      <td><?php echo $row['f_name']?></td>
     
    </tr>
    <tr>
      <th scope="row">Last Name</th>
      <td><?php echo $row['l_name']?></td>
     
    </tr>
    <tr>
      <th scope="row">Gender</th>
      <td><?php echo $row['gender']?></td>
     
    </tr>
    <tr>
      <th scope="row">E-Mail</th>
      <td><?php echo $row['mail']?></td>
     
    </tr>

    <tr>
      <th scope="row">State</th>
      <td><?php echo $row['state']?></td>
     
    </tr>

    <tr>
      <th scope="row">City</th>
      <td><?php echo $row['city']?></td>
     
    </tr>

     <tr>
      <th scope="row">Crouse</th>
      <td><?php echo $row['Crouse']?></td>
     
    </tr>

   

  </tbody>
</table>

        </div>
          </div>
        </div>

   </div>


<div class="courses_section courses-fullwidth">
			<div class="container">
				<div class="row">

<div class="col-xs-6 courses_right">
            <div class="courses_right_inner">



  </div>
</div>





					<div class="col-xs-12 courses_right">
           
						<div class="courses_right_inner">
 <div class="col-xs-6 courses_right">
						<form method="post" enctype="multipart/form-data">

 <div class="form-group">
    <label for="exampleInputEmail1">Frist Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row['f_name']?>" name="f_name" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="l_name" value="<?php echo $row['l_name']?>" placeholder="Last Name">
  </div>


<div class="form-group">
    <label for="exampleInputEmail1">Profile Photo</label>
    <input type="file" class="form-control" name="Photo" >
  </div>




  <div class="form-group">
    <label for="exampleInputEmail1">E-Mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1"  name="mail" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
</div>
<div class="col-xs-6">
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>


<div class="form-check">
<label for="exampleInputPassword1">Gender</label>

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
    <label for="exampleFormControlSelect1">State:</label>

<br>
    <select class="form-control" name="state" id="exampleFormControlSelect1" value="<?php echo $row['pass']?>">
      <option>kpk</option>
      <option>Balochistan</option>
      <option>Punjab</option>
      <option>Sindh</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">City:</label>

<br>
    <select class="form-control" name="city" id="exampleFormControlSelect1">
      <option>Karachi</option>
      <option>Qutta</option>
      <option>Lahore</option>
      <option>Peshawar</option>
    </select>
  </div>


  <div class="form-group" >
    <label for="exampleFormControlSelect1"> Crouse:</label>
<br>
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

  <div class="col-xs-4"></div><button type="submit" name="apply" onClick="document.location.reload(true)" class="btn btn-primary col-xs-4">Submit</button>




</div>

</form>
</div>
</div>
</div>
</div>
</div>
							
<?php


}}}


if (isset($_POST['apply'])) {
 
$fname =$_POST['f_name'];

$lname =$_POST['l_name'];




$email =$_POST['mail'];


$pas =$_POST['password'];


$gdr =$_POST['gdr'];

$state =$_POST['state'];

$city = $_POST['city'];

$Crouse =$_POST['Crouse'];



$file_name = $_FILES['Photo']['name'];
      $file_size =$_FILES['Photo']['size'];
      $file_tmp =$_FILES['Photo']['tmp_name'];


$qu = mysqli_query($con,"UPDATE `apply_tbl` SET `f_name`=[$fname],`l_name`=[lname],`mail`=[$email],`photo`=[$file_name],`pass`=[$pas],`gender`=[$gdr],`state`=[$state],`city`=[$city],`Crouse`=[$Crouse] WHERE $id");



if (isset($qu)) {
  
    move_uploaded_file($file_tmp,"upload/".$file_name);

}

echo '<script></script>';

}








?>
							

						</div><!-- end courses_right_inner -->
					</div><!-- end courses_right -->

				</div><!-- end row -->
			</div><!-- end container -->
		</div><!--end post section-->

<?php include 'includes/footer.php';?>