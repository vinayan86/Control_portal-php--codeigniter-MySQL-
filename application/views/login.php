<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url();?>/Assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url();?>/Assets/css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url();?>Assets/css/bootstrap-theme.css" rel="stylesheet">
     <link href="<?php echo base_url();?>Assets/css/bootstrap-theme.min.css" rel="stylesheet">
 

  </head>

  <body class="bg-dark">

    <div class="container">
          <form class="well form-horizontal" action="<?php echo base_url();?>welcome/login " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Sign In......</b></h2></center></legend><br>
      <div class="form-group">
  <label class="col-md-4 control-label">Username</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="user_name" placeholder="Username" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="user_password" placeholder="Password" class="form-control"  type="password">
    </div>
  </div>
</div><div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning"  >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSign in. <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>

</fieldset>
</form>
</div>


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>Assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>Assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
