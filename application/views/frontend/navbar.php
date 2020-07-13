<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <h1><a href="index.html">CAMPUS</a></h1>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="<?php echo base_url('Front/index'); ?>" class="w3ls-hover">Home</a></li>
        <li><a href="<?php echo base_url('Front/about'); ?>" class="btn w3ls-hover">About</a></li>
        <li><a href="portfolio.html" class="btn w3ls-hover">Portfolio</a></li>
        <li><a href="#" class="dropdown-toggle btn w3ls-hover" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="" data-toggle="modal" data-target="#stdlogin">Student Login</a></li>
            <li><a href="" data-toggle="modal" data-target="#deptlogin">Department Login</a></li>
            <li><a href="" data-toggle="modal" data-target="#hodlogin">HOD Login</a></li>

          </ul>
        </li>
        <li><a href="contact.html" class="btn w3ls-hover">Contact</a></li>
      </ul>

      <div class="clearfix"> </div>
    </div><!-- //navbar-collapse -->
  </div><!-- //container-fluid -->
</nav>

<!-- ################################################# Student Modal ########################################################## -->

<div class="modal fade" id="stdlogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student Login</h5>

      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('Student/student_login',array('class'=>'form-horizontal')); ?>
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

        <input type="submit" name="submit" value="Login" class="btn btn-success">
        <?php echo form_close() ;?>

      </div>
    </div>
  </div>
</div>

<!-- ################################################# Department Modal ########################################################## -->

<div class="modal fade" id="deptlogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Department Login</h5>

      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('Front/department_login',array('class'=>'form-horizontal')); ?>
          <div class="form-group">
            <label>Department Id</label>
            <input type="text" class="form-control" name="department_id" placeholder="Enter department_id" required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

        <input type="submit" name="submit" value="Login" class="btn btn-success">
        <?php echo form_close() ;?>

      </div>
    </div>
  </div>
</div>


<!-- ################################################# HOD Modal ########################################################## -->

<div class="modal fade" id="hodlogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">HOD Login</h5>

      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('Front/hod_login',array('class'=>'form-horizontal')); ?>
          <div class="form-group">
            <label>User_Id</label>
            <input type="text" class="form-control" name="user_id" placeholder="Enter user_id">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

        <input type="submit" name="submit" value="Login" class="btn btn-success">
        <?php echo form_close() ;?>

      </div>
    </div>
  </div>
</div>
