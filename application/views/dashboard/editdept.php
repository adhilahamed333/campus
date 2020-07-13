
<?php $this->load->view('dashboard/header'); ?>

  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('Dashboard'); ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url('Dashboard/viewdept'); ?>">Department</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Department</li>
      </ol>
    </nav>
    <?php if($this->session->flashdata('errormsg')) { ?>
         <div class="alert alert-dismissible alert-danger" id="erroralert">
           <button data-dismiss="alert" class="close close-sm" type="button"> <i class="fa fa-times"></i> </button>
           <strong>Sorry!</strong> <?php echo $this->session->flashdata('errormsg'); ?>
        </div>

    <?php }else{if($this->session->flashdata('success')){ ?>
      <div class="alert alert-dismissible alert-success" id="erroralert">
           <button data-dismiss="alert" class="close close-sm" type="button"> <i class="fa fa-times"></i> </button>
           <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
      </div>
      <?php } }?>

      <?php echo form_open("dashboard/editdept/{$post->dept_id}",array('class'=>'form-horizontal')); ?>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Department Name</label>
          <input type="text" class="form-control" name="department" value="<?php echo $post->department; ?>" placeholder="Enter the department name">
        </div>
        <div class="form-group col-md-6">
          <label>Department ID</label>
          <input type="text" class="form-control" name="department_id" value="<?php echo $post->department_id ?>" placeholder="Enter Department Id">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Staff-In-Charge</label>
          <input type="text" class="form-control" name="staffincharge" value="<?php echo $post->staffincharge ?>" placeholder="Name of Staff in charge">
        </div>
        <div class="form-group col-md-6">
          <label>Password</label>
          <input type="password" class="form-control" name="password" value="<?php echo $post->password?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="enter password" required >
        </div>
      </div>
      <div class="mt-3 mb-5">
        <input type="submit" name="submit" class="btn btn-outline-success pl-4 pr-4" value="Add Department">
      </div>
    <?php  ?>
  </div>
<?php $this->load->view('dashboard/footer'); ?>
