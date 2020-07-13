

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
          <li><a href="<?php echo base_url('student/index'); ?>" class="w3ls-hover">Home</a></li>
          <li><a href="#" class="dropdown-toggle btn w3ls-hover" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url("student/profile"); ?>">Profile</a></li>
              <li><a href="<?php echo base_url("student/personalprofile"); ?>">Personal details</a></li>
              <li><a href="<?php echo base_url("student/acdprofile"); ?>">Academic details</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url('student/logoutstd'); ?>" class="btn w3ls-hover"><span class="text-right">LogOut</span></a></li>
      </ul>

      <div class="clearfix"> </div>
    </div><!-- //navbar-collapse -->
  </div><!-- //container-fluid -->
</nav>
