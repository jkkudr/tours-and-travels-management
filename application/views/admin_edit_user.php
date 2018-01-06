<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="resource/favicon.ico">

    <title>ADMIN|DASHBOARD</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>resource/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url();?>resource/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>resource/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url();?>resource/js/ie-emulation-modes-warning.js"></script>

<style>
body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 20px;
    text-decoration: none;
    font-size: 15px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
    background-color: green;
}

.closebtn {
    position: absolute;
    top: 25px;
    right: 25px;
    font-size: 50px !important;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 10px;}
}
</style>
  </head>


  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--<a class="navbar-brand" href="#">Home</a>-->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo base_url();?>admin/dashboard.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Settings</a></li>
         <li><a href="#">View</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>&nbsp;View <span class="caret"></span></a>
          <ul class="dropdown-menu">
           
            <li role="separator" class="divider"></li>
            <li><a href="#"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>&nbsp;View Home Content </a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>&nbsp;View About-us</a></li>
          </ul>
        </li>
      </ul>
     <!-- <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Welcome::<font color="green"><?php echo $this->session->userdata('Fistname');?> <?php echo $this->session->userdata('lastname');?></font></a></li>
          <li><a href="<?php echo base_url()?>login_controller/logout"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="<?php echo base_url();?>admin/add_package.html">Create Travel Package</a>
  <a href="<?php echo base_url();?>admin/user_list">User List</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">☰</span>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
    <div class="container">
      <!-- Example row of columns -->
        <div>
            <form action="<?php echo base_url();?>" method="post">
                
                
            </form>
    
            
        </div>


   
      <div class="row">
        <div class="col-md-4">
      

          
        </div> 
     

      <hr>

      <footer style="background-color:#080808">
          <center>
          <img src="<?php echo base_url();?>resource/images/logo4.jpg" height="50px" width="150px">&nbsp;&nbsp;
           <img src="<?php echo base_url();?>resource/images/logo3.jpg" height="50px" width="150px">&nbsp;&nbsp;
            <img src="<?php echo base_url();?>resource/images/logo2.png" height="50px" width="150px">&nbsp;&nbsp;
          </center>
          <p style="color: #EBF3EC">&copy; Copyright (c) 2016 All Rights Reserved</p>
      </footer>
      </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>resource/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url();?>resource/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url();?>resource/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
