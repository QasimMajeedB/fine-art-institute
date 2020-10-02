<?php include 'includes/header.php';?>

<br><br>


			<div class="container">
				<div class="row">
<h1>Teacher Details</h1><br><br>
				<table id="myTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Teacher Id</th>
                <th>Frist Name</th>
                <th>Last Name </th>
                <th>Education  </th>
                <th>Action</th>
              
            </tr>
        </thead>
        <tbody>
        	<?php $result = mysqli_query($con,"SELECT * FROM `teacher_tbl`");
     if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()){
    //  echo '<option>'.$row['name'].'</option>';

         echo '<tr>
          <td>'.$row["teacher_id"].'</td>
                <td>'.$row['f_name'].'</td>
                <td>'.$row['l_name'].'</td>
                <td>'.$row['degree'].'</td>
               
                <td><button type="button" class="btn btn-success"><a href="GetTeacher.php?std_id='.$row["teacher_id"].'  ">  View</a></button>

                
            </tr>';
            
        }}
           ?>
            
            
        </tbody>
    </table>

    <br><br>

				</div><!-- end row -->
			</div><!-- end container -->


<?php include 'includes/footer.php';?>