<?php include 'includes/header.php';?>

<br><br>


			<div class="container">
				<div class="row">

				<table id="myTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Courses Name</th>
                <th>Duration </th>
                <th>Certification </th>
                <th>Action</th>
              
            </tr>
        </thead>
        <tbody>
        	<?php $result = mysqli_query($con,"SELECT * FROM `crouse_tbl`");
     if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()){
    //  echo '<option>'.$row['name'].'</option>';

         echo '<tr>
                <td>'.$row['name'].'</td>
                <td>'.$row['time'].'</td>
                <td>'.$row['degree'].'</td>
                <td>
<button type="button" class="btn btn-danger"><a href="deletecr.php?std_id='.$row["c_id"].'  ">Delete</a></button>
                
            </tr>';
            
        }}
           ?>
            
            
        </tbody>
    </table>

    <br><br>

				</div><!-- end row -->
			</div><!-- end container -->


<?php include 'includes/footer.php';?>