
<?php $this->load->view('staff/header'); ?>
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('staff'); ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url('staff/viewstudent'); ?>">Student</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Student</li>
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

    <?php echo form_open("staff/editstudent/{$post->std_id}",array('class'=>'form-horizontal')); ?>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Name</label>
          <input type="text" class="form-control" name="std_name" value="<?php echo $post->std_name; ?>" placeholder="Name Of Student" required>
        </div>
        <div class="form-group col-md-6">
          <label>Date Of Birth</label>
          <input type="date" class="form-control" name="dob" value="<?php echo $post->dob; ?>" placeholder="DOB" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Admission No</label>
          <input type="text" class="form-control" name="admission_no" value="<?php echo $post->admission_no; ?>" placeholder="Admission No" readonly>
        </div>
		<?php   $aprove=$post->aprove; ?>
        <div class="form-group col-md-6">
          <label for="inputState">Branch</label>
          <select id="inputState" name="branch" class="form-control">
            <option selected value="<?php echo $post->branch; ?>"><?php echo $post->branch; ?></option>
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
          <input type="date" class="form-control" name="dateofjoining" value="<?php echo $post->dateofjoining; ?>" required >
        </div>
        <div class="form-group col-md-6">
          <label for="">Date Of Leaving</label>
          <input type="date" class="form-control" name="dateofleaving" value="<?php echo $post->dateofleaving; ?>" required >
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>University Register Number</label>
          <input type="text" class="form-control" name="universityregno" value="<?php echo $post->universityregno; ?>" placeholder="University Register Number" required >
        </div>
        <div class="form-group col-md-6">
          <label for="inputState">Semester</label>
          <select id="inputState" name="semester" class="form-control">
            <option selected value="<?php echo $post->semester; ?>"><?php echo $post->semester; ?></option>
            <option value="First Semester">First Semester</option>
            <option value="Second Semester">Second Semester</option>
            <option value="Third Semester">Third Semester</option>
            <option value="Forth Semester">Forth Semester</option>
            <option value="Fifth Semester">Fifth Semester</option>
            <option value="Sixth Semester">Sixth Semester</option>
            <option value="Seventh Semester">Seventh Semester</option>
            <option value="Eighth Semester">Eighth Semester</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-1">
          <label>Course</label>
          <select name="Course" class="form-control">
            <option selected value="<?php echo $post->Course; ?>"><?php echo $post->Course; ?></option>
            <option value="B.Tech">B.Tech</option>
            <option value="M.Tech">M.Tech</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label>Password</label>
          <input type="text" class="form-control" name="password" value="<?php echo $post->password; ?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="enter password" required >
        </div>
		<div class="form-group col-md-2">
          <label>Aprove</label>
          <select name="aprove" class="form-control">
            <option <?php  if($aprove=='1'){ ?> selected="selected"  <?php } ?> value="1">aprove</option>
            <option  <?php  if($aprove=='0'){ ?> selected="selected"  <?php } ?> value="0">not aprove</option>
          </select>
        </div>
		
			<div class="form-group col-md-2">
          <label>Dues</label>
          <select name="due" class="form-control" multiple>
		  					<?php foreach($due as $due): ?>

            <option   value="<?php echo $due->id; ?>"><?php echo $due->type; ?></option>
								<?php endforeach;?>

           </select>
        </div>
		
		<div class="form-group col-md-2">
          <label>Amount</label>
          <input type="text" class="form-control" name="due_amount"   >
        </div>
		
      </div>

      <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
      <input type="submit" name="submit" class="btn btn-outline-success pl-4 pr-4" value="Update Student">
    <?php form_close() ?>
  </div>
<?php $this->load->view('staff/footer'); ?>
