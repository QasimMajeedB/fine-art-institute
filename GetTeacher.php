<?php include 'includes/header.php';?>
<br><br>

<?php

if (isset($_GET['std_id'])) {
   
$id = $_GET['std_id'];


 $result = mysqli_query($con,"SELECT * FROM `teacher_tbl` WHERE `teacher_id` = '$id' ");
     if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()){

    ?>
  <div class="container">
        <div class="row">
          <div class="col-xs-12">
              <div class="col-xs-4"><img src="upload/<?php echo $row['photo']?>" width="300px" height="250px">
<br><br><br><br>
              <?php

  echo '<button type="button" class="btn btn-success col-xs-4"><a href="EditTeacher.php?photo='.$row['teacher_id'].'">Change Photo</a></button>';

?>
              </div>


                
        <div class="col-xs-6">
            

<table class="table table-dark">
    <br>
  
  <tbody>
  

    <tr>

      <th scope="row">Teacher ID</th>
      <td><?php echo $row['teacher_id']?></td>
     
    </tr>

    <tr>
      <th scope="row">Frist Name</th>
      <td><?php echo $row['f_name']?></td>
     <td>
<?php

  echo '<button type="button" class="btn btn-success"><a href="EditTeacher.php?f_name='.$row['teacher_id'].'">Edit</a></button>';

?>
     </td>
    </tr>
    <tr>
      <th scope="row">Last Name</th>
      <td><?php echo $row['l_name']?></td>

       <td>
<?php

  echo '<button type="button" class="btn btn-success"><a href="EditTeacher.php?l_name='.$row['teacher_id'].'">Edit</a></button>';

?>
     </td>
     
    </tr>
    <tr>
      <th scope="row">Gender</th>
      <td><?php echo $row['gender']?></td>
     

       <td>
<?php

  echo '<button type="button" class="btn btn-success"><a href="EditTeacher.php?gender='.$row['teacher_id'].'">Edit</a></button>';

?>
     </td>
    </tr>

    <tr>
      <th scope="row">Phone No;</th>
      <td><?php echo $row['phone']?></td>

        <td>
<?php

  echo '<button type="button" class="btn btn-success"><a href="EditTeacher.php?Phone='.$row['teacher_id'].'">Edit</a></button>';

?>
     </td>
     
    </tr>

    <tr>
      <th scope="row">NIC No;</th>
      <td><?php echo $row['NIC']?></td>

        <td>
<?php

  echo '<button type="button" class="btn btn-success"><a href="EditTeacher.php?NIC='.$row['teacher_id'].'">Edit</a></button>';

?>
     </td>
     
    </tr>
    <tr>
      <th scope="row">E-Mail</th>
      <td><?php echo $row['email']?></td>
       <td>
<?php

  echo '<button type="button" class="btn btn-success"><a href="EditTeacher.php?email='.$row['teacher_id'].'">Edit</a></button>';

?>
     </td>
    </tr>

      <tr>
      <th scope="row">Degree</th>
      <td><?php echo $row['degree']?></td>

       <td>
<?php

  echo '<button type="button" class="btn btn-success"><a href="EditTeacher.php?degree='.$row['teacher_id'].'">Edit</a></button>';

?>
     </td>
     
    </tr>

 

    </tr>

      <tr>
      <th scope="row">Salary</th>
      <td><?php echo $row['salary']?></td>
       <td>
<?php

  echo '<button type="button" class="btn btn-success"><a href="EditTeacher.php?salary='.$row['teacher_id'].'">Edit</a></button>';

?>
     </td>
    </tr>

    <tr>
      <th scope="row">Date Of Birth</th>
      <td><?php echo $row['dob']?></td>
        <td>
<?php

  echo '<button type="button" class="btn btn-success"><a href="EditTeacher.php?dob='.$row['teacher_id'].'">Edit</a></button>';

?>
     </td>
     
    </tr>



     <tr>
      <th scope="row">Subject</th>
      <td><?php echo $row['Subject']?></td>
        <td>
<?php

  echo '<button type="button" class="btn btn-success"><a href="EditTeacher.php?Subject='.$row['teacher_id'].'">Edit</a></button>';

?>
     </td>
     
    </tr>

    <tr>
        <td colspan="2">
       &nbsp;   &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
       &nbsp;   &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
       &nbsp;   &nbsp;  &nbsp;  &nbsp;  &nbsp;      
<?php

echo '<button type="button" class="btn btn-success"><a href="EditTeacher.php?std_id='.$row['teacher_id'].'">Edit</a></button>
';

?>


<button type="button" class="btn btn-danger"><a href="DtlTeaher.php?std_id='<?php $row['teacher_id'] ?>'> ">Delete</a></button>


        </td>

    </tr>

  </tbody>
</table>

        </div>
          </div>
        </div>

   </div>

    
<?php

}}  }




?>



<br><br>
<?php include 'includes/footer.php';?>