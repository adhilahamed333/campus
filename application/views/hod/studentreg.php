
<?php $this->load->view('staff/header'); ?>
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('staff'); ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url('staff/viewstudent'); ?>">Student</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Student</li>
      </ol>
    </nav>

    <?php if($this->session->flashdata('msgfail')) { ?>
         <div class="alert alert-dismissible alert-danger">
           <button data-dismiss="alert" class="close close-sm" type="button"> <i class="fa fa-times"></i> </button>
           <strong>Sorry!</strong> <?php echo $this->session->flashdata('msgfail'); ?>
           </div>

    <?php }else{if($this->session->flashdata('msgsuccess')){ ?>
      <div class="alert alert-dismissible alert-success">
           <button data-dismiss="alert" class="close close-sm" type="button"> <i class="fa fa-times"></i> </button>
           <strong>Success!</strong> <?php echo $this->session->flashdata('msgsuccess'); ?>
      </div>
      <?php } }?>

    <form action="addstudent" method="POST">
      <input type="hidden" name="staff_id" value="<?php echo $this->session->userdata('user_id');?>">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Name</label>
          <input type="text" class="form-control" name="std_name" placeholder="Name Of Student" required>
        </div>
        <div class="form-group col-md-6">
          <label>Date Of Birth</label>
          <input type="date" class="form-control" name="dob" placeholder="DOB" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Admission No</label>
          <input type="text" class="form-control" name="admission_no" placeholder="Admission No" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputState">Branch</label>
          <select id="inputState" name="branch" class="form-control">
            <option selected>Choose...</option>
            <option value="ME">ME</option>
            <option value="IT">IT</option>
            <option value="ECE">ECE</option>
            <option value="EEE">EEE</option>
            <option value="CSE">CSE</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="">Date Of Joining</label>
          <input type="date" class="form-control" name="dateofjoining" placeholder="email / username" required >
        </div>
        <div class="form-group col-md-6">
          <label for="">Date Of Leaving</label>
          <input type="date" class="form-control" name="dateofleaving" pattern="[A-Za-z0-9]{8}" title="Password must be 8 charaters has capital and small letter and numerical values" placeholder="enter password" required >
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>University Register Number</label>
          <input type="text" class="form-control" name="universityregno" placeholder="University Register Number" required >
        </div>
        <div class="form-group col-md-6">
          <label>Password</label>
          <input type="password" class="form-control" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="enter password" required >
        </div>
      </div>
      <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
      <input type="submit" name="submit" class="btn btn-outline-success pl-4 pr-4" value="Add Student">
    </form>
  </div>
<?php $this->load->view('staff/footer'); ?>
