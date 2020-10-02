<?php include 'includes/header.php';?>

 <!-- MAIN CONTENT -->
    <div class="main-content">
      <div class="container">

        <!--POPULAR COURSE -->
        <div class="popularCourse padding clearfix">

          <div class="row">
            
<?php
 $results = mysqli_query($con,"SELECT * FROM `award_tbl`");
     if ($results->num_rows > 0) {
   while($row = $results->fetch_assoc()){
              echo '<div class="col-xs-6 col-sm-4">
                <div class="aboutImage">
                  <a href="awarddetails.php?id='.$row["a_id"].'">
                    <img src="upload/'.$row["photo"].'" alt="" class="img-responsive" />
                    <div class="overlay">
                      <p>'.$row["des"].'</p>
                    </div>
                    <span class="captionLink">View Details<span></span></span>
                  </a>
                </div><!-- aboutImage -->
                <h3>
                  <a href="awarddetails.php?id='.$row["a_id"].'">'.$row["competition"].'</a>
                </h3>
              </div>';


            }}
?>
            
          </div>

        </div>

      </div>
    </div>

    
   


    <?php include 'includes/footer.php';?>