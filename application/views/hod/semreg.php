<?php $this->load->view('hod/header'); ?>
<div class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url('Hod'); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Semester Registration</a></li>
      <li class="breadcrumb-item active" aria-current="page">Deatils</li>
    </ol>
  </nav>
      <form>
        <?php foreach($stdsem as $stdsem): ?>
          <?php foreach($stdpersonal as $stdpersonal): ?>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label>Course</label>
            <input type="text" class="form-control" value="<?php echo $stdsem->Course ?>" readonly>
          </div>
          <div class="form-group col-md-3">
            <label>Branch</label>
            <input type="text" class="form-control" value="<?php echo $stdsem->branch ?>" readonly>
          </div>
          <div class="form-group col-md-6">
            <label>Registration To Semester</label>
            <?php if ($stdsem->semester == "First Semester"): ?>
              <input class="form-control" value="Second Semester" type="text"  readonly>
            <?php endif; ?>
            <?php if ($stdsem->semester == "Second Semester"): ?>
              <input class="form-control" value="Third Semester" type="text"  readonly>
            <?php endif; ?>
            <?php if ($stdsem->semester == "Third Semester"): ?>
              <input class="form-control" value="Forth Semester" type="text"  readonly>
            <?php endif; ?>
            <?php if ($stdsem->semester == "Forth Semester"): ?>
              <input class="form-control" value="Fifth Semester" type="text"  readonly>
            <?php endif; ?>
            <?php if ($stdsem->semester == "Fifth Semester"): ?>
              <input class="form-control" value="Sixth Semester" type="text"  readonly>
            <?php endif; ?>
            <?php if ($stdsem->semester == "Sixth Semester"): ?>
              <input class="form-control" value="Seventh Semester" type="text"  readonly>
            <?php endif; ?>
            <?php if ($stdsem->semester == "Seventh Semester"): ?>
              <input class="form-control" value="Eighth Semester" type="text"  readonly>
            <?php endif; ?>
            <?php if ($stdsem->semester == "Eighth Semester"): ?>
              <input class="form-control" value="" type="text"  readonly>
            <?php endif; ?>
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Name Of Student</label>
          <input type="text" value="<?php echo $stdsem->std_name ?>" class="form-control" readonly>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Admission No</label>
            <input type="text" value="<?php echo $stdsem->admission_no ?>" class="form-control" readonly>
          </div>
          <div class="form-group col-md-6">
            <label>Date Of Joining</label>
            <input type="text" value="<?php echo $stdsem->dateofjoining ?>" class="form-control" readonly>
          </div>
        </div>
        <div class="form-group">
          <label>University Register Number</label>
          <input type="text" value="<?php echo $stdsem->universityregno ?>" class="form-control" readonly>
        </div>
        <div class="form-group">
          <label>Address</label>
          <input type="text" value="<?php echo $stdpersonal->address ?>" class="form-control" readonly>
        </div>
        <div class="form-group">
          <label>Mobile Number</label>
          <input type="text" value="<?php echo $stdpersonal->phone ?>" class="form-control" readonly>
        </div>
        <div class="form-group">
          <label>Email Address</label>
          <input type="text" value="<?php echo $stdpersonal->email ?>" class="form-control" readonly>
        </div>
        <label>Course Selected</label>
        <div class="form-row">
          <?php foreach($regcourse as $regcourse): ?>
            <div class="form-group col-md-3">
              <ul class="list-group">
                <li class="list-group-item"><?php echo $regcourse->course_name ?></li>
              </ul>
            </div>
          <?php endforeach;?>
        </div>
      </form>
      <div class="text-center">
        <?php $status= $regcourse->hod_status ?>
        <?php if ($status == 0): ?>
          <a href="<?php echo base_url() ?>/hod/hodaprove?reg_id=<?php echo $regcourse->sem_reg_id  ?>&hod_status=<?php echo $regcourse->hod_status; ?>">
            <button type="button" class="btn btn-success">Approve</button>
          </a>
        <?php else: ?>
          <a href="<?php echo base_url() ?>/hod/hodaprove?reg_id=<?php echo $regcourse->sem_reg_id  ?>&hod_status=<?php echo $regcourse->hod_status; ?>">
            <button type="button" class="btn btn-danger">Reject</button>
          </a>
        <?php endif; ?>

      </div>
      <br><br>
    <?php endforeach;?>
    <?php endforeach;?>
<?php $this->load->view('hod/footer'); ?>
