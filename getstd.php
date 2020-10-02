<?php include 'includes/header.php';?>
<br><br>

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
            

    <form method="post" enctype="multipart/form-data">

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
      <td><button class="btn btn-danger" type="submit" name="cfname">Change</button></td>

  
<?php

if(isset($_POST['cfname'])){

echo '   <tr>
      <th scope="row">Frist Name</th>
      <td><input type="text" name="f_name" class="form-control" placeholder="Frist Name" required=""></td>
      <td><button class="btn btn-primary" type="submit" name="upfname">Update</button></td>

    </tr>
';

}

?>
</tr>
    <tr>
      <th scope="row">Last Name</th>
      <td><?php echo $row['l_name']?></td>
     

 <td><button class="btn btn-danger" type="submit" name="clname">Change</button></td>

    
<?php

if(isset($_POST['clname'])){

echo '   <tr>
      <th scope="row">Frist Name</th>
      <td><input type="text" name="l_name" class="form-control" placeholder="Last Name" required=""></td>
      <td><button class="btn btn-primary" type="submit" name="uplname">Update</button></td>

    </tr>
';

}

?>



    </tr>

    <tr>
      <th scope="row">Batch Code</th>
      <td><?php echo $row['batch_code']?></td>

 <td><button class="btn btn-danger" type="submit" name="cbatch">Change</button></td>

    
<?php

if(isset($_POST['cbatch'])){

 $result = mysqli_query($con,"SELECT * FROM `tbl_batch`");
     if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()){


echo '   <tr>
      <th scope="row">SELECT Batch Code</th>
      <td> <select class="form-control" name="batch_code" id="exampleFormControlSelect1">
      <option>'.$row['batch_id'].'</option>
      </select></td>
      <td><button class="btn btn-primary" type="submit" name="upbatch">Update</button></td>

    </tr>
';

}}

}

?>

</tr>
    </tr>
    <tr>
      <th scope="row">Gender</th>
      <td><?php echo $row['gender']?></td>
     <td><button class="btn btn-danger" type="submit" name="cgender">Change</button></td>


<?php

if(isset($_POST['cgender'])){

echo '   <tr>
      <th scope="row">Frist Name</th>
      <td><div class="form-check">
  <input class="form-check-input" type="radio" name="gdr" id="exampleRadios1" value="Male" checked>
  <label class="form-check-label" for="exampleRadios1">
Male  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gdr" id="exampleRadios2" value="Female">
  <label class="form-check-label" for="exampleRadios2">
Female

</label>
</div></td>
      <td><button class="btn btn-primary" type="submit" name="upgender">Update</button></td>

    </tr>
';

}

?>

     
    </tr>


    <tr>
      <th scope="row">E-Mail</th>
      <td><?php echo $row['mail']?></td>


 <td><button class="btn btn-danger" type="submit" name="cemail">Change</button></td>

    
<?php

if(isset($_POST['cemail'])){

echo '   <tr>
      <th scope="row">Frist Name</th>
      <td><input type="email" name="email" class="form-control" placeholder="example@demo.com" required=""></td>
      <td><button class="btn btn-primary" type="submit" name="upemail">Update</button></td>

    </tr>
';

}

?>

     
    </tr>

    <tr>
      <th scope="row">State</th>
      <td><?php echo $row['state']?></td>
     

<td><button class="btn btn-danger" type="submit" name="cstate">Change</button></td>

    
<?php

if(isset($_POST['cstate'])){

echo '   <tr>
    
      <td><div class="form-group">
    <label for="exampleFormControlSelect1">Select State:</label>
    <select class="form-control" name="state" id="exampleFormControlSelect1">
      <option>kpk</option>
      <option>Balochistan</option>
      <option>Punjab</option>
      <option>Sindh</option>
    </select>
  </div></td>
      <td><button class="btn btn-primary" type="submit" name="upstate">Update</button></td>

    </tr>
';

}

?>



    </tr>

      <tr>
      <th scope="row">City</th>
      <td><?php echo $row['city']?></td>
     

      <td><button class="btn btn-danger" type="submit" name="ccity">Change</button></td>

    
<?php

if(isset($_POST['ccity'])){

echo '   <tr>
    
      <td><div class="form-group">
    <label for="exampleFormControlSelect1">Select City:</label>
    <select class="form-control" name="city" id="exampleFormControlSelect1">
      <option>Karachi</option>
      <option>Qutta</option>
      <option>Lahore</option>
      <option>Peshawar</option>
    </select>
  </div></td>
      <td><button class="btn btn-primary" type="submit" name="upcity">Update</button></td>

    </tr>
';

}

?>

    </tr>

     <tr>
      <th scope="row">Crouse</th>
      <td><?php echo $row['Crouse']?></td>

      <td><button class="btn btn-danger" type="submit" name="CCrouse">Change</button></td>

    
<?php

if(isset($_POST['CCrouse'])){

  $result = mysqli_query($con,"SELECT * FROM `crouse_tbl`");
     if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()){
echo '   <tr>
    
      <td><div class="form-group">
    <label for="exampleFormControlSelect1">Select City:</label>
    <select class="form-control" name="Crouse" id="exampleFormControlSelect1">
      <option>'.$row['name'].'</option>
    </select>
  </div></td>
      <td><button class="btn btn-primary" type="submit" name="UpCrouse">Update</button></td>

    </tr>
';
}}

}

?>

     
    </tr>

    <tr>
        <td colspan="2">
       &nbsp;   &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
       &nbsp;   &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
       &nbsp;   &nbsp;  &nbsp;  &nbsp;  &nbsp;      
<button type="submit" class="btn btn-danger" name="dlt" class="col-xs-4">Delete</button>

        </td>

    </tr>

  </tbody>
</table>
</form>
        </div>
          </div>
        </div>

   </div>

    
<?php

}}  }




?>



<br><br>
<?php include 'includes/footer.php';?>


<?php


if (isset($_POST['upfname'])) {

$name= $_POST['f_name'];


$q =mysqli_query($con,"UPDATE `apply_tbl` SET `f_name` = '$name' WHERE `apply_tbl`.`apply_id` = '$id'");

if (isset($q)) {
  
echo '<script>window.location.href = "viewstd.php"
</script>';
}




}



if (isset($_POST['uplname'])) {

$name= $_POST['l_name'];


$q =mysqli_query($con,"UPDATE `apply_tbl` SET `l_name` = '$name' WHERE `apply_tbl`.`apply_id` = '$id'");

if (isset($q)) {
  
echo '<script>window.location.href = "viewstd.php"
</script>';
}




}


if (isset($_POST['upbatch'])) {

$name= $_POST['batch_code'];


$q =mysqli_query($con,"UPDATE `apply_tbl` SET `batch_code` = '$name' WHERE `apply_tbl`.`apply_id` = '$id'");

if (isset($q)) {
  
echo '<script>window.location.href = "viewstd.php"
</script>';
}




}


if (isset($_POST['upgender'])) {

$name= $_POST['gdr'];


$q =mysqli_query($con,"UPDATE `apply_tbl` SET `gender` = '$name' WHERE `apply_tbl`.`apply_id` = '$id'");

if (isset($q)) {
  
echo '<script>window.location.href = "viewstd.php"
</script>';
}




}



if (isset($_POST['upemail'])) {

$name= $_POST['email'];


$q =mysqli_query($con,"UPDATE `apply_tbl` SET `mail` = '$name' WHERE `apply_tbl`.`apply_id` = '$id'");

if (isset($q)) {
  
echo '<script>window.location.href = "viewstd.php"
</script>';
}




}



if (isset($_POST['upstate'])) {

$name= $_POST['state'];


$q =mysqli_query($con,"UPDATE `apply_tbl` SET `state` = '$name' WHERE `apply_tbl`.`apply_id` = '$id'");

if (isset($q)) {
  
echo '<script>window.location.href = "viewstd.php"
</script>';
}




}



if (isset($_POST['upcity'])) {

$name= $_POST['state'];


$q =mysqli_query($con,"UPDATE `apply_tbl` SET `city` = '$name' WHERE `apply_tbl`.`apply_id` = '$id'");

if (isset($q)) {
  
echo '<script>window.location.href = "viewstd.php"
</script>';
}




}


if (isset($_POST['UpCrouse'])) {

$name= $_POST['Crouse'];


$q =mysqli_query($con,"UPDATE `apply_tbl` SET `Crouse` = '$name' WHERE `apply_tbl`.`apply_id` = '$id'");

if (isset($q)) {
  
echo '<script>window.location.href = "viewstd.php"
</script>';
}




}



if (isset($_POST['dlt'])) {

$q =mysqli_query($con,"DELETE FROM `apply_tbl` WHERE `apply_tbl`.`apply_id` = '$id'");

if (isset($q)) {
  
echo '<script>window.location.href = "viewstd.php"
</script>';
}




}



?>