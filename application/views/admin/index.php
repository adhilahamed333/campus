<!DOCTYPE html>
<!--/**
* @author Unnikrishnannair
**/-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/toast/toastr.min.css'); ?>">

  </head>
  <body>
    <script type="text/javascript" src="<?php echo base_url('assets/toast/jquery-3.4.1.js'); ?>"></script>

		<script type="text/javascript" src="<?php echo base_url('assets/toast/toastr.min.js'); ?>"></script>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand ml-5 text-danger" href="<?php echo base_url('Front'); ?>"><h3>CAMPUS</h3></a>
    </nav>
    <div class="container">
      <div class="jumbotron bg-success">
        <?php if($this->session->flashdata('errormsg')) { ?>
          <script>
           $(document).ready(function(){
             toastr.options = {
               "closeButton": true,
               "debug": false,
               "newestOnTop": false,
               "progressBar": true,
               "positionClass": "toast-top-right",
               "preventDuplicates": false,
               "onclick": null,
               "showDuration": "300",
               "hideDuration": "1000",
               "timeOut": "5000",
               "extendedTimeOut": "1000",
               "showEasing": "swing",
               "hideEasing": "linear",
               "showMethod": "fadeIn",
               "hideMethod": "fadeOut"
             }

             toastr["error"]("Check your Username & Password", "Failed To Login")

           })
         </script>

        <?php }else{if($this->session->flashdata('success')){ ?>
        	<div class="alert alert-dismissible alert-success">
               <button data-dismiss="alert" class="close close-sm" type="button"> <i class="fa fa-times"></i> </button>
               <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
          </div>
          <?php } }?>
      <?php echo form_open_multipart('admin/check_login',array('class'=>'form-horizontal')); ?>
        <fieldset>
          <legend>Admin Login</legend>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Enter Your Email" required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>
          </div>

          <button type="submit" class="btn btn-primary">Sign In</button>
        </fieldset>
        <?php echo form_close() ;?>
      </div>
    </div>
  </body>
</html>
