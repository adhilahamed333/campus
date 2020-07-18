
<?php $this->load->view('staff/header'); ?>
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('staff'); ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url('staff/viewstudent'); ?>">Student</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Date</li>
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

    <form action="insert_date" method="POST">
      <input type="hidden" name="staff_id" value="<?php echo $this->session->userdata('user_id');?>">
       <div class="form-row">
        <div class="form-group col-md-6">
          <label for="">Start Date for Display Semester Registration Button </label>
          <input type="date" class="form-control" name="start_date" placeholder="Date" required >
        </div>
		
		  <div class="form-group col-md-6">
          <label for="">End Date for Display Semester Registration Button</label>
          <input type="date" class="form-control" name="end_date" placeholder="Date" required >
        </div>
          </div>
        <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
      <input type="submit" name="submit" class="btn btn-outline-success pl-4 pr-4" value="Add Date">
    </form>
  </div>
<?php $this->load->view('staff/footer'); ?>
