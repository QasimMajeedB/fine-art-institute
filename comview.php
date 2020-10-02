<?php include 'includes/header.php';?>

<br><br>


			<div class="container">
				<div class="row">

				<table id="myTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Title</th>
                <th>End Date </th>
               
                <th>Action</th>
              
            </tr>
        </thead>
        <tbody>
        	<?php $result = mysqli_query($con,"SELECT * FROM `comp_tbl`");
     if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()){
    //  echo '<option>'.$row['name'].'</option>';

         echo '<tr>
                <td>'.$row['comp_name'].'</td>
                <td>'.$row['end_date'].'</td>
               
                <td>
                
<button type="button" class="btn btn-danger"><a href="deletecr.php?std_id='.$row["comp_id"].'  ">Delete</a></button>
                
            </tr>';
            
        }}
           ?>
            
            
        </tbody>
    </table>

    <br><br>

				</div><!-- end row -->
			</div><!-- end container -->


<?php include 'includes/footer.php';?>