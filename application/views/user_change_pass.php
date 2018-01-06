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
 <link href="<?php echo base_url();?>assets/style.css" rel="stylesheet">
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
                <a class="navbar-brand" href="<?php echo base_url().'user/dashboard'?>">Home</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <a href="<?php echo base_url()?>login_controller/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                
                    </ul>
                    <!-- /.dropdown-tasks -->
               
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
            
            <!-- /.navbar-top-links -->

       
            <!-- /.navbar-static-side -->
        </nav>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Change Password</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               
                <div class="col-lg-3 col-md-6">
                   
                </div>
                <div class="col-lg-3 col-md-6">
                   
                </div>
                <div class="col-lg-3 col-md-6">
                    
                </div>
            </div>
            <!-- /.row -->
           <div class="panel panel-default">
               <div class="panel-heading">Change Password</div>
                    <div class="panel-body">
                       <?php foreach ($user as $data){?>
<?php echo form_open('user/updatepass');?>

        <?php echo form_hidden('id',$data->uid)?>
           <?php echo form_hidden('opass',$data->Password);?><br>
           <label>Current Password</label><br>
            <?php echo form_password(array('name'=>'copass'))?> <?php echo form_error('copass','<div class="error">', '</div>')?><br>
            <label>New Password</label><br>
           <?php echo form_password(array('name'=>'npass'))?><?php echo form_error('npass','<div class="error">', '</div>');?><br>
           <label>Confirm New Password</label><br>
           <?php echo form_password(array('name'=>'cnpass'))?><?php echo form_error('cnpass','<div class="error">', '</div>');?><br><br>
           <?php echo form_submit(array('name'=>'submit'),'Confirm');?>
<?php echo form_close();?>
<?php } ?>  
                            
                 </div>
  <div class="panel-footer">Panel footer</div>
</div>
            
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
               
                       
      

    </div>
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


    

