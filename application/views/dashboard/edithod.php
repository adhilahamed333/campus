
<?php $this->load->view('dashboard/header'); ?>

  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('Dashboard'); ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url('Dashboard/viewhod'); ?>">H O D</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit H O D</li>
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

    <?php echo form_open("dashboard/edithod/{$post->hod_id}",array('class'=>'form-horizontal')); ?>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Department</label>
          <select name="department" class="form-control">
            <option selected value="<?php echo $post->department; ?>"><?php echo $post->department; ?></option>
            <option value="IT">IT</option>
            <option value="ME">ME</option>
            <option value="EEE">EEE</option>
            <option value="ECE">ECE</option>
            <option value="CSE">CSE</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label>Name</label>
          <input type="text" class="form-control" name="hod_name" value="<?php echo $post->hod_name; ?>" placeholder="Name">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>User Id</label>
          <input type="text" class="form-control" name="user_id" value="<?php echo $post->user_id; ?>" placeholder="user_id">
        </div>
        <div class="form-group col-md-6">
          <label>Password</label>
          <input type="text" class="form-control" value="<?php echo $post->password; ?>" name="password" pattern="[A-Za-z0-9]{8,}" title="Password must be 8 charaters has capital and small letter and numerical values" placeholder="Password" required>
        </div>
      </div>
      <div class="mt-3 mb-5">
        <input type="submit" name="submit" class="btn btn-outline-success pl-4 pr-4" value="Update HOD">
      </div>
    </form>
  </div>
<?php $this->load->view('dashboard/footer'); ?>
