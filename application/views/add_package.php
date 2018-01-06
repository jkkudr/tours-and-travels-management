<!DOCTYPE html>
<html lang="en">
 
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN || DashBoard</title>
    
     <script src="<?php echo base_url();?>tinymce/tinymce.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>admindash/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>admindash/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>admindash/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>admindash/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    

</head>

<body>
<script>
    tinymce.init({
        selector:"#mytextarea"
    });
    tinymce.init({selector:"#myarea"});
    </script>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">ADMIN :: DashBoard</a>
            </div>
            <!-- Top Menu Items -->
           <!-- <center>
            <form class="navbar-form navbar-fixed-top" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
                </center>-->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('Fistname');?> <?php echo $this->session->userdata('lastname');?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i><?php echo $this->session->userdata('Fistname');?> <?php echo $this->session->userdata('lastname');?></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url()?>login_controller/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                  <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo base_url().'admin/dashboard';?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                   
                    <li>
                        <a href="<?php echo base_url().'admin/place_info';?>"><i class="fa fa-fw fa-table"></i>Place Info</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>admin/user_list"><i class="fa fa-fw fa-edit"></i> User List</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'admin/dynamic_combobox';?>"><i class="fa fa-fw fa-desktop"></i>Create Package</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'admin/ad_new_user'?>"><i class="fa fa-fw fa-wrench"></i>New User</a>
                    </li>
                   
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ADD NEW PACKAGE <small>Details</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
               

                <div class="row">
                   
                </div>
                <!-- /.row -->


                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                      <div class="panel panel-info">
                           <div class="panel-heading">
                         <h3 class="panel-title">Package Form</h3>
                             </div>
                <div class="panel-body">
    <style>
input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 2px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}



div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 1px;
}
.error
{
    color:#990000;
}
</style>
   <center>
        <fieldset style="width:50%">
            <legend align="center">ADD NEW PACKAGE</legend>

<?php echo form_open_multipart('admin/save');?>
             
            

         
            <label>Package Title</label><br>
                  <?php echo form_input(array('name'=>'pName'));?><?php echo '<div class="error">'.form_error('pName').'</div>';?><br>
                 
            <label>Package ID</label><br>
              <?php echo form_input(array('name'=>'p_id'),'PI-'.rand());?><br>
          <label>Package Price</label><br>
              <?php echo form_input(array('name'=>'p_price'));?><?php echo '<div class="error">'.form_error('p_price').'</div>';?><br>
              
               <label>Package Type</label><br>
             <select name="d_type">
    
    <option value="none">None</option>
  <?php 

            foreach($groups3 as $row)
            { 
              echo '<option value="'.$row->package_type.'">'.$row->package_type.'</option>';
            }
            ?>
</select><?php echo '<div class="error">'.form_error('d_type').'</div>';?><br>
        <label>Duration</label><br>
                 <?php
     $dur=array(
             '0'=>'Select a Duration',
               '3 Days'=>'3 Days',
                '5 Days'=>'5 Days',
                 '7 Days'=>'7 Days',
                  '10 Days'=>'10 Days',
                     '15 Days'=>'15 Days',
                        '20 Days'=>'20 Days',
                             '30 Days'=>'30 Days',
                                '45 Days'=>'45 Days',
                                    '60 Days'=>'60 Days'
     );
     
     echo form_dropdown('d_dur',$dur);
  ?>
    
        <br>
        
            <label>Tour Start Date</label><br>    
            <input type="date" name="ts"><?php echo '<div class="error">'.form_error('ts').'</div>';?><br>    
             <label>Tour End Date</label><br>    
            <input type="date" name="te"><?php echo '<div class="error">'.form_error('te').'</div>';?><br>        
 

              
    <label>Departure</label><br>
        <select name="d_dep">
    
    <option value="0">None</option>
  <?php 

            foreach($groups as $row)
            { 
              echo '<option value="'.$row->Place_Location.'">'.$row->Place_Location.'</option>';
            }
            ?>
</select><br>

     
        <label>Destination</label><br>
  <select name="d_des">
    
    <option value="0">None</option>
  <?php 

            foreach($groups as $row)
            { 
              echo '<option value="'.$row->Place_Location.'">'.$row->Place_Location.'</option>';
            }
            ?>
</select><br>

 
 <label>Transport</label><br>
  <?php
     $trans=array(
         '0'=>'Select a Transport',
         'By Air'=>'By Air',
         'By Road'=>'By Road',
         'By Ship'=>'By Ship'
     );
     
     echo form_dropdown('d_tra',$trans);
  ?>
 <br>

 
 <label>Visa</label><br>
 <?php
     $visa=array(
         '0'=>'Select a Option',
         'Yes'=>'Yes',
         'No'=>'No'
         
     );
     
     echo form_dropdown('p_visa',$visa);
  ?>
 <br>
 
 <label>Tax</label><br>
 <?php
     $tax=array(
         '0'=>'Select a Option',
         'Yes'=>'Yes',
         'No'=>'No'
         
     );
     
     echo form_dropdown('p_tax',$tax);
  ?>
 <br>
 
 <label>Acommodation</label><br>
 <select name="d_aco">
    
    <option value="0">None</option>
  <?php 

            foreach($groups2 as $row)
            { 
              echo '<option value="'.$row->h_name.'">'.$row->h_name.'</option>';
            }
            ?>
</select><br>
 <label>Type</label><br>
     <?php $type=array(
         '0'=>'Select One',
    '2 STAR'=>'2 STAR',
     '3 STAR'=>'3 STAR',
     '4 STAR'=>'4 STAR',
     '5 STAR'=>'5 STAR',
     '7 STAR'=>'7 STAR'
 ); echo form_dropdown('a_type',$type)?><br>
 

    
 <label>Breakfast:&nbsp;</label><br>
  <?php $bre=array(
         '0'=>'Select One',
        'Yes'=>'Yes',
        'No'=>'No'
     
 ); echo form_dropdown('bre',$bre)?><br>
         
 <label name="lun">Lunch:&nbsp;</label><br>
      <?php $lun=array(
         '0'=>'Select One',
        'Yes'=>'Yes',
        'No'=>'No'
     
 ); echo form_dropdown('lun',$lun)?><br>    
 <label>Dinner:&nbsp;</label><br>
   
  <?php $din=array(
         '0'=>'Select One',
        'Yes'=>'Yes',
        'No'=>'No'
     
 ); echo form_dropdown('din',$din)?><br>    
     
 


 <label>Country Name</label><br>
<select name="country">
    
    <option value="0">None</option>
  <?php 

            foreach($groups1 as $row)
            { 
              echo '<option value="'.$row->c_name.'">'.$row->c_name.'</option>';
            }
            ?>
</select>
 
<br>

<label>Tour Plan & Description</label>
<textarea  name="longdes" id="mytextarea" > </textarea><?php echo '<div class="error">'.form_error('longdes').'</div>';?>
<label>Image</label>
    <?php echo form_upload('pic');?><?php echo '<div class="error">'.form_error('pic').'</div>';?><br><br>
    &nbsp;&nbsp;
    <label>Image2</label>
    <?php echo form_upload('pic1');?><?php echo '<div class="error">'.form_error('pic1').'</div>';?><br>
 <?php echo form_submit(array('name'=>'submit'),'Create');?>
        
<?php echo form_close();?>
       
        </fieldset> 
   </center>
    
                    
                 </div>
                 <div class="panel-footer">Panel footer</div>
                </div>
                        <div class="panel panel-default">
                <div class="panel-body">
                     Panel content
                 </div>
                 <div class="panel-footer">Panel footer</div>
                </div>
                    </div>
                </div>
                <!-- /.row -->

               
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>admindash/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>admindash/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url();?>admindash/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url();?>admindash/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url();?>admindash/js/plugins/morris/morris-data.js"></script>

</body>

</html>

<!DOCTYPE html>
<html>
  
<body>
   
</body>
</html>