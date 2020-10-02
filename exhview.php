<?php include 'includes/header.php';?>

<br><br>


			<div class="container">
				<div class="row">

				<table id="myTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Title</th>
                <th>Date </th>
                <th>Loation </th>
                <th>Action</th>
              
            </tr>
        </thead>
        <tbody>
        	<?php $result = mysqli_query($con,"SELECT * FROM `exhibition_tbl`");
     if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()){
    //  echo '<option>'.$row['name'].'</option>';

         echo '<tr>
                <td>'.$row['tilte'].'</td>
                <td>'.$row['date'].'</td>
                <td>'.$row['location'].'</td>
                <td>
<button type="button" class="btn btn-danger"><a href="deleteexh.php?std_id='.$row["e_id"].'  ">Delete</a></button>
                
            </tr>';
            
        }}
           ?>
            
            
        </tbody>
    </table>

    <br><br>

				</div><!-- end row -->
			</div><!-- end container -->


<?php include 'includes/footer.php';?>