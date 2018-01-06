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

    <title>Welcome To Place Learning</title>
    <style>
        .error
        {
            color: #990000;
        }
    </style>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>resource/css/bootstrap.min.css" rel="stylesheet">
    <!--register form css class-->
    <link href="<?php echo base_url();?>resource/css/register_form.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url();?>resource/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>resource/jumbotron.css" rel="stylesheet">
    
     <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>resource/style.css" rel="stylesheet">
     <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url();?>resource/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
          <li class="active"><a href="<?php echo base_url();?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Contact</a></li>
         <li><a href="<?php echo base_url();?>welcome/about.html">About-Us</a></li>
        
      </ul>
     <!-- <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Member Login</a></li>
         <li><a href="<?php echo base_url();?>welcome/user_registration.html"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>&nbsp;Join us</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <br><br>

    <div class="container">
     
        <h3 style="color: #005702"><u>Sign In</u></h3>
            <hr>
           
           <div >
        <?php echo $error;?>
        <div id="login-form">
            <center>  <?php foreach ($pro as $row){?>
        <form method="post" action="<?php echo base_url().'login_controller/login_for_buy/'.$row->id;?>">
          
            <table align="center" width="30%" border="4" height="40%">
                    <tr>
                        <td><?php echo form_error('email','<div class="error">', '</div>'); ?><input type="text" name="email" placeholder="Your Email" value="<?php echo set_value('email'); ?>"  /></td>
                     
                    </tr>
                    <tr>
                        <td><?php echo form_error('password','<div class="error">', '</div>'); ?><input type="password" name="password" placeholder="Your Password" value="<?php echo set_value('password'); ?>"  /></td>
                        
                    </tr>
                    <tr>
                        <td><button type="submit" name="btn_login" class="button">Sign In</button></td>
                    </tr>
                    <tr><td>Not Member yet?<a href="<?php echo base_url();?>welcome/user_registration.html">Join Us</a></td></tr>
                   
                </table>
           
            </form> <?php }?>
             </center>   
        </div>
        </div> 
      
      <div class="row">
        <div class="col-md-4">
            
             
          
        </div>
        
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

