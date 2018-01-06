<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User Dashboard||Place Learning</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>userdash/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>userdash/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>userdash/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>userdash/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>userdash/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
               </button>
                <a class="navbar-brand" style="color: #00620C" href=""><b style="color:black">Welcome::</b><?php echo $this->session->userdata('Fistname');?> <?php echo $this->session->userdata('lastname');?></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
                <!-- /.dropdown -->
            
                <!-- /.dropdown -->
             
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i><?php echo $this->session->userdata('Fistname');?> <?php echo $this->session->userdata('lastname');?></a>
                        </li>
                        <li><a href="<?php echo base_url().'user/changepass'?>"><i class="fa fa-gear fa-fw"></i> Change Password</a>
                        </li>
                        <li><a href="<?php echo base_url().'user/msg'?>"><i class="fa fa-envelope-o fa-fw"></i>Mail</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url()?>login_controller/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            </div>
            <!-- /.row -->
            <div class="row">
                        <div class="panel-heading">
               
                   <center>
                    <form action="<?php echo base_url().'user/search_pack';?>" method="post">
                         <center>
                         <table>
                             <tr><td><input type="text" class="form-control" name="search" id="search" placeholder="Search by Package Name"></td>&nbsp;&nbsp;
 
                                 <td> &nbsp;&nbsp;<button type="submit" class="btn btn-info">Search</button></td></tr>
                         </table>
                         </center>
                    </form>
        </center>
             
            </div> 
                  
                    <div class="panel-body">
                        
                            
                 <h3>Package List</h3>
       
            
                
           <?php 
                  foreach ($user as $row){
                ?>
           
        <div class="panel panel-default">
           
              
  <div class="panel-body">
      <div class="col-xs-6">
      <img src="<?php echo base_url().$row->Image;?>" alt="image"width="300px" height="200px"><br>
      </div>
      
      <div class="col-xs-5" style="background-color: whitesmoke">
    <a href="<?php echo base_url().'user/view_details/'.$row->id;?>"<h4 style="color:#069"><?php echo $row->Title; ?></h4></a>
            <h6 style="color:#069"><?php echo $row->Package_id; ?></h6>
            <h5><?php echo "TK.".$row->Package_price;?></h5>
            <h5><?php echo "Tour Start:".$row->Start_Date;?></h5>
            <h5><?php echo "Tour End:".$row->End_Date;?></h5>
            <h5><?php echo "Country:".$row->Country;?></h5>
           
      </div>
         </div>
 
            <div class="panel-footer">
                  
       <a href="<?php echo base_url().'user/view_details/'.$row->id;?>" class="btn btn-primary btn-info active" role="button">View More</a>
       <a href="<?php echo base_url().'user/buy/'.$row->id;?>" class="btn btn-primary btn-success active" role="button">Buy</a>
                
      
            </div>
</div>
    <?php
                  } ?>
                
            
            
          <center><?php echo $links; ?></center>
		
                         
                    </div><br>
                 
               
            </div>
            <!-- /.row -->
 
</div>
        
        
            
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
              
               
                       
      

  
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>userdash/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>userdash/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>userdash/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url();?>userdash/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url();?>userdash/vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url();?>userdash/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>userdash/dist/js/sb-admin-2.js"></script>

</body>

</html>
