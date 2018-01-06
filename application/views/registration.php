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

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>resource/css/bootstrap.min.css" rel="stylesheet">
    <!--register form css class-->
    <link href="<?php echo base_url();?>resource/css/register_form.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url();?>resource/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>resource/jumbotron.css" rel="stylesheet">
    

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
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
           
            <li role="separator" class="divider"></li>
            <li><a href="#">Categories one</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Categories two</a></li>
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
          <li><a href="<?php echo base_url();?>login_controller/index.html">Member Login</a></li>
         <li><a href="<?php echo base_url();?>welcome/user_registration.html">Join us</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <br><br>

    <div class="container">
     
      <div class="container">
        <h3><u>Create Account</u></h3>
            <hr>
            <br><br>
            
             <center>
        

                   <?php echo form_open_multipart('welcome/user_registration');?>     
                      
                    
		<table width="520">
                <tr>
                <td><?php echo form_error('fname','<div class="error">', '</div>'); ?><input type="text" name="fname" value="<?php echo set_value('fname'); ?>" size="50" placeholder="First Name" ></td>
                <td><?php echo form_error('lname','<div class="error">', '</div>'); ?><input type="text" name="lname" value="<?php echo set_value('lname'); ?>" size="50" placeholder="Last Name" ></td>
                </tr>
                
                <tr>
                <td colspan="2"><?php echo form_error('email_address','<div class="error">', '</div>'); ?>
				<div class="web">
				<div class='input'>
                <input type="email" name="email_address" id="email_address" value="<?php echo set_value('email_address'); ?>" size="50" placeholder="Your e-mail">
				<div class="availability" id="availability"></div>
				</div>
                </td>
                </tr>
                
                <tr>
                <td><?php echo form_error('password','<div class="error">', '</div>'); ?>
                <input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" placeholder="Password"   >
                </td>
                
                 <td><?php echo form_error('re-password','<div class="error">', '</div>'); ?>
                     <input type="password" name="re-password" value="<?php echo set_value('re-password'); ?>" size="50" placeholder="Re-type Password" >
                </td>
                </tr>
                
                 <tr>
                <td colspan="2"><?php echo form_error('phone','<div class="error">', '</div>'); ?>
                <input type="text" name="phone" value="<?php echo set_value('phone'); ?>" size="50" placeholder="Phone NO" >
                </td>
                </tr>
                
                
                 <tr>
                <td colspan="2"><?php echo form_error('address','<div class="error">', '</div>'); ?>
                <input type="text" name="address" value="<?php echo set_value('address'); ?>" size="50" placeholder="Street Address" >
                </td>
                </tr>
                
                
<tr>	
<td><input type="radio" name="gender" id="radio1" class="radio" value="Male" checked/> <label for="radio1">Male</label></td>	
<td><input type="radio" name="gender" id="radio2" class="radio" value="Female" /> <label for="radio2">Female</label></td>		
</tr>
                
<tr>
<td width="254"><button type="reset" name="reset" value="Reset">Reset</button></td>
<td width="254"><button type="submit" name="btn_signup" value="Submit">Sign Up</button> </td>
</tr>
</table>
                       
        </form>
       
        </center>
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
