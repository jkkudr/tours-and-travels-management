<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Place Learning || HOME</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>resource/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo base_url();?>assets/product.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>resource/css/full-slider.css" rel="stylesheet">
    <!-- my css-->
    <link href="<?php echo base_url();?>resource/css/my_style.css" rel="stylesheet">
	
	 <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url();?>resource/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>resource/jumbotron.css" rel="stylesheet">
     <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url();?>resource/js/ie-emulation-modes-warning.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" class="active" href="<?php echo base_url();?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;HOME</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo base_url();?>welcome/about.html"><span class="glyphicon  glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp;About</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>&nbsp;Contact</a>
                    </li>
                   <li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>&nbsp;Package Categories <span class="caret"></span></a>
						
	<ul class="dropdown-menu">
           
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url().'welcome/dom_pack'?>">Domestic Package</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">International Package</a></li>
          </ul>
        </li>
                   
					
              </ul>
			  
			  <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url();?>login_controller/index.html"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Member Login</a></li>
         <li><a href="<?php echo base_url();?>welcome/user_registration.html"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>&nbsp;Join us</a></li>
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Full Page Image Background Carousel Header -->
     <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>

   <div >
       <marquee><p  class="marquee_back"><strong>Customer support and satisfaction is our main strength. We are working really hard every moment to make your online shopping Secure & delightful.  ||   Hotline: 01735-108437||</strong></p></marquee>
    
    </div>
<!-- Page Content --> 
    <div class="container">
        
 

<!--<div class="containerp prod">
    <h3>Package</h3>
    <div class="row">
        <?php foreach ($package as $row){
         ?>
        <div class="col-20" align="center" style="height:100%">
    <img src="<?php echo base_url().'image/'.$row->Image;?>" alt="image" width="150px" height="100px">
            <h4 style="color:#069"><?php echo $row->Title; ?></h4>
            <h6 style="color:#069"><?php echo $row->Package_id; ?></h6>
            <h5><?php echo "TK.".$row->Package_price;?></h5>
            <div>
                <a href="<?php echo base_url().'welcome/view_details/'.$row->id;?>" class="btn btn-primary btn-info active" role="button">View Details</a>  
            </div>
            
            
        </div>
        <?php } ?>
    </div>
    
    
</div>-->
<div class="row">

        <hr>

        <!-- Footer -->
		
		<footer>
                    <div class="row">
        
                        <div class="col-lg-12">
          <p style="color: #EBF3EC">&copy; Copyright (c) 2016 All Rights Reserved</p> 
                        </div>
                    </div>
      </footer>
        
          

    </div>
    </div>
        <!-- Footer -->
        
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>resource/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>resource/js/bootstrap.min.js"></script>
	
	<script src="<?php echo base_url();?>resource/js/jquery.min.js"></script>
     
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url();?>resource/js/ie10-viewport-bug-workaround.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 2000 //changes the speed
    })
    </script>

</body>

</html>
