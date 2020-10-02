<?php include 'includes/header.php';?>


    <div class="banner carousel slide" id="recommended-item-carousel" data-ride="carousel">
      <div class="slides carousel-inner">
        <div class="item active">
          <img src="img/home/slider/slider_image_1.jpg" alt="" />
          <div class="banner_caption">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <div class="caption_inner animated fadeInUp">
                    <h1>Welcome To Fine Art</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur ante volutpat sem aliquam lobortis. Mauris porta fermentum volutpat. Praesent est sapien, tincidunt vel arcu vitae, mattis sollicitudin lectus.</p>
                  
                  </div><!--end caption_inner-->
                </div>
              </div><!--end row-->
            </div><!--end container-->
          </div><!--end banner_caption-->
        </div>
       
      </div>
      <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
        <img src="img/home/slider/prev.png">
        </a>
      <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
        <img src="img/home/slider/next.png">
      </a>
    </div><!--end banner-->

  

    <div class="mainContent clearfix">
      <div class="container">
        <div class="row clearfix">

          <div class="col-sm-8 col-xs-12">
            <div class="videoNine clearfix">

              <div class="videoArea clearfix">
                <h3>on going competition</h3>
                <div class="row">
                  <div class="col-lg-8 col-md-7 col-xs-12 videoLeft">
                  <img src="img/home/video/video_image.jpg" >
                  </div><!-- videoLeft -->
                  <div class="col-lg-4 col-md-5 col-xs-12 videoRight">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur ante volutpat sem aliquam lobortis. Mauris porta fermentum volutpat. Praesent est sapien, tincidunt vel arcu vitae, mattis sollicitudin lectus. Mauris porta fermentum volutpat. Praesent est sapien, tincidunt vel arcu vitae, mattis sollicitudin lectus.</p>
                  <a href="about.html" class="btn btn-block learnBtn">Learn More</a>
                  </div><!-- videoRight -->
                </div><!-- row -->
              </div><!-- videoArea -->

              <div class="related_post_sec single_post">
                <h3>Recent News</h3>
                <ul>
                  <li>
                    <span class="rel_thumb">
                      <a href="single-post-right-sidebar.html"><img src="img/news/related_thumb_01.png" alt=""></a>
                    </span><!--end rel_thumb-->
                    <div class="rel_right">
                      <h4><a href="single-post-right-sidebar.html">Lorem Ipsum dolar simt Amet simply dummy Text Lorem Ipsum dolar</a></h4>
                      <div class="meta">
                        <span class="author">Posted in: <a href="#">Update</a></span>
                        <span class="date">on: <a href="#">January 24, 2015</a></span>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation...</p>
                    </div><!--end rel right-->
                  </li>
                  <li>
                    <span class="rel_thumb">
                      <a href="single-post-right-sidebar.html"><img src="img/news/related_thumb_02.jpg" alt=""></a>
                    </span><!--end rel_thumb-->
                    <div class="rel_right">
                      <h4><a href="single-post-right-sidebar.html">Lorem Ipsum dolar simt Amet simply dummy Text Lorem Ipsum dolar</a></h4>
                      <div class="meta">
                        <span class="author">Posted in: <a href="#">Exam</a></span>
                        <span class="date">on: <a href="#">January 24, 2015</a></span>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation...</p>
                    </div><!--end rel right-->
                  </li>
                </ul>
              </div><!--related_post_sec-->

          </div><!--videoNine-->
          </div><!-- col-sm-8 col-xs-12 -->

          <div class="col-sm-4 col-xs-12">
           
            <div class="list_block related_post_sec">
              <div class="upcoming_events">
                <h3>Upcoming Exhibition</h3>


                <ul>

                  <?php $result = mysqli_query($con,"SELECT * FROM `exhibition_tbl`");
     if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()){

      $d = date('y-m-d');



    if ( $d < $row['date']) {
      # code...
    
    //  echo '<option>'.$row['name'].'</opti
                  echo '<li class="related_post_sec single_post">
                    <span class="date-wrapper">
                      <span class="date">'.$row["date"].'</span>
                    </span>
                    <div class="rel_right">
                      <h4><a href="#">'.$row["tilte"].'</h4>
                      <div class="meta">
                        <span class="place"><i class="fa fa-map-marker"></i>'.$row["location"].'</span>
                      </div>
                    </div>
                  </li>
';
}
               }}

               ?>
                </ul>
                
              </div>
            </div><!-- end list_block -->
          </div><!-- col-sm-4 col-xs-12 -->

        </div><!-- row clearfix -->
      </div><!-- container -->
    </div><!-- mainContent -->

    

    <div class="testimonial-section clearfix">
      <div class="container">
        <div class="row">
          <div class="col-xs-9 col-sm-4">
            <div class="testimonial">
           
              <div class="carousal_bottom">
                
               
              </div>
            </div><!-- testimonial -->
          </div><!-- col-xs-12 -->
        
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- testimonial-section -->


<?php include 'includes/footer.php';?>