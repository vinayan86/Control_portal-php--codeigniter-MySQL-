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
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">

$(function () {

$('.showClick').click(function () {

$('.hidden').show();

$('.show').hide();

});

$('.hideClick').click(function () {

$('.hidden').hide();

$('.show').show();

});

});

</script>
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
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5">26 New Messages!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            
          </div>
<a href="#" class="showClick show">CATEGORY</a> 


<div class="hidden"> 
  <form method="post" action="<?php echo base_url();?>welcome/category"> CATEGORY:
<input type="text" name="category">

<input type="SUBMIT" class="hideClick hidden" value="SUBMIT">
</form>
 </div>         
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
