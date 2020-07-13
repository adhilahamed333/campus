
<?php $this->load->view('dashboard/header'); ?>

  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('Dashboard'); ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url('Dashboard/viewstaff'); ?>">Faculty</a></li>
        <li class="breadcrumb-item active" aria-current="page">Register Faculty</li>
      </ol>
    </nav>

    <?php if($this->session->flashdata('errormsg')) { ?>
         <div class="alert alert-dismissible alert-danger">
           <button data-dismiss="alert" class="close close-sm" type="button"> <i class="fa fa-times"></i> </button>
           <strong>Sorry!</strong> <?php echo $this->session->flashdata('errormsg'); ?>
           </div>

    <?php }else{if($this->session->flashdata('success')){ ?>
      <div class="alert alert-dismissible alert-success">
           <button data-dismiss="alert" class="close close-sm" type="button"> <i class="fa fa-times"></i> </button>
           <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
      </div>
      <?php } }?>

    <form action="addstaff" method="POST">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="">Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter The Name" required>
        </div>
        <div class="form-group col-md-6">
          <label for="">KTU_ID</label>
          <input type="text" class="form-control" name="ktu_id"  placeholder="Enter digit KTU_ID">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Department</label>
          <select name="department" class="form-control">
            <option selected>Choose...</option>
            <option value="CSE">CSE</option>
            <option value="IT">IT</option>
            <option value="ECE">ECE</option>
            <option value="EEE">EEE</option>
            <option value="ME">ME</option>
          </select>
        </div>
        <div class="form-group col-md-6">
            <label>Advisor</label>
            <select name="advisor" class="form-control">
              <option selected>Choose...</option>
              <option value="First Year">First Year</option>
              <option value="Second Year">Second Year</option>
              <option value="Third Year">Third Year</option>
              <option value="Forth Year">Forth Year</option>
            </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Username</label>
          <input type="text" class="form-control" id="" name="username" placeholder="Enter The Unique Username" required>
        </div>
        <div class="form-group col-md-6">
          <label>Password</label>
          <input type="password" class="form-control" name="password"  placeholder="keep your password safe" required>
        </div>
      </div>
      <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
      <input type="submit" name="submit" class="btn btn-outline-success" value="Submit">
    </form>
  </div>
<?php $this->load->view('dashboard/footer'); ?>
