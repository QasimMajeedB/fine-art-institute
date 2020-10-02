<?php include 'includes/header.php';?>

<br><br>


			<div class="container">
				<div class="row">

				<table id="myTable" class="display" style="width:100%">
        <thead>
            <tr>
                 <th>ID</th>
                <th>Frist Name</th>
                <th>Last Name </th>
                <th>E-Mail </th>
                 <th>Course</th>

                <th>Action</th>
              
            </tr>
        </thead>
        <tbody>
        	<?php $result = mysqli_query($con,"SELECT * FROM `apply_tbl`");
     if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()){
    //  echo '<option>'.$row['name'].'</option>';

        if($row['status']  < 1){

             echo '<tr>
                <td>'.$row['apply_id'].'</td>
                <td>'.$row['f_name'].'</td>
                <td>'.$row['l_name'].'</td>
                <td>'.$row['mail'].'</td>
                <td>'.$row['Crouse'].'</td>
                <td>

<button type="button" class="btn btn-warning"><a href="apstd.php?std_id='.$row["apply_id"].'">approve</a></button>
<button type="button" class="btn btn-secondary"><a href="getstd.php?std_id='.$row["apply_id"].'">View</a></button>



                </td>
                
            </tr>';
        }
            
        }}
           ?>
            
            
        </tbody>
    </table>

    <br><br>

				</div><!-- end row -->
			</div><!-- end container -->


<?php include 'includes/footer.php';?>