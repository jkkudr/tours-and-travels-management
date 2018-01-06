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
     <link href="<?php echo base_url();?>assets/product.css" rel="stylesheet">
     <link href="<?php echo base_url();?>assets/view-content.css" rel="stylesheet">
          <link href="<?php echo base_url();?>assets/view_content.css" rel="stylesheet">


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
          <li><a href="<?php echo base_url();?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;HOME</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>&nbsp;Contact</a></li>
        <li ><a href="<?php echo base_url();?>welcome/about.html"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp;About-Us</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>&nbsp;Dropdown <span class="caret"></span></a>
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
        <li><a href="<?php echo base_url();?>login_controller/index"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Member Login</a></li>
         <li><a href="<?php echo base_url();?>welcome/user_registration.html"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>&nbsp;Join us</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    
         
<H3> </H3>

            <div class="product-table">
                <?php foreach ($pro as $row){?>
           <div class="panel panel-default">
               <div class="panel-heading"><b>Package Details</b></div>
                    <div class="panel-body">
                <table width="100%" class="table table-bordered">
             <tr>
              <td width="30%" bgcolor="#efebe9">Package Title</td>
            <td width="70%"><?php echo $row->Title?></td>
          </tr>
          <tr>
              <td width="30%" bgcolor="#efebe9">Package ID</td>
            <td width="70%"><?php echo $row->Package_id?></td>
          </tr> 
          <tr>
              <td width="30%" bgcolor="#efebe9">Country</td>&nbsp;
              <td width="70%"><?php echo $row->Country?></td>&nbsp;              

          </tr>
          <tr>
              <td width="30%" bgcolor="#efebe9">Package Type</td>&nbsp;
              <td width="70%"><?php echo $row->Package_Type?></td>&nbsp;              

          </tr>
         
          <tr>
              <td width="30%" bgcolor="#efebe9">Tour Duration</td>&nbsp;
              <td width="70%"><?php echo $row->Duration?></td>&nbsp;              

          </tr>
          <tr>
              <td width="30%" bgcolor="#efebe9">Tour Start Date</td>&nbsp;
              <td width="70%"><?php echo $row->Start_Date?></td>&nbsp;              

          </tr>
          <tr>
              <td width="30%" bgcolor="#efebe9">Tour End Date</td>&nbsp;
              <td width="70%"><?php echo $row->End_Date?></td>&nbsp;              

          </tr>
           <tr>
              <td width="30%" bgcolor="#efebe9">Departure</td>&nbsp;
              <td width="70%"><?php echo $row->Jour_start?></td>&nbsp;              

          </tr>
          
          <tr>
              <td width="30%" bgcolor="#efebe9">Destination</td>&nbsp;
              <td width="70%"><?php echo $row->Jour_Destination?></td>&nbsp;              

          </tr>
          <tr>
              <td width="30%" bgcolor="#efebe9">Visa</td>&nbsp;
              <td width="70%"><?php echo $row->Visa?></td>&nbsp;              

          </tr>
           <tr>
              <td width="30%" bgcolor="#efebe9">Tax</td>&nbsp;
              <td width="70%"><?php echo $row->Tax?></td>&nbsp;              

          </tr>
          <tr>
              <td width="30%" bgcolor="#efebe9">Acommodation</td>&nbsp;
              <td width="70%"><?php echo $row->Acommodation?></td>&nbsp;              

          </tr>
           <tr>
              <td width="30%" bgcolor="#efebe9">Type</td>&nbsp;
              <td width="70%"><?php echo $row->Acommodo_type?></td>&nbsp;              

          </tr>
           <tr>
              <td width="30%" bgcolor="#efebe9">Breakfast</td>&nbsp;
              <td width="70%"><?php echo $row->Breakfast?></td>&nbsp;              

          </tr>
          <tr>
              <td width="30%" bgcolor="#efebe9">Lunch</td>&nbsp;
              <td width="70%"><?php echo $row->Lunch?></td>&nbsp;              

          </tr>
          <tr>
              <td width="30%" bgcolor="#efebe9">Dinner</td>&nbsp;
              <td width="70%"><?php echo $row->Dinner?></td>&nbsp;              

          </tr>
          <tr>
            <td width="30%" bgcolor="#efebe9">Transport</td>
            <td width="70%"><?php echo $row->Transport?></td>
          </tr>
            <tr>
            <td width="30%" height="15%" bgcolor="#efebe9">Package Price</td>
            <td width="70%"><?php echo $row->Package_price?></td>
          </tr>
          <tr>
            <td width="30%" bgcolor="#efebe9">Tour Plan</td>
            <td width="70%"><?php echo $row->plan?></td>
          </tr>
          <tr>
            <td width="30%" bgcolor="#efebe9">Last Updated</td>
            <td width="70%"><?php echo $row->Date?></td>
          </tr>
       <div class="col-50" align="center"><br><br>
             <img src="<?php echo base_url().$row->Image;?>" alt="image" width="150px" height="100px">
              <img src="<?php echo base_url().$row->Image1;?>" alt="image" width="150px" height="100px">
             <h5><a href="#">view large image</a></h5>
         <br><br><b style="color:#300"></b>
       
                 </div>
           </table>
        
             
        
     <?php } ?>
                        <div class="panel-footer"><a href="<?php echo base_url().'welcome/index'?>">Back to Home</a></div>
</div>
            </div>
            
            
                        <!-- /.panel-body -->
                    </div>
     
          
       

   
    

        
      
    

    
      <!-- Example row of columns -->
      
      
    
      <hr>

      <footer style="background-color:#080808">
          <center>
          <img src="<?php echo base_url().'resource/images/logo4.jpg';?>" height="50px" width="150px">&nbsp;&nbsp;
           <img src="<?php echo base_url();?>resource/images/logo3.jpg" height="50px" width="150px">&nbsp;&nbsp;
            <img src="<?php echo base_url();?>resource/images/logo2.png" height="50px" width="150px">&nbsp;&nbsp;
          </center>
          <p style="color: #EBF3EC">&copy; Copyright (c) 2016 All Rights Reserved</p>
      </footer>
   


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


