<!DOCTYPE html>
<html lang="en">
<head>
 <?php
include 'head.php';?>
<style type="text/css">

.hidden {
display:none;
}
</style> 

</head>

  

  <body id="page-top">

    <?php
include 'nav.php';
?>
    <div id="wrapper">

      <!-- Sidebar -->
      <?php
include 'Sidebar.php';
?>
      <div id="content-wrapper">

        <div class="container-fluid">


          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Category</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>




  <form method="post" action="<?php echo base_url();?>welcome/category"> 
<?php
$row=$records->result();
?>

 <div class="form-group">
  <label class="col-md-4 control-label">Category</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="category" placeholder="category..." class="form-control"  type="text" value="<?php echo $raw->catname; ?>">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning"  >Add..</button>
  </div>
</div>
<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Categories...</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
     <tr>
                        <th>ID</th>
                      <th>Category</th>
                       <th>Actions</th>
                    </tr>
                  </thead>
               
                  <tbody>
                                <?php
    foreach ($records->result() as $row)
{
  ?>    <tr>
                      <td><?php echo $row->catid; ?></td>
                      <td> <?php echo $row->catname; ?></td>
                      <th scope="col"><a href="<?php echo base_url();?>welcome/cdelete/<?php echo $row->catid?>">Delete</a>-
<a href="<?php echo base_url();?>welcome/cedit/<?php echo $row->catid?>">Edit</a></th>
                    </tr>
                      <?php 
  }
?>
                  </tbody>
                </table>
              </div>
            </div>

</form>
         
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url();?>/Assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>/Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>/Assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url();?>/Assets/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url();?>/Assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>/Assets/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url();?>/Assets/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page
    <script src="Assets/Assets/js/demo/datatables-demo.js"></script>
    <script src="Assets/Assets/Assets/js/demo/chart-area-demo.js"></script>-->

  </body>

</html>
