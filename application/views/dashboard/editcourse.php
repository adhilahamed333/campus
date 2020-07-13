
<?php $this->load->view('dashboard/header'); ?>

  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('Dashboard'); ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url('Dashboard/viewcourse'); ?>">View Course</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Course</li>
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

    <?php echo form_open("dashboard/editcourse/{$post->course_id}",array('class'=>'form-horizontal')); ?>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Semester</label>
          <select name="semester" class="form-control">
            <option selected value="<?php echo $post->semester; ?>"><?php echo $post->semester; ?></option>
            <option value="S1">S1</option>
            <option value="S2">S2</option>
            <option value="S3">S3</option>
            <option value="S4">S4</option>
            <option value="S5">S5</option>
            <option value="S6">S6</option>
            <option value="S7">S7</option>
            <option value="S8">S8</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label>Branch</label>
          <select name="branch" class="form-control">
            <option selected value="<?php echo $post->branch; ?>"><?php echo $post->branch; ?></option>
            <option value="IT">IT</option>
            <option value="ME">ME</option>
            <option value="EEE">EEE</option>
            <option value="ECE">ECE</option>
            <option value="CSE">CSE</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>CODE</label>
          <input type="text" class="form-control" name="code" value="<?php echo $post->code; ?>" placeholder="Enter The Staff ID">
        </div>
        <div class="form-group col-md-6">
          <label>Course Name</label>
          <input type="text" class="form-control" name="course_name" value="<?php echo $post->course_name; ?>" placeholder="Enter Couse Name">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>slot</label>
          <input type="text" class="form-control" value="<?php echo $post->slot; ?>" name="slot" placeholder="slot">
        </div>
        <div class="form-group col-md-6">
          <label>Credits</label>
          <select name="credits" class="form-control">
            <option selected value="<?php echo $post->credits; ?>"><?php echo $post->credits; ?></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
      </div>
      <div class="text-center mt-3 mb-5">
        <input type="submit" name="submit" class="btn btn-outline-success pl-4 pr-4" value="Add Course">
      </div>
      <?php form_close(); ?>
  </div>
<?php $this->load->view('dashboard/footer'); ?>
