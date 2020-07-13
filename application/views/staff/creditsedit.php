
<?php $this->load->view('staff/header'); ?>
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('staff'); ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url('staff/viewstudent'); ?>">Student</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Student Credits</li>
      </ol>
    </nav>


<?php  ?>
<?php //if(count($posts)):?>
    <?php echo form_open("staff/editcredits/{$posts->std_id}",array('class'=>'form-horizontal')); ?>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>First Semester</label>
          <input type="text" class="form-control" name="first_sem" value="<?php echo $posts->first_sem; ?>" placeholder="Credits" >
        </div>
        <div class="form-group col-md-6">
          <label>Second Semester</label>
          <input type="text" class="form-control" name="sec_sem" value="<?php echo $posts->sec_sem; ?>" placeholder="Credits" >
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Third Semester</label>
          <input type="text" class="form-control" name="third_sem" value="<?php echo $posts->third_sem; ?>" placeholder="Credits" >
        </div>
        <div class="form-group col-md-6">
          <label>Forth Semester</label>
          <input type="text" class="form-control" name="forth_sem" value="<?php echo $posts->forth_sem; ?>" placeholder="Credits" >
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Fifth Semester</label>
          <input type="text" class="form-control" name="fifth_sem" value="<?php echo $posts->fifth_sem; ?>" placeholder="Credits" >
        </div>
        <div class="form-group col-md-6">
          <label>Sixth Semester</label>
          <input type="text" class="form-control" name="sixth_sem" value="<?php echo $posts->sixth_sem; ?>" placeholder="Credits" >
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Seventh Semester</label>
          <input type="text" class="form-control" name="seventh_sem" value="<?php echo $posts->seventh_sem; ?>" placeholder="Credits" >
        </div>
        <div class="form-group col-md-6">
          <label>Eighth Semester</label>
          <input type="text" class="form-control" name="eighth_sem" value="<?php echo $posts->eighth_sem; ?>" placeholder="Credits" >
        </div>
      </div>
      <input type="submit" name="submit" class="btn btn-outline-success pl-4 pr-4" value="Update Credits">
    <?php form_close() ?>
<?php //else:?>
  <?php echo form_open("staff/addcredits",array('class'=>'form-horizontal')); ?>
 <!-- <input type="hidden" name="std_id" value="<?php echo $stddet->std_id; ?>">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>First Semester</label>
        <input type="text" class="form-control" name="first_sem" value="0" placeholder="First Semester Credits" >
      </div>
      <div class="form-group col-md-6">
        <label>Second Semester</label>
        <input type="text" class="form-control" name="sec_sem" value="0" placeholder="Second Semester Credits">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Third Semester</label>
        <input type="text" class="form-control" name="third_sem" value="0" placeholder="Third Semester Credits" >
      </div>
      <div class="form-group col-md-6">
        <label>Forth Semester</label>
        <input type="text" class="form-control" name="forth_sem" value="0" placeholder="Forth Semester Credits" >
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Fifth Semester</label>
        <input type="text" class="form-control" name="fifth_sem" value="0" placeholder="Fifth Semester Credits" >
      </div>
      <div class="form-group col-md-6">
        <label>Sixth Semester</label>
        <input type="text" class="form-control" name="sixth_sem" value="0" placeholder="Sixth Semester Credits" >
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Seventh Semester</label>
        <input type="text" class="form-control" name="seventh_sem" value="0" placeholder="Seventh Semester Credits" >
      </div>
      <div class="form-group col-md-6">
        <label>Eighth Semester</label>
        <input type="text" class="form-control" name="eighth_sem" value="0" placeholder="Eighth Semester Credits" >
      </div>
    </div>
    <input type="submit" name="submit" class="btn btn-outline-success pl-4 pr-4" value="Update Credits">
  <?php form_close() ?>-->
<?php //endif;?>
  </div>
<?php $this->load->view('staff/footer'); ?>
