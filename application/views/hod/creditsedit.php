
<?php $this->load->view('staff/header'); ?>
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('staff'); ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url('staff/viewstudent'); ?>">Student</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Student Credits</li>
      </ol>
    </nav>
    <?php echo form_open("staff/editcredits/{$post->std_id}",array('class'=>'form-horizontal')); ?>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Credits</label>
          <input type="text" class="form-control" name="std_credits" value="<?php echo $post->std_credits; ?>" placeholder="Name Of Student" required>
        </div>
      </div>
      <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
      <input type="submit" name="submit" class="btn btn-outline-success pl-4 pr-4" value="Update Credits">
    <?php form_close() ?>
  </div>
<?php $this->load->view('staff/footer'); ?>
