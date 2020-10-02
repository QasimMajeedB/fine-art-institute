<!DOCTYPE html>
<html lang="en">

<?php include('config.php');
session_start();


?>
<!-- Mirrored from themes.iamabdus.com/royal/1.3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Sep 2019 14:33:36 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home Default - Royal College</title>

  <!-- PLUGINS CSS STYLE -->
  <link rel="icon" type="image/png" href="img/favicon.png">
  <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="plugins/selectbox/select_option1.css">
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="plugins/flexslider/flexslider.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="plugins/calender/fullcalendar.min.css">
  <link rel="stylesheet" href="plugins/animate.css">
  <link rel="stylesheet" href="plugins/pop-up/magnific-popup.css">
  <link rel="stylesheet" type="text/css" href="plugins/rs-plugin/css/settings.css" media="screen">
  <link rel="stylesheet" type="text/css" href="plugins/owl-carousel/owl.carousel.css" media="screen">

  <!-- GOOGLE FONT -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,400italic,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/default.css" id="option_color">

<script src="js/jquery.js"></script> 
<script src="media/js/jquery.dataTables.min.js"></script> 
<link href="media/css/jquery.dataTables.min.css" rel="stylesheet">
<script type="text/javascript">
  
  $('date').datepicker({
    format: "dd MMMM yyyy"
});
</script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="body-wrapper">

  <div class="main_wrapper">

    <header class="header-wrapper">
      <div class="topbar clearfix">
        <div class="container">
          <ul class="topbar-left">
            <li class="phoneNo"><i class="fa fa-phone"></i>0123 45678910</li>
            <li class="email-id hidden-xs hidden-sm"><i class="fa fa-envelope"></i>
              <a href="mailto:info@yourdomain.com">info@yourdomain.com</a>
            </li>
          </ul>
          <ul class="topbar-right">
            <li class="hidden-xs"><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li class="hidden-xs"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li class="hidden-xs"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
            <li class="hidden-xs"><a href="#"><i class="fa fa-rss"></i></a></li>
            <?php

            if(isset($_SESSION['user'])){
           
           echo  '<li class="hidden-xs"><a href="#" style="font-size: 16px;"><i class="fa fa-user
           "></i>'.$_SESSION['user'].'</a></li>

            <li class="hidden-xs"><a href="logout.php"><i class="fa fa-sign-out-alt"></i>LOGOUT</a></li>';

}


if(isset($_SESSION['admin'])){


           
           echo  '<li class="hidden-xs"><a href="#" style="font-size: 16px;"><i class="fa fa-user
           "></i>'.$_SESSION['admin'].'</a></li>

            <li class="hidden-xs"><a href="logout.php"><i class="fa fa-sign-out-alt"></i>LOGOUT</a></li>';

}


?>
            
           
          </ul>
        </div>
      </div>

      <div class="header clearfix">
        <nav class="navbar navbar-main navbar-default">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="header_inner">

                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo clearfix" href="index.php"><img src="img/logo.png" alt="" class="img-responsive" /></a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="nav navbar-nav navbar-right">
                      <li class="active dropdown">
                        <a href="index.php">Home</a>
                       
                      </li>
                   
                    
                      <?php
                      if(isset($_SESSION['user'])){


                      

                        echo '




                      <li class=" dropdown">
                        <a href="Courses.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses</a>
                        
                      </li>



                      <li class=" dropdown">
                        <a href="award.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Award</a>
                        
                      </li>


                      ';

                      }

                      elseif(isset($_SESSION['admin'])){

                      

                      



                       echo ' <li class=" dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses Area </a>
                        <ul class="dropdown-menu">
                          <li><a href="cor.php">Add Courses</a></li>

                        <li><a href="corview.php">View Courses</a></li>

                          
                        </ul>
                      </li>';

                         echo ' <li class="active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Other</a>
                        <ul class="dropdown-menu">
                          
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Batch</a>
                            <ul class="dropdown-menu">
                              <li><a href="cbatch.php">Create Batch</a></li>

                        <li><a href="mbatch.php">View Batch</a></li>
                        
                            </ul>
                          </li>
                          
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Student Area</a>
                            <ul class="dropdown-menu">
                               <li><a href="addstd.php">Add Student</a></li>

                               <li><a href="viewstd.php">View Student</a></li>
                              <li><a href="stdlist.php">Apply List</a></li>
                            </ul>
                          </li>

                             <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MANEGER Area</a>
                            <ul class="dropdown-menu">
                               <li><a href="addmng.php">Add MANEGER</a></li>

                               <li><a href="viewmng.php">View MANEGER</a></li>
                 </ul>
                          </li>

                        

                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Competition</a>
                            <ul class="dropdown-menu">
                               <li><a href="addcom.php">Add Competition</a></li>

                               <li><a href="comview.php">View Competition</a></li>
                              
                            </ul>
                          </li>


                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Teacher Area</a>
                            <ul class="dropdown-menu">
                               <li><a href="TeacherEntry.php">Add Teacher</a></li>

                        <li><a href="teachview.php">View Teacher</a></li>
                            </ul>
                          </li>


                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EXHIBITION</a>
                            <ul class="dropdown-menu">
                                <li><a href="addexh.php">Add EXHIBITION</a></li>

                        <li><a href="exhview.php">View EXHIBITION</a></li>
                            </ul>
                          </li>


                          
                        </ul>

                      </li>';

                      echo '


                       <li class=" dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EXHIBITION</a>

                        <ul class="dropdown-menu">
                          <li><a href="addexh.php">Add EXHIBITION</a></li>

                        <li><a href="exhview.php">View EXHIBITION</a></li>

                          
                        </ul>
                        
                      </li>


                       <li class=" dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Teacher Area</a>

                        <ul class="dropdown-menu">
                          <li><a href="TeacherEntry.php">Add Teacher</a></li>

                        <li><a href="teachview.php">View Teacher</a></li>

                          
                        </ul>
                        
                      </li>

                      <li class=" dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Award Area</a>

                        <ul class="dropdown-menu">
                          <li><a href="announcement.php">Aannouncement</a></li>

                        <li><a href="Awardlist.php">View Award List</a></li>

                          
                        </ul>
                        
                      </li>


                      ';


                      }

                      else{

                        echo ' <li class=" dropdown">
                        <a href="Courses.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses</a>
                       
                      </li>

 <li class=" dropdown">
                        <a href="award.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Award</a>
                        
                      </li>

                      ';
                      }



                      ?>
                    
                      
                      
                  <?php

                  if(isset($_SESSION['user'])){


                  }

            elseif (isset($_SESSION['admin'])) {


              echo ' ';
             

             
            }

else{

                    echo '<li class="apply_now"><a href="login.php">Now Login</a></li>';
                    echo '<li class="apply_now"><a href="apply.php">Apply Now</a></li>';

}
  ?>
                    </ul>
                  </div><!-- navbar-collapse -->

                </div>
              </div>
            </div>
          </div><!-- /.container -->
        </nav><!-- navbar -->
      </div>
    </header>


<script>
     $(document).ready(function(){
     $("#myTable").dataTable();
   });
   
   </script>