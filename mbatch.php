<?php include 'includes/header.php';?>

<br><br>


			<div class="container">
				<div class="row">
<h1>Batch Details</h1><br><br>
				<table id="myTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Batch Code</th>
                <th>Teacher Name</th>
                <th>Crouse</th>
                <th>Action</th>
              
            </tr>
        </thead>
        <tbody>
        	<?php $result = mysqli_query($con,"SELECT * FROM `tbl_batch`");
     if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()){
    //  echo '<option>'.$row['name'].'</option>';

         echo '<tr>
          
                <td>'.$row['batch_id'].'</td>
                <td>'.$row['batch_teacher'].'</td>
                <td>'.$row['batch_c'].'</td>
               <td>
<button type="button" class="btn btn-danger"><a href="dltmbatch.php?std_id='.$row["batch_id"].'  ">Delete</a></button>
                </td>
            </tr>';
            
        }}
           ?>
            
            
        </tbody>
    </table>

    <br><br>

				</div><!-- end row -->
			</div><!-- end container -->


<?php include 'includes/footer.php';?>