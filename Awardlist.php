<?php include 'includes/header.php';?>

<br><br>


			<div class="container">
				<div class="row">

				<table id="myTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Competition</th>
                <th>Action</th>
                
              
              
            </tr>
        </thead>
        <tbody>
        	<?php $result = mysqli_query($con,"SELECT * FROM `award_tbl`");
     if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()){
    //  echo '<option>'.$row['name'].'</option>';

         echo '<tr>
          
                <td>'.$row['Student_id'].'</td>
                <td>'.$row['competition'].'</td>
               
                <td><button type="button" class="btn btn-success"><a href="editdtl.php?std_id='.$row["a_id"].'  ">  View</a></button>
<button type="button" class="btn btn-danger"><a href="awdtl.php?std_id='.$row["a_id"].'  ">Delete</a></button>
                
            </tr>';
            
        }}
           ?>
            
            
        </tbody>
    </table>

    <br><br>

				</div><!-- end row -->
			</div><!-- end container -->


<?php include 'includes/footer.php';?>