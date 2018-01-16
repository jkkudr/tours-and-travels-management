<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">{title}</a>
        </li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>{page_title}</div>
            <?php
                echo  $this->session->flashdata('message');
            ?>
        <div class="card-body">
          <div class="table-responsive">
          <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#addMyModal">ADD NEW PACKAGE</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Sl.No.</th>
                  <th>Name</th>
                  <th>Pckage Details</th>
                  <th>Location</th>
                  <th>Days</th>
                  <th>Pic1</th>
                  <th>Pic2</th>
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $i=1;
              foreach ($packagelist as $key => $value)
              {
              ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $value->package_name; ?></td>
                  <td><?php echo $value->package_details; ?></td>
                  <td><?php echo $value->locations; ?></td>
                  <td><?php echo $value->days; ?></td>
                  <td><img src="<?php echo base_url(); ?>/packages/<?php echo $value->pic1; ?>"  width="100" height="100"></td>
                  <td><img src="<?php echo base_url(); ?>/packages/<?php echo $value->pic2; ?>"  width="100" height="100"></td>
                  <td>
                  <a class="btn btn-danger btn-block" href="package_delete/<?php echo $value->id; ?>" onclick="return confirm('Are You Sure');">Delete</a>
                  <a class="btn btn-primary btn-block" href="#" data-toggle="modal" data-target="#addMyModal04" id="edit" onclick="getpackageid('<?php echo $value->id; ?>')">Edit</a>
                  </td>
                </tr>
              <?php
              $i++;
              }
              ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
<!-- <button type="button" class="btn btn-info btn-lg" >Open Modal</button> -->

<div class="modal fade" id="addMyModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form role="form" id="newModalForm03" method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="bid" id="bid">
          <div class="form-group">
            <label class="control-label col-md-3" for="email">Package Name:</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="name1" name="package_name" placeholder="Enter Name" require/>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="email">Package Details:</label>
            <div class="col-md-9">
              <textarea class="form-control" name="package_details"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="email">Locations:</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="location" name="location" placeholder="" require>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="email">Days:</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="days" name="days" placeholder="" require>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="email">Package Picture1:</label>
            <div class="col-md-9">
              <input type="file" class="form-control" id="image1" name="image1" placeholder="" require>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="email">Package Picture2:</label>
            <div class="col-md-9">
              <input type="file" class="form-control" id="image2" name="image2" placeholder="" require>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="email">Package Picture3:</label>
            <div class="col-md-9">
              <input type="file" class="form-control" id="image3" name="image3" placeholder="" require>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="email">Package Picture4:</label>
            <div class="col-md-9">
              <input type="file" class="form-control" id="image4" name="image4" placeholder="" require>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" id="btnSaveIt">Save</button>
            <button type="button" class="btn btn-default" id="btnCloseIt" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="addMyModal04" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form role="form" id="newModalForm03" method="post" action="<?php echo base_url(); ?>admin/updatepackage" enctype="multipart/form-data">
        <input type="hidden" name="bid" id="bid">
          <div class="form-group">
            <label class="control-label col-md-3" for="email">Package Name:</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="package_name" name="package_name" placeholder="Enter Name" required="" />
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="email">Package Details:</label>
            <div class="col-md-9">
              <textarea class="form-control" name="package_details" id="package_details"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="email">Locations:</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="location1" name="location" placeholder="" required="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="email">Days:</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="days1" name="days" placeholder="" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="email">Package Picture1:</label>
            <div class="col-md-9">
              <input type="file" class="form-control" id="image1" name="image1" placeholder="" required="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="email">Package Picture2:</label>
            <div class="col-md-9">
              <input type="file" class="form-control" id="image2" name="image2" placeholder="" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="email">Package Picture3:</label>
            <div class="col-md-9">
              <input type="file" class="form-control" id="image3" name="image3" placeholder="" require>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="email">Package Picture4:</label>
            <div class="col-md-9">
              <input type="file" class="form-control" id="image4" name="image4" placeholder="" require>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" id="btnSaveIt">Save</button>
            <button type="button" class="btn btn-default" id="btnCloseIt" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function getpackageid(a)
  {
    document.getElementById("bid").value=a;
    $.get("getpackagedetails/"+a, function(data, status){
      data=data.replace('[','');
      data=data.replace(']','');
            //alert("Data: " + data + "\nStatus: " + status);
            var obj1 = JSON.parse(data);
            document.getElementById("package_name").value=obj1.package_name;
            document.getElementById("package_details").value=obj1.package_details;
            document.getElementById("location1").value=obj1.locations;
            document.getElementById("days1").value=obj1.days;
        });
  }
</script>