<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    login
    <p><?php echo $this->session->userdata('user_id');?></p>

    <a href="<?php echo base_url();?>admin/logoutadmin" class="btn btn-flat">Sign out</a>

  </body>
</html>
